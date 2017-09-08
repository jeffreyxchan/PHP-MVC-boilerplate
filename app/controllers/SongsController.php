<?php

require_once CORE . 'Controller.php';
require_once MODELS . 'Song.php';

class SongsController extends Controller
{
    public function index()
    {
        $Song = new Song($this->databaseConnection);
        $songs = $Song->find();
        require_once VIEWS . 'songs/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Song = new Song($this->databaseConnection, $_POST);

            if ($Song->save()) {
                $this->respond("success", "Successfully submitted new song!");
            } else {
                $this->respond("failure", "Failed to store record into the database!");
            }
        }
    }

    public function remove()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $Song = new Song($this->databaseConnection);
            $Song->remove();
            $this->respond("success", "Successfully removed all records from the database!");
        }
    }
}
