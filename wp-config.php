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
define( 'DB_NAME', 'db_melhormaquina' );

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
define( 'AUTH_KEY',         ':@V`n._JSn<+rO&F]jKBlZ!7:/94+`bXRCq{2^4Bg~bYkN7T9D#D1eZg ^^9)MNc' );
define( 'SECURE_AUTH_KEY',  'iWmE|%cFuv]B*0J*c4q3Djz #4]nD!Z$ 0<(D2P$@+k&s~4w;YOD%|E#^F4O;b>{' );
define( 'LOGGED_IN_KEY',    '*CdTJeGPqDFb?dIe217|%]d^#:C`v9i[ktfu_r,V_(mrF)E$7xrz$F+%U3 TqY.l' );
define( 'NONCE_KEY',        '7`mMs0DvUb=*OX~kx;V#a#;IpH,6n=|#I$Aaq(LJ]wfGR5B)( nA$$wuOyT~4&ut' );
define( 'AUTH_SALT',        'wVylh!vgL5$7,Kl2^j$mf{j{hW4LYm}yZvU]|Xi$XQxKF;&Pvana.0S%QZ,pB.J^' );
define( 'SECURE_AUTH_SALT', '<A3s(Z#mmTFU:9;[O4STZ)$u4tV)IBbqKz)V@O}RQ1~um}:VEjQ;SeHuwa?,`J6:' );
define( 'LOGGED_IN_SALT',   '_FxoWOC)Gj2<o+d#AV1p^t*dZGze!@k*nr;v!^dJ?gLg5C=pFr2Wc?h<H,%~-$G=' );
define( 'NONCE_SALT',       '7I.nbl;-auMF6C2uzr _jx&EVdg6A_btxA)j$$ C~v*?#.^OH2r7iM_ 1C|OD_~I' );

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
