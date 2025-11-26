 <?php include 'flowers.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị hoa</title>
    <style>
        body { font-family: Arial; width: 900px; margin: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        img { width: 80px; height: 80px; object-fit: cover; border-radius: 5px; }
        th { background: #eee; }
        .btn { padding: 5px 10px; border-radius: 4px; margin-right: 5px; cursor: pointer; }
        .btn-edit { background: orange; color: white; }
        .btn-del { background: red; color: white; }
    </style>
</head>
<body>

<h1>Bảng quản trị danh sách hoa</h1>
<a href="khach.php">← Quay về trang khách</a>

<table>
    <tr>
        <th>ID</th>
        <th>Tên hoa</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($flowers as $flower): ?>
    <tr>
        <td><?= $flower['id'] ?></td>
        <td><?= $flower['name'] ?></td>
        <td><?= $flower['desc'] ?></td>
        <td><img src="<?= $flower['image'] ?>" alt=""></td>
        <td>
            <button class="btn btn-edit">Sửa</button>
            <button class="btn btn-del">Xóa</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html> 
