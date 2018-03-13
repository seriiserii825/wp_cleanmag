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
define('AUTH_KEY',         'qJ_ABfU9T>,`;Jt3v-WE { Z!NQHnLMwUHp~O+{X;S/s)>W[b]2pKD!b0yVtuV~!');
define('SECURE_AUTH_KEY',  'xS*9,PTs:byWN(,i`f-L~a3r<~x)T_Q6-X-<|%+7}xSv6av4Kl4KW)oB6ak,R0-z');
define('LOGGED_IN_KEY',    'R|f4f|dz[~)O$jd9vVT#Nt:I!+G<$|ydrtA;5-1f,Im@tod/>ChnBhaJ~Fmyc(aV');
define('NONCE_KEY',        ']>fWY5}P)uz5m Scp>f0PZ8H#EqX+L7bm8etS20$Lbw6y|/[VH8UYU)=RKIoCj $');
define('AUTH_SALT',        '&#$JWi/#9mwnSLt]:vY28kM[&fnf9zrKqh&1eZ{ps|Ji,&/39=X%U4Z)^^%23@P$');
define('SECURE_AUTH_SALT', ']SO@Zwo_?M5&0RYYgGNls&)QYfce%J:eO0p=2TFfQq?&d|.3,;E;ic;GK[7i/sf_');
define('LOGGED_IN_SALT',   ';uf#5,?zN().`xCBYU~9ca/yw6Q)2N 0}&z@uj.xna67;>r_]UC#569A#<ycNI&e');
define('NONCE_SALT',       '`j@i2`tK&<.K,+wNpqg?jeR)uPKKzI-{At*?A*aU,HC|(q*DPH+M2YRlB{ 5pGzl');

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
