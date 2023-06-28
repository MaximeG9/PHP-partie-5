<!-- EXERCICE 1 -->

<div>
    <?php
    $mounths = [
        "janvier",
        "fevrier",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "decembre"
    ];
    ?>
</div>
<br>

<!-- EXERCICE 2 -->

<div>
    <?php
    echo $mounths[2];
    ?>
</div>
<br>

<!-- EXERCICE 3 -->

<div>
    <?php
    echo $mounths[5];
    ?>
</div>
<br>

<!-- EXERCICE 4 -->

<div>
    <?php
    $mounths = str_replace("aout", "août", $mounths);
    $aout = $mounths[7];
    echo $aout;
    ?>
</div>
<br>

<!-- EXERCICE 5 -->

<div>
    <?php
    $departements = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    ?>
</div>
<br>

<!-- EXERCICE 6 -->

<div>
    <?php
    $departements = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    echo $departements[59];
    ?>
</div>
<br>

<!-- EXERCICE 7 -->

<div>
    <?php
    $departements2 = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
        "81" => "Reims"
    ];
    ?>
</div>
<br>

<!-- EXERCICE 8 -->

<div>
    <?php
    foreach ($mounths as $mounth) {
        echo $mounth."<br>";
    }
    ?>
</div>
<br>

<!-- EXERCICE 9 -->

<div>
    <?php
    foreach ($departements as $departement) {
        echo $departement."<br>";
    }
    ?>
</div>
<br>

<!-- EXERCICE 10 -->

<div>
    <?php
    foreach ($departements as $departement => $value) {
        echo "Le département ".$value." a le numéro ".$departement."<br>";
    }
    ?>
</div>
<br>