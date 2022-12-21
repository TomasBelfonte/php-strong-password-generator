<?php
$length = $_GET["inputLenght"] ?? '';

function generatePassword($length)
{
    $alfa_number = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $len_alfa_number = strlen($alfa_number);
    $pass_random = "";
    $i = 0;
    //vado a pescare i caratteri uno per uno finchè con raggiungo il valore di $length
    while ($i < $length) {
        //con rand trovo l'indice casuale
        $number_random = rand(0, $len_alfa_number - 1);
        $pass_random .= $alfa_number[$number_random];
        $i++;
    }
    return $pass_random;
}
// echo generatePassword($length);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>php-strong-password-generator</title>
</head>

<body>
    <div class="d-flex justify-content-center my-5">
        <h1 class="text-primary">PHP STRONG PASSWORD GENERATOR</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-3">
            <form action="" method="GET">
                <div class="my-3">
                    <label for="" class="form-label">inserisci la lunghezza della password</label>
                    <input type="number" class="form-control" name="inputLenght"></input>
                </div>
                <button class="btn btn-primary my-3">Esegui</button>
            </form>
        </div>

        <div>
            <h1 class="text-primary text-center">La password generata è la seguente: <?php echo generatePassword($length) ?></h1>
        </div>
    </div>
</body>

</html>