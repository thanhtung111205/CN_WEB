<?php include 'flowers.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách hoa</title>
    <style>
        body { font-family: Arial, sans-serif; width: 800px; margin: auto; }
        .flower { margin-bottom: 30px; }
        .flower img { width: 100%; max-height: 300px; object-fit: cover; border-radius: 8px; }
        h2 { margin-bottom: 5px; }
        p { color: #444; }
        .admin-link { margin-top: 20px; display: inline-block; }
    </style>
</head>
<body>

<h1>Các loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc xuân hè</h1>
<hr>

<?php foreach ($flowers as $f): ?>
    <div class="flower">
        <h2><?= $f['name'] ?></h2>
        <p><?= $f['desc'] ?></p>
        <img src="<?= $f['image'] ?>" alt="<?= $f['name'] ?>">
    </div>
<?php endforeach; ?>

<a class="admin-link" href="admin.php">→ Chuyển sang trang quản trị</a>

</body>
</html>

