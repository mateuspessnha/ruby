<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/custom.css" rel="stylesheet">
  <title>Ruby Consultoria Linguistica</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/servicos">Ruby Consultoria Lingustica</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/servicos">Lista de Servicos</a></li>
        <li><a href="/servicos/novo">Cadastrar Novo Servico</a></li>
      </ul>
    </div>
  </nav>
  @yield('conteudo')
  <footer class="footer">
    <p>Add Ruby: instagram | facebook | youtube</p>
  </footer>
  </div>
</body>
</html>
