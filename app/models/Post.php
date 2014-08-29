<?php

class Post extends Eloquent {

	protected $guarded=array();
      // $rule=array('email'=>'required','password'=>'required');
	public static $rules=array('title'=>'required|max:40','desc'=>'max:100','body'=>'required');
	public function user()
	{
		return $this->belongsTo('User','user_id');
	}

}
    




