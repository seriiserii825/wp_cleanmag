<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp_cleanmag');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'serii1981');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H[pF.H!>Onq1YGzh$:XR?fJ_Y|p%W_w8HZ(V>RV%|D rs|O6?E~r,O.>l#aJ326 ');
define('SECURE_AUTH_KEY',  'sb(~-)8@)-J|Tl7>.hs85ZzhL||4~uBD4$8cg4T0!i70y#ZAaSg:btCT3;y*oj)1');
define('LOGGED_IN_KEY',    '@X!L49Dl[^]G+F1]#0z)xkliOkWYHdLz=fNr?.>^]f@|>+ax`?(axdJDO)F|h yO');
define('NONCE_KEY',        'x[jYx6WI{D}L+Y-iLdr+5&@!nXVX+>%zUh^Q@h*I=F.Rj@)x&Wcyi$^wp#*k+N9M');
define('AUTH_SALT',        'wy:y&Qu{[FxawODb&nW!CD0+4-R<~4%CyTt((H8gdTnm8f[.jv7{]~b)-i_2y8S_');
define('SECURE_AUTH_SALT', '8t{`!F:-&8:FyLl[g?{9+ZC+Ve0>OoM${*}(?DaysXz<+`_#|gR(2ap4&Dkk2Dau');
define('LOGGED_IN_SALT',   'p;QYa/!qtS!RHa={<)!<,UdNqg$YAc~:dr/wYe~n |-j6aU74Ag|@c^OYFsX+Jhb');
define('NONCE_SALT',       'r5)1b5+u|!I_V@-ABF<$p~_h:k<iPz>bzkG|U$^E>9on!o~^WMmDL]l[oD#|)-h;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
