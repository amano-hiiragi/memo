# Git

1. <https://www.amazon.co.jp/Web%E5%88%B6%E4%BD%9C%E8%80%85%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AEGitHub%E3%81%AE%E6%95%99%E7%A7%91%E6%9B%B8-%E3%83%81%E3%83%BC%E3%83%A0%E3%81%AE%E5%8A%B9%E7%8E%87%E3%82%92%E6%9C%80%E5%A4%A7%E5%8C%96%E3%81%99%E3%82%8B%E5%85%B1%E5%90%8C%E9%96%8B%E7%99%BA%E3%83%84%E3%83%BC%E3%83%AB-Web%E5%88%B6%E4%BD%9C%E8%80%85%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E6%95%99%E7%A7%91%E6%9B%B8%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-%E5%A1%A9%E8%B0%B7-%E5%95%93-ebook/dp/B00QPSXY1I/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=github%E3%81%AE%E6%95%99%E7%A7%91%E6%9B%B8&qid=1596410500&sr=8-1>

## 今後気をつけてやること

1. readmeの作成
2. commit時には作業内容の概要を
3. Milestones,isssueの利用
4. GitHub Flowの利用
   - <https://www.atmarkit.co.jp/ait/articles/1708/01/news015.html>

## よく利用する

### 違うブランチで実装してしまった変更内容を別のブランチへ移動する

変更内容を一時的に保存できる。

```git
git stash
```

保存したものを確認

```git
git stash list
stash@{0}: WIP on master: 9c77791 add
stash@{1}: WIP on master: 9c77791 add
stash@{2}: WIP on master: 9c77791 add
```

反映したいブランチで以下を実行

```git
git stash apply
git stash apply stash@{0}
git stash apply 0
```

stashしたものを削除

```git
git stash clear
```

### GitHub ショートカットの表示

Shift + /

### commitメッセージの書き方

[複数行記述する](https://qiita.com/mimickn/items/586eb64e9da5b5c63e4f)

### [差分ファイルを抽出する](https://qiita.com/kaminaly/items/28f9cb4e680deb700833)

```git
git archive --format=zip --prefix=root/ HEAD `git diff --diff-filter=d --name-only HEAD^ HEAD` -o archive.zip
```
