@extends('app.master')

@section('title', 'Index')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	@include('app.pages.includes.sections.banner')
	@include('app.pages.includes.sections.review')

	<div class="row">
		<div class="columns">
			<img class="empty-ribbon" src="images/empty-ribbon.jpg" alt="">
		</div>
	</div>
	
	@include('app.pages.includes.contents.list_one')
	
@endsection