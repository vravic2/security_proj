<?php
include_once 'dao/indexdao.php';

class TransationsBiz
{

	function TransationsBiz(){
	}
	
	/*
	* Validate account number
	*/
	
	function validateAccNum($accNum){
		try{
			$indao = new indexdao();
			$conn = $indao->getConnection();
			$sth = $conn->prepare('SELECT * FROM account WHERE accountNo=?');
			$sth->execute(array($accNum));
			$row = $sth->fetchAll();
			if(!empty($row)){
				$conn = null;
				return $row;
			}
			else {
				$conn = null;
				return false;
			}
		}
		catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	/*
	 * Returns true if the withdrawn amount is successfully 
	 * updated in the database.
	 */
	
	function withdraw($accNum, $amount){
		try{
			$indao = new indexdao();
			$conn = $indao->getConnection();
			$currentBal = $this->currentBalance($accNum);
			if ($currentBal > $amount) {
				$newBal = ($currentBal - $amount);
			}
			else {
				$conn = null;
				return false;
			}
			$sth = $conn->prepare('UPDATE account SET balance=? WHERE accountNo=?');
			$sth->execute(array($newBal, $accNum));
		}
		catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
		return true;
		
	}
	
	/*
	 *Returns true if the deposited amount is successfully 
	 * updated in the database.
	 */
	
	function deposit($accNum, $amount){
		try{
			$indao = new indexdao();
			$conn = $indao->getConnection();
			$currentBal = $this->currentBalance($accNum);
		
			$newBal = ($currentBal + $amount);
			$sth = $conn->prepare('UPDATE account SET balance=? WHERE accountNo=?');
			$sth->execute(array($newBal, $accNum));
		}
		catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
		return true;			
	}
	
	/*
	*	Retrieve current balance in the account
	*/
	function currentBalance($accNum){
		$indao = new indexdao();
		$conn = $indao->getConnection();
		$sth = $conn->prepare('SELECT * FROM account WHERE accountNo=?');
		$sth->execute(array($accNum));
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$bala = $row["balance"];
		return $bala;
	}

	/*
	 * Returns true on successful money transfer
	 */
	function moneyTransfer($srcAcctNum, $destAcctNum, $amount) {
		try{
			$indao = new indexdao();
			$conn = $indao->getConnection();
			
			/*Retrieving current balance of source and destination accounts*/
			$srcBal = $this->currentBalance($srcAcctNum);
			$destBal = $this->currentBalance($destAcctNum);
			if($srcBal > $amount){
				$newSrcBal = ($srcBal -$amount);
			}
			else{
				$conn = null;
				return false;
			}
			$newDestBal = ($destBal + $amount);
			
			/* Atomic transaction consisting of updating source and
			*  destination account balances
			*/
			$conn->beginTransaction();
			$sth1 = $conn->prepare('UPDATE account SET balance=? WHERE accountNo=?');
			$sth1->execute(array($newDestBal,$destAcctNum));
			if(($sth1->rowCount())> 0) {
				$sth2 = $conn->prepare('UPDATE account SET balance=? WHERE accountNo=?');
				$sth2->execute(array($newSrcBal, $srcAcctNum));
				if(($sth2->rowCount()) > 0) {
					$conn->commit();
				}
				else {
					$conn->rollback();
				}
			}
			else{
				$conn->rollback();
			}
			
		}
		catch(PDOException $e){
			$conn->rollback();
			echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
		return true;
	}
	
	/* 
	* Display customer personal details
	*/
	function displayCustInfo($accNo){
		try{
			$indao = new indexdao();
			$conn = $indao->getConnection();
			$sth = $conn->prepare('SELECT * from account a, user u where a.accountNo=? and u.userId=a.user_Id');
			$sth->execute(array($accNo));
			$row = $sth->fetch(PDO::FETCH_ASSOC);
			if(!empty($row)){
				
				return $row;
			}
			else {
				$conn = null;
				return false;
			}
		}
		catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}
	
	
	/*
	*  Update customer personal details
	*
	function updateCustInfo ($){
		try{
			$indao = new indexdao();
			$conn = $this->getConnection();
			$sth = $conn->prepare('INSERT into customer(name, email, phone, address) VALUES (?,?,?,?,?)');
			$sth->execute(array($custName, $custEmail, $custPhone, $custAddr));
		}
		catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
	} */
	
}
?>