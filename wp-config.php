<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'mama-catering_bd');

/** Имя пользователя MySQL */
define('DB_USER', 'mama-catering_bd');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qK9TXxe8wP');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'f+{gw+YM]{9+~3M3LyIu_>`~DO]ZT$Nn`I+aOMY`z|rD.p!QuE|K^9iOi.;[(Vbm');
define('SECURE_AUTH_KEY',  'iS_PrdjUB9FJduI!(h@TV3ND*cH[hX-926=w`|0I;]iW$5re:F^:-ZK;/6IH8u[?');
define('LOGGED_IN_KEY',    '|uLlFsL$l#.wVqp7KJxY}o1Ii|WI:&+;xUD&&pir@77tg|8Bh2(]-}~];bMhhDf&');
define('NONCE_KEY',        '?_;)$Le]I1:V$47c9^u}G=OYE`[3^8q:kmT.nO8I[q$]?2`beQzFJH,*ix>3dYR3');
define('AUTH_SALT',        'l|md9@- ,y5(.ghR@3%3k$n8eZ<;m_i5F(!_:x=vXS6Wr_}=zH*3X0f5:W2f?@6M');
define('SECURE_AUTH_SALT', 'J/OIVlSLB1dcDs?@H$mXI]$~q%/h^w!xJr(iv*{R;sw-[?VaDmAoGBR2t0KpQ061');
define('LOGGED_IN_SALT',   ',dio|i. )Gl03jVrPq(|<(+u)0HI!ibs:2};1Pd?]2SyNouC8C?Y.Bxd-G2*{wis');
define('NONCE_SALT',       '_*|lppEM=0fuK+01w;R~/XkpE?%YMTR |u|=<$XlvQ6W>7<gs^:##o7Lc,5c2pS|');

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
