# linuxと内容被るかも(要見直)

Transformでまた見直すと思うからそのときに

## 環境構築

### Apacheのインストールと自動起動

sudo yum -y install httpd
sudo systemctl start httpd.service
sudo systemctl enable httpd.service
sudo systemctl list-unit-files -t service

### Node.js

sudo yum install nodejs
sudo yum install npm

#### gatsby

npm install -g gatsby-cli

### phpインストール

参考

<https://qiita.com/nagahama/items/2fdc820791bee5d564ca>
<https://akamist.com/blog/archives/648>
