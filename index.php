<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>php-badwords</title>
</head>
<body>
  <header>
    <div class="container">
      <h1>Form Bad-words</h1>
    </div>
  </header>
  <main>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="BadWords.php" method="GET">

        <legend>BadWords [GET]</legend>

        <div class="mb-3">
          <label for="" class="form-label">Nome</label>
          <input type="text" class="form-control" name="Name">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nome</label>
          <textarea name="Message" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>
  </main>
</body>
</html>