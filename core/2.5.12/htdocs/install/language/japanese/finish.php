<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>あなたのサイト</h3>
<p><a href='../index.php'>サイトのホームページ</a>にアクセスできるようになりました。</p>
<h3>サポート</h3>
<p><a href='https://xoops.org/' rel='external'>XOOPS プロジェクト</a>をご覧ください。</p>
<p><strong>ご注意：</strong> 現在、あなたのサイトには最小限の機能しか含まれていません。<br>
<em>モジュール</em>を使用してテキストページ、フォトギャラリー、フォーラムなどを追加し、<em>テーマ</em>で外観をカスタマイズする方法については、<a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a>をご覧ください。</p>
";

$content .= "<h3>セキュリティ構成</h3>
<p>インストーラーは、セキュリティを考慮してサイトを構成しようとします。以下の点を必ず確認してください：
<div class='confirmMsg'>
<em>mainfile.php</em> が読み取り専用であること。<br>
<em>{$installer_modified}</em> フォルダー（またはインストーラーによって自動的にリネームされなかった場合は <em>install</em>）をサーバーから削除してください。
</div>
</p>
";
