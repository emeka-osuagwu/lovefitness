@extends('master')

@section('title', 'Index')

@section('content')
	@include('pages.includes.sections.top_nav')
	@include('pages.includes.sections.banner')
	@include('pages.includes.sections.review')

	<div class="row">
		<div class="columns">
			<img class="empty-ribbon" src="images/empty-ribbon.jpg" alt="">
		</div>
	</div>

	@include('pages.includes.contents.list_one')
	
@endsection