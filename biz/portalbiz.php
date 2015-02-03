<?php
include_once 'dao/portaldao.php';
class portalbiz
{	
	/**
	 * Returns true if the team added to db.
	 */
	function addTeam($teamDetails)
	{	
		$portdao = new portaldao();
		$portdao->addteam($teamDetails);
	}
	
	/**
	 * Delete a team from db
	 */
	function deleteTeam($id)
	{
		$portdao = new portaldao();
		$portdao->deleteTeam($id);			
	}
	
	/**
	 * 
	*/
	function manageteam($teamDetails)
	{	
		$portdao = new portaldao();
		return false;
	}

	/**
	 * Returns players list w.r.t to search option
	 */
	function searchPlayers($searchtype,$searchval)
	{
		$portdao = new portaldao();
		if($type="zipcode")
			$portdao->searchByZip($searchval); 	
		else
			$portdao->searchByName($searchval); 			
		return false;
	}
	
	/**
	 * Add players to a team
	 */
	function addPlayer()
	{
		$portdao = new portaldao();
		return false;
	}
	
	/**
	 * Remove player from a team
	 */
	function removePlayer()
	{
		$portdao = new portaldao();
		return false;
	}
	
	/**
	 * Change team captain
	 */
	function assignCaptain()
	{
		$portdao = new portaldao();
		return false;
		$teamList = $portdao->getTheTeam();
	}
	
	
	
}
?>