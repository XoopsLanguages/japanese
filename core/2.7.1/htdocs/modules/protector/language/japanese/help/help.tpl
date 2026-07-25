<div id="help-template" class="outer">
    <h1 class="head">ヘルプ: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Protector の管理に戻る"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Protector の管理に戻る"/></a></h1>
    <h4 class="odd">説明</h4>

    <p class="even">Protector は、様々な悪意のある攻撃から XOOPS CMS を防御するためのモジュールです。</p>
    <h4 class="odd">インストール/アンインストール</h4>

    <p>まず、まだ設定していない場合は、mainfile.php に XOOPS_TRUST_PATH を定義します。</p>
    <br>

    <p>アーカイブ内の html/modules/protector を XOOPS_ROOT_PATH/modules/ にコピーします。</p>

    <p>アーカイブ内の xoops_trust_path/modules/protector を XOOPS_TRUST_PATH/modules/ にコピーします。</p>
    <br>

    <p>XOOPS_TRUST_PATH/modules/protector/configs のパーミッションを書き込み可能にします。</p>
    <h4 class="odd">= レスキュー方法 =</h4>

    <p class="even">Protector から禁止された場合は、XOOPS_TRUST_PATH/modules/protector/configs/ の下のファイルを削除するだけです。</p>
    <h4 class="odd">このアーカイブに含まれるフィルタープラグインの紹介</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        アンチスパムプラグイン。
        <br>
        RBL に登録されている IP からのすべての投稿は拒否されます。
        <br>
        このプラグインは、投稿のパフォーマンス、特にチャットモジュールのパフォーマンスを低下させる可能性があります。
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        アンチスパムプラグイン。
        <br>
        http:BL に登録されている IP からのすべての投稿は拒否されます。
        <br>
        使用する前に、http://www.projecthoneypot.org/ から HTTPBL_KEY を取得し、フィルターファイルに設定してください。
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        アンチスパムプラグイン。
        <br>
        マルチバイト文字を含まない投稿は拒否されます。
        <br>
        このプラグインは、日本語、繁体字中国語、簡体字中国語、韓国語のサイトのみを対象としています。
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        ゲストによって送信されたすべての投稿データは、HTMLPurifier によって浄化されます。
        <br>
        ゲストに HTML の投稿を許可する場合は、これを有効にすることを強くお勧めします。
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        このプラグインは、あなたのサイトをロボットのユーザー登録から防ぎます。
        <br>
        ビジターのブラウザで JavaScript が動作している必要があります。
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        指定回数以上間違ったパスワードを試したビジターへのメッセージを指定します。
        <br>
        *_message.php という名前のすべてのプラグインは、拒否されたアクセスに対するメッセージを指定します。
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        帯域幅制限が残念ながら機能した場合、このプラグインはそれを Apache の error_log に記録します。
    </p>

    <p>*_errorlog.php という名前のすべてのプラグインは、いくつかの情報を Apache の error_log に記録します。</p>
    <h4 class="odd">チュートリアル</h4>

    <p class="even">チュートリアルは近日公開予定です。</p>
</div>
