<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    define($constpref . '_NAME', 'Protector');

    // A brief description of this module
    define($constpref . '_DESC', 'このモジュールは、DoS、SQLインジェクション、変数汚染などのさまざまな攻撃からXOOPSサイトを保護します。');

    // Menu
    define($constpref . '_ADMININDEX', 'Protector センター');
    define($constpref . '_ADVISORY', 'セキュリティアドバイザリ');
    define($constpref . '_PREFIXMANAGER', 'プレフィックスマネージャー');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', '権限');

    // Configs
    define($constpref . '_GLOBAL_DISBL', '一時的に無効');
    define($constpref . '_GLOBAL_DISBLDSC', 'すべて保護は一時的に無効になっています。<br>トラブルシューティング後、これをオフにすることを忘れないでください');

    define($constpref . '_DEFAULT_LANG', 'デフォルト言語');
    define($constpref . '_DEFAULT_LANGDSC', 'common.phpを処理する前にメッセージを表示するように設定された言語を指定します');

    define($constpref . '_RELIABLE_IPS', '信頼できるIP');
    define($constpref . '_RELIABLE_IPSDSC', '信頼できるIPを|で区切って設定します。^は文字列の先頭に一致し、$は文字列の末尾に一致します。');

    define($constpref . '_LOG_LEVEL', 'ログレベル');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', '禁止されたIPの停止時間（秒）');

    define($constpref . '_LOGLEVEL0', 'なし');
    define($constpref . '_LOGLEVEL15', '静か');
    define($constpref . '_LOGLEVEL63', '静か');
    define($constpref . '_LOGLEVEL255', 'フル');

    define($constpref . '_HIJACK_TOPBIT', 'セッション用に保護されたIPビット');
    define($constpref . '_HIJACK_TOPBITDSC', 'セッションハイジャック対策：<br>デフォルト24/56（IPV4/IPV6のネットマスク）。 （すべてのビットが保護されています）<br>IPが安定していない場合は、ビット数でIP範囲を設定します。<br>（例）IP範囲が192.168.0.0-192.168.0.255の範囲で移動できる場合は、ここに24（ビット）を設定します');
    define($constpref . '_HIJACK_DENYGP', 'セッションでIPの移動が許可されていないグループ');
    define($constpref . '_HIJACK_DENYGPDSC', 'セッションハイジャック対策：<br>セッションでIPの移動が許可されていないグループを選択します。<br>（管理者オンにすることをお勧めします。）');
    define($constpref . '_SAN_NULLBYTE', 'ヌルバイトのサニタイズ');
    define($constpref . '_SAN_NULLBYTEDSC', '終了文字 "\\0" は、悪意のある攻撃でよく使用されます。<br>ヌルバイトはスペースに変更されます。<br>（オンにすることを強くお勧めします）');
    define($constpref . '_DIE_NULLBYTE', 'ヌルバイトが見つかった場合は終了します');
    define($constpref . '_DIE_NULLBYTEDSC', '終了文字 "\\0" は、悪意のある攻撃でよく使用されます。<br>（オンにすることを強くお勧めします）');
    define($constpref . '_DIE_BADEXT', '不正なファイルがアップロードされた場合は終了します');
    define($constpref . '_DIE_BADEXTDSC', '誰かが.phpのような不正な拡張子を持つファイルをアップロードしようとすると、このモジュールはXOOPSを終了します。<br>B-WikiまたはPukiWikiModにphpファイルを頻繁に添付する場合は、これをオフにします。');
    define($constpref . '_CONTAMI_ACTION', '汚染が見つかった場合の処理');
    define($constpref . '_CONTAMI_ACTIONDS', '誰かがシステムグローバル変数をXOOPSに汚染しようとした場合の処理を選択します。<br>（推奨オプションはブラックスクリーンです）');
    define($constpref . '_ISOCOM_ACTION', '孤立したコメントインが見つかった場合の処理');
    define($constpref . '_ISOCOM_ACTIONDSC', 'SQLインジェクション対策：<br>孤立した "/*" が見つかった場合の処理を選択します。<br>"サニタイズ" は、末尾にもう1つの "*/" を追加することを意味します。<br>（推奨オプションはサニタイズです）');
    define($constpref . '_UNION_ACTION', 'UNIONが見つかった場合の処理');
    define($constpref . '_UNION_ACTIONDSC', 'SQLインジェクション対策：<br>SQLのUNIONのような構文を選択します。<br>"サニタイズ" は、"union" を "uni-on" に変更することを意味します。<br>（推奨オプションはサニタイズです）');
    define($constpref . '_ID_INTVAL', 'idのような変数にintvalを強制する');
    define($constpref . '_ID_INTVALDSC', ' "*id" という名前のすべてのリクエストは整数として扱われます。<br>このオプションは、一部のXSSおよびSQLインジェクションから保護します。<br>このオプションをオンにすることをお勧めしますが、一部のモジュールで問題が発生する可能性があります。');
    define($constpref . '_FILE_DOTDOT', 'ディレクトリトラバーサルからの保護');
    define($constpref . '_FILE_DOTDOTDSC', 'ディレクトリトラバーサルのように見えるすべてのリクエストから ".." を削除します');

    define($constpref . '_BF_COUNT', 'ブルートフォース対策');
    define($constpref . '_BF_COUNTDSC', 'ゲストが10分以内にログインを試行できる最大回数を設定します。ログイン試行回数がこれを超えると、ゲストのIPアドレスは禁止されます。');

    define($constpref . '_BWLIMIT_COUNT', '帯域幅制限');
    define($constpref . '_BWLIMIT_COUNTDSC', '監視時間中のmainfile.phpへの最大アクセスを指定します。この値は、十分なCPU帯域幅を持つ通常の環境では0にする必要があります。10未満の数値は無視されます。');

    define($constpref . '_DOS_SKIPMODS', 'DoS/クローラーチェッカーから除外されるモジュール');
    define($constpref . '_DOS_SKIPMODSDSC', '|で区切られたモジュールのdirnameを設定します。このオプションは、チャットモジュールなどで役立ちます。');

    define($constpref . '_DOS_EXPIRE', '高負荷の監視時間（秒）');
    define($constpref . '_DOS_EXPIREDSC', 'この値は、高頻度のリロード（F5攻撃）および高負荷クローラーの監視時間を指定します。');

    define($constpref . '_DOS_F5COUNT', 'F5攻撃の不正カウント');
    define($constpref . '_DOS_F5COUNTDSC', 'DoS攻撃からの防御。<br>この値は、悪意のある攻撃と見なされるリロードカウントを指定します。');
    define($constpref . '_DOS_F5ACTION', 'F5攻撃に対する処理');

    define($constpref . '_DOS_CRCOUNT', 'クローラーの不正カウント');
    define($constpref . '_DOS_CRCOUNTDSC', '高負荷クローラーからの防御。<br>この値は、マナーの悪いクローラーと見なされるアクセス数を指定します。');
    define($constpref . '_DOS_CRACTION', '高負荷クローラーに対する処理');

    define($constpref . '_DOS_CRSAFE', '歓迎されるユーザーエージェント');
    define($constpref . '_DOS_CRSAFEDSC', 'ユーザーエージェントのperl正規表現パターン。<br>一致する場合、クローラーは高負荷クローラーとは見なされません。<br>例）/(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'なし（ログのみ）');
    define($constpref . '_OPT_SAN', 'サニタイズ');
    define($constpref . '_OPT_EXIT', 'ブラックスクリーン');
    define($constpref . '_OPT_BIP', 'IPを禁止する（制限なし）');
    define($constpref . '_OPT_BIPTIME0', 'IPを禁止する（モラトリアム）');

    define($constpref . '_DOSOPT_NONE', 'なし（ログのみ）');
    define($constpref . '_DOSOPT_SLEEP', 'スリープ');
    define($constpref . '_DOSOPT_EXIT', 'ブラックスクリーン');
    define($constpref . '_DOSOPT_BIP', 'IPを禁止する（制限なし）');
    define($constpref . '_DOSOPT_BIPTIME0', 'IPを禁止する（モラトリアム）');
    define($constpref . '_DOSOPT_HTA', '.htaccessによるDENY（実験的）');

    define($constpref . '_BIP_EXCEPT', '不正なIPとして登録されないグループ');
    define($constpref . '_BIP_EXCEPTDSC', 'ここで指定されたグループに属するユーザーは決して禁止されません。<br>（管理者オンにすることをお勧めします。）');

    define($constpref . '_DISABLES', 'XOOPSの危険な機能を無効にする');

    define($constpref . '_DBLAYERTRAP', 'DBレイヤートラッピングアンチSQLインジェクションを有効にする');
    define($constpref . '_DBLAYERTRAPDSC', 'ほとんどのSQLインジェクション攻撃はこの機能によってキャンセルされます。この機能には、databasefactoryからのサポートが必要です。セキュリティアドバイザリページで確認できます。この設定はオンにする必要があります。決して気軽にオフにしないでください。');
    define($constpref . '_DBTRAPWOSRV', 'アンチSQLインジェクションの_SERVERをチェックしない');
    define($constpref . '_DBTRAPWOSRVDSC', '一部のサーバーは常にDBレイヤートラッピングを有効にします。これにより、SQLインジェクション攻撃として誤った検出が行われます。このようなエラーが発生した場合は、このオプションをオンにします。このオプションはDBレイヤートラッピングアンチSQLインジェクションのセキュリティを弱めることを知っておく必要があります。');

    define($constpref . '_BIGUMBRELLA', 'アンチXSS（BigUmbrella）を有効にする');
    define($constpref . '_BIGUMBRELLADSC', 'これにより、XSS脆弱性を介したほとんどの攻撃から保護されます。ただし、100％ではありません');

    define($constpref . '_SPAMURI4U', 'アンチスパム：通常のユーザーのURL');
    define($constpref . '_SPAMURI4UDSC', '管理者以外のユーザーからのPOSTデータでこの数のURLが見つかった場合、POSTはスパムと見なされます。 0は、この機能を無効にすることを意味します。');
    define($constpref . '_SPAMURI4G', 'アンチスパム：ゲストのURL');
    define($constpref . '_SPAMURI4GDSC', 'ゲストからのPOSTデータでこの数のURLが見つかった場合、POSTはスパムと見なされます。 0は、この機能を無効にすることを意味します。');

    //3.40b
    define($constpref . '_ADMINHOME', 'ホーム');
    define($constpref . '_ADMINABOUT', 'バージョン情報');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'スパムフォーラムを停止する');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'www.stopforumspam.comデータベースに登録されているスパマーに対してPOSTデータをチェックします。 php CURLライブラリが必要です。');
    // 3.60
    define($constpref . '_ADMINSTATS', '概要');
    define($constpref . '_BANIP_TIME0DSC', '自動IP禁止の停止時間（秒）');
}
?>
