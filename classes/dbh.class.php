<?php 


class DBH
{
  private $dbServer = "localhost";
  private $dbUser = "root";
  private $dbPassword = "";
  private $dbName = "irfcplayerportal";

  private function GetConnection(){
    $connection = $connection = new mysqli($this->dbServer,$this->dbUser,$this->dbPassword,$this->dbName);
    return $connection;
  }
}



?>