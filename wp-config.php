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
define( 'AUTH_KEY',         '[>tYw/yQ4*} nz61F}673$L=e6PAecW<smc~&@M3tq*5z`67r76(>oHPH1/ug+Tt' );
define( 'SECURE_AUTH_KEY',  '+0|+C+clA!  s(X-M<K+`6.WHfvJ?U.VS.k^R.rVdZh{{3(-0y0bj[6A=t[|R5pf' );
define( 'LOGGED_IN_KEY',    'aAxCh1u9v47EP0d_/*-..Ym`:>6oeAYefUJgc.q~grq%}7>jja18#]51 (@F<?y9' );
define( 'NONCE_KEY',        '!*f:VR)]GDJ&9pL$8Cw30Q:9duHJ%qB+xhOaX.)!&_# !TKmNz>7iY=7qk51VhRL' );
define( 'AUTH_SALT',        ':*h2}[ugL5#2d.%nU@?@QKW:Do:`Ub~_E57?l2H~|Mjw#R~8a<[-wPu0lU2;h%`)' );
define( 'SECURE_AUTH_SALT', '0tM1idA|?3CNZ_2/-@#QW$dw=#91:dPK>,ivu2_z=Ou{F9b*;?uQ[*4QM)RZ$y}w' );
define( 'LOGGED_IN_SALT',   '>&j6*%tAG9j,ci$iTqZE/,5O:*xm_7->,}`wg4jRQ3@F5@G[ZO8dXEOgF!,eCkjS' );
define( 'NONCE_SALT',       'yok!z&cH:lIlQ28l1C:7k#37<7[R8|*&*tFiCW=u,Xd<cv#_7}2Y^.e1m8 ~ QJ*' );

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
