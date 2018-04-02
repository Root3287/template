<?php
class Hash{
	public static function make($string, $salt= ''){
		return hash('sha256', $string.$salt);	
	}
	
	public static function salt($length) {
		return openssl_random_pseudo_bytes($length);
	}
	public static function unique() {
		return self::make(uniqid());
	}
	public static function unique_length($length){
		return substr(Hash::make(substr(uniqid(rand(), true), 0, 4)), rand(1,13),$length);
	}
}