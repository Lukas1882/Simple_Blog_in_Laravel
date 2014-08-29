<?php

class SiteController extends \BaseController {

	public function getHome()
	{
		return View::make('sites.home');
	}


	public function getAbout()
	{
		return View::make('sites.about');
	}
	public function getBlog()
	{
		$posts=Post::orderBy('created_at','DESC')->paginate(5);
		return View::make('sites.blog')->with('posts',$posts);
	}


}
