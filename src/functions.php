<?php

// 分割したファイルパスを配列に追加
$function_files = [
    '/functions/file.php',
    '/functions/init.php',
    '/functions/pagination.php',
    '/functions/thumbnail.php',
];

foreach ($function_files as $file) {
    if ((file_exists(__DIR__ . $file))) { // ファイルが存在する場合
        // ファイルを読み込む
        locate_template($file, true, true);
    } else { // ファイルが見つからない場合
        // エラーメッセージを表示
        trigger_error("`$file`ファイルが見つかりません", E_USER_ERROR);
    }
}
