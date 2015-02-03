<?php
class portaldao
{
protected $db;

    public function portaldao(){
	$conn = NULL;
	
        try{
            $conn = new PDO("mysql:host=localhost;dbname=game", "venkat", "venkat");
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
		$sth = $conn->prepare('SELECT * from user where emailId=?');
		$sth->execute(array($emailId));
		$row = $sth->fetchAll();
		if(!empty($row))
			return $row['0'];
		

	}
	function addTeam($teamDetails)
	{
		$conn = $this->getConnection();
		$sth = $conn->prepare('INSERT into team (name,zipcode,country,owner,members) VALUES (?,?,?,?,?)');
		$sth->execute(array($teamDetails['name'],$teamDetails['zipcode'],$teamDetails['country'],$_SESSION['username'],$_SESSION['username']));
	}
	function deleteTeam($id)
	{
		$conn = $this->getConnection();
		$sth = $conn->prepare('delete from team where id=?');
		$sth->execute(array($id));
	}
	function searchByZip($zipcode)
	{
		$conn = $this->getConnection();
		$sth = $conn->prepare('select *from user where zipcode=?');
		$sth->execute(array($zipcode));
	}
	function searchByName($username)
	{
		$conn = $this->getConnection();
		$sth = $conn->prepare('delete from team where id=?');
		$sth->execute(array($id));
	}

}


?>
