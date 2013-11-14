<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'siteadm');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4V- w$+Nl`gS1m6>cQu4;#omp((&}>fIl1+S;hA2p`@P67s+BUu`Sc>q:iF]C`11');
define('SECURE_AUTH_KEY',  '1+4CB..?N.%cbH@Z6|^4v`DV5C`+H1g|U#+%S8y6)&zF:2^(W`[=0MA5j2c~( zG');
define('LOGGED_IN_KEY',    'S}gU8v<GWy>j>6L>v<4fT2}2M1/JniP|W1h{2sKi,cgIIr~(9h_z{%M0VAd8hB$d');
define('NONCE_KEY',        'H6Rr[l&O(9/Ba#] GLQ~+)fh86% iM=:R$rn<oR34>G$7-J~$l+!{0TX!WQn6g0m');
define('AUTH_SALT',        'b6R|4EC&}+(QDD^8KX?)&0-(ncXi`3KC.m?mBFkTJ>]SaaEmrZ|C!yH;>R&@3y`Z');
define('SECURE_AUTH_SALT', '(3%s-3A`ghG:Jr$v>=(K?}R+fX`Ak7<VG&)71nOqPZ@|>.QXs[OSI<dUO|krF4:V');
define('LOGGED_IN_SALT',   '!_WvM>~}(I+8lrA^R4[/$W+$nr+5N+s}yK.;%_!`D-7lG<H)8&WxCah q,#-*;a9');
define('NONCE_SALT',       'wC|q8|.JR+z-a88=>6qxO34{kH>g#+ce+|[jqQ^Xk556{PD]o|X5`%jGnQALhHr)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
