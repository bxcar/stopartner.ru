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
define('DB_NAME', 'stpart5u_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'stpart5u_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1&6*cEoF');

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
define('AUTH_KEY',         'c)a(Xx{+0( eO*kc:^1VCIZPQAW|;<dQd2<xg6`)938ZOLamVtMc8ov=;5%;TTgP');
define('SECURE_AUTH_KEY',  'TG>~;9UAIuDc>X4ra=oi+( |mE7Z<^G~Cr4BjbAhfxoi10iUVC}t,V*KGW]M^FqF');
define('LOGGED_IN_KEY',    'e/d?MB@?#Or2{j;<%4Iifw@%bq,mtKl^Lfk7zYzmOsuprBzy+7CWzH68u2_i`emV');
define('NONCE_KEY',        'T[La K{#b3wspLct%Y|vDeo7vn@P9Pi^J+zB>#Lf~MRh,<[$4[Tg<_-RBZyOnYXz');
define('AUTH_SALT',        '=o]J_<.o</j_l1wU{B,j*~3_n*yEAfEtCy&6<Ndx;U%EP:$}F!Hp$F|u(U JD|Be');
define('SECURE_AUTH_SALT', ':5/0b8&> j0v<@f=DVCZ![*se 3Ua%9h!C(TGaUO&ipNoAJIB2EgD#0)FATh66sW');
define('LOGGED_IN_SALT',   'Oz>=l,p[o<yj[;7+>lMwAFsxso&XkK.&ZBF/yZSI*D6N)%QPc-Aq?V{M:GdGq~ei');
define('NONCE_SALT',       'qd/x}WnB*MqijA*&&|o<yOFb-9j,hVntsEdsMz%,iuE+N,Q~j+g@V(Dextby XDT');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'c_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
