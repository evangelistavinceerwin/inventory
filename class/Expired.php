<?php
require_once('../database/Database.php');
require_once('../interface/iExpired.php');
class Expired extends Database implements iExpired {

	public function add_expired($name, $price, $qty, $expiredDate)
	{
		$sql = "INSERT INTO expired(exp_itemName, exp_itemPrice, exp_itemQty, exp_expiredDate)
				VALUES(?,?,?,?);";
		return $this->insertRow($sql, [$name, $price, $qty, $expiredDate]);
	}

	public function all_expired()
	{
		$sql = "SELECT *
				FROM expired";
		return $this->getRows($sql);
	}
	public function del_expired($exp_id)
	{
		$sql = "DELETE FROM expired 
				WHERE exp_id = ?";
		return $this->deleteRow($sql, [$exp_id]);
	}
	public function larajax($exp_id)
	{
		$sql = "DELETE FROM expired 
				WHERE exp_id = ?";
		return $this->deleteAjax($sql, [$exp_id]);
	}
}

$expired = new Expired();


  