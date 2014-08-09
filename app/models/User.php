<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function friends()
	{
		return $this->belongsToMany('User', 'friends_users', 'user_id', 'friend_id');
	}

	public function addFriend(User $user)
	{
		$this->friends()->attach($user->id);
	}

	public function removeFriend(User $user)
	{
		$this->friends()->detach($user->id);
	}

}
