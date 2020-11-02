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

--
-- Dumping data for table `mtb_disp`
--

INSERT INTO `mtb_product_phase_type` (`id`, `name`, `RANK`) VALUES
(1, '三相', 0),
(2, '単相', 1),
(3, '未登録', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtb_disp`
--
ALTER TABLE `mtb_product_phase_type`
  ADD PRIMARY KEY (`id`);

alter table dtb_products add `phase_type` smallint(6) NOT NULL DEFAULT '3';
```

ec-cube2/data/Smarty/templates/admin/products/product.tpl

```html
        <tr>
            <th>単相・三相<span class="attention"> *</span></th>
            <td>
                <!--{html_radios name="status" options=$arrDISP selected=$arrForm.status separator='&nbsp;&nbsp;'}-->
            </td>
        </tr>
```