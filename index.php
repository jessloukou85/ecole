<?php
    include('cnxion.php');
    $msg ="";
    var_dump($_POST);
    if(isset($_POST['salle'])){
        $sal = $_POST['salle'];
        if(!empty($sal)){
            if(strlen($sal)>5){
                $msg = "nbre de caractere trop long";
            }else{
                $req = $db->prepare('INSERT into salle(`id`,`libele`) values (null,?)');
                $res= $req->execute(array($sal));
                if($res){
                    $msg = "Variete";
                }else{
                    $msg = 'Faussaire';
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $msg; ?></h1>
    <div>
        <form action="#" method="post">
            <label for="form-label">salle</label>
            <input type="text" name="salle">
            <button type="submit"> sauvegarder </button>
        </form>
    </div>
</body>
</html>