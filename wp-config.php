<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'USER' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'PASSWORD' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'db' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kO^p{{=9J0qGw6@GVpS}Uz tzxFn{(d P<VRP3jxL5-//+o$J2IgHm}N=nFS<4k]' );
define( 'SECURE_AUTH_KEY',  'B F}TFn-RPLn6cD.?.yZz!IImnwf>:/O,!% *k{x;Fw`>DB)29Em6 tpM$H5asOa' );
define( 'LOGGED_IN_KEY',    'pUY.RmA5Duzx#0qoVo# 1zf,Sr^UlAzfEWNrXFX;X&m?f6)+RIgICo/&0IPD9=dX' );
define( 'NONCE_KEY',        'U?_dM_ed<{*%^~fvGd7N_^<K-~C?~NZ=(x$Lulm]u6N+gD3iHRc<}(X/[mq{5Si$' );
define( 'AUTH_SALT',        'FrT @i*DN(mS[%qO=itE|?#{9)$d@HEmsY05k,Q%S>3qj`hR!&*, ~lZ~addPN95' );
define( 'SECURE_AUTH_SALT', '0:u7^ xo0n6[%/E_-~`MQ[rX^@c>Yrp/.F3OmL49sQ$WnwR p){hlO^gaaM^w}X?' );
define( 'LOGGED_IN_SALT',   '9zSD,>hyb^fBg/+BNWm1?TyUx{?.{o66)RpDOOzA7_lM~4:x(Mu$x=V.jeC?,GA[' );
define( 'NONCE_SALT',       '*=&MO4s3nBbEK4!>/ASt3X74+}%;OX!$E]F4bEOc?c-z0C9L.&;t2x0ccy2raOv2' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
