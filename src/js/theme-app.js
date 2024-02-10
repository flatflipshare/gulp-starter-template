"use strict";

function debounce(fn, wait) {
  let t;
  return (...args) => {
    clearTimeout(t);
    t = setTimeout(() => fn.apply(this, args), wait);
  };
}

const globalApp = {
  init: function() {
    this.globalEventsInit();
    this.executeModules();
  },
  executeModules: function(parent) {
    parent = parent || document.body;
    const mods = parent.querySelectorAll('[data-is]');
    mods.forEach( (thisModule, i) => {
      const thisModuleName = thisModule.getAttribute('data-is');

      if (moduleApp[thisModuleName]) {
        console.log(`%cRun: '${thisModuleName}' - module executed.`, 'color:#009900;');
        moduleApp[thisModuleName](thisModule);
      } else {
        console.log(`%cError: '${thisModuleName}' - module not defined.`, 'color:#ff6347;');
      }
    });
  },
  globalEventsInit: function() {
    document.addEventListener('click', function(e) {
      let target = e.target;
      while (target && target !== document) {
        if (target.matches('[data-gclick]')) {
            e.preventDefault();
            let thisAction = target.getAttribute('data-gclick');
            let thisValue = target.getAttribute('data-value') || null;
            if (globalApp.globalEventsActions[thisAction]) { globalApp.globalEventsActions[thisAction](target,thisValue) }
            else { console.log('Event: `data-gclick`, Action: `'+thisAction+'` - not defined.'); }
            return; // Stop after the first match is found
        }
        target = target.parentElement;
      }
    });
  },
  globalEventsActions: {
    'scroll-to-anchor': function(_this, thisValue) {
      const target = document.querySelector(`${thisValue}`);
      if(!target) return;
      target.scrollIntoView({ behavior: "smooth", block: "nearest" });
    },
    'global-menu': function(_this) {
      const burger = _this.querySelector('.hamburger');
      burger.classList.toggle('active');
    }
  }
}

const moduleApp = {
  'hero-slider': function(thisModule) {
    if (typeof Swiper !== 'undefined') {
      const swiperOptions = {
        loop: true,
        allowTouchMove: false,
        autoplay: { delay: 4000 },
        speed: 600,
        effect: "fade",
        fadeEffect: { crossFade: true },
        pagination: {
          el: thisModule.querySelector('.swiper-pagination'),
          clickable: true,
        },
        // Add more Swiper options here if needed
      };
      new Swiper(thisModule, swiperOptions);
    }
  },
  'products-slider': function(thisModule) {
    if (typeof Swiper !== 'undefined') {
      let slider = undefined;
      const swiperContainer = thisModule.querySelector('.swiper');

      const swiperOptions = {
        slidesPerView: 'auto',
        freeMode: true,
        pagination: {
          el: thisModule.querySelector('.swiper-pagination'),
          clickable: true,
        },
        navigation: {
          nextEl: thisModule.querySelector('.js_next'),
          prevEl: thisModule.querySelector('.js_prev'),
        },

        // Add more Swiper options here if needed
      };

      if (window.matchMedia('(min-width: 576px)').matches) {
        slider = new Swiper(swiperContainer, swiperOptions);
      }
      window.addEventListener('resize', debounce(_handleResize, 100));

      function _handleResize() {
        if (window.matchMedia('(min-width: 576px)').matches) {
          if(slider) {
            slider.update();
          } else {
            slider = new Swiper(swiperContainer, swiperOptions);
          }
        } else {
          if(slider) {
            slider.destroy(true, false);
            slider = undefined;
          }
        }
      }
    }
  },
	'accordion': function(thisModule) {
		const aLinks = thisModule.querySelectorAll('.js-acc-open');

		for(let i = 0, length1 = aLinks.length; i < length1; i++){
			aLinks[i].addEventListener('click', function(e) {
				e.preventDefault();

				const currentAccItems = this.closest('.is-accordion').querySelector('.ia-item');
        const currentAccWrapper = this.closest('.is-accordion').querySelector('.ia-content-wrapper');

        const currentItem = this.closest('.ia-item');
        const currentWrapper = currentItem.querySelector('.ia-content-wrapper');
        const cH = currentItem.querySelector('.ia-content').offsetHeight;

        if (currentItem.classList.contains('active')) {
	        currentItem.classList.remove('active');
          currentWrapper.removeAttribute('style');
          setTimeout(function(){ window.dispatchEvent(new Event('resize')); }, 350);
	      } else {
	        currentAccItems.classList.remove('active');
	        currentItem.classList.add('active');
	        currentAccWrapper.removeAttribute('style');
	        currentWrapper.setAttribute('style','height:'+cH+'px;');
	        setTimeout(function(){ window.dispatchEvent(new Event('resize')); }, 350);
	      }
			})
		}
	},
  'tabs-nav': function(thisModule) {

    const tabs = thisModule.querySelectorAll('.is-tabs__link');
    const containerBoxSelector = thisModule.getAttribute('data-tab-body') || false;
    const containerBox = document.querySelector(`.${containerBoxSelector}`);
    const contentBox = containerBox.querySelectorAll('.is-tabs__tab');
    
    for(let i=0; i<tabs.length; i++){
      tabs[i].addEventListener("click", function(){
        thisModule.querySelector(".is-tabs__link.active").classList.remove("active");
        tabs[i].classList.add("active");
        
        containerBox.querySelector(".active").classList.remove("active");
        contentBox[i].classList.add("active");
      });
    }

  }
}

document.addEventListener('DOMContentLoaded', () => {
  globalApp.init();
});