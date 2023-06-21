<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<center>
    <div class="content">
        <?php
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['tmp_name'];
        $count = 0;
        if($handle = fopen($file, 'r')) {
        while(!feof($handle)) {
        $buffer = fgets($handle);
        $count += substr_count($buffer, '|');
        }
        fclose($handle);
        echo "Количество: " . $count;
        } else {
        echo "Ошибка при открытии файла.";
        }
        } else {
        echo "Ошибка при загрузке файла.";
        }
        ?>
    <p><a href="index.php">← Назад</a></p>
    </div>
</center>

<script src="bootstrap.min.js"></script>
</body>
</html>