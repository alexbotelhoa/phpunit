<?php

namespace app\classes;

class Login {

	private $password;

	public function __construct($password) {
		$this->password = $password;
	}

	public function logar($password) {

		$password = new Password;
		$passwordPasses = $password->pass($password);

		return $passwordPasses;

	}

}