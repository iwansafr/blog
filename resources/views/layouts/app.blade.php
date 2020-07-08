<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<livewire:styles />
</head>
<body>
	<div class="flex w-full justify-center">
		<div class="flex w-full justify-left px-4 bg-purple-900 text-white">
			<a href="/">Home</a>
			<a href="/login">Login</a>
			<a href="/register">register</a>
		</div>
	</div>

	@yield('content')
	<livewire:scripts />
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>