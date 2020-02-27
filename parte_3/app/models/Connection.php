<?php

namespace app\clsses;

use PDO;

class Connection {
	public function connect() {
		$pdo = new PDO('myslq:host=localhost;dbname=test', 'root', 'root');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $pdo;
	}
}
