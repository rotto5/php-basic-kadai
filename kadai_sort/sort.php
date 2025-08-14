<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        // $array = [15, 4, 18, 23, 10 ];

        // echo sort($array);
        // array_multisort(); 維持しないことが条件なので上のがよさそう？

        // $array = array(15, 4, 18, 23, 10);

        // if


        // sort($array);
        // rsort($array);

        // foreach ($array as $key => $val) {
        // echo "nums[" . $key . "] = " . $val . "\n";
        // }

        ?>
    </p>

    <p>
        <?php


            $nums = [15, 4, 18, 23, 10];
            
            sort_2way($nums, true);   // 昇順
            sort_2way($nums, false);  // 降順

            function sort_2way($array, $order) {

            if ($order) {
            echo '昇順にソートします。<br>';
            sort($array);
            } else {
            echo '降順にソートします。<br>';
            rsort($array);
            }

            foreach ($array as $value) {
            echo $value . '<br>';
            }

            }

            

        ?>
    </p>
</body>

</html>