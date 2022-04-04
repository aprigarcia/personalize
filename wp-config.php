<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'personalize' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cueqfltu}N~F9GmR+}{+@jZt|`d:M:6Ywg7RXe:p.w_<O5-S[Vkp!(tnIn Kq{:q' );
define( 'SECURE_AUTH_KEY',  'GP];w>LTjMONe#h_SjNJT!4l;&_;PFQ%ehjCe*.7<b2VAO^3!}p(U3X?f<$K.>mq' );
define( 'LOGGED_IN_KEY',    'O$r&.gd7T+e!P1IU&ocgeD(k6`F/K4$ich9&o4#`!bGilwo8_>HMKX8pNLfu|!)e' );
define( 'NONCE_KEY',        '+:a88^k3}x.!-kd<Tt4Er}0j>4}1J>:bkA<+:!2WE?TA%Gv0<cF~Cnn|fUP6*3%O' );
define( 'AUTH_SALT',        '>>29T^}#ge :ToilMpo$RYa(>jvn#bEyA!trI2x=lZF%+qdtrQJN;$FfH.,?knLb' );
define( 'SECURE_AUTH_SALT', '/%+`@cGlB{saGQlUk_v{TI$Cx62E8,9vCI){/dfZ.[od9sSSebZtASAE1kU3-/Sm' );
define( 'LOGGED_IN_SALT',   '!3I5qvaV:+U6l{3>Ix0=&eiyRlYc[1 v%Zm3rQwc?i0Z71|Un?vHq!A(k#f{PpQU' );
define( 'NONCE_SALT',       '_xjk)W=G2,wRdN:(/F<078@WJT|_bz8lX^hF,=`Wdh%ieu^6L:qVQp:y-/:/T9P^' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
