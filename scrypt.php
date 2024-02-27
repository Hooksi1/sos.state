<?php
$target_dir = "uploads"; // Папка, куда загруженные файлы будут сохранены
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // Полный путь к файлу на сервере

// Попытка загрузки файла
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Файл ". basename( $_FILES["fileToUpload"]["name"]). " был успешно загружен.";
} else {
    echo "Извините, произошла ошибка при загрузке вашего файла.";
}
?>
