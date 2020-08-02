# test

## DB作成
    CREATE DATABASE データベース名;
    GRANT ALL ON データベース名.* to ユーザ名@localhost;
    FLUSH PRIVILEGES;
    SET PASSWORD FOR ユーザ名@localhost=password('パスワード');

## よく使う
show databases;
show tables;
show full tables;
show tables like 'u%';

show columns from 'テーブル名';
show columns from;
