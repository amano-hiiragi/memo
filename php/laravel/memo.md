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