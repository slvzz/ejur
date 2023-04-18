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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ejur' );

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
define( 'AUTH_KEY',         'zD26qKt&RK8N$V&yO%{J>owR)u91?_#$E~$R;s4.%,,Z:LsMu7z~l(*Z{e(C+WLh' );
define( 'SECURE_AUTH_KEY',  'S(kW5c,TBM1zUq|/nfr^ZJ>GeuS+~1tGyVG2dtAJ?Fp+duNBzTqbU.~z-M4fJDL*' );
define( 'LOGGED_IN_KEY',    'Hb`Po(<V9+^UlCqA}Np/[om3~M@I>J^{(0#cA1XXKj!AYclZIE}0DJw f9>Y)GQX' );
define( 'NONCE_KEY',        '0v0Fywa<^gWW`xhrxQU+5<wY0}GsS;f `JF.MTb[~L<I+9IHw]};9&uyPS `g@H|' );
define( 'AUTH_SALT',        '5,w=A)_3:(i6JPk%I^dNEF_Ax(5erGdL|;y>ze2[H~=xQaMs@COYv78?>]Dd+ceO' );
define( 'SECURE_AUTH_SALT', 'D,W?P}}49yYZ+%Cb7RLKLrN)GNa{Op4gtI<{Y1KJpl5V i;Z?Cj?,+3f$Ts3,VaK' );
define( 'LOGGED_IN_SALT',   'XgnOoG^LUYQ/hJ_#VwafH*E^fHJx#SJ(0+JBSEhEaRH`|g9unSa-rT2dJCwKh8?L' );
define( 'NONCE_SALT',       'phM{ Pv{V9v{55YV19Ol0.y51/Eemf{F]JZWGtRQ,;:aFaDD%d0AH_ptQM O?n>?' );

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
