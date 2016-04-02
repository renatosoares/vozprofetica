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
define('DB_NAME', 'vozprofetica');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'geladeira123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'z~a|D.vRs&tYa9:NBk+v9MYT?Zy-{~(.{`4C!ES{&7AkI/;e8%Gd[U7fWQpYO^r ');
define('SECURE_AUTH_KEY',  '/|h.D-;W}Yq]l]P@gm!t6R&0p^+ebHjw+eT+zL~dx|om{4m=sITjc$uc09191,sq');
define('LOGGED_IN_KEY',    'ID`EQghJ|K8t2TNNrB@/vYLE sQ%g)Pwo$+T+C;+R1J;18&_)|0xtX-(f5j--K3L');
define('NONCE_KEY',        '~Z|L,{Qp-u2Z/FUDBMeJgR$q[J}wf0-%vQ!) 9ndyD`{tF6{!6NEHK:;yh?aB_=e');
define('AUTH_SALT',        'A[=lJL+7zIkubV?lv|vRG1a}wd`Qz0~T+Ch]DkEUoP7~qz(if b3F>7.x+vWHe#O');
define('SECURE_AUTH_SALT', '`x5qVJlz=.k$(^0?S7r&ET-f#(EA?Pwp9-+%nj+o8TN{6`mY9h+$zHRmYHad6NrE');
define('LOGGED_IN_SALT',   'qYE~oGi0B$7|KUm(v|pUcGeN:cPcWL*y,|CGeEt[ #|0-&!?Nw&E4@C<QYd`Tp&i');
define('NONCE_SALT',       'L_I<<2Ia p$-uld?#%!!z8Y43{C^Xo?ZbElIeVtHSL!{}(?YVecTrpCsjMCJ*Qk`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vp_';


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
