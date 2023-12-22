<!doctype html>
<html class="fixed">
	@include('admin.partials.head')
	<body>
		<section class="body">
			@include('admin.partials.header')
			<div class="inner-wrapper">
				@include('admin.partials.sidebar')
                @yield('content')
            </div>
		</section>
		@include('admin.partials.scripts')
	</body>
</html>

