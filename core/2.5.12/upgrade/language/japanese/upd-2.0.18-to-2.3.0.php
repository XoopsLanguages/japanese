<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

<?php
define('LEGEND_XOOPS_PATHS', 'XOOPS の物理パス');
define('LEGEND_DATABASE', 'データベース文字セット');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS ライブラリディレクトリ');
define('XOOPS_LIB_PATH_HELP', '将来の互換性のために、末尾のスラッシュを含まない XOOPS ライブラリディレクトリの物理パス。セキュリティを高めるため、' . XOOPS_ROOT_PATH . ' の外に配置してください。');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS データファイルディレクトリ');
define('XOOPS_DATA_PATH_HELP', '将来の互換性のために、末尾のスラッシュを含まない XOOPS データファイル (書き込み可能) ディレクトリの物理パス。セキュリティを高めるため、' . XOOPS_ROOT_PATH . ' の外に配置してください。');

define('DB_COLLATION_LABEL', 'データベース文字セットと照合順序');
define('DB_COLLATION_HELP', '4.12 以降、MySQL はカスタム文字セットと照合順序をサポートしています。ただし、予想よりも複雑であるため、選択に自信がない限り、変更しないでください。');
define('DB_COLLATION_NOCHANGE', '変更しない');

define('XOOPS_PATH_FOUND', 'パスが見つかりました。');
define('ERR_COULD_NOT_ACCESS', '指定されたフォルダーにアクセスできませんでした。フォルダーが存在し、サーバーから読み取り可能であることを確認してください。');
define('CHECKING_PERMISSIONS', 'ファイルとディレクトリの権限を確認しています...');
define('ERR_NEED_WRITE_ACCESS', 'サーバーは以下のファイルとフォルダーへの書き込みアクセス権が必要です<br>(UNIX/LINUX サーバーでは <em>chmod 777 ディレクトリ名</em> など)');
define('IS_NOT_WRITABLE', '%s は書き込み可能ではありません。');
define('IS_WRITABLE', '%s は書き込み可能です。');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'mainfile.php へのコンテンツ書き込みエラー。コンテンツを mainfile.php に手動で書き込んでください。');
?>
