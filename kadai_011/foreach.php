<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>
<body>

<?php
// 連想配列の定義
$info = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
];

// foreach文で配列をループし、キーと値を出力
foreach ($info as $key => $value) {
    echo $key . ':' . $value . "<br>";
}
?>

</body>
</html>


