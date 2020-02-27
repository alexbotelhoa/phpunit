<?php

namespace app\classes;

class Email {

	// private $driver;

	// public function __construct($driver) {
	// 	$this->driver = $driver;
	// }

	public function send($driver) {
		return $driver->send();
	}

}