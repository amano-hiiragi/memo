---
path: '/nginx-1'
date: '2020-10-07'
tags: ['laravel', 'PHPUnit']
status: 'published'
title: 'PHPUnit 覚書'
description: 'LaravelでのPHPUnitに関する覚書。 よく使うアサーションメソッド'
---

## Assertions

参考

- PHPUnit
  - 日本語: <https://phpunit.readthedocs.io/ja/latest/assertions.html#appendixes-assertions>
  - Engrish: <https://phpunit.readthedocs.io/en/latest/assertions.html#appendixes-assertions>
- Laravel
  - <https://readouble.com/laravel/8.x/ja/http-tests.html>

### HTTPテスト

'/'にGETメソッドでアクセスする。
test ステータスコード200のHTTPレスポンスが返ってくる。

```php
$response = $this->get('/');
$response->assertStatus(200);
```
