<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                // 昇順にソート
                sort($array);
                echo "昇順にソートします。\n";
            } elseif ($order === FALSE) {
                // 降順にソート
                rsort($array);
                echo "降順にソートします。\n";
            } else {
                echo "不正な順序指定です。\n";
                return;
            }
        
            // ソートされた配列を1行ずつ表示
            foreach ($array as $value) {
                echo $value . "\n";
            }
        }
        
        // 指定された配列
        $nums = [15, 4, 18, 23, 10];
        
        // 昇順でソートと表示
        sort_2way($nums, TRUE);
        
        echo "\n"; // 区切り用の改行
        
        // 降順でソートと表示
        sort_2way($nums, FALSE);
        
        
        ?>
    </p>
</body>

</html>
