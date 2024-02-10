<link rel="stylesheet" href="/assets/is-header.min.css<?=$cacheParameter?>">
<link rel="stylesheet" href="/assets/list-menu.min.css<?=$cacheParameter?>">
<link rel="stylesheet" href="/assets/hamburger.min.css<?=$cacheParameter?>">

<div class="is-header__main-container wrapper">
	<h1 class="is-header__heading">
		<a href="/" class="is-header__heading-link link-reset">
			<img
		  	class="responsive-img is-header__heading-logo"
		  	fetchpriority="high"
			  decoding="async"
			  width="147"
			  height="44"
			  src="/img/logo.png"
			  alt="EcoWise">
		</a>
	</h1>
	<div class="is-header__navigation">
		<button id="navButton" class="is-button hidden-middle-up" data-gclick="global-menu" aria-haspopup="true" aria-expanded="false" title="Menu">
      <span class="hamburger">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </span>
  	</button>
		<nav class="is-header__inline-menu">
			<ul class="list-menu">
				<li class="list-menu__item"><a href="#" class="list-menu__link">Home</a></li>
				<li class="list-menu__item"><a href="#" class="list-menu__link">Shop</a></li>
				<li class="list-menu__item"><a href="#" class="list-menu__link">About Us</a></li>
				<li class="list-menu__item"><a href="#" class="list-menu__link">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="is-header__icons">
		<a href="/account/login" class="is-header__icon is-header__icon--account">
			<svg fill="none" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"><g clip-rule="evenodd" fill="currentColor" fill-rule="evenodd"><path d="m9.64282 10.7146c0-2.95871 2.39848-5.35718 5.35718-5.35718s5.3571 2.39847 5.3571 5.35718c0 2.9587-2.3984 5.3571-5.3571 5.3571s-5.35718-2.3984-5.35718-5.3571zm5.35718-3.21432c-1.7752 0-3.2143 1.43908-3.2143 3.21432 0 1.7751 1.4391 3.2143 3.2143 3.2143 1.7751 0 3.2143-1.4392 3.2143-3.2143 0-1.77524-1.4392-3.21432-3.2143-3.21432z"/><path d="m0 15c0-8.28427 6.71573-15 15-15 8.2843 0 15 6.71573 15 15 0 8.2843-6.7157 15-15 15-8.28427 0-15-6.7157-15-15zm15-12.90698c-7.12832 0-12.90698 5.77866-12.90698 12.90698 0 3.552 1.4348 6.7688 3.75642 9.1026.25172-1.3579.74629-2.6381 1.73898-3.6676 1.48486-1.5399 3.85928-2.2955 7.41158-2.2955 3.5521 0 5.9266.7556 7.4114 2.2955.9928 1.0295 1.4873 2.3099 1.739 3.6677 2.3217-2.3337 3.7566-5.5507 3.7566-9.1027 0-7.12832-5.7787-12.90698-12.907-12.90698zm7.247 23.58898c-.1422-1.6911-.5094-2.9304-1.3422-3.7941-.9062-.9398-2.5854-1.6553-5.9048-1.6553-3.3195 0-4.9987.7155-5.90491 1.6553-.83285.8637-1.20005 2.1029-1.34223 3.7939 2.06599 1.4044 4.56064 2.2252 7.24714 2.2252 2.6863 0 5.1811-.8208 7.247-2.225z"/></g></svg>
			<span class="visually-hidden">Log in</span>
		</a>
		<span class="d-line hidden-x-small-down"></span>
		<a href="/cart" class="is-header__icon is-header__icon--cart">
			<svg fill="none" height="28" viewBox="0 0 24 28" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m4.08 2.417-1.90667 2.574c-.37764.50982-.56647.76474-.56208.97811.00381.18568.08979.35981.23422.47432.16597.13157.48068.13157 1.11009.13157h18.08884c.6295 0 .9442 0 1.1102-.13157.1443-.11451.2304-.28864.2342-.47432.0044-.21337-.1845-.46829-.5621-.97811l-1.9067-2.574m-15.84 0c.21511-.2904.32267-.4356.45897-.54032.12073-.09276.25745-.16196.40317-.2041.16453-.04758.34379-.04758.7023-.04758h12.71116c.3584 0 .5377 0 .7022.04758.1457.04214.2825.11134.4033.2041.1362.10472.2438.24992.4589.54032m-15.84 0-2.29778 3.10199c-.29023.39182-.43534.58773-.53839.80346-.09143.19144-.15813.39401-.19842.60271-.04541.23519-.04541.48008-.04541.96983v14.52001c0 1.3861 0 2.0792.26643 2.6087.23435.4656.6083.8443 1.06826 1.0815.52289.2698 1.2074.2698 2.57642.2698h14.17779c1.369 0 2.0536 0 2.5764-.2698.46-.2372.834-.6159 1.0683-1.0815.2664-.5295.2664-1.2226.2664-2.6087v-14.52c0-.48976 0-.73465-.0455-.96984-.0402-.2087-.1069-.41127-.1983-.60271-.1031-.21573-.2481-.41164-.5384-.80345l-2.2978-3.102m-3.0311 9.108c0 1.3129-.5151 2.5719-1.432 3.5001-.9168.9284-2.1602 1.4499-3.4569 1.4499s-2.54012-.5215-3.45697-1.4499c-.91684-.9282-1.43192-2.1872-1.43192-3.5001" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
			<span class="is-header__icon-text hidden-x-small-down">Cart (<span class="cart-items-count">1</span>)</span>
		</a>
	</div>
</div>