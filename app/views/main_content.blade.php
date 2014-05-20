<section id="main-content" class="clearfix">
	@if(Session::has('message'))
		<p class="alert">{{Session::get('message')}}</p>
	@endif
	@yield('content')
</section><!-- end main-content -->