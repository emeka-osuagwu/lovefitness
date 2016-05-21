@extends('dashboard.master')

@section('title', 'Index')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')

				@if(Auth::user()->role == 1 || Auth::user()->role == 2)
					@include('dashboard.pages.includes.contents.admin_index')
				@endif
				@if(Auth::user()->role == 0)
					@include('dashboard.pages.includes.contents.user_index')
				@endif
			
			</div>
		</div>
@endsection