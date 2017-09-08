<?php

define('SONG_VIEWS', VIEWS . 'songs' . DIRECTORY_SEPARATOR);
require_once CORE . 'Controller.php';
require_once MODELS . 'Song.php';

class SongsController extends Controller
{
    public function index()
    {
        $Song = new Song($this->databaseConnection);
        $songs = $Song->find();
        require_once SONG_VIEWS . 'index.php';
    }
}
