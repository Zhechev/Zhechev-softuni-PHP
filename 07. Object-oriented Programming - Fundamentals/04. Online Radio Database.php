<?php


class Song {
    private $artistName;
    private $songName;
    private $minutes;
    private $seconds;

    public function __construct($artistName, $songName, $minutes, $seconds)
    {
        $this->artistName = $artistName;
        $this->songName = $songName;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }




}