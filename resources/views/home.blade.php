<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Lange Assados</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Principal</a></li>
        <li><a href="#">Cadastros</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-5">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
           <p>Frango Simples</p>
           <h1>8</h1>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p>Frango Recheado</p>
            <h1>12</h1>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p>Maionese</p>
            <h1>2</h1>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p>Farofa</p>
            <h1>2</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <p>Frango Bacon</p>
            <h1>2</h1>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p>Frango Aipim</p>
            <h1>5</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <p>Frango Bacon</p>
            <h1>2</h1>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p>Frango Aipim</p>
            <h1>5</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-7 well">
      <div class="form">
        <h3>VENDA</h3>
        <form>
            <div class="form-group">
              <input type="text" class="form-control" id="produto" value="Digite aqui o código do produto..">
            </div>
        </form>
      </div>
      <div class="panel panel-primary">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><center>Produto</center></th>
              <th><center>Preço</center></th>
              <th><center>Qtd</center></th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr class="info">
              <td>Frango Simples</td>
              <td>R$ 12,00</td>
              <td>5</td>
              <td>R$ 60,00</td>
            </tr>
            <tr class="default">
              <td>Frango Recheado</td>
              <td>R$ 15,00</td>
              <td>1</td>
              <td>R$ 15,00</td>
            </tr>
            <tr class="info">
              <td>Farofa</td>
              <td>R$ 5,00</td>
              <td>2</td>
              <td>R$ 10,00</td>
            </tr>
            <tr class="default">
              <td>Maionese</td>
              <td>R$ 5,00</td>
              <td>3</td>
              <td>R$ 15,00</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="panel panel-primary">
        <table class="table table-bordered">
            <tr class="info">
              <td><b>Total</b></td>
              <td>R$ 100,00</td>
            </tr>
            <tr class="info">
              <td><b>Desconto</b></td>
              <td>R$ 10,00</td>
            </tr>
            <tr>
              <td class="success"><b>Total a pagar</b></td>
              <td><b>R$ 90,00</b></td>
            </tr>
        </table>
      </div>
    </div>

    <div class="col-sm-7 well">
      <div>
        <p><a href="#">Últimas Vendas</a></p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><center>Data</center></th>
              <th><center>Cliente</center></th>
              <th><center>Total</center></th>
              <th><center>Desconto</center></th>
              <th>Total a pagar</th>
            </tr>
          </thead>
          <tbody>
            <tr class="default">
              <td>25/03/2016</td>
              <td>João da Silva</td>
              <td>R$ 50,00</td>
              <td>R$ 5,00</td>
              <td>R$ 45,00</td>
            </tr>
            <tr class="default">
              <td>25/03/2016</td>
              <td>Juliano Silveira</td>
              <td>R$ 15,00</td>
              <td>R$ 0,00</td>
              <td>R$ 15,00</td>
            </tr>
            <tr class="default">
              <td>25/03/2016</td>
              <td>Joana</td>
              <td>R$ 15,00</td>
              <td>R$ 0,00</td>
              <td>R$ 15,00</td>
            </tr>
            <tr class="default">
              <td>25/03/2016</td>
              <td>Paulo Henrique</td>
              <td>R$ 15,00</td>
              <td>R$ 0,00</td>
              <td>R$ 15,00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
