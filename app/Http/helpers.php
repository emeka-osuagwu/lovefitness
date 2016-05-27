
<?php

use App\Model\Group;
use App\Model\Location;

function load_asset($asset_url)
{
    return ( env('APP_ENV') === 'production' ) ? secure_asset($asset_url) : asset($asset_url);
}
function domain_name()
{
    return Request::root();
}

function getLocationById($id)
{
	return Location::where('id', $id)->get()->first()->name;
}

function getGroupById($id)
{
	return Group::where('id', $id)->get()->first();
}