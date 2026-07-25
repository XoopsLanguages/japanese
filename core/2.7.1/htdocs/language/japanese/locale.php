<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops locale
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('アクセスは制限されています');

setlocale(LC_ALL, 'ja_JP.UTF-8');

// !!重要!! 次の予約文字の前には必ず '\' を挿入してください: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// 't','r','n' には '\\' を挿入する必要があります
define('_TODAY', "\今\日 G:i");
define('_YESTERDAY', "\昨\\日 G:i");
define('_MONTHDAY', 'n月j日 G:i');
define('_YEARMONTHDAY', 'Y年n月j日 G:i');
define('_ELAPSE', '%s 前');
define('_TIMEFORMAT_DESC', "有効な形式: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" または \"custom\" - 現在との間隔によって形式を決定します; \"e\" - 経過時間; \"mysql\" - Y-m-d H:i:s;<br>" . "指定文字列 - <a href=\"https://php.net/manual/ja/function.date.php\" rel=\"external\">PHPマニュアル</a> を参照してください。");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * XOOPS 日本語ローカル設定
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /** Per-locale currency formatting data. Pattern uses positional placeholders: %1$s = amount, %2$s = symbol. */
    private const CURRENCY = ['locale' => 'ja_JP', 'code' => 'JPY', 'symbol' => '¥',  'decimals' => 0, 'decSep' => '.', 'thouSep' => ',', 'pattern' => '%2$s%1$s'];

    /**
     * 数値フォーマット
     *
     * The parameter type accepts string for backward compatibility with
     * callers that still pass numeric strings, but PHP's number_format()
     * requires float. Cast at the boundary ONLY when the input is a
     * numeric string — otherwise pass through unchanged so PHP's
     * number_format() raises its own TypeError on genuinely invalid
     * input (arrays, objects, non-numeric strings) instead of silently
     * coercing them to 0 / 1 and returning a misleading formatted zero.
     *
     * @param  int|float|string $number
     * @return string
     *
     * @throws \TypeError when $number is not int, float, or a numeric string
     */
    public function number_format($number)
    {
        if (is_string($number) && is_numeric($number)) {
            $number = (float) $number;
        }

        return number_format($number, self::CURRENCY['decimals'], self::CURRENCY['decSep'], self::CURRENCY['thouSep']);
    }

    /**
     * 金額フォーマット
     *
     * @param  string    $format  legacy money_format()-style format string (ignored, kept for BC)
     * @param  int|float|string $number
     * @return string
     *
     * @throws \TypeError when $number is not int, float, or a numeric string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function money_format($format, $number)
    {
        $c = self::CURRENCY;

        if (extension_loaded('intl')) {
            static $fmt = null;
            if (null === $fmt) {
                $fmt = new \NumberFormatter($c['locale'], \NumberFormatter::CURRENCY);
            }
            // Match number_format()'s selective-cast behaviour above:
            // accept numeric strings for BC, pass other types through so
            // formatCurrency() raises its own TypeError on genuinely
            // invalid input rather than silently rendering "$0.00". The
            // intl and fallback paths now agree on what counts as valid.
            if (is_string($number) && is_numeric($number)) {
                $number = (float) $number;
            }
            $result = $fmt->formatCurrency($number, $c['code']);
            if ($result !== false) {
                return $result;
            }
        }

        $amount = $this->number_format($number);

        return sprintf($c['pattern'], $amount, $c['symbol']);
    }
}
