## [差分ファイルを抽出する](https://qiita.com/kaminaly/items/28f9cb4e680deb700833)

    git archive --format=zip --prefix=root/ HEAD `git diff --diff-filter=d --name-only HEAD^ HEAD` -o archive.zip

まずは、git archive について。
--format=zip を付けるとzipで固めてくれます。
--prefix=root/ は抽出したファイルをrootディレクトリに入れた状態にしてくれます。
-o archive.zip で出力先と出力名を指定しています。
HEAD は抽出元のコミットで、
抽出したいファイルやディレクトリをgit diffを使って指定しています。

git diff は --name-only を付けると、ファイルのパスを返してくれるのです。
--diff-filter=d オプションで不要な削除の差分をフィルタリングすると、
差分ファイルに必要なファイルパス一覧が取得できます。
例では、HEAD^ と HEAD のコミット間での差分のファイル一覧が返るので、
それを git archive がzipにしてくれるというわけです。