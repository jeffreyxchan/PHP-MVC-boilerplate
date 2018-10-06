<?php

require_once CORE . 'Model.php';

class Song extends Model
{
    public $tableName = 'songs';

    public $title;
    public $artist;
    public $genre;
    public $fieldNames = array(
        "title",
        "artist",
        "genre"
    );
}
