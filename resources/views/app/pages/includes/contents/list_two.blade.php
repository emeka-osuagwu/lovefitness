
<div class="gym-item">
	<a href="/classes/{{$data->name}}">
<!-- 	@if($data->image == '' )
		<img class="gym-image" src="{{ asset('images/no_image_2.png') }}" alt="">
	@else
		<img class="gym-image" src="{{ $data->image }}" alt="">
		<img class="gym-logo" src="{{ asset('images/gym-logo.png') }}" alt="">
	@endif -->
	
		<img class="gym-image" src="{{ $data->image == '' ? asset('images/no_image_2.png') : $data->image }}" alt="">
		<img width="100" class="gym-logo" src="{{ $data->image == '' ? asset('images/noimage.png') : $data->logo }}" alt="">

	<div class="meta red clearfix">
		<a href="/class/view" class="arrow"></a>
		<a style="text-transform: uppercase;" href="#">CLASS: {{$data->first()->name}}</a>
		<a style="text-transform: uppercase;" href="#">DURATION: {{$data->first()->duration}}</a>
		<a style="text-transform: uppercase;" href="#">GYM: ABC GYM</a>
		<a style="text-transform: uppercase;" href="#">LOCATION: IKOYI</a>
	</div>
	</a>
</div>