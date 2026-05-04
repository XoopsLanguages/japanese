<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ja

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'PHP DebugBar を使用したエラーレポートとパフォーマンス分析');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar を表示');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug を有効化');
define('_MI_DEBUGBAR_FILESDEBUG', 'インクルードファイルタブを有効化');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'リクエスト中に読み込まれた全 PHP ファイルを表示');
define('_MI_DEBUGBAR_SLOWQUERY', '低速クエリのしきい値（秒）');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'これより遅いクエリは赤でハイライト表示されます（例：0.05 = 50ms）');

define('_MI_DEBUGBAR_QUERYMODE',      'クエリログ');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  '全クエリまたは低速クエリとエラーのみ');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  '全クエリ');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', '低速とエラーのみ');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray 連携を有効化');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Ray デスクトップアプリにデバッグデータを送信');

define('_MI_DEBUGBAR_ADMENU1', 'ホーム');
define('_MI_DEBUGBAR_MENU_ABOUT', 'について');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', '管理に戻る ');
\define('_MI_DEBUGBAR_OVERVIEW', '概要');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', '免責事項');
\define('_MI_DEBUGBAR_LICENSE', 'ライセンス');
\define('_MI_DEBUGBAR_SUPPORT', 'サポート');
