<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Modern Theme Language Definitions
 */
// _LANGCODE: ja

// Compatibility with default/oxygen theme
if (!defined('_OXYGEN_SYSOPTIONS')) {
    define('_OXYGEN_SYSOPTIONS', 'システムオプション');
}

// -- Dashboard: KPI Cards --
define('_MODERN_TOTAL_USERS', '総ユーザー数');
define('_MODERN_NEW_THIS_MONTH', '今月の新規');
define('_MODERN_ACTIVE_MODULES', 'アクティブモジュール');
define('_MODERN_ACTIVE_MODULES_USERS', 'ユーザー向けモジュール');
define('_MODERN_ACTIVE_MODULES_ADMINS', '管理者専用モジュール');
define('_MODERN_ACTIVE_USERS', 'アクティブユーザー');
define('_MODERN_LAST_30_DAYS', '過去30日間');
define('_MODERN_SERVER_LOAD', 'サーバー負荷');
define('_MODERN_CURRENT', '現在');

// -- Dashboard: Charts --
define('_MODERN_USER_REGISTRATIONS', 'ユーザー登録数');
define('_MODERN_NEW_USERS_6_MONTHS', '過去6か月の新規ユーザー');
define('_MODERN_USER_GROUPS', 'ユーザーグループ');
define('_MODERN_DISTRIBUTION_BY_GROUP', 'グループ別分布');
define('_MODERN_CONTENT_DISTRIBUTION', 'コンテンツ分布');
define('_MODERN_CONTENT_ACROSS_MODULES', 'モジュール別コンテンツ');
define('_MODERN_NEW_USERS', '新規ユーザー');

// -- Dashboard: System Information --
define('_MODERN_SYSTEM_INFORMATION', 'システム情報');
define('_MODERN_COMPOSER_PACKAGES', 'Composeパッケージ');
define('_MODERN_COMPONENT', 'コンポーネント');
define('_MODERN_VALUE', '値');
define('_MODERN_STATUS', 'ステータス');
define('_MODERN_PACKAGE', 'パッケージ');
define('_MODERN_VERSION', 'バージョン');
define('_MODERN_SERVER_API', 'サーバーAPI');
define('_MODERN_OPERATING_SYSTEM', 'オペレーティングシステム');
define('_MODERN_MEMORY_LIMIT', 'メモリ制限');
define('_MODERN_UPLOAD_MAX_SIZE', '最大アップロードサイズ');
define('_MODERN_MAX_EXECUTION_TIME', '最大実行時間');
define('_MODERN_POST_MAX_SIZE', '最大POSTサイズ');
define('_MODERN_FILE_UPLOADS', 'ファイルアップロード');

// -- Dashboard: Status Badges --
define('_MODERN_STATUS_ACTIVE', 'アクティブ');
define('_MODERN_STATUS_RUNNING', '実行中');
define('_MODERN_STATUS_GOOD', '正常');
define('_MODERN_STATUS_CONFIGURED', '設定済み');
define('_MODERN_STATUS_ADEQUATE', '適切');
define('_MODERN_STATUS_ENABLED', '有効');

// -- Sidebar --
define('_MODERN_CONTROL_PANEL', 'コントロールパネル');
define('_MODERN_MODULES', 'モジュール');
define('_MODERN_SYSTEM', 'システム');

// -- Header --
define('_MODERN_TOGGLE_MENU', 'メニュー切替');
define('_MODERN_ONLINE', 'オンライン');
define('_MODERN_TOGGLE_DARK_MODE', 'ダークモード切替');

// -- Customizer --
define('_MODERN_THEME_SETTINGS', 'テーマ設定');
define('_MODERN_COLOR_SCHEME', 'カラースキーム');
define('_MODERN_COLOR_DEFAULT_BLUE', 'デフォルトブルー');
define('_MODERN_COLOR_DEFAULT', 'デフォルト');
define('_MODERN_COLOR_NATURE_GREEN', 'ネイチャーグリーン');
define('_MODERN_COLOR_GREEN', 'グリーン');
define('_MODERN_COLOR_ROYAL_PURPLE', 'ロイヤルパープル');
define('_MODERN_COLOR_PURPLE', 'パープル');
define('_MODERN_COLOR_WARM_ORANGE', 'ウォームオレンジ');
define('_MODERN_COLOR_ORANGE', 'オレンジ');
define('_MODERN_COLOR_OCEAN_TEAL', 'オーシャンティール');
define('_MODERN_COLOR_TEAL', 'ティール');
define('_MODERN_COLOR_BOLD_RED', 'ボールドレッド');
define('_MODERN_COLOR_RED', 'レッド');
define('_MODERN_DASHBOARD_SECTIONS', 'ダッシュボードセクション');
define('_MODERN_KPI_CARDS', 'KPIカード');
define('_MODERN_CHARTS', 'グラフ');
define('_MODERN_MODULE_WIDGETS', 'モジュールウィジェット');
define('_MODERN_CONTENT_TRACKING', 'コンテンツ追跡');
define('_MODERN_CONTENT_TRACKING_HINT', 'コンテンツ分布グラフに表示するモジュールを選択してください。');
define('_MODERN_SIDEBAR', 'サイドバー');
define('_MODERN_COMPACT_MODE', 'コンパクトモード');
define('_MODERN_SHOW_ICONS', 'アイコンを表示');
define('_MODERN_DISPLAY', '表示');
define('_MODERN_ANIMATIONS', 'アニメーション');
define('_MODERN_COMPACT_VIEW', 'コンパクトビュー');
define('_MODERN_RESET_TO_DEFAULTS', 'デフォルトにリセット');
define('_MODERN_CLOSE_SETTINGS', '設定を閉じる');
define('_MODERN_CUSTOMIZE_THEME', 'テーマをカスタマイズ');
define('_MODERN_CONFIRM_RESET', 'すべてのカスタマイズをデフォルトにリセットしますか？');

// -- Footer --
define('_MODERN_POWERED_BY', 'XOOPS で動作');
define('_MODERN_THEME_VERSION', 'モダン管理テーマ v1.0');

// -- Page --
define('_MODERN_OPEN', '開く');

// -- Widgets --
define('_MODERN_VIEW_ALL', 'すべて表示');

// -- Content Module Labels (for Content Distribution chart) --
define('_MODERN_MOD_ARTICLES', '記事');
define('_MODERN_MOD_NEWS', 'ニュース');
define('_MODERN_MOD_DOWNLOADS', 'ダウンロード');
define('_MODERN_MOD_JOBS', '求人');
define('_MODERN_MOD_BLOG_POSTS', 'ブログ投稿');
define('_MODERN_MOD_ALUMNI', '卒業生');
define('_MODERN_MOD_PEDIGREES', '家系図');
define('_MODERN_MOD_PROPERTIES', '物件');
define('_MODERN_MOD_FORUM_POSTS', 'フォーム投稿');
define('_MODERN_MOD_LINKS', 'リンク');

// -- Charts: Dataset Labels --
define('_MODERN_ITEMS', 'アイテム');
