<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

      // クラスの作成
      class Food {
        // プロパティの定義
        private $name;
        private $price;

        // メソッドの定義
        public function show_price() {
        echo $this -> price . '<br>';
        }

        // コンストラクタを定義
        public function __construct(string $name, int $price){
          $this -> name = $name;
          $this -> price = $price;
        }
      }

      class Animal {
        // プロパティの定義
        private $name;
        private $height;
        private $weight;

        // メソッドの定義
        public function show_height() {
        echo $this -> height . '<br>';
        }

        // コンストラクタを定義
        public function __construct(string $name, int $height, int $weight){
          $this -> name = $name;
          $this -> height = $height;
          $this -> weight = $weight;
        }
      }

        // インスタンス化する
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // インスタンスの各プロパティの値を出力する
          // 1. オブジェクト全体を出力（print_r）
          // 2. 個別の値はメソッド(show_〇〇)で後から出力
        print_r($food);
        print_r($animal);
        echo '<br>';  // オブジェクト出力と個別値の間に改行
        $food->show_price();  // 個別の値(250)
        $animal->show_height();  // 個別の値(60)
          

    ?>
  </p>
</body>

</html>
