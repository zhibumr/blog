<?php 
namespace App\Common\Auth;
use Vendor\Lcobuccl\Jwt;
/**
* 
*/
class JwtAoth 
{

	private static $instance;
	public static function getInstance(){
		if (self::instance=="") {
			self::instance = new self();
		}
		return self::instance;
		
	}
	private function __construct()
	{

	}
	private function __clone(){

	}
}