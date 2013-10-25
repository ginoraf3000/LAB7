<!DOCTYPE html>
<html>
<head>
    <title>Les Animaux</title>
    <meta charset="utf-8"/>
</head>
<body>
<?php
abstract class Animal
{
    //Attibuts
    public $nbPattes;
    public $genre;
    public $couleur;
    public $energie = 100;
    public $nom;

    //Méthodes

    function manger()
    {
        return $this->nom . ", mange !";
    }

    function diminutionEnergie($moins)
    {
        $this->energie -= $moins;
        if ($this->energie <= 0) {
            $msg = $this->dormir();
            echo $msg;
            return true; //Vrai s'il dort
        } else {
            return false;
        }
    }

    function dormir()
    {
        $this->energie = 100;
        return $this->nom . ", s'endort... Restauration de l'énergie... " . $this->nom . ", a bien dormi ! ";
    }

} //Fin de la classe abstraite Animal

class Chat extends Animal
{
    //Initialisation de base
    function __construct()
    {
        $this->nbPattes = 4;
        $this->genre = "chatte";
    }

    //Pour la destruction de la classe

    function __destruct()
    {
        echo $this->nom . ", est morte d'une explosion nucléraire. Pauvre elle!<br>";
    }

    //Méthodes uniques

    function miauler()
    {
        $test = $this->diminutionEnergie(40);
        if (!$test) {
            return "Miaou !  ";
        } else {
            return "";
        }
    }

    function ronroner()
    {
        $test = $this->diminutionEnergie(20);
        if (!$test) {
            return "Rrrrrr !  ";
        } else {
            return "";
        }
    }

} //Fin de la classe Chat

class Chien extends Animal
{
    //Initialisation de base
    function __construct()
    {
        $this->nbPattes = 4;
        $this->genre = "chien";
    }

    //Pour la destruction de la classe

    function __destruct()
    {
        echo $this->nom . ", est mort d'une explosion nucléraire. Pauvre lui!<br>";
    }

    //Méthodes uniques

    function japper()
    {
        $test = $this->diminutionEnergie(40);
        if (!$test) {
            return "Wouff !  ";
        } else {
            return "";
        }
    }

    function grogner()
    {
        $test = $this->diminutionEnergie(20);
        if (!$test) {
            return "Grrrrr !  ";
        } else {
            return "";
        }
    }

} //Fin de la classe Chien

$Carl = new Chien();
$Carl->nom = "Carl, le " . $Carl->genre;
echo "<p>Voici " . $Carl->nom . "! Il ne fait que grogner.</p>";
$i = 0;
while ($i < 5) {
    $msg = $Carl->grogner();
    echo $msg . $Carl->energie . "% d'énergie restant<br>";
    $i++;
}

$Fred = new Chien();
$Fred->nom = "Fred, le " . $Fred->genre;
echo "<p>Voici " . $Fred->nom . "! Il n'est pas content.</p>";
$msg = $Fred->grogner();
echo $msg . $Fred->energie . "% d'énergie restant<br>";
$msg = $Fred->japper();
echo $msg . $Fred->energie . "% d'énergie restant<br>";
$msg = $Fred->japper();
echo $msg . $Fred->energie . "% d'énergie restant<br>";
$msg = $Fred->manger();
echo $msg . $Fred->energie . "% d'énergie restant<br>";

$Bob = new Chien();
$Bob->nom = "Bob, le " . $Bob->genre;
echo "<p>Voici " . $Bob->nom . "! Il n\'est pas content lui aussi.</p>";
$msg = $Bob->grogner();
echo $msg . $Bob->energie . "% d'énergie restant<br>";
$msg = $Bob->japper();
echo $msg . $Bob->energie . "% d'énergie restant<br>";
$msg = $Bob->japper();
echo $msg . $Bob->energie . "% d'énergie restant<br>";
$msg = $Bob->manger();
echo $msg . $Bob->energie . "% d'énergie restant<br>";

$Lara = new Chat();
$Lara->nom = "Lara, la " . $Lara->genre;
echo "<p>Voici " . $Lara->nom . "! Elle ne fait que ronroner.</p>";
$i = 0;
while ($i < 5) {
    $msg = $Lara->ronroner();
    echo $msg . $Lara->energie . "% d'énergie restant<br>";
    $i++;
}

$Sara = new Chat();
$Sara->nom = "Sara, la " . $Sara->genre;
echo "<p>Voici " . $Sara->nom . "! Elle veux votre attention.</p>";
$i = 0;
while ($i < 5) {
    $msg = $Sara->miauler();
    echo $msg . $Sara->energie . "% d'énergie restant<br>";
    $i++;
}
$i = 0;
while ($i < 4) {
    $msg = $Sara->ronroner();
    echo $msg . $Sara->energie . "% d'énergie restant<br>";
    $i++;
}

//Explosion
echo "<h1>BOOOOOOOOMMMMMMMMMMMMM</h1>"
//Les différents destructeurs des classe sont appelés
?>


</body>
</html>