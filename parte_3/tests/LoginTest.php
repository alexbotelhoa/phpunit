<?php

namespace tests;

use app\classes\Login;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {

	public function test_login() {

		$login = new Login();
		$logado = $login->logar('123');

		$this->assertTrue($logado);
	}

}