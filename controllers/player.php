<?php
require_once "./models/Player.php";

class Players{

    public function index(){
        $selectDatas = [
            'getSinglePlayer' => "Get Single Player",
            'getAllPlayers' => "Get All Players",
            'getTop3' => "Get Top 3"
        ];

        return $selectDatas;
    }
}