<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array,$order){
            if ($order === true) {
                sort($array);
            }else {
                rsort($array);
                }

                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }

            echo "昇順にソートします。".'<br>';
            sort_2way($nums,true);
            echo "降順にソートします。".'<br>';
            sort_2way($nums,false);
        ?>
    </p>
</body>

</html>
