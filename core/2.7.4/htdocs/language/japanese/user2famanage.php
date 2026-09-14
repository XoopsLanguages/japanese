<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', '二要素認証');
define('_US_2FAM_PASSWORD', '現在のパスワード');
define('_US_2FAM_ENABLE', '認証アプリを設定する');
define('_US_2FAM_CONFIRM', '認証アプリを確認する');
define('_US_2FAM_CHOOSE', '第2段階の受け取り方法を選択してください: 認証アプリ、またはメールによるコード。');
define('_US_2FAM_ENABLE_EMAIL', 'メールコードを使用する');
define('_US_2FAM_EMAIL_HELP', 'メールコード: サインインするたびに6桁のコードが%s宛てに送信されます。メールを読める人なら誰でもこの段階を通過できるため、認証アプリより安全性は劣ります。');
define('_US_2FAM_EMAIL_STEP', '%s宛てに6桁のコードを送信しました。確認のため以下に入力してください。有効期限は10分間です。');
define('_US_2FAM_CONFIRM_EMAIL', 'メールコードを確認する');
define('_US_2FAM_CODE_HELP_EMAIL', '先ほど送信したメールに記載されている6桁のコードです。');
define('_US_2FAM_ENABLED_EMAIL', 'メールコードが登録されています。変更するには、現在のパスワードとメールで送信されるコード、またはリカバリーコードを入力してください。コードを要求するには下のボタンを使用してください。');
define('_US_2FAM_SEND', 'コードを送信する');
define('_US_2FAM_MANUAL', '手動設定キー');
define('_US_2FAM_SCAN', '認証アプリ用のQRコード');
define('_US_2FAM_STEP_APP', '認証アプリが必要です: 時間ベースのワンタイムコード(TOTP)を生成するアプリやパスワードマネージャーであれば、スマートフォンでもパソコンでも構いません。まだお持ちでない場合は、まずお好みのもの(例: Google Authenticator、Microsoft Authenticator、Aegis、FreeOTP)をインストールしてください。');
define('_US_2FAM_STEP_ADD', 'アプリでアカウントを追加します: このQRコードをスキャンするか、手動入力を選択して下に表示されている設定キーを入力してください。');
define('_US_2FAM_STEP_CODE', 'アプリには現在、30秒ごとに変わる6桁のコードが表示されています。今表示されているコードを下の欄に入力して確認してください。');
define('_US_2FAM_CODE_HELP', '認証アプリに現在表示されている6桁のコードです。');
define('_US_2FAM_HTTP', 'この接続は暗号化されていないHTTPを使用しています。パスワード、セッション、認証アプリの設定キー、リカバリーコードが傍受される可能性があります。可能な場合は必ずHTTPSを使用してください。');
define('_US_2FAM_CODES', 'これらのリカバリーコードを今すぐ保存してください');
define('_US_2FAM_CODES_HELP', '各コードは1回のみ使用できます。これらのコードは再表示されません。このアカウントとは別の安全な場所に保管してください。');
define('_US_2FAM_DISABLE', '二要素認証を無効にする');
define('_US_2FAM_REGENERATE', 'リカバリーコードを再発行する');
define('_US_2FAM_ENABLED', '認証アプリが登録されています。変更するには、現在のパスワードと認証コードまたはリカバリーコードを入力してください。');
define('_US_2FAM_DISABLED', '二要素認証は無効になっています。');
define('_US_2FAM_PAUSED', 'サイトは二要素認証のチャレンジを一時停止しています。認証要素は保持されており、登録済みアカウントでは「ログイン情報を記憶する」は引き続き利用できません。');
define('_US_2FAM_UNAVAILABLE', '二要素認証の設定または管理は現在利用できません。サイト管理者にお問い合わせください。');
define('_US_2FAM_STARTAGAIN', '設定が期限切れになったか、アカウントが変更されました。設定をやり直すにはパスワードを入力してください。');
define('_US_2FAM_BADPASSWORD', '現在のパスワードが受け付けられませんでした。');
define('_US_2FAM_RESET', 'このユーザーの二要素認証をリセットする');
define('_US_2FAM_STATUS_NONE', '未登録');
define('_US_2FAM_STATUS_TOTP', '認証アプリが登録済み');
define('_US_2FAM_STATUS_EMAIL', 'メールコードが登録済み');
define('_US_2FAM_STATUS_UNAVAILABLE', 'ステータスを取得できません');
define('_US_2FAM_RESET_HELP', 'これにより、登録済みの方式にかかわらずユーザーの第2要素が無効になり、リカバリーコードと「ログイン情報を記憶する」クッキーが失効します。既存のサインイン済みセッションは有効なままです。確認のため、ご自身の管理者パスワードを入力してください。');
define('_US_2FAM_RESET_DONE', 'ユーザーの二要素認証がリセットされました。');
define('_US_2FAM_BACK', 'アカウントに戻る');
define('_US_2FAM_DONE', '二要素認証が有効になりました。');
define('_US_2FAM_REPLACED', '以前のリカバリーコードは失効しました。');
define('_US_2FAM_NOTICE_SUBJECT', '%s: 二要素認証が変更されました');
define('_US_2FAM_NOTICE_BODY', '%sのアカウントの二要素認証またはリカバリーコードが%sから変更されました。心当たりがない場合は、サイト管理者にお問い合わせください。');
define('_US_2FAM_RESET_SUBJECT', '%s: 管理者が二要素認証をリセットしました');
define('_US_2FAM_RESET_BODY', '管理者が%sで%sからあなたの第2要素を無効にし、そのリカバリーコードを失効させました。既存のサインイン済みセッションは有効なままです。サインインして二要素認証を再設定してください。心当たりがない場合はサイト管理者にお問い合わせください。');
