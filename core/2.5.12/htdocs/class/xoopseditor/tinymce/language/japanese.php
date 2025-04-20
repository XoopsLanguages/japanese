<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */

/*
editor_registry.phpに関連
*/
// エディタの名前
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// 値は/tinymce/jscripts/langs/your_language_codeと同じでなければならず、例えば英語では「en」、フランス語では「fr」
// 詳細はhttp://tinymce.moxiecode.com/download_i18n.phpを確認
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'ja');
// フォントリスト、形式: "名前=値1,値2;名前=値"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings;MS Gothic=ms gothic,sans-serif;MS Mincho=ms mincho,serif');
define('_FAILGETIMG', '画像 %s の取得に失敗しました');

