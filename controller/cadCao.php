    <?php
    class cadCao{

    
 public function inserirCao() {
        if (isset($_POST['enviar'])) {
            
            $nome = $_POST['nomePet'];
            $tipoAnimal = $_POST['tpAnimal'];
            $idade = $_POST['idade'];
            $porte = $_POST['porte'];
            $vacina = $_POST['vacina'];
            $raca = $_POST['raca'];
            $sexo=$_POST['sexo'];
            $descricao=$_POST['Descricao'];
            $img1=$_POST['img1'];
            $img2=$_POST['img2'];
            $img3=$_POST['img3'];
            $pdo = require './pdo/connection.php';
            $sql = "insert into pet (nomePet, tpAnimal, idadePet, portePet, VacinaPet, racaPet, sexoPet, descricaoPet, img1, img2, img3) values (?,?,?,?,?,?,?,?,?,?,?)";
            $Statement = $pdo->prepare($sql);
            $Statement->bindParam(1, $nome, PDO::PARAM_STR);
            $Statement->bindParam(2, $tipoAnimal, PDO::PARAM_STR);
            $Statement->bindParam(3, $idade, PDO::PARAM_STR);
            $Statement->bindParam(4, $porte, PDO::PARAM_STR);
            $Statement->bindParam(5, $vacina, PDO::PARAM_STR);
            $Statement->bindParam(6, $raca, PDO::PARAM_STR);
            $Statement->bindParam(7, $sexo, PDO::PARAM_STR);
            $Statement->bindParam(8, $descricao, PDO::PARAM_STR);
            $Statement->bindParam(9, $img1, PDO::PARAM_LOB);
            $Statement->bindParam(10, $img2, PDO::PARAM_LOB);
            $Statement->bindParam(11, $img3, PDO::PARAM_LOB);
            $Statement->execute();
            header("location: index.html");
            unset($Statement);
            unset($pdo);
        }
        
    }
    public function getCao() {
        $pdo = require_once './pdo/connection.php';
        $sql = "select * from Pet ";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
        unset($sth);
        unset($pdo);
    }
    public function cadAdotante(){
        if(isset($_POST['enviar2'])){
            
        }
    }
    
    public function getPetById($idPet) {
        $pdo = require_once './pdo/connection.php';
        $sql = "select  idPet, nomePet, tpAnimal, idadePet, portePet, VacinaPet, racaPet, sexoPet, descricaoPet from pet where idPet= ?";
        $sth = $pdo->prepare($sql);
        $sth->execute([$idPet]);
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }
}
    ?>
    