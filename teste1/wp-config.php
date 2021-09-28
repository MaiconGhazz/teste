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
define( 'DB_NAME', 'webdev_case1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'webdev_case1' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Ch@11en9e*' );

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
define( 'AUTH_KEY',         'd;tbLaz[Hj#@d?dO2bAwruM:]U?D7NgI!q}%t{z]^z9f.!hXX;06ThX{~o]U0U4]' );
define( 'SECURE_AUTH_KEY',  '2I9{-9VK(42Z2mTp3Sup;ll<b6?X1|kht2BWb0pa0x)I8MT!$1z~NlEI@rSONi[h' );
define( 'LOGGED_IN_KEY',    'Bm9>U4D{w~d|Pbo#%0U(Z.X!R@0QCwP.Sl%?x7{]Q(<B5^~E!x}$v!0,2EzM`9Jw' );
define( 'NONCE_KEY',        'jWI$5a}Z}uIC*nJJG];2JF_ v#!(I6tJmJE/)py{GH(VwUTNSn$R.8nPYpsXeL#X' );
define( 'AUTH_SALT',        '1K=XHF(pA<bO`Yv0 /))O.?&xa`x@<3!G_6X=;{ZvTy?8jj;^`j;g*?rmD>c,%_y' );
define( 'SECURE_AUTH_SALT', 'x:$LY+6<eV#iDPO]!IjX<@Xa(q3&TW)&1*c3wu}1M((}Pxbc[yq=7l]qt2]3`[CO' );
define( 'LOGGED_IN_SALT',   ',x*n-s{g){70X.b3e)%ZSPUlA*,},$+c~h(Bo=Lfe:9_wL!C<qsph54S6gYRF-A`' );
define( 'NONCE_SALT',       '4K;2}kLa(ngk;ap/*uYXk{In${i[6<A6F)r63YO%d|7|br!Ru>]s~2Ir^F~buUoe' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
