<?php
$text = strtolower($_POST['paragraph']);
$badWord = strtolower($_POST['censor']);
$textLength = strlen($text);
$censoredText = str_replace($badWord, "*****", $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.scss">
  <title>Bad Word Censored</title>
</head>

<body>
  <div class="container text-start">
    <div class="row">
      <div class="col-12 pt-5">
        <div class="card">
          <h3 class=""><span class="fw-bolder">Il testo inserito è:</span>
            <?php echo $censoredText ?>
          </h3>
          <h4> <span>Hai inserito:</span>
            <?php echo $textLength ?>
            <span>caratteri</span>
          </h4>


          <p>
            <?php echo "La parola censurata è: $badWord" ?>
          </p>
        </div>

      </div>
    </div>

  </div>
</body>

</html>