<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS アップグレーダー</h2>

<p>
<em>アップグレード</em> は、この XOOPS インストールを検査し、新しい XOOPS コードと互換性を持たせるために必要なパッチを適用します。<br>
パッチには、データベースの変更、新しい設定項目のデフォルト設定の追加、ファイルやデータの更新などが含まれる場合があります。
</p>
<p>
各パッチの適用後、アップグレーダーはそのステータスを報告し、次に進むための操作を待ちます。<br>
アップグレードが完了すると、コントロールはシステムモジュールの更新処理に移行します。
</p>

<div class="alert alert-warning">
アップグレード完了後は、以下の作業を忘れずに行ってください：
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> upgrade フォルダを削除する</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 変更されたモジュールを更新する</li>
</ul>
</div>

EOT,
);
