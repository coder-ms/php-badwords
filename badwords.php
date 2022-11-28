<?php

$paragraph = $_POST['paragraph'];

if (isset($_POST['banned'])) {
    $badWord = $_POST['banned'];
    $tabooWord = str_ireplace($badWord, '***', $paragraph);
} else {
    $bannedWord = '';
    $tabooWord = 'Non è stata censurata nessuna parola!';
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Censored Word</title>
</head>

<body>
    <div id="app">

        <div class="wrapperx">

            <div class="w-50 h-50 d-flex justify-content-center align-items-center">
                <div class="leftBox text-center">
                    <h4 class="text-center mb-2">FRASE DA CENSURARE</h4>
                    <span class="text-center mb-2">Lunghezza paragrafo:
                        <?php echo strlen($paragraph) . ' ' . 'caratteri'; ?>
                    </span>
                    <div class="text-center">
                        <?php echo $paragraph; ?>
                    </div>
                </div>
            </div>
            <div class="w-50 h-50 d-flex justify-content-center align-items-center">
                <div class="rightBox text-center">
                    <h4 class="text-center mb-2">PAROLA CENSURATA</h4>
                    <div class="text-center">
                        <?php echo $tabooWord; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>