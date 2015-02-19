<?php

class Dealer extends Eloquent {
	
	protected $table = 'dealers';

	public function branches(){
		return $this->hasMany('Branch');
	}

}