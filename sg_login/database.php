<?php session_start(); ?>
<?php 
	class database{

		private  $server;
		private  $username;
		private  $password;
		private  $database;
		public  $conn;

		function __construct(){
			$this->server = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->database = "sampleDB";
			$this->conn = new mysqli($this->server,$this->username,$this->password,$this->database);
		}

	}
?>