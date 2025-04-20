<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// ナビゲーション
define('_AM_SYSTEM_BLOCKS_ADMIN', 'ブロック管理');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', '管理');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', '新しいブロックを追加');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'ブロックを編集');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'ブロックを複製');

// フォーム
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'カスタムブロック');
define('_AM_SYSTEM_BLOCKS_TYPES', 'すべての種類');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'モジュール');
define('_AM_SYSTEM_BLOCKS_GROUP', 'グループ');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'ページ');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'ブロックを表示');
define('_AM_SYSTEM_BLOCKS_HIDE', 'ブロックを非表示');
define('_AM_SYSTEM_BLOCKS_CLONE', '複製');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', '左サイド');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', '上部左');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', '上部中央');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', '上部右');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', '右サイド');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', '下部左');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', '下部中央');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', '下部右');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'フッター左');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'フッター中央');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'フッター右');

define('_AM_SYSTEM_BLOCKS_ADD', 'ブロック追加');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'ブロック管理');
define('_AM_SYSTEM_BLOCKS_NAME', '名前');
define('_AM_SYSTEM_BLOCKS_TYPE', 'ブロックタイプ');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'サイドブロック - 左');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'サイドブロック - 右');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'センターブロック - 左');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'センターブロック - 右');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'センターブロック - 中央');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'センターブロック - 下部左');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'センターブロック - 下部右');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'フッターブロック - 左');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'フッターブロック - 中央');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'フッターブロック - 右');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'センターブロック - 下部');
define('_AM_SYSTEM_BLOCKS_WEIGHT', '表示優先度');
define('_AM_SYSTEM_BLOCKS_VISIBLE', '表示状態');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', '表示されるページ');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'トップページ');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'すべてのページ');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', '未割り当て');
define('_AM_SYSTEM_BLOCKS_TITLE', 'タイトル');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'コンテンツ');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', '使用可能タグ:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s は %s を表示します');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'コンテンツタイプ');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'PHPスクリプト');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', '自動整形（スマイリー有効）');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', '自動整形（スマイリー無効）');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'キャッシュ時間');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'カスタムブロック（HTML）');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'カスタムブロック（PHP）');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'カスタムブロック（自動整形＋スマイリー）');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'カスタムブロック（自動整形）');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'テンプレートを編集');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'オプション');
define('_AM_SYSTEM_BLOCKS_DRAG', 'ドラッグして並び替え');

// メッセージ
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'このブロックを削除してもよろしいですか？<div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'システムブロックは削除できません！');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'このブロックは直接削除できません！無効化するには、モジュールを非アクティブにしてください。');

// チップス
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>ブロックの位置や並び順はドラッグ＆ドロップで簡単に変更できます。<img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> をクリックしてレイアウトを調整してください。</li>
<li>新しいカスタムブロックを追加することができます。</li>
<li><img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> または <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /> をクリックしてブロックの表示／非表示を切り替えられます。</li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'フッター左');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'フッター中央');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'フッター右');
