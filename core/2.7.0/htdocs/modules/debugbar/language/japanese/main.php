<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ja

define('_MD_DEBUGBAR_DEBUG', 'デバッグ');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'インクルードファイル');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP バージョン');
define('_MD_DEBUGBAR_NONE', 'なし');
define('_MD_DEBUGBAR_ERRORS', 'エラー');
define('_MD_DEBUGBAR_DEPRECATED', '非推奨');
define('_MD_DEBUGBAR_QUERIES', 'クエリ');
define('_MD_DEBUGBAR_BLOCKS', 'ブロック');
define('_MD_DEBUGBAR_EXTRA', '追加情報');
define('_MD_DEBUGBAR_TIMERS', 'タイマー');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s の読み込みに %s 秒かかりました。');
define('_MD_DEBUGBAR_TOTAL', '合計');
define('_MD_DEBUGBAR_NOT_CACHED', 'キャッシュなし');
define('_MD_DEBUGBAR_CACHED', 'キャッシュ済み（%s 秒ごとに再生成）');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(空の文字列)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'ブール値 TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', 'ブール値 FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'データベースクエリ');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'メモリ使用量');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d クエリ');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d 重複)');
define('_MD_DEBUGBAR_BYTES', '%s バイト');
define('_MD_DEBUGBAR_DB_VERSION', '%s バージョン');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- エラー番号: %s エラー メッセージ: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- エラー #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', '例外');
define('_MD_DEBUGBAR_RAY_QUERY', 'クエリ #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', '遅い');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'ブロック (キャッシュされた %d)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'ブロック (キャッシュされません)');
define('_MD_DEBUGBAR_RAY_DUMP', 'ダンプ');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'テンプレートコンテキスト');
define('_MD_DEBUGBAR_RAY_NO_VARS', '（テンプレート変数なし）');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d 変数)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'ディレクトリ「modules/debugbar/%s」は作成されませんでした');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'アセットのコピー中にディレクトリ「%s」の作成に失敗しました');
