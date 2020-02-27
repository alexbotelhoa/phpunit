<?php

namespace tests;

use app\classes\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase {

	public function test_send_email() {

		$driver = \Mockery::mock('app\interfaces\EmailInterface');
		$driver->shouldReceive('send')->andReturn(true);

		$email = new Email();
		$send = $email->send($driver);

		$this->assertTrue($send);
	}

}