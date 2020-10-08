# linux bashとか

## 圧縮,解凍

圧縮  
tar -zcvf xxxx.tar.gz directory  
解凍  
tar -zxvf xxxx.tar.gz  

mysqldump -u user -p db > dump_2020.dump

## 検索

find [検索対象フォルダのパス] -type f -name "*[検索したい文字列]*"  
find . -type f -name "*result_profile*"  

grep [検索したい文字列] -rl [検索対象フォルダのパス]  
grep "result_profile" -rl .  

## 置換

grep -l '置換対象の文字列' ./* | xargs sed -i.bak -e 's/置換対象の文字列/置換後の文字列/g'

## ファイル作成

echo "text" >> README.md

## ファイル同期

rsync [オプション] 転送元パス [転送先パス]
rsync <オプション> -e 'ssh -i <EC2キーペアの秘密鍵>' <ローカルディレクトリ> <リモートディレクトリ>
rsync -av -e 'ssh -i ~/.ssh/ec2.pem' ~/files/ ec2-user@1.2.3.4:files/

## ターミナルの出力をクリップボードにコピー

pbcopy
入力

pbcopy < ファイル名


### lshw -short

ハードウェアの一覧