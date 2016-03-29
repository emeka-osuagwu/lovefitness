@extends('dashboard.master')

@section('title', 'Index')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"s> </div>
	<div class="page-container">
		<div class="page-sidebar-wrapper">
			@include('dashboard.pages.includes.sections.left_nav')
			@include('dashboard.pages.includes.contents.edit_gym')
		</div>
	</div>
@endsection