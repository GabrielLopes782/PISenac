<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doar Animais</title>
  <link rel="stylesheet" type="text/css" href="../estiloDoar.css" />
</head>

<body>
  <header>
    <h1>Adotar Animais</h1>
    <h3>Página destinada a você que quer adotar um animalzinho</h3>
  </header>
  <?php
  require_once '../controller/cadCao.php';
  $cadCao = new cadCao();
  $listCao = $cadCao->getCao();
  ?>
  <div class="container">
    <div class="menu">
      <nav>
        <ul>
          <li>
            <a href="../index.html">Home</a>
          </li>
          <li>
            <a href="Adotar.php">Adotar</a>
          </li>
          <li>
            <a href="Doar.php">Doar</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="table">
      <table>
        <!--cria Tabela-->
        <thead>
          <!-- Cria Cabeçalho da Tabela-->
          <tr>
            <!-- Cria Linha da Tabela-->
            <th>Nome</th>
            <th>Tipo de Animal</th>
            <th>Idade</th>
            <th>Porte</th>
            <th>Vacina</th>
            <th>Raça</th>
            <th>Sexo</th>
            <th>Descrição</th>
            <th>Imagens</th>
            <!--cria Cabeçalho-->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($listCao as $Cao) : ?>
            <tr>
              <td><?php echo $Cao['nomePet']; ?> </td>
              <td> <?php echo $Cao['tpAnimal']; ?> </td>
              <td> <?php echo $Cao['idadePet']; ?> </td>
              <td> <?php echo $Cao['portePet']; ?> </td>
              <td> <?php echo $Cao['VacinaPet']; ?> </td>
              <td> <?php echo $Cao['racaPet']; ?> </td>
              <td> <?php echo $Cao['sexoPet']; ?> </td>
              <td> <?php echo $Cao['descricaoPet']; ?> </td>
              <td><img src="['img1'];" /> </td>
              <td><img src="['img2'];"/>  </td>
              <td><img src="['img3'];"/></td>
              <td>
                <form action="adotarespec.php" method="POST">
                  <input type="hidden" name="idPet" value="<?php echo $Cao["idPet"]; ?>" />
                  <input type="submit" name="AdotarPet" value="Adotar" />
                </form>
              </td>
            </tr>
          <?php
          endforeach;
          ?>
        </tbody>
    </div>
  </div>
</body>

</html>