<?php

class Location extends Eloquent {
	
	protected $table = 'locations';

	public function branches(){
		return $this->hasMany('Branch');
	}
}