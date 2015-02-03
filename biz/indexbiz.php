<?php
include_once 'dao/indexdao.php';

//$encrypted = $this->encrypt($password, ENCRYPTION_KEY);	
//$decrypted = $this->decrypt($encrypted, ENCRYPTION_KEY);
class indexbiz
{

	function indexbiz()
	{
		define("ENCRYPTION_KEY", "venkat-visa-adi");
	}

	/**
	 * Returns true if the user is valid else false.
	 */
	
	function validateUser($userName,$password)
	{	
	
		$indao = new indexdao();
		$userDetails = $indao->getUsers($userName);	
		
	 $this->checkRole($userDetails['userId']);

		if(!empty($userDetails))
		{
			$decrypted = $this->decrypt($userDetails['password'], ENCRYPTION_KEY);
			return ($password == $decrypted)?1:0;
		}
		else
			return 0;
		
	}
	
	function checkRole($userId){
		session_start();
		$indao = new indexdao();
		$sessRole = $indao->getRole($userId);

		$_SESSION['role'] = $sessRole['userRole'];
	}
	/**
	 * Returns true if the user added to db.
	 */
	
	function addUser($userDetails)
	{	
		$indao = new indexdao();
		$encrypted = $this->encrypt($userDetails['pass'], ENCRYPTION_KEY);	
		$userDetails['pass']= $encrypted;
		$indao->addUser($userDetails);			
	}

	/**
	 * Returns an encrypted & utf8-encoded
	 */
	function encrypt($pure_string, $encryption_key) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
		return $encrypted_string;
	}
	
	/**
	 * Returns decrypted original string
	 */
	function decrypt($encrypted_string, $encryption_key) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
		return trim($decrypted_string);
	}
	
}
?>