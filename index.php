<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crypto guesser</title>
</head>
<body>
    <header>
        <h1>
            guess crypto
        </h1>
    </header>
    <form action="index.php" method="post">
        <h3>
            wirte crypto tu guess
        </h3>
        <br>
        <input name="crypto">
        <button>
            submit
        </button>
    </form>
</body>
</html>
<?php
    $crypto = filter_input(INPUT_POST,"crypto",FILTER_SANITIZE_SPECIAL_CHARS);
    if($crypto == "bitcoin" || $crypto == "ethereum" || $crypto == "toncoin" || $crypto == "solana" || $crypto == "XRP" || $crypto == "doge" || $crypto == "cardano"){
        echo "you guessed correctly";
    }
    else{
        echo "your guess is bullshit";
    }
?>