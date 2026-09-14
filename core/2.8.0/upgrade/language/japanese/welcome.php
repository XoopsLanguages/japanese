<?php

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS アップグレーダー</h2>

<p>
<em>アップグレード</em> この XOOPS インストールを検査し、互換性を持たせるために必要なパッチを適用します 
新しい XOOPS コードを使用します。パッチにはデータベースの変更が含まれる場合があり、新しいデータベースのデフォルト設定を追加します。
構成アイテム、ファイルとデータの更新など。
<p>
各パッチの後、アップグレーダーはステータスを報告し、入力が続行されるのを待ちます。で
アップグレードが終了すると、制御はシステム モジュールの更新機能に渡されます。

<div class="alert alert-warning">
アップグレードが完了したら、次のことを忘れないでください。
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> アップグレードフォルダーを削除します</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 変更されたモジュールを更新する</li>
</div>

EOT,
);
