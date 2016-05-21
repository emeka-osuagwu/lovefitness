@extends('dashboard.master')

@section('title', 'Category')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')
				@include('dashboard.pages.includes.contents.categorys')
			</div>
		</div>
@endsection