<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" datatarget="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					
					<!-- Branding Image -->
					<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
						<?php echo e(config('app.name', 'Aplicatie Laravel CRUD')); ?>

					</a>
				</div>
				
				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
					
					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
					
					<!-- Authentication Links -->
					<?php if(Auth::guest()): ?>
					<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
					<li><a href="<?php echo e(route('register')); ?>">Register</a></li>
					<?php else: ?>
					<!--
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ariaexpanded="false">
					<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
					-->
					<li>
					<a href="<?php echo e(route('logout')); ?>"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Logout
					</a>
					<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
					style="display: none;">
					<?php echo e(csrf_field()); ?>

					</form>
				</li>
			</ul>
		</li>
	<?php endif; ?>
 </ul>
 </div>
 </div>
 </nav>
 <?php echo $__env->yieldContent('content'); ?>
 </div>
</html>
<?php /**PATH C:\Users\intel\proiect\resources\views/layouts/app.blade.php ENDPATH**/ ?>