<?php  
// Đọc file Quiz.txt
$quizFile = fopen('Quiz.txt', 'r') or die ("Lỗi mở file");
$content = fread($quizFile, filesize("Quiz.txt"));
fclose($quizFile);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f2f4f7;
        }
        .quiz-box{
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
        pre{
            font-size: 17px;
            line-height: 1.5;
            white-space: pre-wrap; /* xuống dòng */
        }
    </style>
</head>
<body>

<div class="quiz-box">
    <h2>Danh sách câu hỏi Quiz</h2>
    <pre><?php echo htmlspecialchars($content); ?></pre>
</div>

</body>
</html>
