<?php
class BaiHatController
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    // Hiển thị danh sách bài hát
    public function showBaiHatList()
    {
        $baiHatList = $this->service->getBaiHatList();
        // Hiển thị view danh sách bài hát
    }

    // Thêm bài hát mới
    public function addBaiHat($id, $tenBaiHat, $caSi, $idTheLoai)
    {
        $baiHat = new BaiHat($id, $tenBaiHat, $caSi, $idTheLoai);
        $this->service->addBaiHat($baiHat);
        // Chuyển hướng về trang danh sách bài hát
    }

    // Chỉnh sửa thông tin bài hát
    public function editBaiHat($id, $tenBaiHat, $caSi, $idTheLoai)
    {
        $this->service->editBaiHat($id, $tenBaiHat, $caSi, $idTheLoai);
        // Chuyển hướng về trang danh sách bài hát
    }

    // Xóa bài hát
    public function deleteBaiHat($id)
    {
        $this->service->deleteBaiHat($id);
        // Chuyển hướng về trang danh sách bài hát
    }
}