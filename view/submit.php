<?php
$name = $_POST['name'];
$email = $_POST['email'];

// Теперь вы можете использовать эти данные для сохранения в базе данных или для других целей
var_dump($_POST);
echo "Имя: " . $name . ", Email: " . $email;
?>