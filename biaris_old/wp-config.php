<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'vasil197_biaris');

/** Имя пользователя MySQL */
define('DB_USER', 'vasil197_biaris');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'A8Ao5CsY');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.8q)Y1!$L`q2xg3k~`UZ?NGP4-4`lw=]LOC&c!8m7R.@fS;nAX&7Ib-bW+.8;{WB');
define('SECURE_AUTH_KEY',  'J~ attva_^DwX$IojY|Y{&-SZiTFsnDZ!#lLPfL>2@h4d5?imTLO7&5_#||n6R?E');
define('LOGGED_IN_KEY',    'T+o>%&m-/xQ1)E495d6%DdWqJ i-[/yVd5{>*};,o_|3qoALe~rti^%&l^w8|~F5');
define('NONCE_KEY',        'vp3P*.U^+*t`$+~e}=S/JpeI>ra3-M^;z?aABKXG0>y1q`]r$=zII{.>e0+~4Q!!');
define('AUTH_SALT',        'N-#[RH=^`mI(,q$[pF-J+p`M=9T]k^8~mNh,~|hi_M3zDE>#2DlP>|P#fk{t|Kgb');
define('SECURE_AUTH_SALT', 'AV-&f& 3oUV@N{dG+*Y-.Y<MT@gBE4f,h]Ny<W|1VAAIb2g%.,}8c7Y&qNXw+4fn');
define('LOGGED_IN_SALT',   'Z|}I^/vo]8Ao:Q+? lf3{bFU^h5si!D,cedV*arbD2-n=UNu+<[A0P4+i|=kJs5f');
define('NONCE_SALT',       'iF,tM8vJ^6+r9-NhTArCU*@9n$Xx2S=VY-bC ;l:kiA2yTxK%;+f9FCpj5+|n)_R');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
