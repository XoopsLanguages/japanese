<?php

// _LANGCODE: en
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
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '書き込み不可');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '再スキャンオプション');

define('_XOOPS_SMARTY4_FIX_BUTTON', '以下の「はい」チェックボックスをクリックし、スキャン実行ボタンをクリックして、検出された問題を自動的に修正してください。');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '完了としてマーク');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'テンプレートディレクトリ（オプション）');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'テンプレート拡張子（オプション）');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12では、Smarty 4という大きな変更が導入されています</h3>

<p>残念ながら、この変更により一部の古いテーマに影響が出る可能性があります。そのため、アップグレードを進める前に、以下の手順を必ず実行してください：

<li>preflight.phpを実行して、時代遅れのテーマやモジュールテンプレートがないか確認してください。</li>
<li>問題が発見された場合、このドキュメントを参照して、アップグレードを進める前に必要な修正内容を理解してください。</li>
<li>必要な変更を行った後、再度preflight.phpを実行してください。</li>
<li>問題がなくなれば、アップグレードプロセスを開始できます。</li>
</p>
EOT,
);
