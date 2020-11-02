# mysql

## DB作成

```mysql
    CREATE DATABASE データベース名;
    GRANT ALL ON データベース名.* to ユーザ名@localhost;
    FLUSH PRIVILEGES;
    SET PASSWORD FOR ユーザ名@localhost=password('パスワード');
```

## よく使う

show databases;
show tables;
show full tables;
show tables like 'u%';

show columns from 'テーブル名';
show columns from;

ALTER TABLE `table_name` MODIFY `user_id` INT(数値) NOT NULL AUTO_INCREMENT;

### 

FOREIGN KEY 貼り替え

```mysql
mysql> SHOW ENGINE INNODB STATUS\G

~~~省略~~~
------------------------
LATEST FOREIGN KEY ERROR
------------------------
2020-11-02 10:17:57 0x70000b07c000 Error in foreign key constraint of table eccube3_sitemap_test2/dtb_shipment_item:
there is no index in referenced table which would contain
the columns as the first columns, or the data types in the
referenced table do not match the ones in table. Constraint:
,
  CONSTRAINT `FK_57C3C03921B06187` FOREIGN KEY (`product_class_id`) REFERENCES `dtb_product_class` (`product_class_id`)
The index in the foreign key in table is IDX_57C3C03921B06187
Please refer to http://dev.mysql.com/doc/refman/5.7/en/innodb-foreign-key-constraints.html for correct foreign key definition.
```