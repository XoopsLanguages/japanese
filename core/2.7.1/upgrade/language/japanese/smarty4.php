<?php

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 移行');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'スキャナー結果');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'スキャン実行');
define('_XOOPS_SMARTY4_SCANNER_END', 'スキャナー終了');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'ルール');
define('_XOOPS_SMARTY4_SCANNER_MATCH', '一致');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'ファイル');
define('_XOOPS_SMARTY4_SCANNER_FIXED', '修正数');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', '手動レビューが必要です');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', '自動修正可能: foreach item 変数は、「_item」を追加することで名前が変更されます (例: 「foo」は「foo_item」になります)。');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '書き込み不可');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '再スキャンオプション');

define('_XOOPS_SMARTY4_FIX_BUTTON', '以下の「はい」チェックボックスをクリックし、スキャン実行ボタンをクリックして、検出された問題を自動的に修正してください。');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '完了としてマーク');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'テンプレートディレクトリ（オプション）');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'テンプレート拡張子（オプション）');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 では、重要な変更が導入されています: Smarty 4</h3>

<p>残念ながら、この変更により、一部の古いテーマが中断される可能性があります。したがって、アップグレードを続行する前に、必ず次の手順に従ってください。

<li>preflight.php を実行して、古いテーマまたはモジュール テンプレートがないか確認します。</li>
<li>問題が特定された場合は、アップグレードを続行する前に、このドキュメントを参照して必要な変更を理解してください。</li>
<li>必要な変更を加えた後、preflight.php を再度実行します。</li>
<li>他に問題がなければ、アップグレード プロセスを開始できます。</li>
</p>
EOT,
);
