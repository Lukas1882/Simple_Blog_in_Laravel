<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$posts = Post::where('user_id', '=', Auth::user()->id)->paginate(3);
		return View::make('posts.index')->with('posts',$posts);
	}
	public function create()
	{
		return View::make('posts.create');
	}
	public function about()
	{
		return View::make('posts.create');
	}
	public function store()
	{
		$input=Input::all();
		$v=Validator::make($input,Post::$rules);
		if($v->passes()){
			$post=new Post;
			$post->title=Input::get('title');
			$post->body=Input::get('body');
			$post->keyw=Input::get('keyw');
			$post->desc=Input::get('desc');
			$post->slug=Str::slug(Input::get('title'));
			$post->user_id=Auth::user()->id;
			$post->save();
			return Redirect::route('posts.index');

		}
		return Redirect::back()->withErrors($v);
	}

	public function show($id)
	{
		$post=Post::find($id);
		$date=$post->created_at;
		setlocale(LC_TIME, 'America/New_York');
		$date=$date->formatlocalized('%A %d %B %Y');
		return View::make('posts.show')->with('post', $post)->with('date', $date);
	}

	public function edit($id)
	{
		$post = Post::find($id);

		if(is_null($post))
		{
			return Redirect::route('posts.index');
		}

        return View::make('posts.edit')->with('post', $post);
	}
	
	public function update($id)
	{
		$input=array_eccept(Input::all().'_method');
		$v=validater::make($input,Post::$rules);
		if($v->passes())
		{
			Post::find($id)->update($input);
			return Redirect::route('posts.index');
		}
		return Redirect::back()->withErrors($v);
	}
	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::route('posts.index');
	}




}
