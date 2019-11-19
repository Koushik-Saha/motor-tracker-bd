{{--BEGIN: SideNav --}}
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
	<div class="brand-sidebar">
		<h1 class="logo-wrapper">
		<a class="brand-logo darken-1" href="{{route('dashboard')}}">
			<img src="{{asset('')}}backend/app-assets/images/logo/materialize-logo.png" alt="materialize logo"/>
			<span class="logo-text hide-on-med-and-down">Moto Tracker</span>
		</a>
		<a class="navbar-toggler" href="#">
			<i class="material-icons">radio_button_checked</i>
		</a>
		</h1>
	</div>
	<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
		<li class="bold">
			<a class="waves-effect waves-cyan {{ Request::is('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}">
				<i class="material-icons">dvr</i>
				<span class="menu-title" data-i18n="">Dashboard</span>
			</a>
		</li>
		<li class="bold {{ Request::is('home*') ? 'open' : ''}} {{ Request::is('home*') ? 'active' : ''}}">
			<a class="collapsible-header waves-effect waves-cyan " href="#" tabindex="0">
				<i class="material-icons">home</i>
				<span class="menu-title" data-i18n="">Home Page</span>
			</a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li>
						<a class="collapsible-body {{ Request::is('home-slider*') ? 'active' : ''}}" href="{{route('homeSlider')}}"  data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>Slider</span>
						</a>
					</li>
					<li><a class="collapsible-body {{ Request::is('home-services*') ? 'active' : ''}}" href="{{route('homeServices')}}" data-i18n="">
						<i class="material-icons">radio_button_unchecked</i>
						<span>Services</span></a>
					</li>
					<li><a class="collapsible-body {{ Request::is('home-clients*') ? 'active' : ''}} " href="{{route('homeOurClients')}}" data-i18n="">
						<i class="material-icons">radio_button_unchecked</i>
						<span>Our Clients</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	{{-- <li class="bold">
		<a class="waves-effect waves-cyan {{ Request::is('home-page') ? 'active' : ''}}" href="{{route('homePage')}}">
			<i class="material-icons">chat_bubble_outline</i>
			<span class="menu-title" data-i18n="">Home Page</span>
		</a>
	</li> --}}
	
	{{-- <li class="bold">
		<a class="waves-effect waves-cyan " href="#">
			<i class="material-icons">settings_input_svideo</i>
			<span class="menu-title" data-i18n="">Products Page</span>
		</a>
	</li> --}}
	<li class="bold">
		<a class="waves-effect waves-cyan {{ Request::is('package*') ? 'active' : ''}}" href="{{route('package')}}">
			<i class="material-icons">attach_money</i>
			<span class="menu-title" data-i18n="">Price & Package Page</span>
		</a>
	</li>
	
	<li class="bold">
		<a class="waves-effect waves-cyan {{ Request::is('software*') ? 'active' : ''}}" href="{{route('softwareList')}}">
			<i class="material-icons">settings_cell</i>
			<span class="menu-title" data-i18n="">Software Page</span>
		</a>
	</li>
	{{-- <li class="bold">
		<a class="waves-effect waves-cyan " href="#">
			<i class="material-icons">settings_input_svideo</i>
			<span class="menu-title" data-i18n="">Demo Page</span>
		</a>
	</li> --}}
	{{-- <li class="bold">
		<a class="waves-effect waves-cyan " href="#">
			<i class="material-icons">settings_input_svideo</i>
			<span class="menu-title" data-i18n="">Login Page</span>
		</a>
	</li> --}}
	<li class="bold">
		<a class="waves-effect waves-cyan {{ Request::is('about-*') ? 'active' : ''}}" href="{{route('aboutUs')}}">
			<i class="material-icons">supervisor_account</i>
			<span class="menu-title" data-i18n="">About Us Page</span>
		</a>
	</li>
	{{-- <li class="bold">
		<a class="waves-effect waves-cyan " href="#">
			<i class="material-icons">settings_input_svideo</i>
			<span class="menu-title" data-i18n="">Contact Page</span>
		</a>
	</li> --}}
	</ul>
	<div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
{{-- END: SideNav--}}