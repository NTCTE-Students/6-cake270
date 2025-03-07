<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Выберите изображение для загрузки:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить файл" name="submit">
</form>
    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Проверка на изображение
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "Файл является изображением - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Файл не является изображением.";
            $uploadOk = 0;
        }
    }

    // Проверка размера файла
    if ($_FILES["fileToUpload"]["size"] > 2 * 1024 * 1024) {
        echo "Ошибка: Файл слишком большой.";
        $uploadOk = 0;
    }

    // Проверка на ошибки загрузки
    if ($uploadOk == 0) {
        echo "Ошибка при загрузке файла.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Файл ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " был загружен.";
        } else {
            echo "Ошибка при загрузке файла.";
        }
    }
    ?>
</body>
</html>
