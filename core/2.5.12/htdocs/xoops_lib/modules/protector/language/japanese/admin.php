<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', '権限');
define('_MD_A_MYMENU_MYPREFERENCES', '設定');

// index.php
define('_AM_TH_DATETIME', '日時');
define('_AM_TH_USER', 'ユーザー');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'エージェント');
define('_AM_TH_TYPE', 'タイプ');
define('_AM_TH_DESCRIPTION', '説明');
define('_AM_TH_BADIPS', '不正IP<br><br><span style="font-weight:normal;">各IPを1行ずつ記述<br>空欄はすべてのIPが許可されます</span>');
define('_AM_TH_GROUP1IPS', 'グループ=1で許可されるIP<br><br><span style="font-weight:normal;">各IPを1行ずつ記述。<br>192.168. は 192.168.* を意味します<br>空欄はすべてのIPが許可されます</span>');
define('_AM_LABEL_COMPACTLOG', 'ログの圧縮');
define('_AM_BUTTON_COMPACTLOG', '圧縮する！');
define('_AM_JS_COMPACTLOGCONFIRM', '重複する（IP、タイプ）のレコードが削除されます');
define('_AM_LABEL_REMOVEALL', 'すべてのレコードを削除');
define('_AM_BUTTON_REMOVEALL', 'すべて削除！');
define('_AM_JS_REMOVEALLCONFIRM', 'すべてのログが完全に削除されます。本当に大丈夫ですか？');
define('_AM_LABEL_REMOVE', 'チェックしたレコードを削除：');
define('_AM_BUTTON_REMOVE', '削除！');
define('_AM_JS_REMOVECONFIRM', '削除して大丈夫ですか？');
define('_AM_MSG_IPFILESUPDATED', 'IP用のファイルが更新されました');
define('_AM_MSG_BADIPSCANTOPEN', '不正IP用のファイルを開けません');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'グループ=1を許可するファイルを開けません');
define('_AM_MSG_REMOVED', 'レコードが削除されました');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'configsディレクトリを書き込み可能にしてください：%s');

// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'プレフィックス管理');
define('_AM_MSG_DBUPDATED', 'データベースが正常に更新されました！');
define('_AM_CONFIRM_DELETE', 'すべてのデータが削除されます。よろしいですか？');
define('_AM_TXT_HOWTOCHANGEDB', 'プレフィックスを変更したい場合、<br>%s/data/secure.phpを手動で編集してください。<br><br>define(\'XOOPS_DB_PREFIX\', \'<b>%s</b>\');');

// advisory.php
define('_AM_ADV_NOTSECURE', '安全ではありません');
define('_AM_ADV_TRUSTPATHPUBLIC', '画像が表示される場合（-NG-）またはリンクが通常のページを返す場合、XOOPS_TRUST_PATHが正しく配置されていません。XOOPS_TRUST_PATHの最適な配置はDocumentRootの外です。それができない場合、XOOPS_TRUST_PATH直下に.htaccess（DENY FROM ALL）を配置する次善の方法があります。');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'TRUST_PATH内のPHPファイルが読み取り専用に設定されていることを確認してください（404、403、または500エラーが返される必要があります）');
define('_AM_ADV_REGISTERGLOBALS', '「ON」の場合、この設定はさまざまなインジェクション攻撃を招きます。可能であれば、php.iniで「register_globals off」を設定するか、それができない場合は、XOOPSディレクトリに.htaccessを作成または編集してください：');
define('_AM_ADV_ALLOWURLFOPEN', '「ON」の場合、この設定は攻撃者がリモートサーバー上で任意のスクリプトを実行することを許可します。<br>このオプションを変更できるのは管理者だけです。<br>管理者であれば、php.iniまたはhttpd.confを編集してください。<br><b>httpd.confの例：<br>   php_admin_flag   allow_url_fopen   off</b><br>そうでなければ、管理者に申し出てください。');
define('_AM_ADV_USETRANSSID', '「ON」の場合、セッションIDがアンカータグなどに表示されます。<br>セッションハイジャックを防ぐため、XOOPS_ROOT_PATHの.htaccessに次の行を追加してください：<br><b>php_flag session.use_trans_sid off</b>');
define('_AM_ADV_DBPREFIX', 'この設定は「SQLインジェクション」を招きます。<br>このモジュールの設定で「強制サニタイズ *」をONにすることを忘れないでください。');
define('_AM_ADV_LINK_TO_PREFIXMAN', 'プレフィックス管理へ');
define('_AM_ADV_MAINUNPATCHED', 'READMEに記載されているように、mainfile.phpを編集する必要があります。');
define('_AM_ADV_DBFACTORYPATCHED', 'データベースファクトリはDBLayer TrappingによるSQLインジェクション対策に対応済みです');
define('_AM_ADV_DBFACTORYUNPATCHED', 'データベースファクトリはDBLayer TrappingによるSQLインジェクション対策に対応していません。パッチが必要です。');
define('_AM_ADV_SUBTITLECHECK', 'プロテクターが正しく動作しているか確認');
define('_AM_ADV_CHECKCONTAMI', '汚染');
define('_AM_ADV_CHECKISOCOM', '孤立コメント');

// XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'そして以下の行を追加してください：');

// XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'プレフィックス');
define('_AM_PROTECTOR_TABLES', 'テーブル');
define('_AM_PROTECTOR_UPDATED', '更新済み');
define('_AM_PROTECTOR_COPY', 'コピー');
define('_AM_PROTECTOR_ACTIONS', 'アクション');

// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'チェックしたレコードのIPを禁止：');
define('_AM_BUTTON_BAN_BY_IP', 'IP禁止！');
define('_AM_JS_BANCONFIRM', 'IP禁止で大丈夫ですか？');
define('_AM_MSG_BANNEDIP', 'IPが禁止されました');
define('_AM_ADMINSTATS_TITLE', 'プロテクターログの概要');

// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', '先月');
define('_AM_ADMINSTATS_LAST_WEEK', '先週');
define('_AM_ADMINSTATS_LAST_DAY', '昨日');
define('_AM_ADMINSTATS_LAST_HOUR', '過去1時間');
