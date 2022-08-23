<?php
require_once "./models/Player.php";

class Players{

    public function index(){
        $selectDatas = [
            'getSinglePlayer' => "Get Single Player",
            'getAllPlayers' => "Get All Player",
            'getTop3' => "Get Top 3"
        ];

        return $selectDatas;
    }
}