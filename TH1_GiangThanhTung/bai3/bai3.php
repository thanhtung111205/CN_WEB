<?php
// Đường dẫn file CSV
$file = "65HTTT_Danh_sach_diem_danh.csv";

// Kiểm tra tồn tại
if (!file_exists($file)) {
    die("File CSV không tồn tại!");
}

// Mở file
$handle = fopen($file, "r");

// Mảng chứa dữ liệu
$data = [];

// Đọc từng dòng
while (($row = fgetcsv($handle)) !== false) {
    $data[] = $row;
}

fclose($handle);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tài khoản (CSV)</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef3f7;
        }
        .container-box {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }
        table thead {
            background: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>
<div class="container-box">
    <h2 class="mb-4 text-center">Danh sách tài khoản từ tệp CSV</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <?php 
                // In header (dòng đầu tiên)
                foreach ($data[0] as $header) {
                    echo "<th>" . htmlspecialchars($header) . "</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            // In các dòng còn lại
            for ($i = 1; $i < count($data); $i++) {
                echo "<tr>";
                foreach ($data[$i] as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
