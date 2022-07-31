<?php

define("HOST","");
define("USER","");
define("PASS","");
define("DB","");
define("TABEL","");

class Database {
	private $host;
	private $user;
	private $pass;
	private $db;
	protected $connect;
	public function __construct($r,$y,$u,$x,$d){
		return $this -> connect = mysqli_connect($r,$y,$u,$x,$d);
	}
	public function query($data){
		$q = mysqli_connect($this -> connect,$data);
	    $ryu = [];
	    while($ry = mysqli_fetch_assoc($q)){
		  $ryu[] = $ry;
	    }
	    return $ryu;
	}
}


/*************************
GW GG XD RUYUGEN XD
**************************/