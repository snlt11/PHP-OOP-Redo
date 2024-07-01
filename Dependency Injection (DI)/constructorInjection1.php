<?php
class Player
{
    private $path, $music;
    public function __construct($path, $music)
    {
        $this->path = $path;
        $this->music = $music;
    }
    public function playMusic()
    {
        echo "playing music from Path $this->path and Music $this->music";
    }
}
