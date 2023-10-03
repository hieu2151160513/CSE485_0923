<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bài hát</title>
    <style>
    /* CSS cho giao diện */
    .container {
      max-width: 600px;
      margin: 0 auto;
    }
    h1 {
      text-align: center;
    }
    form {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    button {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Quản lý bài hát</h1>

    <!-- Form thêm/sửa bài hát -->
    <form action="process.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <label for="tenBaiHat">Tên bài hát:</label>
      <input type="text" name="tenBaiHat" value="<?php echo $tenBaiHat; ?>">

      <label for="caSi">Ca sĩ:</label>
      <input type="text" name="caSi" value="<?php echo $caSi; ?>">

      <label for="idTheLoai">Thể loại:</label>
      <input type="text" name="idTheLoai" value="<?php echo $idTheLoai; ?>">

      <button type="submit" name="submit">Lưu</button>
    </form>

    <!-- Danh sách bài hát -->
    <table>
      <tr>
        <th>Tên bài hát</th>
        <th>Ca sĩ</th>
        <th>Thể loại</th>
        <th></th>
      </tr>
      y
      <?php foreach ($baiHatList as $baiHat): ?>
      <tr>
        <td><?php echo $baiHat->getTenBaiHat(); ?></td>
        <td><?php echo $baiHat->getCaSi(); ?></td>
        <td><?php echo $baiHat->getIdTheLoai(); ?></td>
        <td>
          <a href="edit.php?id=<?php echo $baiHat->getId(); ?>">Chỉnh sửa</a>
          <a href="delete.php?id=<?php echo $baiHat->getId(); ?>">Xóa</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>