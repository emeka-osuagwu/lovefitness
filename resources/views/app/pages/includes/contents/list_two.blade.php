
<div class="gym-item">
	<a href="/classes/{{$data->name}}">
	<img class="gym-image" src="{{ asset('images/gym.jpg') }}" alt="">
	<img class="gym-logo" src="{{ asset('images/gym-logo.png') }}" alt="">
	<div class="meta red clearfix">
		<a href="/class/view" class="arrow"></a>
		<a style="text-transform: uppercase;" href="#">CLASS: {{$data->first()->name}}</a>
		<a style="text-transform: uppercase;" href="#">DURATION: {{$data->first()->duration}}</a>
		<a style="text-transform: uppercase;" href="#">GYM: ABC GYM</a>
		<a style="text-transform: uppercase;" href="#">LOCATION: IKOYI</a>
	</div>
	</a>
</div>