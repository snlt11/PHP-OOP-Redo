<?php

require_once("constructorInjection1.php");
class Green
{
    public function __construct()
    {
        $play = new Player("C:/Music/", "tawloutphtintl.mp3");
        $play->playMusic();
    }
}
new Green();
