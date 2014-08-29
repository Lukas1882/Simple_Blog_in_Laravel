<?php

class AdminsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Admins  Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AdminsController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function getMaster()
	{

		if(Auth::check()){
			return Redirect::to('manager');
		} else{
			return View::make('admins/master');
		}
		
	}



	public function getLogin()
	{
		return View::make('admins/login');
	}

	public function postLogin()
	{		$input=Input::all();
		$rule=array('email'=>'required','password'=>'required');
	
		$v=Validator::make($input,$rule);
 
		if($v->fails())
		{
			return Redirect::to('login')->withErrors($v);
		} else{
			//$cred=array('email'=>$input['email'],'password'=>($input['password']));
			$userdata = array(
            'username'     => Input::get('email'),
            'password'      => Input::get('password'),
        );
		 
			if (Auth::attempt($userdata))
			{
				return Redirect::to('manager');
			} else {
				return Redirect::to('login')->withErrors("Wrong Information!");
			}
		}
	}

	public function getRegister()
	{
		return View::make('admins/register');
	}
	public function postRegister()
	{
		$input=Input::all();
		$rule=array('username'=>'required|unique:users','email'=>'required|unique:users|email','password'=>'required');
		$v=Validator::make($input,$rule);

		if($v->passes())
		{
			$password=$input['password'];
			$password=Hash::make($password);

			$user=new User();
			$user->username=$input['username'];
			$user->email=$input['email'];
			$user->password=$password;
			$user->save();
			return Redirect::to('login');
		} else{
			return Redirect::to('register')->withInput()->withErrors($v);
		}
	}



	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}


}
