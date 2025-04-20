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
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('アクセスは制限されています');

/**
 * メール機能のローカライズ
 *
 * 日本語環境向けローカル設定
 */
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();

        // 文字セットを小文字で指定（例: utf-8）
        $this->charSet = strtolower(_CHARSET);

        // PHPMailer の言語ファイルを指定（ja 言語ファイルが存在する必要あり）
        $this->multimailer->setLanguage('ja');
    }

    /**
     * FromName のエンコード処理（マルチバイト言語向け）
     *
     * @param string $text
     * @return string
     */
    public function encodeFromName($text)
    {
        // 日本語の送信者名はエンコードが必要な場合がある
        return "=?{$this->charSet}?B?" . base64_encode($text) . "?=";
    }

    /**
     * Subject のエンコード処理（マルチバイト言語向け）
     *
     * @param string $text
     * @return string
     */
    public function encodeSubject($text)
    {
        // 日本語の件名はエンコードが必要
        return "=?{$this->charSet}?B?" . base64_encode($text) . "?=";
    }
}
