<?php
//
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> オープンソースです
    PHP で書かれたオブジェクト指向 Web パブリッシング システム。に最適なツールです。
    小規模から大規模のダイナミックなコミュニティ Web サイト、企業内ポータル、企業ポータル、ウェブログなどを開発します。
</p>
<p>
    XOOPS は、の条件に従ってリリースされます。
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 一般公衆利用許諾書 (GPL)</a>
    バージョン 2 以降であり、自由に使用および変更できます。
    GPL の配布条件を遵守する限り、再配布は自由です。
</p>
<h3>要件</h3>
<ul>
    <li>WWW サーバー (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 以上、8.4+ を推奨</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 以上、8.4.5+ を推奨 </li>
</ul>
<h3>インストール前の準備</h3>
<ol>
    <li>WWW サーバー、PHP、およびデータベース サーバーを適切にセットアップします。</li>
    <li>XOOPS サイトのデータベースを準備します。</li>
    <li>ユーザーアカウントを準備し、ユーザーにデータベースへのアクセスを許可します。</li>
    <li>これらのディレクトリとファイルを書き込み可能にします: %s</li>
    <li>セキュリティを考慮して、以下の 2 つのディレクトリを次の場所に移動することを強くお勧めします。 <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">ドキュメントルート</a> フォルダー名を変更します: %s</li>
    <li>これらのディレクトリを作成し (まだ存在していない場合)、書き込み可能にします: %s</li>
    <li>ブラウザの Cookie と JavaScript をオンにします。</li>
</ol>
<h3>特記事項</h3>
<ol>
    <li>特定のシステム ソフトウェアの組み合わせによっては、機能させるために追加の構成が必要になる場合があります
    XOOPS と。これらのトピックのいずれかがご使用の環境に当てはまる場合は、全文を参照してください。
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    取付説明書</a> 詳細については。<br><br>

    <li><strong>SELinux</strong> 有効なシステム (たとえば、 <strong>CentOS</strong>  そして <strong>RHEL</strong>) セキュリティ コンテキストの変更が必要になる場合があります
    XOOPS ディレクトリに対しては、ディレクトリを書き込み可能にするための通常のファイル権限に加えて。
    システムのドキュメントやシステム管理者に問い合わせてください。
</ol>
';


return $content;
