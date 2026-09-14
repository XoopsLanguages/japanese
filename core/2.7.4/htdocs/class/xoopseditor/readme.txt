xoopseditor は XOOPS 用のエディターの集合体を提供します

ユーザーガイド:

1 /xoopseditor/ の下にあるファイル xoops_version.php をチェックして、現在のファイルよりも新しいことを確認します。

2 /xoopseditor/ を /XOOPS/class/ にアップロード => /XOOPS/class/xoopseditor/:
  XOOPS/クラス/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/クラス/xoopseditor/fckeditor
  XOOPS/クラス/xoopseditor/koivi
  XOOPS/クラス/xoopseditor/textarea
  XOOPS/クラス/xoopseditor/tinymce

3 該当する場合は環境設定を構成します
3.1 ./dhtmlext(すべてのエディタ)/ language/: english.php に基づいてローカル言語ファイルを作成します
3.3 ./dhtmlext(すべてのエディタ)/editor_registry.php: エディタの構成を設定します。 order - エディタ選択が使用される場合の表示順序、無効の場合は 0。 nohtml - 非 HTML 構文で動作します
3.3 ./FCKeditor/module/: モジュール固有のアップロード権限、ストレージ、およびエディターのオプションが必要な場合に備えて、ファイルをモジュール フォルダーにコピーします。
3.3.1 ./FCKeditor/module/fckeditor.config.js: エディターのオプションについては、通常は変更する必要はありません。
3.3.2 ./FCKeditor/module/fckeditor.connector.php: ファイルの参照 (およびストレージのアップロード) 用のフォルダーを指定するには => XOOPS/uploads/XOOPS_FCK_FOLDER/、フォルダーを手動で作成する必要があります
3.3.3 ./FCKeditor/module/fckeditor.upload.php: アップロード権限とアップロードストレージを指定します
3.4 XOOPS/uploads/fckeditor/: FCKeditor が有効な場合にフォルダーを作成します。アップロード フォルダーが指定されていない場所からのアップロードに使用されます。
3.5 ./tinymce/tinymce/jscripts/: http://tinymce.moxiecode.com/language.php からローカル言語ファイルをダウンロードします。

4 ファイル名を確認します。ファイル名の大文字と小文字を区別するシステムの場合は、ファイル名が文字通り正しいことを確認してください。つまり、「FCKeditor」は「fckeditor」と同一ではありません。

5 開発ガイドについては /xoopseditor/sampleform.inc.php を確認してください
