<?php
require_once "DB.php";
class Player extends DB{

    public function getPlayers(){
        $conn = parent::connectDb();
        $playersData =  $conn->query("SELECT * FROM players");
        return $playersData;
    }

}