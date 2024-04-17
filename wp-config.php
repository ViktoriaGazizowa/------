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
define( 'DB_NAME', '1191-22_28715' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1191-22_28715' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '4acc646b78b14773ca56' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<kXj|>Qt>d$;lcPWeZ)<)$WRc>Q4jr{_I4CfML)n[Jc1Y<Q-|PgjAZ&f^|=~CCo=' );
define( 'SECURE_AUTH_KEY',  'm+a.1Vh8H?;:.=zZt%l!n3<+[.6+0U3G(CVvFm<9BY+;LwKLR<<K@t?1:h?juyCj' );
define( 'LOGGED_IN_KEY',    'ajG`MIo%l_o-{sf&vHxX>!n3K&@iO`Jrapi6ciT|=gzw=d>G^J0,xe*P`,K_/Vfr' );
define( 'NONCE_KEY',        '6](+A&~30+k0s<8#oPR!7t./AW!Qa`]p/sI$;9QNy0R#(6a#vV=v55@@q.W(R2dY' );
define( 'AUTH_SALT',        '%3-!NCF}1d(oHQgMI`/;6;~zKw|E}# pUe;]*IPWMmS.M<p[g:*-}BU3D__ub-dG' );
define( 'SECURE_AUTH_SALT', 'Zk/d],?XUQNxyEGUAB?KRV_3nW2Zh aEnduk5Y8YA0D];)oYX/{)gE.K(-^2-&o~' );
define( 'LOGGED_IN_SALT',   'ivNFYTh+gA_R_ Zb+jxbF7^T[2M*Zt*s2~Wr>V.5AR0phIYIzT*B1b}73E`1yV+e' );
define( 'NONCE_SALT',       '[3$KEsjfP]Ma*o?|` z<%Hb5U3e~g5}i[3B;j[N5bp#{X^BtsOou>8k$!:>|$pxf' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'DXwKS_';


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