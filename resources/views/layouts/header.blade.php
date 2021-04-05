
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="_token" content="{!! csrf_token() !!}" />
	<title>Document</title>
	<link rel="preload" as="font" media="all" href="{{ asset('public/css/fonts/BIAntiquaIIMl-Bold.woff2') }}" type="font/woff2" crossorigin async />
	<link rel="preload" as="font" media="all" href="{{ asset('public/css/fonts/BIAntiquaIIMl-Regular.woff2') }}" type="font/woff2" crossorigin async />
	<link rel="preload" as="font" media="all" href="{{ asset('public/css/fonts/BISansNEXT-Bold.woff2') }}" type="font/woff2" crossorigin async />
	<link rel="preload" as="font" media="all" href="{{ asset('public/css/fonts/BISansNEXT-Regular.woff2') }}" type="font/woff2" crossorigin async />
	<link rel="stylesheet" href="{{ asset('public/css/gds-template.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/custom.min.css') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
</head>

<body>
	<!--  ------------------------------------ HEADER------------------------------------------- -->
	<div id="root">
		<main>
		<header class="gds-header">
				<div class="gds-header__metanav-bg">
					<div class="">
						<div class="gds-grid gds-grid--none ">
							<div class="gds-cell gds-cell--m-quarter gds-cell--spacer-m gds-cell--content">
								<div class="gds-metanav gds-metanav--">
									<div class="left">
										<div class="gds-metamenu">
											<div class="gds-metamenu__item gds-metamenu__item--"> For Canadian
												healthcare professionals only </div>
										</div>
									</div>
								</div>
							</div>
							<div class="gds-cell gds-cell--m-three-quarters gds-cell--spacer-m gds-cell--content">
								<div class="gds-metanav gds-metanav--">
									<div class="right">
										<div class="gds-metamenu">
											<div class="gds-metamenu__item gds-metamenu__item--"><a class="gds-link gds-link--link-intercept gds-link--menu gds-link--logo" href="#" title="Contact" aria-label="Contact" tabindex="" target=""><span class="gds-link__label">Contact</span></a></div>
											<div class="gds-metamenu__item utility">
												<div class="gds-dropdown-menu gds-dropdown-menu--flyout gds-dropdown-menu--space-base" aria-label="Language Navigation">
													<button id="lang-select" class="main-link" tabindex="0" aria-expanded="false">
														<span class="main-icon">
															<span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_world">
																<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
																	<path d="M8,1.83740542e-06 C12.418278,1.83740542e-06 16,3.58172384 16,8.00000184 C16,12.4182798 12.418278,16.0000018 8,16.0000018 C3.581722,16.0000018 0,12.4182798 0,8.00000184 C0,3.58172384 3.581722,1.83740542e-06 8,1.83740542e-06 Z M14.1647038,11.0664211 L11.0974621,11.0668434 C10.6934412,12.439386 9.99415671,13.7167742 9.03909205,14.8042474 C11.2905762,14.4650257 13.1844471,13.033316 14.1647038,11.0664211 Z M4.90026699,11.0668475 L1.83529623,11.0664211 C2.81555291,13.033316 4.7094238,14.4650257 6.96121607,14.8058575 C6.00405139,13.7149889 5.30393568,12.4359963 4.90026699,11.0668475 Z M9.97775987,11.0663262 L6.02023125,11.0665258 C6.42712139,12.2863352 7.09875799,13.4127982 7.99905694,14.3593129 C8.89976195,13.4142706 9.5706697,12.2893178 9.97775987,11.0663262 Z M1.39718027,6.04913031 L1.36217223,6.17003613 C1.2018887,6.75273901 1.11627907,7.36637282 1.11627907,8.00000184 C1.11627907,8.70084494 1.22101462,9.37722574 1.41568765,10.0143462 L1.4468239,10.0069804 L1.4468239,10.0069804 L1.53333333,10 L4.64920294,9.99930537 C4.53405089,9.34855525 4.48432139,8.68400491 4.50392795,8.01546435 C4.48483661,7.3573208 4.53148515,6.70462321 4.64026052,6.06604285 L1.53333333,6.06666667 C1.48627688,6.06666667 1.44064379,6.06057248 1.39718027,6.04913031 Z M10.2758907,6.06652634 L5.72654209,6.0665186 C5.60481107,6.70135753 5.55120076,7.3543773 5.57014612,8.01546435 C5.55066503,8.68704434 5.60790105,9.35226898 5.73703227,9.99956566 L10.2605259,9.99957206 C10.3913769,9.34400042 10.4494573,8.66858678 10.4298539,7.98453565 C10.4486726,7.33579146 10.3959027,6.69297775 10.2758907,6.06652634 Z M14.6083589,6.06612342 L11.3622894,6.06696497 C11.4692431,6.69653431 11.5150135,7.33867293 11.496072,7.98453565 C11.5158227,8.66540944 11.4652143,9.34045459 11.348247,10.00007 L14.5888374,9.99947621 C14.7806079,9.36670512 14.8837209,8.69539515 14.8837209,8.00000184 C14.8837209,7.32858761 14.7875965,6.67962443 14.6083589,6.06612342 Z M6.96090795,1.19575257 L6.83804733,1.21393484 C4.61565937,1.59173535 2.75606947,3.03473538 1.80304562,4.99916696 L4.88341184,4.99897197 C5.28429411,3.60145255 5.99059451,2.30058869 6.96090795,1.19575257 Z M8.00094306,1.64068708 L7.91937241,1.72559318 C7.04468784,2.66990034 6.39356857,3.78749244 6.00065489,4.9993753 L10.0013792,4.9991139 C9.59686691,3.7540786 8.91736881,2.60415649 8.00094306,1.64068708 Z M9.03878393,1.19414619 C10.0138921,2.3072667 10.7191934,3.60764215 11.1189287,4.99910574 L14.1969544,4.99916696 C13.2263767,2.9985524 11.3155293,1.53875484 9.03878393,1.19414619 Z">
																	</path>
																</svg>
															</span>
														</span>
														<span class="label">
															&nbsp;&nbsp; English &nbsp;&nbsp;
															<span class="gds-icon gds-icon--secondary gds-icon--s gds-icon--base_chevron-down">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
																	<path fill-rule="evenodd" d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
																	</path>
																</svg>
															</span>
														</span>
													</button>
												</div>
											</div>
											<ul id="lang-dropdown" class="gds-submenu-items gds-submenu-items--right dropdown-lang display-none">
												<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="{{URL::to('/')}}" title="English" aria-label="" tabindex="" target=""><span class="gds-link__label">English</span></a></li>
												<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="#" title="French" aria-label="" tabindex="" target=""><span class="gds-link__label">French</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="gds-header__main-bg">
					<div class="gds-grid gds-grid--none ">
						<div class="gds-cell gds-cell--spacer-m gds-cell--content">
							<div class="gds-header__main">
								<div class="logo-holder">
									<a class="gds-logo" href="{{URL::to('/')}}" target="_parent">
										<div class="gds-image gds-image--spacer-none">
											<picture> <img src="{{ asset('public/img/logo-primary.png') }}" alt="Boeringer Ingelheim" loading="lazy" class=" ls-is-cached lazyloaded" title="Boeringer Ingelheim"> </picture>
										</div>
										<span aria-hidden="true">Boeringer Ingelheim</span>
									</a>
								</div>
								<nav class="gds-mega-nav" aria-label="Main Navigation" css="">
									<div class="mobileutilityitem breakpoint-s-max dropdown border-top-0">
										<div class="gds-dropdown-menu gds-dropdown-menu--flyout gds-dropdown-menu--space-base">
											<button class="main-link" tabindex="0" aria-expanded="false">
												<span class="main-icon">
													<span class="gds-icon gds-icon--primary gds-icon--l gds-icon--base_world">
														<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
															<path d="M8,1.83740542e-06 C12.418278,1.83740542e-06 16,3.58172384 16,8.00000184 C16,12.4182798 12.418278,16.0000018 8,16.0000018 C3.581722,16.0000018 0,12.4182798 0,8.00000184 C0,3.58172384 3.581722,1.83740542e-06 8,1.83740542e-06 Z M14.1647038,11.0664211 L11.0974621,11.0668434 C10.6934412,12.439386 9.99415671,13.7167742 9.03909205,14.8042474 C11.2905762,14.4650257 13.1844471,13.033316 14.1647038,11.0664211 Z M4.90026699,11.0668475 L1.83529623,11.0664211 C2.81555291,13.033316 4.7094238,14.4650257 6.96121607,14.8058575 C6.00405139,13.7149889 5.30393568,12.4359963 4.90026699,11.0668475 Z M9.97775987,11.0663262 L6.02023125,11.0665258 C6.42712139,12.2863352 7.09875799,13.4127982 7.99905694,14.3593129 C8.89976195,13.4142706 9.5706697,12.2893178 9.97775987,11.0663262 Z M1.39718027,6.04913031 L1.36217223,6.17003613 C1.2018887,6.75273901 1.11627907,7.36637282 1.11627907,8.00000184 C1.11627907,8.70084494 1.22101462,9.37722574 1.41568765,10.0143462 L1.4468239,10.0069804 L1.4468239,10.0069804 L1.53333333,10 L4.64920294,9.99930537 C4.53405089,9.34855525 4.48432139,8.68400491 4.50392795,8.01546435 C4.48483661,7.3573208 4.53148515,6.70462321 4.64026052,6.06604285 L1.53333333,6.06666667 C1.48627688,6.06666667 1.44064379,6.06057248 1.39718027,6.04913031 Z M10.2758907,6.06652634 L5.72654209,6.0665186 C5.60481107,6.70135753 5.55120076,7.3543773 5.57014612,8.01546435 C5.55066503,8.68704434 5.60790105,9.35226898 5.73703227,9.99956566 L10.2605259,9.99957206 C10.3913769,9.34400042 10.4494573,8.66858678 10.4298539,7.98453565 C10.4486726,7.33579146 10.3959027,6.69297775 10.2758907,6.06652634 Z M14.6083589,6.06612342 L11.3622894,6.06696497 C11.4692431,6.69653431 11.5150135,7.33867293 11.496072,7.98453565 C11.5158227,8.66540944 11.4652143,9.34045459 11.348247,10.00007 L14.5888374,9.99947621 C14.7806079,9.36670512 14.8837209,8.69539515 14.8837209,8.00000184 C14.8837209,7.32858761 14.7875965,6.67962443 14.6083589,6.06612342 Z M6.96090795,1.19575257 L6.83804733,1.21393484 C4.61565937,1.59173535 2.75606947,3.03473538 1.80304562,4.99916696 L4.88341184,4.99897197 C5.28429411,3.60145255 5.99059451,2.30058869 6.96090795,1.19575257 Z M8.00094306,1.64068708 L7.91937241,1.72559318 C7.04468784,2.66990034 6.39356857,3.78749244 6.00065489,4.9993753 L10.0013792,4.9991139 C9.59686691,3.7540786 8.91736881,2.60415649 8.00094306,1.64068708 Z M9.03878393,1.19414619 C10.0138921,2.3072667 10.7191934,3.60764215 11.1189287,4.99910574 L14.1969544,4.99916696 C13.2263767,2.9985524 11.3155293,1.53875484 9.03878393,1.19414619 Z">
															</path>
														</svg>
													</span>
												</span>
												<span>&nbsp;&nbsp;</span>
												<span class="label">
													English
													<span class="gds-icon gds-icon--secondary gds-icon--s gds-icon--base_chevron-down">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
															<path fill-rule="evenodd" d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
															</path>
														</svg>
													</span>
												</span>
											</button>
											<ul id="mobile-lang" class="gds-submenu-items gds-submenu-items--left">
												<span class="mobile-back">
													<span class="gds-icon gds-icon--primary gds-icon--xs gds-icon--base_chevron-left">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
															<path d="M5.303.23c.305-.306.8-.306 1.107 0 .277.277.303.712.075 1.018l-.075.088L1.745 6l4.665 4.664c.277.278.303.713.075 1.019l-.075.088c-.278.278-.713.303-1.02.076l-.087-.076L.332 6.8C.119 6.588 0 6.3 0 6c0-.257.088-.505.246-.704l.085-.095L5.303.229z">
															</path>
														</svg>
													</span>
													Back
												</span>
												<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="{{URL::to('/')}}" title="English" aria-label="" tabindex="" target=""><span class="gds-link__label">English</span></a></li>
												<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="#" title="French" aria-label="" tabindex="" target=""><span class="gds-link__label">French</span></a></li>
											</ul>
										</div>
									</div>
									<div class="metamenuutilityitem"> <a class="gds-link gds-link--link-intercept gds-link--menu gds-link--logo" href="#" title="Contact" aria-label="Contact" tabindex="" target=""><span class="gds-link__label">Contact</span></a> </div>
								</nav>
								<div class="mobileutilityitem breakpoint-m-min breakpoint-l-max">
									<div class="gds-dropdown-menu gds-dropdown-menu--flyout gds-dropdown-menu--space-s" aria-label="Language Selection" [object="" object]="">
										<button id="tab-lang-select" class="main-link" tabindex="0" aria-expanded="false">
											<span class="main-icon">
												<span class="gds-icon gds-icon--primary gds-icon--l gds-icon--base_world">
													<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
														<path d="M8,1.83740542e-06 C12.418278,1.83740542e-06 16,3.58172384 16,8.00000184 C16,12.4182798 12.418278,16.0000018 8,16.0000018 C3.581722,16.0000018 0,12.4182798 0,8.00000184 C0,3.58172384 3.581722,1.83740542e-06 8,1.83740542e-06 Z M14.1647038,11.0664211 L11.0974621,11.0668434 C10.6934412,12.439386 9.99415671,13.7167742 9.03909205,14.8042474 C11.2905762,14.4650257 13.1844471,13.033316 14.1647038,11.0664211 Z M4.90026699,11.0668475 L1.83529623,11.0664211 C2.81555291,13.033316 4.7094238,14.4650257 6.96121607,14.8058575 C6.00405139,13.7149889 5.30393568,12.4359963 4.90026699,11.0668475 Z M9.97775987,11.0663262 L6.02023125,11.0665258 C6.42712139,12.2863352 7.09875799,13.4127982 7.99905694,14.3593129 C8.89976195,13.4142706 9.5706697,12.2893178 9.97775987,11.0663262 Z M1.39718027,6.04913031 L1.36217223,6.17003613 C1.2018887,6.75273901 1.11627907,7.36637282 1.11627907,8.00000184 C1.11627907,8.70084494 1.22101462,9.37722574 1.41568765,10.0143462 L1.4468239,10.0069804 L1.4468239,10.0069804 L1.53333333,10 L4.64920294,9.99930537 C4.53405089,9.34855525 4.48432139,8.68400491 4.50392795,8.01546435 C4.48483661,7.3573208 4.53148515,6.70462321 4.64026052,6.06604285 L1.53333333,6.06666667 C1.48627688,6.06666667 1.44064379,6.06057248 1.39718027,6.04913031 Z M10.2758907,6.06652634 L5.72654209,6.0665186 C5.60481107,6.70135753 5.55120076,7.3543773 5.57014612,8.01546435 C5.55066503,8.68704434 5.60790105,9.35226898 5.73703227,9.99956566 L10.2605259,9.99957206 C10.3913769,9.34400042 10.4494573,8.66858678 10.4298539,7.98453565 C10.4486726,7.33579146 10.3959027,6.69297775 10.2758907,6.06652634 Z M14.6083589,6.06612342 L11.3622894,6.06696497 C11.4692431,6.69653431 11.5150135,7.33867293 11.496072,7.98453565 C11.5158227,8.66540944 11.4652143,9.34045459 11.348247,10.00007 L14.5888374,9.99947621 C14.7806079,9.36670512 14.8837209,8.69539515 14.8837209,8.00000184 C14.8837209,7.32858761 14.7875965,6.67962443 14.6083589,6.06612342 Z M6.96090795,1.19575257 L6.83804733,1.21393484 C4.61565937,1.59173535 2.75606947,3.03473538 1.80304562,4.99916696 L4.88341184,4.99897197 C5.28429411,3.60145255 5.99059451,2.30058869 6.96090795,1.19575257 Z M8.00094306,1.64068708 L7.91937241,1.72559318 C7.04468784,2.66990034 6.39356857,3.78749244 6.00065489,4.9993753 L10.0013792,4.9991139 C9.59686691,3.7540786 8.91736881,2.60415649 8.00094306,1.64068708 Z M9.03878393,1.19414619 C10.0138921,2.3072667 10.7191934,3.60764215 11.1189287,4.99910574 L14.1969544,4.99916696 C13.2263767,2.9985524 11.3155293,1.53875484 9.03878393,1.19414619 Z">
														</path>
													</svg>
												</span>
											</span>
											<span>&nbsp;&nbsp;</span>
											<span class="label">
												English
												<span>&nbsp;&nbsp;</span>
												<span class="gds-icon gds-icon--secondary gds-icon--s gds-icon--base_chevron-down">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
														<path fill-rule="evenodd" d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
														</path>
													</svg>
												</span>
											</span>
										</button>
									</div>
									<ul id="tab-lang-dropdown" class="gds-submenu-items gds-submenu-items--left tab-dropdown-lang display-none">
										<span class="mobile-back">
											<span class="gds-icon gds-icon--primary gds-icon--xs gds-icon--base_chevron-left">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
													<path d="M5.303.23c.305-.306.8-.306 1.107 0 .277.277.303.712.075 1.018l-.075.088L1.745 6l4.665 4.664c.277.278.303.713.075 1.019l-.075.088c-.278.278-.713.303-1.02.076l-.087-.076L.332 6.8C.119 6.588 0 6.3 0 6c0-.257.088-.505.246-.704l.085-.095L5.303.229z">
													</path>
												</svg>
											</span>
											Back
										</span>
										<span class="mobile-label">English</span>
										<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="{{URL::to('/')}}" title="English" aria-label="" tabindex="" target=""><span class="gds-link__label">English</span></a></li>
										<li class="gds-submenu-item"><a class="gds-link gds-link--link-intercept gds-link--logo" href="#" title="French" aria-label="" tabindex="" target=""><span class="gds-link__label">French</span></a></li>
									</ul>
								</div>
								<button id="mobilemenutoggle" class="mobileutilityitem breakpoint-l-max" aria-label="Main Menu">
									<span class="gds-icon gds-icon--primary gds-icon--l gds-icon--base_menu">
										<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
											<path d="M15.4418605,13.0232558 C15.7501124,13.0232558 16,13.2731434 16,13.5813953 C16,13.8588221 15.7975911,14.0889737 15.5323936,14.1322298 L15.4418605,14.1395349 L0.558139535,14.1395349 C0.249887581,14.1395349 0,13.8896473 0,13.5813953 C0,13.3039686 0.202408941,13.073817 0.467606403,13.0305609 L0.558139535,13.0232558 L15.4418605,13.0232558 Z M15.4418605,7.44186047 C15.7501124,7.44186047 16,7.69174805 16,8 C16,8.27742676 15.7975911,8.50757837 15.5323936,8.55083443 L15.4418605,8.55813953 L0.558139535,8.55813953 C0.249887581,8.55813953 0,8.30825195 0,8 C0,7.72257324 0.202408941,7.49242163 0.467606403,7.44916557 L0.558139535,7.44186047 L15.4418605,7.44186047 Z M15.4418605,1.86046512 C15.7501124,1.86046512 16,2.1103527 16,2.41860465 C16,2.69603141 15.7975911,2.92618303 15.5323936,2.96943908 L15.4418605,2.97674419 L0.558139535,2.97674419 C0.249887581,2.97674419 0,2.7268566 0,2.41860465 C0,2.14117789 0.202408941,1.91102628 0.467606403,1.86777022 L0.558139535,1.86046512 L15.4418605,1.86046512 Z">
											</path>
										</svg>
									</span>
									<span class="gds-icon gds-icon--primary gds-icon--l gds-icon--base_close">
										<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.875503817,0.0988924563 L0.952803785,0.163475285 L8,7.21023256 L15.0471962,0.163475285 C15.2651633,-0.0544917616 15.6185577,-0.0544917616 15.8365247,0.163475285 C16.0302732,0.357223771 16.0518008,0.657976591 15.9011075,0.875503817 L15.8365247,0.952803785 L8.78976744,8 L15.8365247,15.0471962 C16.0544918,15.2651633 16.0544918,15.6185577 15.8365247,15.8365247 C15.6427762,16.0302732 15.3420234,16.0518008 15.1244962,15.9011075 L15.0471962,15.8365247 L8,8.78976744 L0.952803785,15.8365247 C0.734836738,16.0544918 0.381442331,16.0544918 0.163475285,15.8365247 C-0.0302732009,15.6427762 -0.0518008104,15.3420234 0.0988924563,15.1244962 L0.163475285,15.0471962 L7.21023256,8 L0.163475285,0.952803785 C-0.0544917616,0.734836738 -0.0544917616,0.381442331 0.163475285,0.163475285 C0.33300521,-0.00605464018 0.584460328,-0.0437279569 0.79040145,0.0504553349 L0.875503817,0.0988924563 Z">
											</path>
										</svg>
									</span>
									<span></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</header>
		</main>
	</div>