<?php

/* 
 * Конфигурация
 */
//Название проекта
define("PROJECT_NAME", 'ПРОЕКТ');
//Почтовые адреса куда отправлется уведомления. можно несколько через запятую
define("EMAILS_TO", 'deen812@mail.ru');
//Отправитель
define("EMAIL_FROM", '');

define("FOLDER", '');
$pathTosvgSelling = $_SERVER['DOCUMENT_ROOT'] . FOLDER . '/images/variants/v1/ceiling/';
define("SVG_SELLING_FOLDER", $pathTosvgSelling);
$arFactura = array("Матовый","Глянцевый","Сатиновый","Тканевый");



