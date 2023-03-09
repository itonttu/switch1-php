<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = $_POST['animal'];
    $str = htmlspecialchars( $str, ENT_QUOTES, 'UTF-8' );

    echo $str,'です。<br>',PHP_EOL;
    switch ($str) {
        case '犬':
            echo'ワンと鳴きます';# code...
            break;
        case '猫':
            echo'ニャーと鳴きます';# code...
            break;
        case '牛':
            echo'モーと鳴きます';# code...
            break;
        default:
        echo'どのように鳴くのかな？';# code...
    }
    ?>
    <a href="switch1.html" autofocus>戻る</a>
</body>
</html>