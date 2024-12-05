<?php
//ini_set('default_charset','UTF-8');
echo "Фамилия: ";
$lastname = trim(fgets(STDIN));
echo "Имя: ";
$name = fgets(STDIN);
echo "Отчество: ";
$patronymic = fgets(STDIN);

$fullName = $lastname . ' ' . $name . ' ' . $patronymic;
$fullName = ucwords($fullName);
echo 'Полное имя: ' . $fullName . PHP_EOL;

$surnameAndInitials = ucfirst($lastname) . ' ' . ucfirst(mb_substr($name, 0, 1)) . '.' . ucfirst(mb_substr($patronymic, 0, 1)). '.';
echo 'Фамилия и инициалы: ' . $surnameAndInitials . PHP_EOL;
//mb_ucfirst() - не работает???

$fio = ucfirst(mb_substr($lastname, 0, 1))  . ucfirst(mb_substr($name, 0, 1)) . ucfirst(mb_substr($patronymic, 0, 1));
echo 'Аббревиатура: ' . $fio . PHP_EOL;

//Такое преобразование не помогает вывести кириллические символы
//echo "Кодировка введенной строки: " . mb_detect_encoding($lastname) . PHP_EOL;
//echo mb_convert_encoding($lastname,'UTF-8', mb_detect_encoding($lastname));