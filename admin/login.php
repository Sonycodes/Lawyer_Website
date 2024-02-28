<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- CSS Custom -->
  <link rel="stylesheet" href="style.css">
  <title>Mapage</title>
</head>

<body>
<h1 class="m-3">
Bienvenue à ton espace admnistrateur
</h1>
  <form action="login_conn.php" class="container" method="post">
    <div class="mb-3 col-6">
      <label for="username" class="form-label"> Username</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else wink wink.</div>
    </div>
    <div class="mb-3 col-6">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>

</html>