<?php
if(isset($_POST['submit'])){

	$name = array("alexwawo", "maria", "johndoe", "janedoe", "nathan");

	$minumum = 5;
	$maximum = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum){
		 echo "Username harus memiliki panjang 5 atau lebih";
	}

	if(strlen($username) > $maximum){
		echo "Username tidak boleh lebih panjang dari 10";
	}

	if(!in_array($username, $name)){
		echo "maaf, akses ditolak";
	}else{
		echo "selamat datang";
	}

}
?>