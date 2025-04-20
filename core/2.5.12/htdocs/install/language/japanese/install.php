<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'ヘルプテキストの表示/非表示');
// License
//define('LICENSE_NOT_WRITEABLE', 'ライセンスファイル "%s" は書き込み可能ではありません!');
//define('LICENSE_IS_WRITEABLE', '%s ライセンスは書き込み可能です。');
// Configuration check page
define('SERVER_API', 'サーバー API');
define('PHP_EXTENSION', '%s 拡張モジュール');
define('CHAR_ENCODING', '文字エンコーディング');
define('XML_PARSING', 'XML パース');
define('REQUIREMENTS', '必須条件');
define('_PHP_VERSION', 'PHP バージョン');
define('RECOMMENDED_SETTINGS', '推奨設定');
define('RECOMMENDED_EXTENSIONS', '推奨拡張モジュール');
define('SETTING_NAME', '設定名');
define('RECOMMENDED', '推奨');
define('CURRENT', '現在');
define('RECOMMENDED_EXTENSIONS_MSG', 'これらの拡張モジュールは通常の利用には必須ではありませんが、
    多言語対応や RSS サポートのような特定の機能を利用する際に必要となる場合があります。
    したがって、インストールしておくことを推奨します。');
define('NONE', 'なし');
define('SUCCESS', '成功');
define('WARNING', '警告');
define('FAILED', '失敗');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS インストールウィザード');
define('LANGUAGE_SELECTION', '言語選択');
define('LANGUAGE_SELECTION_TITLE', '言語を選択してください');        // L128
define('INTRODUCTION', 'はじめに');
define('INTRODUCTION_TITLE', 'XOOPS インストールウィザードへようこそ');        // L0
define('CONFIGURATION_CHECK', '環境設定の確認');
define('CONFIGURATION_CHECK_TITLE', 'サーバー環境設定の確認');
define('PATHS_SETTINGS', 'パス設定');
define('PATHS_SETTINGS_TITLE', 'パス設定');
define('DATABASE_CONNECTION', 'データベース接続');
define('DATABASE_CONNECTION_TITLE', 'データベース接続');
define('DATABASE_CONFIG', 'データベース設定');
define('DATABASE_CONFIG_TITLE', 'データベース設定');
define('CONFIG_SAVE', '設定の保存');
define('CONFIG_SAVE_TITLE', 'システム設定の保存');
define('TABLES_CREATION', 'テーブル作成');
define('TABLES_CREATION_TITLE', 'データベーステーブルの作成');
define('INITIAL_SETTINGS', '初期設定');
define('INITIAL_SETTINGS_TITLE', '初期設定を入力してください');
define('DATA_INSERTION', 'データ挿入');
define('DATA_INSERTION_TITLE', 'データベースへの設定保存');
define('WELCOME', 'ようこそ');
define('WELCOME_TITLE', 'XOOPS サイトへようこそ');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS の物理パス');
define('XOOPS_URLS', 'Web ロケーション');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS ドキュメントルートの物理パス');
define('XOOPS_ROOT_PATH_HELP', '末尾のスラッシュを含まない XOOPS ドキュメント (公開) ディレクトリの物理パス');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS ライブラリディレクトリ');
define('XOOPS_LIB_PATH_HELP', '将来の互換性のために、末尾のスラッシュを含まない XOOPS ライブラリディレクトリの物理パス。セキュリティを高めるため、' . XOOPS_ROOT_PATH_LABEL . ' の外に配置してください。');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS データファイルディレクトリ');
define('XOOPS_DATA_PATH_HELP', '将来の互換性のために、末尾のスラッシュを含まない XOOPS データファイル (書き込み可能) ディレクトリの物理パス。セキュリティを高めるため、' . XOOPS_ROOT_PATH_LABEL . ' の外に配置してください。');
define('XOOPS_URL_LABEL', 'ウェブサイトのロケーション (URL)'); // L56
define('XOOPS_URL_HELP', 'XOOPS インストールにアクセスするために使用されるメイン URL'); // L58
define('LEGEND_CONNECTION', 'サーバー接続');
define('LEGEND_DATABASE', 'データベース'); // L51
define('DB_HOST_LABEL', 'サーバーホスト名');    // L27
define('DB_HOST_HELP', 'データベースサーバーのホスト名。不明な場合は、ほとんどの場合 <em>localhost</em> で動作します'); // L67
define('DB_USER_LABEL', 'ユーザー名');    // L28
define('DB_USER_HELP', 'データベースサーバーへの接続に使用されるユーザーアカウントの名前'); // L65
define('DB_PASS_LABEL', 'パスワード');    // L52
define('DB_PASS_HELP', 'データベースユーザーアカウントのパスワード'); // L68
define('DB_NAME_LABEL', 'データベース名');    // L29
define('DB_NAME_HELP', 'ホスト上のデータベースの名前。存在しない場合、インストーラーはデータベースの作成を試みます'); // L64
define('DB_CHARSET_LABEL', 'データベース文字セット');
define('DB_CHARSET_HELP', 'MySQL は、様々な文字セットを使用してデータを保存し、様々な照合順序に従って比較を行うための文字セットサポートを含んでいます。');
define('DB_COLLATION_LABEL', 'データベース照合順序');
define('DB_COLLATION_HELP', '照合順序とは、文字セット内の文字を比較するための一連のルールです。');
define('DB_PREFIX_LABEL', 'テーブルプレフィックス');    // L30
define('DB_PREFIX_HELP', 'データベース内の名前の衝突を避けるため、作成されるすべての新しいテーブルにこのプレフィックスが追加されます。不明な場合は、デフォルトのままにしてください'); // L63
define('DB_PCONNECT_LABEL', '永続接続を使用する');    // L54
define('DB_PCONNECT_HELP', "デフォルトは 'いいえ' です。不明な場合は空白のままにしてください"); // L69
define('DB_DATABASE_LABEL', 'データベース');
define('LEGEND_ADMIN_ACCOUNT', '管理者アカウント');
define('ADMIN_LOGIN_LABEL', '管理者ログイン'); // L37
define('ADMIN_EMAIL_LABEL', '管理者メールアドレス'); // L38
define('ADMIN_PASS_LABEL', '管理者パスワード'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'パスワードの確認'); // L74
// Buttons
define('BUTTON_PREVIOUS', '前へ'); // L42
define('BUTTON_NEXT', '次へ'); // L47
// Messages
define('XOOPS_FOUND', '%s を検出しました');
define('CHECKING_PERMISSIONS', 'ファイルとディレクトリの権限を確認しています...'); // L82
define('IS_NOT_WRITABLE', '%s は書き込み可能ではありません。'); // L83
define('IS_WRITABLE', '%s は書き込み可能です。'); // L84
define('XOOPS_PATH_FOUND', 'パスが見つかりました。');
//define('READY_CREATE_TABLES', 'XOOPS テーブルは検出されませんでした。<br>インストーラーは XOOPS システムテーブルを作成する準備ができました。');
define('XOOPS_TABLES_FOUND', 'XOOPS システムテーブルはすでにデータベースに存在します。'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS システムテーブルが作成されました。');
//define('READY_INSERT_DATA', 'インストーラーはデータベースに初期データを挿入する準備ができました。');
//define('READY_SAVE_MAINFILE', 'インストーラーは指定された設定を <em>mainfile.php</em> に保存する準備ができました。');
define('SAVED_MAINFILE', '設定を保存しました');
define('SAVED_MAINFILE_MSG', 'インストーラーは指定された設定を <em>mainfile.php</em> および <em>secure.php</em> に保存しました。');
define('DATA_ALREADY_INSERTED', 'データベースに XOOPS データが見つかりました。');
define('DATA_INSERTED', '初期データがデータベースに挿入されました。');
// %s is database name
define('DATABASE_CREATED', 'データベース %s を作成しました!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'テーブル %s を作成できませんでした'); // L118
define('TABLE_CREATED', 'テーブル %s を作成しました。'); // L45
define('ROWS_INSERTED', 'テーブル %s に %d 件のエントリーを挿入しました。'); // L119
define('ROWS_FAILED', 'テーブル %s への %d 件のエントリーの挿入に失敗しました。'); // L120
define('TABLE_ALTERED', 'テーブル %s を更新しました。'); // L133
define('TABLE_NOT_ALTERED', 'テーブル %s の更新に失敗しました。'); // L134
define('TABLE_DROPPED', 'テーブル %s を削除しました。'); // L163
define('TABLE_NOT_DROPPED', 'テーブル %s の削除に失敗しました。'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', '指定されたフォルダーにアクセスできませんでした。フォルダーが存在し、サーバーから読み取り可能であることを確認してください。');
define('ERR_NO_XOOPS_FOUND', '指定されたフォルダーに XOOPS インストールが見つかりませんでした。');
define('ERR_INVALID_EMAIL', '無効なメールアドレス'); // L73
define('ERR_REQUIRED', '必須項目です。'); // L41
define('ERR_PASSWORD_MATCH', '2つのパスワードが一致しません');
define('ERR_NEED_WRITE_ACCESS', 'サーバーは以下のファイルとフォルダーへの書き込みアクセス権が必要です<br>(UNIX/LINUX サーバーでは <em>chmod 775 ディレクトリ名</em> など)<br>利用できない場合、または正しく作成されていない場合は、手動で作成し、適切な権限を設定してください。');
define('ERR_NO_DATABASE', 'データベースを作成できませんでした。サーバー管理者にお問い合わせください。'); // L31
define('ERR_NO_DBCONNECTION', 'データベースサーバーに接続できませんでした。'); // L106
define('ERR_WRITING_CONSTANT', '定数 %s の書き込みに失敗しました。'); // L122
define('ERR_COPY_MAINFILE', '配布ファイルを %s にコピーできませんでした');
define('ERR_WRITE_MAINFILE', '%s に書き込めません。ファイルの権限を確認して、もう一度お試しください。');
define('ERR_READ_MAINFILE', '%s を読み取り用に開けませんでした');
define('ERR_INVALID_DBCHARSET', "文字セット '%s' はサポートされていません。");
define('ERR_INVALID_DBCOLLATION', "照合順序 '%s' はサポートされていません。");
define('ERR_CHARSET_NOT_SET', 'XOOPS データベースのデフォルト文字セットが設定されていません。');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'サポート');
define('LOGIN', '認証');
define('LOGIN_TITLE', '認証');
define('USER_LOGIN', '管理者ログイン');
define('USERNAME', 'ユーザー名 :');
define('PASSWORD', 'パスワード :');
define('ICONV_CONVERSION', '文字コード変換');
define('ZLIB_COMPRESSION', 'Zlib 圧縮');
define('IMAGE_FUNCTIONS', '画像関数');
define('IMAGE_METAS', '画像メタデータ (exif)');
define('FILTER_FUNCTIONS', 'フィルター関数');
define('ADMIN_EXIST', '管理者アカウントはすでに存在します。');
define('CONFIG_SITE', 'サイト設定');
define('CONFIG_SITE_TITLE', 'サイト設定');
define('MODULES', 'モジュールインストール');
define('MODULES_TITLE', 'モジュールインストール');
define('THEME', 'テーマの選択');
define('THEME_TITLE', 'デフォルトテーマを選択してください');
define('INSTALLED_MODULES', '以下のモジュールがインストールされています。');
define('NO_MODULES_FOUND', 'モジュールが見つかりません。');
define('NO_INSTALLED_MODULES', 'インストールされたモジュールはありません。');
define('THEME_NO_SCREENSHOT', 'スクリーンショットが見つかりません');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'パスワードの強度');
define('PASSWORD_DESC', 'パスワードが入力されていません');
define('PASSWORD_GENERATOR', 'パスワード生成');
define('PASSWORD_GENERATE', '生成');
define('PASSWORD_COPY', 'コピー');
define('PASSWORD_VERY_WEAK', '非常に弱い');
define('PASSWORD_WEAK', '弱い');
define('PASSWORD_BETTER', 'より良い');
define('PASSWORD_MEDIUM', '普通');
define('PASSWORD_STRONG', '強い');
define('PASSWORD_STRONGEST', '非常に強い');
//2.5.7
define('WRITTEN_LICENSE', 'XOOPS %s ライセンスキー: <strong>%s</strong> を書き込みました');
//2.5.8
define('CHMOD_CHGRP_REPEAT', '再試行');
define('CHMOD_CHGRP_IGNORE', '無視して続行');
define('CHMOD_CHGRP_ERROR', 'インストーラーは設定ファイル %1$s を書き込めない可能性があります。<p>PHP はユーザー %2$s およびグループ %3$s でファイルを書き込んでいます。<p>ディレクトリ %4$s/ のユーザーは %5$s、グループは %6$s です');
//2.5.9
define("CURL_HTTP", "Client URL Library (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'ウェブサイトのクッキー ドメイン');
define('XOOPS_COOKIE_DOMAIN_HELP', 'クッキーを設定するドメイン。空白、URL の完全なホスト名 (www.example.com)、またはサブドメイン間で共有するためのサブドメインなしの登録済みドメイン (example.com) (www.example.com および blog.example.com) を指定できます。');
define('INTL_SUPPORT', '国際化関数');
define('XOOPS_SOURCE_CODE', "GitHub 上の XOOPS");
define('XOOPS_INSTALLING', 'インストール中');
define('XOOPS_ERROR_ENCOUNTERED', 'エラー');
define('XOOPS_ERROR_SEE_BELOW', 'メッセージは以下をご覧ください。');
define('MODULES_AVAILABLE', '利用可能なモジュール');
define('INSTALL_THIS_MODULE', '%s を追加');
//2.5.11
define('ERR_COPY_CONFIG_FILE', '設定ファイル %s をコピーできませんでした');
