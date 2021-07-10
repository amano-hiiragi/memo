# eccube-2

## 項目追加時,対応箇所

### 商品

DataBase
dtb_products

```sql
alter table dtb_products add `phase_type` smallint(6) NOT NULL DEFAULT '3';
```

```sql
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2020 at 02:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eccube2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mtb_product_XXX`
--

CREATE TABLE `mtb_product_phase_type` (
  `id` smallint(6) NOT NULL DEFAULT '0',
  `name` text,
  `RANK` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
