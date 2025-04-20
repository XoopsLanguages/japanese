<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// ナビゲーション
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', 'メンテナンス');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', 'すべてのメンテナンス');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', 'ダンプ');

// セッション
define('_AM_SYSTEM_MAINTENANCE_SESSION', 'セッションテーブルを空にする');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', 'セッションのメンテナンス：成功');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', 'セッションのメンテナンス：エラー');

// アバター
define('_AM_SYSTEM_MAINTENANCE_AVATAR', '未使用のカスタムアバターを削除');

// キャッシュ
define('_AM_SYSTEM_MAINTENANCE_CACHE', 'キャッシュフォルダをクリーン');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', 'キャッシュのメンテナンス：成功');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', 'キャッシュのメンテナンス：エラー');

// テーブル
define('_AM_SYSTEM_MAINTENANCE_TABLES', 'テーブルのメンテナンス');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', 'テーブルのメンテナンス：成功');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', 'テーブルのメンテナンス：エラー');
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', 'テーブルの最適化、チェック、修復、分析を実行します');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', 'データベースのメンテナンス：成功');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', 'データベースのメンテナンス：エラー');
define('_AM_SYSTEM_MAINTENANCE_CHOICE1', 'テーブルを最適化');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', 'テーブルをチェック');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', 'テーブルを修復');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', 'テーブルを分析');
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC',
    'ANALYZE TABLE：インデックスの分布を分析して保存します（読み取りロックがかかります）<br>
CHECK TABLE：テーブルのエラーを検出します<br>
OPTIMIZE TABLE：未使用領域の解放とデータファイルのデフラグを行います<br>
REPAIR TABLE：破損の可能性があるテーブルを修復します');

// 結果
define('_AM_SYSTEM_MAINTENANCE_RESULT', '結果');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', '結果なし');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', 'キャッシュクリーンタスク');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', 'セッションテーブルクリーンタスク');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', 'データベースタスク');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', '未使用アバター削除タスク');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', 'メンテナンスの選択がされていません');

// テーブル詳細
define('_AM_SYSTEM_MAINTENANCE_TABLES1', 'テーブル一覧');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', '最適化');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', 'チェック');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', '修復');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', '分析');

// ダンプ
define('_AM_SYSTEM_MAINTENANCE_DUMP', 'ダンプ');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', 'テーブルまたはモジュールを選択');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', 'ダンプに "DROP TABLE IF EXISTS" コマンドを追加');
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', 'または');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', 'かつ');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', 'テーブルまたはモジュールを選択してください');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', 'テーブルがありません');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', 'テーブル');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', '構造');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', 'レコード数');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', 'ファイルが作成されました');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', '結果');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', 'レコード');

// チップス
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>XOOPS インストールの簡易メンテナンスを実行できます：キャッシュとセッションのクリア、テーブルのメンテナンスなど</li>
</ul>');
