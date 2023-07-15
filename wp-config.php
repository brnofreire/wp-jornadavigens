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
define( 'DB_NAME', 'jornadaviagens' );

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
define( 'AUTH_KEY',         '0b2##IOr/>g5+uqf-a,_3uVHqu[gQ3]D0a(7H>3B$Bc,q.PJd6c<WtDI9ZQf!qMS' );
define( 'SECURE_AUTH_KEY',  'w?&P}</~F&]lb*4kSCj94:`>qKg(g_8=`-?Fm;*TUxdCf9nJ+<v*`4:P2K{[kl2C' );
define( 'LOGGED_IN_KEY',    '2Ex }7KK4Q>pW[qtN`(CwXV0wz#o&((1-si]]Gj `#ujVr`D.U4r{vr0^vo*p+Lw' );
define( 'NONCE_KEY',        'c%aNR67/{QRq4LOQmc$0&~j%8!R}Ew8V/D+xGzEXFpTM35G2uT7N:PPe>|;oQ,:u' );
define( 'AUTH_SALT',        'd_H-usUa236^o~cKm>PxpT{ud/KjdPUm&33ZEC^R# !fJKdYq;@39Suk&we9rw}|' );
define( 'SECURE_AUTH_SALT', 's#IIzK`OEYWOQmf69<3:CCf$7c5nB?*zql)jYTvh~NVy,Yz?#E_Y 5AOFbgWI9V9' );
define( 'LOGGED_IN_SALT',   'rp0g}#z1pp9u59lhf8B6Je[j Fn!0cmT(NA^rzm)w&:kSYjYm&,UNs6$zDd66h_.' );
define( 'NONCE_SALT',       'T,Vd?$(^0njB>}K}v=7 }TDeF%mB429DxW*=jWL/!CZ-6esJX(8|JL<0#42<g7Bx' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
