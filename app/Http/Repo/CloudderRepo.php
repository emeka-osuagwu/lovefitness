<?php

namespace App\Http\Repo;

use Cloudder;
use Illuminate\Support\Facades\Input as Input;

class CloudderRepo
{
	public function getImageUrl()
	{
		$image = Input::file('image');
		Cloudder::upload($image, null);
		return $imgUrl = Cloudder::getResult()['url'];
	}
}