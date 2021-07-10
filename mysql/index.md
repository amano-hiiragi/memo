# mysql

## DB作成

```mysql
    CREATE DATABASE データベース名;
    GRANT ALL ON データベース名.* to ユーザ名@localhost;
    FLUSH PRIVILEGES;
    SET PASSWORD FOR ユーザ名@localhost=password('パスワード');
```

## よく使う

mysqldump -u user -p db > dump_2020.dump
mysql -u user -p -D DBname < dumpfilename.sql

show databases;
show tables;
show full tables;
show tables like 'u%';

show columns from 'テーブル名';
show columns from;

ALTER TABLE `table_name` MODIFY `user_id` INT(数値) NOT NULL AUTO_INCREMENT;

FOREIGN KEY 貼り替え

```mysql
mysql> SHOW ENGINE INNODB STATUS\G


GRANT ALL ON *.* TO user;