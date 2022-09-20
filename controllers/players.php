<?php

include_once '../includes/twig.php';

class ControllerPlayers{
    public function index(){
        echo $twig->render('player.twig',[
            'name' => 'Efe Sunuç',
        ]);
    }
}

