<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col">

<?php do_action( 'tailpress_header' ); ?>

<nav class="bg-white shadow">
<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
	<div class="flex justify-between h-16">
		<div class="flex px-2 lg:px-0">
		<div class="flex-shrink-0 flex items-center">
		<img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
		<img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
		</div>
		<?php
		wp_nav_menu(
			array(
				'container'       => 'div',	
				'container_id'    => 'desktop-menu',
				'container_class' => 'hidden lg:ml-6 lg:flex',
				'menu_class'      => 'flex lg:space-x-8',
				'theme_location'  => 'primary',
				'li_class'        => 'border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium',
				'fallback_cb'     => false,
				)
			);
		?>
		</div>
		<div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
			<div class="max-w-lg w-full lg:max-w-xs">
			<label for="search" class="sr-only">Search</label>
			<div class="relative">
				<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
					<!-- Heroicon name: solid/search -->
					<svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
					</svg>
				</div>
			<input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">
			</div>
			</div>
		</div>
		<div class="flex items-center lg:hidden">
			<!-- Mobile menu button -->
			<button type="button" class="mobile-menu-toggle inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
			<span class="sr-only">Open main menu</span>
			<!--
			Icon when menu is closed.
			Heroicon name: outline/menu
			Menu open: "hidden", Menu closed: "block"
			-->
			<svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
			<!--
			Icon when menu is open.
			Heroicon name: outline/x
			Menu open: "block", Menu closed: "hidden"
			-->
			<svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
			</svg>
			</button>
		</div>
		<div class="hidden lg:ml-4 lg:flex lg:items-center">
			<div class="flex items-center lg:ml-8">
			<a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Account</a>
			<!-- Cart -->
			<div class="ml-4 flow-root lg:ml-8">
				<a href="#" class="group -m-2 p-2 flex items-center">
				<!-- Heroicon name: outline/shopping-bag -->
				<svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
				</svg>
				<span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
				<span class="sr-only">items in cart, view bag</span>
				</a>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div class="lg:hidden hidden" id="mobile-menu">
	<?php
	wp_nav_menu(
	array(
		'container'       => 'div',	
		'container_id'    => 'mobile-menu',
		'container_class' => 'pt-2 pb-3 space-y-1',
		'menu_class'      => 'space-y-1',
		'theme_location'  => 'primary',
		'li_class'        => 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium',
		'fallback_cb'     => false,
		)
	);
	?>
	<div class="pt-4 pb-3 border-t border-gray-200">
		<div class="mt-3 space-y-1">
		<a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">My Account</a>
		<a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Contact Us</a>
		<a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Helpful Info</a>
		</div>
	</div>
	</div>
</div>

<div id="content" class="site-content flex-grow">

<!-- Start introduction -->
<?php if ( is_front_page() ) : ?>
<div class="container mx-auto my-12 border-b pb-12">
	<h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
</div>
<?php endif; ?>
<!-- End introduction -->

<?php do_action( 'tailpress_content_start' ); ?>

<main>