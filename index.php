<?php
    session_start();
    //0 blanc
    //1 rouge
    //2 jaune
    $_SESSION["array"] = [
        "10"=>0, "11"=>0, "12"=>0, "13"=>0, "14"=>0, "15"=>0, "16"=>0,
        "20"=>0, "21"=>0, "22"=>0, "23"=>0, "24"=>0, "25"=>0, "26"=>0,
        "30"=>0, "31"=>0, "32"=>0, "33"=>0, "34"=>0, "35"=>0, "36"=>0,
        "40"=>0, "41"=>0, "42"=>0, "43"=>0, "44"=>0, "45"=>0, "46"=>0,
        "50"=>0, "51"=>0, "52"=>0, "53"=>0, "54"=>0, "55"=>0, "56"=>0,
        "60"=>0, "61"=>0, "62"=>0, "63"=>0, "64"=>0, "65"=>0, "66"=>0,
    ];
    $_SESSION["player"] = NULL;
    include("template/header.html");
?>
    <header>
        <h1 class="text-capitalize text-center">puissance 4</h1>
    </header>
    <main class="d-flex align-items-center justify-content-center">
        <a href="game.php?page=game" class="btn btn-primary btn-lg btn-block text-capitalize">play !</a>
    </main>
<?php
include("template/footer.html");