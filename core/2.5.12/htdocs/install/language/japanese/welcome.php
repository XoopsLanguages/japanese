<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> は、PHPで記述されたオープンソースの
    オブジェクト指向Webパブリッシングシステムです。小規模から大規模までのダイナミックな
    コミュニティサイト、社内ポータル、企業ポータル、ブログなどの構築に最適なツールです。
</p>
<p>
    XOOPS は
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 一般公衆利用許諾契約書 (GPL)</a>
    バージョン2以上の条件のもとで提供されており、自由に使用・改変することができます。
    また、GPLの配布条件を守る限り、再配布も自由です。
</p>
<h3>必要環境</h3>
<ul>
    <li>WWWサーバー（<a href="https://www.apache.org/" rel="external">Apache</a>、<a href="https://www.nginx.com/" rel="external">NGINX</a>、IISなど）</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.6.0 以上（推奨：7.3以上）</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 以上（推奨：5.7以上）</li>
</ul>
<h3>インストール前に</h3>
<ol>
    <li>WWWサーバー、PHP、およびデータベースサーバーを正しくセットアップしてください。</li>
    <li>XOOPS用のデータベースを準備してください。</li>
    <li>データベースにアクセス可能なユーザーアカウントを作成し、適切な権限を付与してください。</li>
    <li>次のディレクトリとファイルを「書き込み可能」にしてください：%s</li>
    <li>セキュリティの観点から、次の2つのディレクトリを <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">ドキュメントルート</a> の外に移動し、フォルダー名を変更することを強く推奨します：%s</li>
    <li>次のディレクトリが存在しない場合は作成し、「書き込み可能」にしてください：%s</li>
    <li>ブラウザでクッキーとJavaScriptを有効にしてください。</li>
</ol>
<h3>特記事項</h3>
<p>特定のシステムソフトウェア構成では、XOOPS を正常に動作させるために追加の設定が必要になる場合があります。
該当する場合は、<a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPSインストールマニュアル</a>を参照してください。
</p>
<p>MySQL 8.0 はすべての PHP バージョンでサポートされているわけではありません。サポートされているバージョンでも、
PHP の <em>mysqlnd</em> ライブラリとの互換性に問題がある場合があり、MySQL サーバーの
<em>default-authentication-plugin</em> を <em>mysql_native_password</em> に設定する必要があります。
</p>
<p>SELinux が有効なシステム（CentOS や RHEL など）では、通常のファイル権限に加えて XOOPS のディレクトリに対する
セキュリティコンテキストの変更が必要な場合があります。詳しくはシステムのマニュアルまたはシステム管理者にご相談ください。
</p>
';


return $content;

