<?php
class indexdao
{
protected $db;
    public function indexdao(){
	$conn = NULL;

        try{
            $conn = new PDO("mysql:host=localhost;dbname=bank", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
    }
    public function getConnection(){
        return $this->db;
    }
	function getUsers($emailId)
	{
		$conn = $this->getConnection();
		$sth = $conn->prepare('SELECT * from user where userName=?');
		$sth->execute(array($emailId));
		$row = $sth->fetchAll();
		if(!empty($row))
			return $row['0'];
	}

	function getRole($userId){
		$conn = $this->getConnection();
		$sth = $conn->prepare('SELECT * from userrole where user_id=?');
		$sth->execute(array($userId));
		$row = $sth->fetchAll();
		if(!empty($row))
			return $row['0'];
	}
}
?>
