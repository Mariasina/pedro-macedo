<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Log-in
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- linkando css -->
    
    <link href="css/login.css" rel="stylesheet">

    <!-- Linkando css e js com Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"> </script>

	<!-- Fim do link do bootstrap -->
    
  </head>

<body class="text-center">
  <div class="corpo"> 
<main class="form-signin w-50 m-auto">
  <form action="bd/login_.php" method="POST">
    <!-- logo pedro macedo -->
    <a href = "index.php">
       <img class="mb-4" src="img/pedromacedo.png" alt="" width="100" height="100">
    </a>
    <h1 class="h3 mb-3 fw-normal">
      Faça log-in
    </h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control w-100" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput" class="l1">
        Endereço de Email
      </label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control w-100" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword" class="l1">
        Senha
      </label>
    </div><br>
    <button class="w-50 btn btn-lg btn-primary" type="submit">
      Entrar
    </button>
    <a href="cadastro.html"><p class="mt-5 mb-3 text-muted">
       Cadastre-se
    </p></a>
  </form>
</main>
</div>

</body>
</html>
