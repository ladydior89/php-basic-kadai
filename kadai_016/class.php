<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
<?php
// Foodクラスの定義
class Food {
    // プロパティの定義 (private)
    private $name;
    private $price;

    // コンストラクタでプロパティに値を代入
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }

    // オブジェクトの文字列表現をカスタマイズ
    public function __toString() {
        return "Food Object([name:Food:private]=>" . $this->name . "[price:Food:private]=>" . $this->price . ")";
    }
}

// Animalクラスの定義
class Animal {
    // プロパティの定義 (private)
    private $name;
    private $height;
    private $weight;

    // コンストラクタでプロパティに値を代入
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }

    // オブジェクトの文字列表現をカスタマイズ
    public function __toString() {
        return "Animal Object([name:Animal:private]=>" . $this->name . "[height:Animal:private]=>" . $this->height . "[weight:Animal:private]=>" . $this->weight . ")";
    }
}

// Foodクラスを元にインスタンスを作成
$potato = new Food("potato", 250);

// Animalクラスを元にインスタンスを作成
$dog = new Animal("dog", 60, 5000);

// インスタンスの出力
echo $potato . "<br>";
echo $dog . "<br>";

// Foodクラスのメソッドを実行
$potato->show_price();

// Animalクラスのメソッドを実行
$dog->show_height();
?>

</p>
    
</body>
</html>
