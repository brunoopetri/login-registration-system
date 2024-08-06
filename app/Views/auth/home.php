<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acesso</title>
  <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <div class="outer-container">
        <h1>Escolha o acesso</h1>
        <div class="inner-container">
            <a href="/login">Login</a>
            <a href="/register">Registrar</a>
            <a href="<?php echo $authUrl; ?>" class="google-login">Sign in Google</a>
          
        </div>
    </div>
</body>
</html>



