<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', '第2段階');
define('_US_2FA_PROMPT', '認証アプリに表示されたコードを入力してください');
define('_US_2FA_CODE', '認証コード');
define('_US_2FA_PROMPT_EMAIL', '%s宛てに6桁のコードを送信しました。以下に入力してください。');
define('_US_2FA_CODE_EMAIL', 'メールに記載されたコード');
define('_US_2FA_SEND', '新しいコードを送信');
define('_US_2FA_SENT', '%s宛てに新しいコードを送信しました。有効期限は10分間です。');
define('_US_2FA_SEND_WAIT', '1分以内にコードを送信しました。別のコードを要求する前に、受信トレイと迷惑メールフォルダをご確認ください。');
define('_US_2FA_SEND_FAILED', '現在コードを送信できませんでした。しばらくしてから再試行するか、リカバリーコードをご利用ください。');
define('_US_2FA_EMAIL_SUBJECT', '%s: サインインコード');
define('_US_2FA_EMAIL_BODY', '%sへのサインインコードは次のとおりです:

%s

このコードは%d分間有効で、1回のみ使用できます。心当たりがない場合は、このメッセージを無視し、パスワードの変更をご検討ください。');
define('_US_2FA_RECOVERY', '代わりにリカバリーコードを使用する');
define('_US_2FA_RECOVERY_HINT', '各リカバリーコードは1回のみ使用できます。使用するとメールが送信されます。');
define('_US_2FA_SUBMIT', '続行');
define('_US_2FA_STARTAGAIN', 'このサインインは期限切れになったか、中断されました。もう一度お試しください。');
define('_US_2FA_BACKTOLOGIN', 'ログインフォームに戻る');
define('_US_2FA_BADCODE', 'そのコードは受け付けられませんでした。');
define('_US_2FA_LOCKED', '試行回数が多すぎます。第2段階は15分間ロックされます。リカバリーコードは引き続き使用できます。');
define('_US_2FA_UNAVAILABLE', '第2段階は現在利用できません。リカバリーコードは引き続き使用できます。または、サイト管理者にお問い合わせください。');
define('_US_2FA_REQUIRED', 'このアカウントでは二要素認証が有効になっています。サイトのログインページからサインインしてください。');
define('_US_2FA_HTTP_LOGIN', 'パスワードが暗号化されずに送信されるため、このポップアップではHTTP経由での二要素ログインを完了できません。代わりにサイトのログインを使用するか、管理者にサイトのHTTPS有効化を依頼してください。');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: 第2段階がロックされました');
define('_US_2FA_LOCKED_MAIL_BODY', '%sのアカウントに対して、%sから誤った第2段階のコードが5回入力されました。第2段階は15分間ロックされます。心当たりがない場合は、パスワードを変更してください。');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: リカバリーコードが使用されました');
define('_US_2FA_RECOVERY_MAIL_BODY', '%sから、あなたのアカウント(%s)へのサインインにリカバリーコードが使用されました。このコードはもう使用できません。心当たりがない場合は、パスワードを変更し、リカバリーコードをリセットしてください。');
