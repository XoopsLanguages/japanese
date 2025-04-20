<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
<?php
// Navigation
define('_AM_SYSTEM_USERS_NAV_MAIN', 'ユーザー管理');
define('_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH', '高度な検索');
define('_AM_SYSTEM_USERS_NAV_ADD_USER', 'ユーザーを追加');
define('_AM_SYSTEM_USERS_NAV_EDIT_USER', 'ユーザーを編集');
define('_AM_SYSTEM_USERS_NAV_DELETE_USER', 'ユーザーを削除');
// Tips
define('_AM_SYSTEM_USERS_NAV_TIPS', '
<ul>
<li>Xoops ユーザーを管理します</li>
</ul>');
// Main
define('_AM_SYSTEM_USERS_USER', 'ユーザー');
define('_AM_SYSTEM_USERS_ADMIN', '管理者');
define('_AM_SYSTEM_USERS_UID', 'ユーザー ID');
define('_AM_SYSTEM_USERS_STATUS', 'ステータス');
define('_AM_SYSTEM_USERS_NAME', '名前');
define('_AM_SYSTEM_USERS_UNAME', 'ユーザー名');
define('_AM_SYSTEM_USERS_EMAIL', 'メールアドレス');
define('_AM_SYSTEM_USERS_EDIT_GROUPS', 'グループを編集');
define('_AM_SYSTEM_USERS_REG_DATE', '登録日');
define('_AM_SYSTEM_USERS_LAST_LOGIN', '最終ログイン');
define('_AM_SYSTEM_USERS_POSTS', 'コメント/投稿');
define('_AM_SYSTEM_USERS_LEVEL', 'レベル');
define('_AM_SYSTEM_USERS_ACTION', 'アクション');
define('_AM_SYSTEM_USERS_FINDUS', 'ユーザーを検索');
define('_AM_SYSTEM_USERS_AVATAR', 'アバター');
define('_AM_SYSTEM_USERS_REALNAME', '本名');
define('_AM_SYSTEM_USERS_REGDATE', '登録日');
define('_AM_SYSTEM_USERS_PM', 'PM');
define('_AM_SYSTEM_USERS_URL', 'Web URL');
define('_AM_SYSTEM_USERS_PREVIOUS', '前へ');
define('_AM_SYSTEM_USERS_NEXT', '次へ');
define('_AM_SYSTEM_USERS_USERSFOUND', '%s 人のユーザーが見つかりました');
define('_AM_SYSTEM_USERS_ACTUS', 'アクティブユーザー: %s');
define('_AM_SYSTEM_USERS_INACTUS', '非アクティブユーザー: %s');
define('_AM_SYSTEM_USERS_NOFOUND', 'ユーザーが見つかりません');
define('_AM_SYSTEM_USERS_ICQ', 'ICQ 番号');
define('_AM_SYSTEM_USERS_AIM', 'AIM リンク');
define('_AM_SYSTEM_USERS_YIM', 'YIM リンク');
define('_AM_SYSTEM_USERS_FACEBOOK', 'Facebook リンク'); //TODO
define('_AM_SYSTEM_USERS_SKYPE', 'Skype リンク'); //TODO
define('_AM_SYSTEM_USERS_MSNM', 'MSNM リンク');
define('_AM_SYSTEM_USERS_TIMEZONE', 'タイムゾーン');
define('_AM_SYSTEM_USERS_SHOWSIG', '常に署名を付ける');
define('_AM_SYSTEM_USERS_CDISPLAYMODE', 'コメント表示モード');
define('_AM_SYSTEM_USERS_CSORTORDER', 'コメントソート順');
define('_AM_SYSTEM_USERS_EXTRAINFO', '追加情報');
define('_AM_SYSTEM_USERS_LOCATION', '場所');
define('_AM_SYSTEM_USERS_OCCUPATION', '役職');
define('_AM_SYSTEM_USERS_INTEREST', '趣味');
define('_AM_SYSTEM_USERS_URLC', 'URL に含む');
define('_AM_SYSTEM_USERS_LOCATIONC', '場所に含む');
define('_AM_SYSTEM_USERS_OCCUPATIONC', '役職に含む');
define('_AM_SYSTEM_USERS_INTERESTC', '趣味に含む');
define('_AM_SYSTEM_USERS_LASTLOGMORE', "最終ログインが <span style='color:#ff0000;'>X</span> 日以上前");
define('_AM_SYSTEM_USERS_LASTLOGLESS', "最終ログインが <span style='color:#ff0000;'>X</span> 日以内");
define('_AM_SYSTEM_USERS_REGMORE', "参加日が <span style='color:#ff0000;'>X</span> 日以上前");
define('_AM_SYSTEM_USERS_REGLESS', "参加日が <span style='color:#ff0000;'>X</span> 日以内");
define('_AM_SYSTEM_USERS_POSTSMORE', "投稿数が <span style='color:#ff0000;'>X</span> より多い");
define('_AM_SYSTEM_USERS_POSTSLESS', "投稿数が <span style='color:#ff0000;'>X</span> より少ない");
define('_AM_SYSTEM_USERS_SORT', '並べ替え');
define('_AM_SYSTEM_USERS_ORDER', '順序');
define('_AM_SYSTEM_USERS_LASTLOGIN', '最終ログイン');
define('_AM_SYSTEM_USERS_ASC', '昇順');
define('_AM_SYSTEM_USERS_DESC', '降順');
define('_AM_SYSTEM_USERS_LIMIT', '1 ページあたりのユーザー数');
define('_AM_SYSTEM_USERS_RESULTS', '検索結果');
define('_AM_SYSTEM_USERS_SHOWMAILOK', '表示するユーザーのタイプ');
define('_AM_SYSTEM_USERS_MAILOK', 'メールを受け入れるユーザーのみ');
define('_AM_SYSTEM_USERS_MAILNG', 'メールを受け入れないユーザーのみ');
define('_AM_SYSTEM_USERS_SHOWTYPE', '表示するユーザーのタイプ');
define('_AM_SYSTEM_USERS_ACTIVE', 'アクティブユーザーのみ');
define('_AM_SYSTEM_USERS_INACTIVE', '非アクティブユーザーのみ');
define('_AM_SYSTEM_USERS_BOTH', 'すべてのユーザー');
define('_AM_SYSTEM_USERS_SENDMAIL', 'メールを送信');
define('_AM_SYSTEM_USERS_ADD2GROUP', '%s グループにユーザーを追加');
define('_AM_SYSTEM_USERS_GROUPS', 'グループ');
define('_AM_SYSTEM_USERS_ADD_GROUPS', 'グループを追加');
define('_AM_SYSTEM_USERS_DELETE_GROUPS', 'グループを削除');
define('_AM_SYSTEM_USERS_AYSYWTDU', 'ユーザー %s を削除してもよろしいですか?');
define('_AM_SYSTEM_USERS_BYTHIS', 'これにより、このユーザーの情報はすべて完全に削除されます。');
define('_AM_SYSTEM_USERS_YES', 'はい');
define('_AM_SYSTEM_USERS_NO', 'いいえ');
define('_AM_SYSTEM_USERS_YMCACF', 'すべての必須フィールドを入力する必要があります');
define('_AM_SYSTEM_USERS_CNRNU', '新しいユーザーを登録できませんでした。');
define('_AM_SYSTEM_USERS_EDEUSER', 'ユーザーを編集/削除');
define('_AM_SYSTEM_USERS_NICKNAME', 'ユーザー名');
define('_AM_SYSTEM_USERS_ADDUSER', 'ユーザーを追加');
define('_AM_SYSTEM_USERS_OPTION', 'オプション');
define('_AM_SYSTEM_USERS_THEME', 'テーマ');
define('_AM_SYSTEM_USERS_AOUTVTEAD', '他のユーザーにこのメールアドレスの表示を許可する');
define('_AM_SYSTEM_USERS_RANK', 'ランク');
define('_AM_SYSTEM_USERS_NSRA', '特別なランクは割り当てられていません');
define('_AM_SYSTEM_USERS_NSRID', 'データベースに特別なランクはありません');
define('_AM_SYSTEM_USERS_ACCESSLEV', 'アクセスレベル');
define('_AM_SYSTEM_USERS_SIGNATURE', '署名');
define('_AM_SYSTEM_USERS_PASSWORD', 'パスワード');
define('_AM_SYSTEM_USERS_INDICATECOF', '* は必須フィールドを示します');
define('_AM_SYSTEM_USERS_NOTACTIVE', 'このユーザーは有効化されていません。このユーザーを有効にしますか?');
define('_AM_SYSTEM_USERS_UPDATEUSER', 'ユーザーを更新');
define('_AM_SYSTEM_USERS_USERINFO', 'ユーザー情報');
define('_AM_SYSTEM_USERS_USERID', 'ユーザー ID');
define('_AM_SYSTEM_USERS_RETYPEPD', 'パスワードを再入力');
define('_AM_SYSTEM_USERS_CHANGEONLY', '(変更する場合のみ)');
define('_AM_SYSTEM_USERS_SYNCHRONIZE', '同期');
define('_AM_SYSTEM_USERS_USERDONEXIT', "ユーザーが存在しません!");
define('_AM_SYSTEM_USERS_STNPDNM', '申し訳ありませんが、新しいパスワードが一致しません。戻ってやり直してください');
define('_AM_SYSTEM_USERS_CNUUSER', 'ユーザーを更新できませんでした');
define('_AM_SYSTEM_USERS_CNGUSERID', 'ユーザー ID を取得できませんでした');
define('_AM_SYSTEM_USERS_NOUSERS', 'ユーザーが選択されていません');
define('_AM_SYSTEM_USERS_CNRNU2', '新しいユーザーをグループに追加できませんでした: %s.');
define('_AM_SYSTEM_USERS_SEARCH', '検索');
define('_AM_SYSTEM_USERS_SEARCH_USER', 'ユーザーを検索:');
define('_AM_SYSTEM_USERS_ADVANCED_SEARCH', '高度な検索');
define('_AM_SYSTEM_USERS_EDIT', 'メンバーを編集');
define('_AM_SYSTEM_USERS_DEL', 'メンバーを削除');
define('_AM_SYSTEM_USERS_DELETE', '削除');
define('_AM_SYSTEM_USERS_SUBMIT', '送信');
define('_AM_SYSTEM_USERS_PURGE', '削除');
define('_AM_SYSTEM_USERS_ADD', 'メンバーを追加');
define('_AM_SYSTEM_USERS_VIEW', 'メンバー情報を表示');
define('_AM_SYSTEM_USERS_NO_FOUND', 'ユーザーが見つかりません');
define('_AM_SYSTEM_USERS_NOT_CONNECT', '接続なし');
define('_AM_SYSTEM_USERS_FORM_SURE_DEL', 'ユーザーを削除: %s');
define('_AM_SYSTEM_USERS_FORM_SURE_DEL2', '削除');
define('_AM_SYSTEM_USERS_NO_SUPP', 'ユーザーを削除できません: %s <br>');
define('_AM_SYSTEM_USERS_NO_ADMINSUPP', '管理者ユーザーを削除できません: %s <br>');
define('_AM_SYSTEM_USERS_ERROR', 'エラー:<br><br> %s');
define('_AM_SYSTEM_USERS_ALLGROUP', 'すべてのグループ');
define('_AM_SYSTEM_USERS_ALLUSER', 'すべてのユーザー');
define('_AM_SYSTEM_USERS_ACTIVEUSER', 'アクティブユーザーのみ');
define('_AM_SYSTEM_USERS_INACTIVEUSER', '非アクティブユーザーのみ');
// Error
define('_AM_SYSTEM_USERS_PSEUDO_ERROR', 'ユーザー名 %s はすでに存在します');
define('_AM_SYSTEM_USERS_MAIL_ERROR', 'ユーザーメール %s はすでに存在します');
//2.5.4
define('_AM_SYSTEM_USERS_ACCEPT_EMAIL', '管理者からのメールを受け入れる');
