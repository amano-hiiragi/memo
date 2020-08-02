# linuxと内容被るかも(要見直)

Transformでまた見直すと思うからそのときに

## 環境構築

### Apacheのインストールと自動起動

sudo yum -y install httpd
sudo systemctl start httpd.service
sudo systemctl enable httpd.service
sudo systemctl list-unit-files -t service

## bash?かshellか移動予定

sudo vi ~/.ssh/config
viで以下のように追記します。

Host blog_sample
  User ec2-user
  HostName ec2-54-199-188-193.ap-northeast-1.compute.amazonaws.com
  Port 22
  IdentityFile ~/.ssh/blog_sample.pem

## phpインストール

https://qiita.com/nagahama/items/2fdc820791bee5d564ca
https://akamist.com/blog/archives/648