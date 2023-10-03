<?php
class SongService
{
    private $categories;
    private $songs;

    public function __construct()
    {
        $this->categories = [];
        $this->songs = [];
    }

    // Thêm thể loại
    public function addCategory($category)
    {
        $this->categories[] = $category;
    }

    // Xóa thể loại
    public function deleteCategory($category)
    {
        $index = array_search($category, $this->categories);
        if ($index !== false) {
            unset($this->categories[$index]);
        }
    }

    // Lấy danh sách thể loại
    public function getCategoryList()
    {
        return $this->categories;
    }

    // Thêm bài hát
    public function addSong($song)
    {
        $this->songs[] = $song;
    }

    // Xóa bài hát
    public function deleteSong($song)
    {
        $index = array_search($song, $this->songs);
        if ($index !== false) {
            unset($this->songs[$index]);
        }
    }

    // Lấy danh sách bài hát
    public function getSongList()
    {
        return $this->songs;
    }
}