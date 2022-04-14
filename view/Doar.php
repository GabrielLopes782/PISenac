<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doar Animais</title>
    <link rel="stylesheet" type="text/css" href="estiloDoar.css" />
  </head>
  <body>
    <header>
      <h1>Doar Animais</h1>
      <h3>Página destinada a você que quer doar seu animalzinho</h3>
    </header>
    <?php
    require_once './controller/cadCao.php';
    $cadCao = new cadCao();
    ?>
    <div class="container">
      <div class="menu">
        <nav>
          <ul>
            <li>
              <a href="index.html">Home</a>
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
      <div class="form">
        <form id="cadastrarCao" action="<?php $cadCao->inserirCao(); ?>" method="post">
          <label>Nome do Animal:</label>
          <input type="text" id="nomePet" name="nomePet" required />
          <br />
          <label>Tipo De animal:</label>
          <select name="tpAnimal" id="tpAnimal">
            <option value="">Selecione</option>
            <option value="Gato">Gato</option>
            <option value="Cachorro">Cachorro</option>
          </select>
          <br />
          <label>Idade:</label>
          <input type="text" id="idade" name="idade" />
          <br />
          <label>Porte:</label>
          <select name="porte" id="porte" name="porte">
            <option value="" class="">Selecione</option>
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Médio</option>
            <option value="Grande">Grande</option>
          </select>
          <br />
          <label>O animalzinho é vacinado? Quais vacinas?</label>
          <input type="text" id="vacina" name="vacina" />
          <br />
          <label>Raça:</label>
          <input type="text" name="raca" id="raca" />

          <br />
          <label>Sexo:</label>
          <select name="sexo" id="sexo">
            <option value="" class="">Selecione</option>
            <option value="M">Macho</option>
            <option value="F">Fêmea</option>
          </select>
          <br />
          <label>Descrição:</label>
          <br />
          <textarea
            placeholder="Escreva Aqui..."
            name="Descricao"
            required
            id="Descricao"
            rows="3"
            cols="20"
          ></textarea>
          <br />
          <label>Fotos do Animalzinho(Escolha até 3)</label>
          <input class="input" type="file" id="img1" name="img1"/>
          <br/>
          <input class="input" type="file" id="img2" name="img2"/>
          <br/>
          <input class="input" type="file" id="img3" name="img3"/>
          <br/>
          <input type="submit" id="enviar" name="enviar">
          <input type="reset" id="reiniciar" name="reiniciar">
        </form>
      </div>
    </div>
  </body>
</html>