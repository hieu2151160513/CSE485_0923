<?php
class SongController
{
    private $songs;

    public function __construct()
    {
        $this->songs = [];
    }

    public function addSong($title, $category)
    {
        $songId = count($this->songs) + 1;
        $song = new Song($songId, $title, $category);
        $this->songs[$songId] = $song;
    }

    public function editSong($songId, $title, $category)
    {
        if (isset($this->songs[$songId])) {
            $song = $this->songs[$songId];
            $song->setTitle($title);
            $song->setCategory($category);
            return true;
        }
        return false;
    }

    public function deleteSong($songId)
    {
        if (isset($this->songs[$songId])) {
            unset($this->songs[$songId]);
            return true;
        }
        return false;
    }

    public function getSong($songId)
    {
        if (isset($this->songs[$songId])) {
            return $this->songs[$songId];
        }
        return null;
    }

    public function getAllSongs()
    {
        return $this->songs;
    }
}
?>