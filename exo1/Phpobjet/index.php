<?php require("User.php"); ?>

<html>
    <head>
    </head>
    <body>
        <?php echo"Exo1";
        
            $Utilisateur1 = new User(" Henri","1234");
            //$Utilisateur1->setNom(" Henri");
            $Utilisateur1->afficherNom();

           ?>

           
                <form method="POST" action="index.php">
            <label> Utilisateur </label>
                <input type="text" name="champ1">
            <label> Mot de passe </label>
                <input type="text" name="champ2">
                <input type="submit" value="Valider"/>
        </form>
        <?php
        if (isset ($_POST['champ1'])){
            $isConnect = $Utilisateur1->verifmdp($_POST['nom'],$_POST['MDP']);
           if ($isConnect){echo "connecté";} else{echo "erreur";}
         }

        ?>
    </body>
</html>

<pre>
<?php require("User.php"); ?>

<html>
    <head>
    </head>
    <body>
        <?php echo"Exo1";
        
            $Utilisateur1 = new User(" Henri","1234");
            //$Utilisateur1->setNom(" Henri");
            $Utilisateur1->afficherNom();

           ?>

           
                <form method="POST" action="index.php">
            <label> Utilisateur </label>
                <input type="text" name="champ1">
            <label> Mot de passe </label>
                <input type="text" name="champ2">
                <input type="submit" value="Valider"/>
        </form>
        <?php
        if (isset ($_POST['champ1'])){
            $isConnect = $Utilisateur1->verifmdp($_POST['nom'],$_POST['MDP']);
           if ($isConnect){echo "connecté";} else{echo "erreur";}
         }

        ?>
    </body>
</html>
</pre>