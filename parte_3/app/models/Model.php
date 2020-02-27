<?php

namespace app\models;

use app\clsses\Connection;

class Model {

	private $connection;

	public function __construct() {
		$this->connection = (new Connection)->connect();
	}

}