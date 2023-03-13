<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Password Generator</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div class=container>
    <h1 class="text-center mt-5">Generatore di password causale</h1>
    <form action="index.php" method="get" class="row g-5 justify-content-center">
      <div class="col-auto">
        <label for="passwordLength" id="passwordLength">Lunghezza della password:</label>
        <input type="number" name="passwordLength" min="1" max="50" required>
        <br>
        <input type="submit" class="btn btn-primary mt-3" value="Genera password casuale">
      </div>
    </form>

    <?php
      if(isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];
        $password = generateRandomPassword($passwordLength);
        echo "<h3>La tua password causale è: $password</h3>";
      }
      
      function generateRandomPassword($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-{}[]|\:;"<>,.?/';
        $password = '';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
          $password .= $characters[rand(0, $charactersLength - 1)];
        }
        return $password;
      }     
    ?>
  </div>
</body>

</html>