-- TẠO CSDL
CREATE DATABASE BTTH01_CSE485;
USE BTTH01_CSE485;

CREATE TABLE tacgia (
    ma_tgia INT UNSIGNED PRIMARY KEY,
    ten_tgia VARCHAR(100) NOT NULL,
    hinh_tgia VARCHAR(100)
);

CREATE TABLE theloai (
    ma_tloai INT UNSIGNED PRIMARY KEY,
    ten_tloai VARCHAR(50) NOT NULL
);

CREATE TABLE baiviet (
    ma_bviet INT UNSIGNED PRIMARY KEY,
    tieude VARCHAR(200) NOT NULL,
    ten_bhat VARCHAR(100) NOT NULL,
    ma_tloai INT UNSIGNED NOT NULL,
    tomtat TEXT NOT NULL,
    noidung TEXT,
    ma_tgia INT UNSIGNED NOT NULL,
    ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
    hinhanh VARCHAR(200),
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);
drop table baiviet;
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`,`hinhanh`) VALUES
(1, 'tuyetvoi', 'yeu em lam', 1, 'amazing', 'tinhyeutuoihoctro', 1, 'woaaaaa'),
(2, 'tuyetvoi', 'yeu em lam', 2, 'amazing', 'tinhyeutuoihoctro', 2, 'woaaaaa'),
(3, 'thuong nhau may nui cungtreo', 'anh yeu em', 3, 'amazing', 'tinhyeutuoihoctro', 3, 'woaaaaa'),
(4, 'thương nhau chin bo lam muoi', 'yeu em lam', 4, 'amazing', 'tinhyeutuoihoctro', 4, 'woaaaaa'),
(5, 'tuyetvoi', 'yeu em mai mai', 5, 'amazing', 'tinhyeutuoihoctro', 5,'woaaaaa'),
(6, 'anh thuong em nhat ma', 'yeu em lam', 6, 'amazing', 'tinhyeutuoihoctro', 6,'woaaaaa'),
(7, 'tuyetvoi', 'yeu em lam', 7, 'amazing', 'tinhyeutuoihoctro', 7, 'woaaaaa'),
(8, 'tuyetvoi', 'yeu em nhieu lam', 8, 'amazing', 'tinhyeutuoihoctro', 8, 'woaaaaa'),
(9, 'tuyetvoi', 'thuong em nhieu lam', 9, 'amazing', 'tinhyeutuoihoctro', 9, 'woaaaaa');

INSERT INTO tacgia(`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Nhacvietplus', 'tuyetvoi'),
(2, 'Zingmp3', 'tuyetvoi'),
(3, 'Ming', 'tuyetvoi'),
(4, '16Typh', 'tuyetvoi'),
(5, 'Ho Ngoc Ha', 'tuyetvoi'),
(6, 'Charlie Puth', 'tuyetvoi'),
(7, 'Taylor Swift', 'tuyetvoi'),
(8, 'Le Quyen', 'tuyetvoi'),
(9, 'Dam Vinh Hung', 'tuyetvoi'),
(10, 'Quang Le', 'tuyetvoi');

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Nhac tru tinh'),
(2, 'Nhac cai luong'),
(3, 'Nhac do'),
(4, 'Nhac vang'),
(5, 'Nhac dan gian'),
(6, 'Nhac tinh yeu'),
(7, 'Nhac nonstop'),
(8, 'Nhac socala keo mut'),
(9, 'Nhac rap'),
(10, 'Nhac chill');