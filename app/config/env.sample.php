<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Конфигурация бота

/**
 * @var string Дебаг. Если включён, будут работать логи и прочие плюхи
 */
const APP_DEBUG = false;

/**
 * @var bool статус бота
 */
const BOT_STATUS = true;

// Конфигурация VK

/**
 * @var int ID группы ВК
 */
const VK_GROUP_ID = ;

/**
 * @var string Токен доступа сообщества
 */
const VK_TOKEN = "";

/**
 * @var string Секретный ключ Callback API
 */
const VK_SECRET_KEY = "";

/**
 * @var string Строка для подтверждения
 * адреса сервера из настроек Callback API
 */
const VK_CONFIRMATION_TOKEN = "";

/**
 * @var string Путь к корню проекта
 */
defined("ROOT_PATH")
or define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . "/vkapi2/" );

// Конфигурация бд

/**
 * @var string Имя базы данных
 */
const DB_NAME = "";

/**
 * @var string Логин базы данных
 */
const DB_USERNAME = "";

/**
 * @var string Пароль базы данных
 */
const DB_PASSWORD = "";

// Конфигурация API Wikipedia

/**
 * @var string URL API Wikipedia
 */
const WIKI_API_URL = "https://ru.wikipedia.org/w/api.php?";

// Конфигурация API YANDEX TRANSLATE

/**
 * @var string URL API YANDEX TRANSLATE
 */
const YANDEXTRANSLATE_API_URL = "https://translate.yandex.net/api/v1.5/tr.json/translate?";

/**
 * @var string API KEY YANDEX TRANSLATE
 */
const YANDEXTRANSLATE_API_KEY = "";
