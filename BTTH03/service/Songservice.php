<?php
class SongService
{
    private $SongList;

    public function __construct()
    {
        $this->SongList = array();
    }

    // Thêm bài hát
    public function addSong($Song)
    {
        $this->SongList[] = $Song;
    }

    // Xóa bài hát
    public function deleteSong($id)
    {
        foreach ($this->SongList as $key => $Song) {
            if ($Song->getId() == $id) {
                unset($this->SongList[$key]);
                break;
            }
        }
    }

    // Chỉnh sửa thông tin bài hát
    public function editSong($id, $tenSong, $caSi, $idTheLoai)
    {
        foreach ($this->SongList as $Song) {
            if ($Song->getId() == $id) {
                $Song->tenSong = $tenSong;
                $Song->caSi = $caSi;
                $Song->idTheLoai = $idTheLoai;
                break;
            }
        }
    }

    // Lấy danh sách bài hát
    public function getSongList()
    {
        return $this->SongList;
    }
}