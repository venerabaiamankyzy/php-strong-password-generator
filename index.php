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
    <h1>Generatore di password causale</h1>
    <form action="index.php" method="GET" class="row g-3">
      <div class="col-auto">
        <label for="passwordLength" id="passwordLength">Lunghezza della password:</label>
        <input type="number" name="passwordLength" min="1" max="50" required>
        <br>
        <button type="button" class="btn btn-primary mt-3">Genera password casuale</button>
      </div>
    </form>
  </div>
</body>

</html>