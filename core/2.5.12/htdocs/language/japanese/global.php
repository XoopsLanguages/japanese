<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PLEASEWAIT', 'お待ちください');
define('_FETCHING', '読み込み中...');
define('_TAKINGBACK', '元の場所に戻ります....');
define('_LOGOUT', 'ログアウト');
define('_SUBJECT', '件名');
define('_MESSAGEICON', 'メッセージアイコン');
define('_COMMENTS', 'コメント');
define('_POSTANON', '匿名で投稿');
define('_DISABLESMILEY', 'スマイリー無効');
define('_DISABLEHTML', 'HTML 無効');
define('_PREVIEW', 'プレビュー');
define('_GO', 'GO!');
define('_NESTED', '入れ子');
define('_NOCOMMENTS', 'コメントはありません');
define('_FLAT', 'フラット');
define('_THREADED', 'スレッド');
define('_OLDESTFIRST', '古い順');
define('_NEWESTFIRST', '新しい順');
define('_MORE', 'もっと...');
define('_MULTIPAGE', '記事を複数ページに分割するには、記事中に <span color=red>[pagebreak]</span> (角括弧を含む) という単語を挿入してください。');
define('_IFNOTRELOAD', 'ページが自動的にリロードされない場合は、<a href=\'%s\'>こちら</a>をクリックしてください');
// XoopsObject::cleanVars() によるエラーメッセージ
define('_XOBJ_ERR_REQUIRED', '%s は必須です');
define('_XOBJ_ERR_SHORTERTHAN', '%s は %d 文字より短くする必要があります。');
// %%%%%%    ファイル名 themeuserpost.php     %%%%%
define('_PROFILE', 'プロフィール');
define('_POSTEDBY', '投稿者');
define('_VISITWEBSITE', 'ウェブサイトを見る');
define('_SENDPMTO', '%s にプライベートメッセージを送る');
define('_SENDEMAILTO', '%s にメールを送る');
define('_ADD', '追加');
define('_REPLY', '返信');
define('_DATE', '日付'); // 投稿日
// %%%%%%    ファイル名 admin_functions.php     %%%%%
define('_MAIN', 'メイン');
define('_MANUAL', 'マニュアル');
define('_INFO', '情報');
define('_CPHOME', 'コントロールパネルホーム');
define('_YOURHOME', 'ホームページ');
// %%%%%%    ファイル名 misc.php (オンラインユーザーポップアップ)    %%%%%
define('_WHOSONLINE', 'オンラインユーザー');
define('_GUESTS', 'ゲスト');
define('_MEMBERS', 'メンバー');
define('_ONLINEPHRASE', '<strong>%s</strong> 人のユーザーがオンラインです');
define('_ONLINEPHRASEX', '<strong>%s</strong> 人のユーザーが <strong>%s</strong> を閲覧中です');
define('_CLOSE', '閉じる'); // ウィンドウを閉じる
// %%%%%%    ファイル名 module.textsanitizer.php     %%%%%
define('_QUOTEC', '引用:');
// %%%%%%    ファイル名 admin.php     %%%%%
define('_NOPERM', '申し訳ありませんが、このエリアにアクセスする権限がありません。');
// %%%%%        共通フレーズ        %%%%%
define('_NO', 'いいえ');
define('_YES', 'はい');
define('_EDIT', '編集');
define('_DELETE', '削除');
define('_SUBMIT', '送信');
define('_MODULENOEXIST', '選択されたモジュールは存在しません!');
define('_ALIGN', '配置');
define('_LEFT', '左');
define('_CENTER', '中央');
define('_RIGHT', '右');
define('_FORM_ENTER', '%s を入力してください');
define('_MUSTWABLE', 'ファイル %s はサーバーによって書き込み可能である必要があります!'); // %s はファイル名
// モジュール情報
define('_PREFERENCES', '設定');
define('_VERSION', 'バージョン');
define('_DESCRIPTION', '説明');
define('_AUTHOR', '作者');
define('_CREDITS', 'クレジット');
define('_LICENCE', 'ライセンス');
define('_ERRORS', 'エラー');
define('_NONE', 'なし');
define('_ON', 'オン');
define('_READS', '閲覧');
define('_WELCOMETO', '%s へようこそ');
define('_SEARCH', '検索');
define('_ALL', 'すべて');
define('_TITLE', 'タイトル');
define('_OPTIONS', 'オプション');
define('_QUOTE', '引用');
define('_LIST', 'リスト');
define('_LOGIN', 'ユーザーログイン');
define('_USERNAME', 'ユーザー名: ');
define('_PASSWORD', 'パスワード: ');
define('_SELECT', '選択');
define('_IMAGE', '画像');
define('_SEND', '送信');
define('_CANCEL', 'キャンセル');
define('_ASCENDING', '昇順');
define('_DESCENDING', '降順');
define('_BACK', '戻る');
define('_NOTITLE', 'タイトルなし');
/**
 * 画像マネージャー
 */
