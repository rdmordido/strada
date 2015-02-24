<?php

class Branch extends Eloquent {
	
	protected $table = 'branches';

	public function dealer(){
		return $this->belongsTo('Dealer');
	}

	public function location(){
		return $this->belongsTo('Location');
	}

	public function users(){
		return $this->hasMany('User');
	}
}