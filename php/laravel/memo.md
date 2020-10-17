# memo

## 最初に

- vscode拡張機能追加
  - <https://qiita.com/motuo/items/5c9b24606ef75535f882>

## 基礎

### プロジェクト作成

<https://tech.adseed.co.jp/laravel-project>

### コントローラー作成

```bash
php artisan make:controller HelloController<コントローラー名>
```

### ルーティング設定

/routes/web.php

### モデル作成

``` bash
php artisan make:model Model<モデル名>
```

テーブル名は複数形で紐づく: models

### Laravel8

#### エラー箇所

```laravel8
Target class [〇〇Controller] does not exist.
```

web.php

```php
Route::get('hello','HelloController@index');
```

HelloController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return 'test';
    }
}
```

#### 原因

ルーティング記述に関して
公式ドキュメント<https://laravel.com/docs/8.x/routing>

### factory

<https://qiita.com/Tomochan_taco/items/3d6574438eeb79bf7f29?>

test DB作成参考
<https://qiita.com/ucan-lab/items/42c1814d8bd69895374c>