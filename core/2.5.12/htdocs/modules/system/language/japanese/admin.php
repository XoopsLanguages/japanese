<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */

// Main
define('_AM_SYSTEM_CONFIG', 'システム設定');
define('_AM_SYSTEM_CPANEL', 'コントロールパネル');
define('_AM_SYSTEM_UPDATE', '更新');
define('_AM_SYSTEM_GOTOMODULE', 'モジュールへ移動');
define('_AM_SYSTEM_HELP', 'ヘルプ');
define('_AM_SYSTEM_HELP_VIEW', 'ヘルプを表示');
define('_AM_SYSTEM_HELP_HIDE', 'ヘルプを非表示');
define('_AM_SYSTEM_TIPS', 'ヒント');
define('_AM_SYSTEM_SECTION', 'セクション');
define('_AM_SYSTEM_DESC', '説明');
define('_AM_SYSTEM_GO', 'このセクションにアクセス');
define('_AM_SYSTEM_STATUS', 'ステータスセクションを変更');
define('_AM_SYSTEM_LOADING', '読み込み中');
define('_AM_SYSTEM_ALL', 'すべて');
define('_AM_SYSTEM_TIPS_MAIN', '<ul><li>システムモジュールのセクションを有効または無効にするか、アクセスするだけです。</li></ul>');
define('_AM_SYSTEM_AVATAR_INFO', "<ul><li><span class='bold red'>%s</span> 個のアバター。</li></ul>");
define('_AM_SYSTEM_BANNER_INFO', "<ul><li><span class='bold red'>%s</span> 個のバナー。</li></ul>");
define('_AM_SYSTEM_COMMENT_INFO', "<ul><li><span class='bold red'>%s</span> 個のコメント。</li></ul>");
define('_AM_SYSTEM_GROUP_INFO', "<ul><li><span class='bold red'>%s</span> 個のグループ。</li></ul>");
define('_AM_SYSTEM_IMG_INFO', "<ul><li><span class='bold red'>%s</span> 個の画像。</li></ul>");
define('_AM_SYSTEM_SMILIES_INFO', "<ul><li><span class='bold red'>%s</span> 個のスマイリー。</li></ul>");
define('_AM_SYSTEM_RANKS_INFO', "<ul><li><span class='bold red'>%s</span> 個のユーザーランク。</li></ul>");
define('_AM_SYSTEM_USERS_INFO', "<ul><li><span class='bold red'>%s</span> 人のユーザー。</li></ul>");
// 管理モジュール名と説明
define('_AM_SYSTEM_ADGS', 'グループ');
define('_AM_SYSTEM_ADGS_DESC', 'ユーザーとグループのモジュールアクセス許可を管理します。');
define('_AM_SYSTEM_BANS', 'バナー');
define('_AM_SYSTEM_BANS_DESC', 'XOOPS 広告バナー機能を管理します。');
define('_AM_SYSTEM_BLOCKS', 'ブロック');
define('_AM_SYSTEM_BLOCKS_DESC', 'ブロックは、任意のページにモジュールコンテンツを表示できます。ここでブロックを管理します。');
define('_AM_SYSTEM_MODULES', 'モジュール');
define('_AM_SYSTEM_MODULES_DESC', 'XOOPS モジュールをインストールおよびアンインストールします。');
define('_AM_SYSTEM_SMLS', 'スマイリー');
define('_AM_SYSTEM_SMLS_DESC', '投稿やコメントで使用するカスタムスマイリーを非表示、変更、および追加します。');
define('_AM_SYSTEM_RANK', 'ユーザーランク');
define('_AM_SYSTEM_RANK_DESC', 'ユーザーとモデレーターの名前付きランクを編集および作成します。');
define('_AM_SYSTEM_USER', 'ユーザー');
define('_AM_SYSTEM_USER_DESC', 'ユーザーを手動で追加し、ユーザープロファイルを編集し、パスワードを変更します。');
define('_AM_SYSTEM_PREF', '設定');
define('_AM_SYSTEM_PREF_DESC', 'XOOPS ウェブサイトのグローバル設定を変更します。');
define('_AM_SYSTEM_MLUS', 'ユーザーにメールを送信');
define('_AM_SYSTEM_MLUS_DESC', 'ここから 1 人のユーザーまたは多くのユーザーにメールまたはプライベートメッセージを送信します。');
define('_AM_SYSTEM_IMAGES', '画像マネージャー');
define('_AM_SYSTEM_IMAGES_DESC', '画像マネージャーのカテゴリを作成し、ここに画像をアップロードします。');
define('_AM_SYSTEM_AVATARS', 'アバター');
define('_AM_SYSTEM_AVATARS_DESC', 'ユーザーがプロフィールに表示するためのカスタムアバターをアップロードします。');
define('_AM_SYSTEM_TPLSETS', 'テンプレート');
define('_AM_SYSTEM_TPLSETS_DESC', 'ディスク上のファイルを編集せずに、モジュールテンプレートを直接編集します。');
define('_AM_SYSTEM_COMMENTS', 'コメント');
define('_AM_SYSTEM_COMMENTS_DESC', '多くのモジュールでは、ユーザーがコメントを投稿できます。ここでコメントを削除または編集できます。');
define('_AM_SYSTEM_FILEMANAGER', 'ファイルマネージャー');
define('_AM_SYSTEM_FILEMANAGER_DESC', 'XOOPS ファイルマネージャー。');
define('_AM_SYSTEM_MAINTENANCE', 'メンテナンス');
define('_AM_SYSTEM_MAINTENANCE_DESC', 'データベーステーブル、キャッシュフォルダー、およびセッションテーブルのメンテナンスツール。');
// メッセージ
define('_AM_SYSTEM_DBUPDATED', 'データベースが正常に更新されました!');
define('_AM_SYSTEM_DBERROR', 'エラーが発生したため、データベースは更新されませんでした!');
define('_AM_SYSTEM_NOTACTIVE', 'このセクションはアクティブではありません!');
// グループ権限フレーズ
define('_MD_AM_PERMADDNG', 'グループ %s の %s に %s 権限を追加できませんでした');
define('_MD_AM_PERMADDOK', 'グループ %s の %s に %s 権限を追加しました');
define('_MD_AM_PERMRESETNG', 'モジュール %s のグループ権限をリセットできませんでした');
define('_MD_AM_PERMADDNGP', 'すべての親アイテムを選択する必要があります。');
define('_AM_SYSTEM_UNINSTALL', 'アンインストール');

//2.5.7
define('_AM_SYSTEM_USAGE', '使用状況');
define('_AM_SYSTEM_ACTIVE', 'アクティブ');
