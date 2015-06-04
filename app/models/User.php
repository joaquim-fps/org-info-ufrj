<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	protected $table = 'users';
	protected $softDelete = true;
	protected $fillable = array('email', 'name');

	public function searches() {
		return $this->hasMany('Search');
	}

	public function locales() {
		return $this->hasMany('Locale');
	}

}