define('_MD_ADDIMGCAT', 'カテゴリを追加');
define('_MD_IMGCATNAME', 'カテゴリ名');
define('_MD_IMGCATRGRP', '画像マネージャーを使用できるグループを選択');
define('_MD_IMGCATWGRP', '画像のアップロードを許可するグループを選択');
define('_MD_IMGCATWEIGHT', '画像マネージャーでの表示順');
define('_MD_IMGCATDISPLAY', '表示');
define('_MD_IMGCATSTRTYPE', '画像のアップロード先:');
define('_MD_STRTYOPENG', 'これは後から変更できません!');
define('_MD_ASFILE', 'ファイルとして保存 (uploads ディレクトリ)');
define('_MD_INDB', 'データベースに保存 (バイナリ "blob" データ)');
define('_MD_IMGMAIN', 'カテゴリ');
define('_MD_EDITIMGCAT', '画像設定');
define('_IMGMANAGER', '画像マネージャー');
define('_NUMIMAGES', '%s 画像');
define('_ADDIMAGE', '画像ファイルを追加');
define('_IMAGENAME', '名前:');
define('_IMGMAXSIZE', '許可される最大サイズ (バイト):');
define('_IMGMAXWIDTH', '許可される最大幅 (ピクセル):');
define('_IMGMAXHEIGHT', '許可される最大高さ (ピクセル):');
define('_IMAGECAT', 'カテゴリ:');
define('_IMAGEFILE', '画像ファイル:');
define('_IMGWEIGHT', '画像マネージャーでの表示順:');
define('_IMGDISPLAY', 'この画像を表示しますか?');
define('_IMAGEMIME', 'MIME タイプ:');
define('_FAILFETCHIMG', 'アップロードされたファイル %s を取得できませんでした');
define('_FAILSAVEIMG', '画像 %s をデータベースに保存できませんでした');
define('_NOCACHE', 'キャッシュなし');
define('_CLONE', '複製');
/**
 * fineupload
 */
define('_UPLOAD', 'アップロード');
define('_SELECTFILES', 'ファイルを選択');
define('_DROPFILESHERE', 'ここにファイルをドロップ');
define('_RETRY', '再試行');
define('_OK', 'OK');
define('_FORMATPROGRESS', '{percent}% / {total_size}');
define('_FAILUPLOAD', 'アップロードに失敗しました!');
define('_WAITINGFORRESPONSE', '処理中...');
define('_PAUSED', '一時停止');
define('_PROCESSINGDROPPEDFILES', 'ドロップされたファイルを処理中...');
define('_TYPEERROR', '{file} は無効な拡張子です。有効な拡張子: {extensions}!');
define('_SIZEERROR', '{file} は大きすぎます。最大ファイルサイズは {sizeLimit} です!');
define('_MINSIZEERROR', '{file} は小さすぎます。最小ファイルサイズは {minSizeLimit} です!');
define('_EMPTYERROR', '{file} は空です。再度ファイルを選択してください!');
define('_NOFILESERROR', 'アップロードするファイルがありません!');
define('_TOOMANYITEMSERROR', 'アップロードできるアイテム数 ({netItems}) が多すぎます。アイテム制限は {itemLimit} です!');
define('_MAXHEIGHTIMAGEERROR', '画像の高さが高すぎます!');
define('_MAXWIDTHIMAGEERROR', '画像の幅が広すぎます!');
define('_MINHEIGHTIMAGEERROR', '画像の高さが足りません!');
define('_MINWIDTHIMAGEERROR', '画像の幅が足りません!');
define('_RETRYFAILTOOMANYITEMS', '再試行に失敗しました - ファイル制限に達しました!');
define('_ONLEAVE', 'ファイルがアップロード中です。今離れるとアップロードはキャンセルされます!');
define('_UNSUPPORTEDBROWSERIOS8SAFARI', '回復不能なエラー - このブラウザは iOS8 Safari の重大なバグのため、一切のファイルアップロードを許可していません。Apple がこの問題を修正するまで、iOS8 Chrome を使用してください!');

// %%%%%    xoopsform ファイル用 %%%%%
define('_STARTSWITH', 'で始まる');
define('_ENDSWITH', 'で終わる');
define('_MATCHES', '一致する');
define('_CONTAINS', '含む');
define('_REQUIRED', '必須');
// %%%%%%    ファイル名 commentform.php     %%%%%
define('_REGISTER', '登録');
// %%%%%%    ファイル名 xoopscodes.php     %%%%%
define('_SIZE', 'サイズ'); // フォントサイズ
define('_FONT', 'フォント'); // フォントファミリー
define('_COLOR', '色'); // フォントの色
define('_EXAMPLE', 'サンプル');
define('_ENTERURL', '追加したいリンクの URL を入力してください:');
define('_ENTERWEBTITLE', 'ウェブサイトのタイトルを入力してください:');
define('_ENTERIMGURL', '追加したい画像の URL を入力してください。');
define('_ENTERIMGPOS', '次に、画像の配置を入力してください。');
define('_IMGPOSRORL', '右の場合は \'R\' または \'r\'、左の場合は \'L\' または \'l\' を入力するか、空白のままにしてください。');
define('_ERRORIMGPOS', 'エラー! 画像の配置を入力してください。');
define('_ENTEREMAIL', '追加したいメールアドレスを入力してください。');
define('_ENTERCODE', '追加したいコードを入力してください。');
define('_ENTERQUOTE', '引用したいテキストを入力してください。');
define('_ENTERTEXTBOX', 'テキストボックスにテキストを入力してください。');
define('_ALLOWEDCHAR', '許可される最大文字数: ');
define('_CURRCHAR', '現在の文字数: ');
define('_PLZCOMPLETE', '件名とメッセージのフィールドを入力してください。');
define('_MESSAGETOOLONG', 'メッセージが長すぎます。');
/**
 * xoops スマイリー
 */
