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
define( 'DB_NAME', 'webdev_case3' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'webdev_case3' );

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
define( 'AUTH_KEY',         'guHS]Q2>Bp~47_<8PdCcD}?AvEA}Qd^]]Wi2js!tC-<M-n?Bog-F$I)h-8c:1~.*' );
define( 'SECURE_AUTH_KEY',  ';.@h^.8=ra#`a=Mg4cHXsA3o!ReCmMb@_?cZU)i=~)bTfRyG@l*N.@&xLIJ4(X<,' );
define( 'LOGGED_IN_KEY',    ')qz,}3~ryF0lX,abi1=mu+&9lcMA=ib[[p.+lR?,*t4B{wM))<!4h8V^pV<&+swh' );
define( 'NONCE_KEY',        '#=?!/+a[qB:;p-Rh~Czma/g&NfIJcKnmZPPKt.4z>sk]x${(spFV^ FFn[%k$~n.' );
define( 'AUTH_SALT',        '{1z+G<$;c8|f6fGQ,$W:S!LpY$egN+R.YYWs#D!SZ$O[0vdDl[(x40T;&Uk0Hsg1' );
define( 'SECURE_AUTH_SALT', 'GGWR|e>iM75<Z>)i ZJ`5?E-RtI3~t.v I:c);O|{p{V5=Hg^,7a#M16v}a#D*P6' );
define( 'LOGGED_IN_SALT',   'f0FCXwN2`8Cbd0BAV|Q/`sM;8|klF9y0m|.ug.iTBpp$jHyrZk$##rJ-f:LMkEKt' );
define( 'NONCE_SALT',       'UDhR0!a@,ZZBkBUO+0*0YFLUvu1/lHz.%Gy{QD` D8s8B7.9TJ=ozkW@*ydwD8J~' );

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
