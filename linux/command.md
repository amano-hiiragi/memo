# linux bashとか

## 圧縮,解凍

圧縮
tar -zcvf xxxx.tar.gz directory
解凍
tar -zxvf xxxx.tar.gz

## 検索

find [検索対象フォルダのパス] -type f -name "*[検索したい文字列]*"  
find . -type f -name "*result_profile*"

grep [検索したい文字列] -rl [検索対象フォルダのパス]
grep "result_profile" -rl .