define('_AM_ADDSMILE', ' 新しいスマイリーを追加');
define('_AM_SMILECODE', 'コード');
define('_AM_SMILEEMOTION', '説明');
define('_AM_DISPLAYF', 'フォームに表示');
// %%%%%        時間形式設定   %%%%%
define('_SECOND', '1 秒');
define('_SECONDS', '%s 秒');
define('_MINUTE', '1 分');
define('_MINUTES', '%s 分');
define('_HOUR', '1 時間');
define('_HOURS', '%s 時間');
define('_DAY', '1 日');
define('_DAYS', '%s 日');
define('_WEEK', '1 週間');
define('_MONTH', '1 ヶ月');
define('_DATESTRING', 'Y/n/j G:i:s');
//define('_MEDIUMDATESTRING', 'Y/n/j G:i');
define('_MEDIUMDATESTRING', 'm/d/Y G:i');
//define('_SHORTDATESTRING','n/j/Y');
define('_SHORTDATESTRING', 'm/d/Y');
/**
 * フォーマット文字列で認識される文字:
 * a - 'am' または 'pm'
 * A - 'AM' または 'PM'
 * d - 月の日、先頭にゼロを付けた 2 桁; 例: '01' から '31'
 * D - 曜日、テキスト、3 文字; 例: '金'
 * F - 月、テキスト、長い形式; 例: '1月'
 * h - 時、12 時間形式; 例: '01' から '12'
 * H - 時、24 時間形式; 例: '00' から '23'
 * g - 時、先頭のゼロなしの 12 時間形式; 例: '1' から '12'
 * G - 時、先頭のゼロなしの 24 時間形式; 例: '0' から '23'
 * i - 分; 例: '00' から '59'
 * j - 先頭のゼロなしの月の日; 例: '1' から '31'
 * l (小文字の 'L') - 曜日、テキスト、長い形式; 例: '金曜日'
 * L - うるう年かどうかを示すブール値; 例: '0' または '1'
 * m - 月; 例: '01' から '12'
 * n - 先頭のゼロなしの月; 例: '1' から '12'
 * M - 月、テキスト、3 文字; 例: '1月'
 * s - 秒; 例: '00' から '59'
 * S - 英語の序数接尾辞、テキスト、2 文字; 例: 'th','nd'
 * t - 指定された月の総日数; 例: '28' から '31'
 * T - このマシンのタイムゾーン設定; 例: 'MDT'
 * U - エポックからの秒数
 * w - 曜日、数値; 例: '0' (日曜日) から '6' (土曜日)
 * Y - 年、4 桁; 例: '1999'
 * y - 年、2 桁; 例: '99'
 * z - 年の日; 例: '0' から '365'
 * Z - 秒単位のタイムゾーンオフセット (例: '-43200' から '43200')
 */
// %%%%%        言語固有の設定   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'ja');
// この言語がマルチバイト言語の場合は 0 を 1 に変更します
define('XOOPS_USE_MULTIBYTES', '1');
/**
 * 2.4.0 への追加
 **/
define('_RESET', 'リセット');
define('_RE', 'Re:');
/**
 * 2.5.5 への追加
 **/
define('_DBDATESTRING', 'Y-m-d');
define('_DBTIMESTRING', 'H:i:s');
define('_DBTIMESTAMPSTRING', 'Y-m-d H:i:s');

//2.5.8

//define('_XOBJ_ERR_INVALID_EMAIL', '無効なメールアドレス');
//define('_XOBJ_ERR_INVALID_ENUMERATION', '無効な列挙型');

//XOOPS 2.5.9
define('_AM_MODULEADMIN_MISSING','エラー: ModuleAdmin クラスが見つかりません。/Frameworks に ModuleAdmin クラスをインストールしてください (/docs/readme.txt を参照)。');
define('_MD_MESSAGEC', 'メッセージ:');


//XOOPS 2.5.11
define('_PRINT', '印刷');
define('_PDF', 'PDF');
define('_OFF', 'オフ');
define('_DB_QUERY_ERROR', 'クエリに失敗しました! SQL: %s - エラー: ');
