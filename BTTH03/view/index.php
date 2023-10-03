<?php
// Tạo một thể hiện của MusicService
$songService = new SongService();

// Thêm thể loại
$songService->addCategory('Pop');
$songService->addCategory('Rock');
$songService->addCategory('Hip-hop');

// Xóa thể loại
$songService->deleteCategory('Rock');

// Lấy danh sách thể loại
$categories = $songService->getCategoryList();
foreach ($categories as $category) {
    echo $category . '<br>';
}

// Thêm bài hát
$songService->addSong('Bài hát 1');
$songService->addSong('Bài hát 2');

// Xóa bài hát
$songService->deleteSong('Bài hát 2');

// Lấy danh sách bài hát
$songs = $songService->getSongList();
foreach ($songs as $song) {
    echo $song . '<br>';
}