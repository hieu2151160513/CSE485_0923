-- TRUY VẤN
-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
    SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.ngayviet, tg.ten_tgia, tl.ten_tloai
    FROM baiviet bv
    JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
    JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
    WHERE tl.ten_tloai = 'Nhạc trữ tình';
    
-- b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)
    SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.ngayviet, tg.ten_tgia, tl.ten_tloai 
    FROM baiviet bv
    JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
    JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
    WHERE tg.ten_tgia = 'Nhacvietplus';

-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)
    SELECT tl.ma_tloai, tl.ten_tloai
    FROM theloai tl
    LEFT JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
    WHERE bv.ma_bviet IS NULL;

-- d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. (2 đ)
    SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
    FROM baiviet bv
    JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
    JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai;

-- e. Tìm thể loại có số bài viết nhiều nhất (2 đ)
    SELECT tl.ma_tloai, tl.ten_tloai, COUNT(bv.ma_bviet) AS so_bai_viet
    FROM theloai tl
    LEFT JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
    GROUP BY tl.ma_tloai
    ORDER BY so_bai_viet DESC
    LIMIT 1;

-- f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
    SELECT tg.ma_tgia, tg.ten_tgia, COUNT(bv.ma_bviet) AS so_bai_viet
    FROM tacgia tg
    LEFT JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia
    GROUP BY tg.ma_tgia
    ORDER BY so_bai_viet DESC
    LIMIT 2;

-- g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
    SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.ngayviet, tg.ten_tgia, tl.ten_tloai
    FROM baiviet bv
    JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
    JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
    WHERE bv.tieude LIKE '%yêu%' OR bv.tieude LIKE '%thương%' OR bv.tieude LIKE '%anh%' OR bv.tieude LIKE '%em%';

-- h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
    SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.ngayviet, tg.ten_tgia, tl.ten_tloai
    FROM baiviet bv
    JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
    JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
    WHERE bv.tieude LIKE '%yêu%' OR bv.tieude LIKE '%thương%' OR bv.tieude LIKE '%anh%' OR bv.tieude LIKE '%em%' OR bv.ten_bhat LIKE '%yêu%' OR bv.ten_bhat LIKE '%thương%' OR bv.ten_bhat LIKE '%anh%' OR bv.ten_bhat LIKE '%em%';
    