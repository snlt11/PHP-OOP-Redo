<?php

require_once("getterAndSetterInjection1.php");


class Green
{
    public function __construct()
    {

        $player = new MusicPlayer();
        $player->setPath("C:/Music/");
        $player->setMusic("HaHa.mp3");
        $this->PlayNow($player->getPath(), $player->getMusic());
    }
    public function PlayNow($path, $music)
    {
        echo "Music Path : " . $path . " and Music Name : " . $music;
    }
}

new Green();
