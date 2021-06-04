<?php
require ("src/StringUtils.php");

if (StringUtils\capitalize("hello") !== "Hello") {
    throw new \Exception('Функция работает не верно!');
}
if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает не верно!');
}

echo "Все тесты прошли!";