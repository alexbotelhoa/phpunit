<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class CadastroTest extends TestCase {

	public function test_create_user() {

		$user = \Mockery::mock('app\models\User');
		$user->shouldReceive('find')->andReturn(['alexandre']);

		$this->assertNotEmpty($user->find());

		// $driver = \Mockery::mock('app\interfaces\EmailInterface');
		// $driver->shouldReceive('send')->andReturn(true);

		// if ($user->create()) {
		// 	$email = new Email;
		// 	$enviado = $email->send($driver);

		// 	$this->assertTrue($enviado);
		// }

	}

}