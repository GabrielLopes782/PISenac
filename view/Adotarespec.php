<?php
require_once '../controller/cadCao.php';
$cadCao = new cadCao();
$pet = null;
if (isset($_POST['AdotarPet'])) {
    $pet = $cadCao->getPetById($_POST['idPet']);
}
?>
<?php
require_once '../controller/cadDono.php';
$cadDono = new cadDono();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../estiloAdotar.css" />
        <title>Adotar</title>
    </head>
    <h1>Adotar um Animalzinho </h1>
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
    <div class="form" id="form">
    <form action="./controller/cadCao.php" id="TbCao" method="Post">
        <input type="hidden" name="idPet" value="<?php echo $pets[0]['idPet']; ?>"/>
        <label>Nome do Pet:</label>
        <input value="<?php echo $pet[0]['nomePet']; ?>" disabled  type="text" name="nome" id="nome"/>
        <br>
        <label>Tipo do Pet:</label>
        <input value="<?php echo $pet[0]['tpAnimal']; ?>" disabled type="text" name="telefone" id="telefone"/>
        <br>
        <label>Idade do Pet:</label>
        <input value="<?php echo $pet[0]['idadePet']; ?>" disabled type="text" name="endereco" id="endereco"/>
        <br>
        <label>Porte do Pet:</label>
        <input value="<?php echo $pet[0]['portePet']; ?>" disabled type="text" name="email" id="email"/>
        <br>
        <label>Vacinas do Pet:</label>
        <input value="<?php echo $pet[0]['VacinaPet']; ?>" disabled type="text" name="email" id="email"/>
        <br>
        
        <br>
        <br>
    </form>
    </div>
    <h2>Quero Adotar!</h2>
    <div class="form" id="form">
        <form action="<?php $cadDono->inserirDono();?>" id="formDono" method="Post">
                <label class="label">Seu Nome:</label>
                <input type="text" id="nomeDono" name="nomeDono" placeholder="Insira Seu Nome Aqui...">
                <br>
                <label class="label">Seu telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Insira seu telefone Aqui...">
                <br>
                <label class="label">Seu e-mail</label>
                <input type="email" id="email" name="email" placeholder="Insira seu e-mail Aqui...">
                <br>
                <input type="submit" value="Adotar!" name="Adotante" />
        </form>
        </div>
    </div>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>