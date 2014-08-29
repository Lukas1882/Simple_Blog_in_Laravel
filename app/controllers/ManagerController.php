<?php

class ManagerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function getIndex()
	{
		return View::make('manager.index');
	}
	public function getManageUser()
	{
		return View::make('posts/manage_user');
	}

 


}
