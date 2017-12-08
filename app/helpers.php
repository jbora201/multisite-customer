<?php
function IncludeAsset($asset){
	$theme = App\theme::where('active', 1)->where('site_id', 22)->first();
	return asset('templates/'.$theme['name'].'/'.$asset);
}
?>