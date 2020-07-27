標準入力
    $line = fgets(STDIN);

改行コードの削除
    $target = str_replace(array("\r\n","\r","\n"), '', $target);

標準入力,複数行の場合
    while ($line = fgets(STDIN)) {
       $tmp[] = trim($line);
    }

配列内を特定の文字で分解
    foreach ($tmp as $key => $value) {
       $array[] = explode(" ", $value);
    }


    $pattern = '/' . preg_quote($target, '/') . '/';
    $answer = preg_grep($pattern,$tmp);
