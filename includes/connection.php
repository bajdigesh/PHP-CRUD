<?php
	class DbConnection {
		protected $host, $user, $pass, $dbName;

		public function dbConnect($server, $s_user, $s_pass, $name) {
			$this->host = $server;
			$this->user = $s_user;
			$this->pass = $s_pass;
			$this->dbName = $name;

			$connect = mysqli_connect($server, $s_user, $s_pass, $name);
			if (!$connect) {
				return mysqli_connect_error();
				die;
			}
		}
	}
?>