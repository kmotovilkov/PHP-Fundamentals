<?php

class Songs
{
    private $typeSong;
    private $name;
    private $time;


    public function __construct($typeSong, $name, $time)
    {
        $this->setTypeSong($typeSong);
        $this->setName($name);
        $this->setTime($time);
    }


    public function getTypeSong()
    {
        return $this->typeSong;
    }


    private function setTypeSong($typeSong): void
    {
        $this->typeSong = $typeSong;
    }


    public function getName()
    {
        return $this->name;
    }


    private function setName($name): void
    {
        $this->name = $name;
    }


    public function getTime()
    {
        return $this->time;
    }


    private function setTime($time): void
    {
        $this->time = $time;
    }


}

$songsNum = readline();
$songArr = [];

for ($i = 0; $i < $songsNum; $i++) {

    $currentSong = explode("_", readline());

    $typeSong = $currentSong[0];
    $name = $currentSong[1];
    $time = $currentSong[2];
    $songs = new Songs($typeSong, $name, $time);
    $songArr[] = $songs;
}

$typeList = readline();

if ($typeList === "all") {
    foreach ($songArr as $song) {
        echo $song->getName() . PHP_EOL;

    }
} else {
    foreach ($songArr as $song) {
        if ($song->getTypeSong() === $typeList) {
            echo $song->getName() . PHP_EOL;
        }
    }
}
