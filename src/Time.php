<?php

class Time{

	private $curr_ts;

	public function __construct($time){
		$this->curr_ts = $time;
	}

	public function getCurrTime(){
		return $this->curr_ts;
	}

}
