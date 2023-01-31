<?php 
$current = 'id="currentpage"'; $return = 'tabindex="0" onclick="return false;"';
$indexcurrent = ""; $indexreturn = "";
$valuescurrent = ""; $valuesreturn = "";
$wwdcurrent = ""; $wwdreturn = "";
$visioncurrent = ""; $visionreturn = "";
$historycurrent = ""; $historyreturn = "";
$productscurrent = ""; $productsreturn = "";
$newscurrent = ""; $newsreturn = "";
$qerncurrent = ""; $qernreturn = "";
switch ($title) {
    case "index":
        $indexcurrent = $current;
        $indexreturn = $return;
        break;
    case "values":
        $valuescurrent = $current;
        $valuesreturn = $return;
        break;
    case "wwd":
        $wwdcurrent = $current;
        $wwdreturn = $return;
        break;
    case "vision":
        $visioncurrent = $current;
        $visionreturn = $return;
        break;
    case "history":
        $historycurrent = $current;
        $historyreturn = $return;
        break;
    case "products":
        $productscurrent = $current;
        $productsreturn = $return;
    case "news":
        $newscurrent = $current;
        $newsreturn = $return;
        break;
    case "qern":
        $qerncurrent = $current;
        $qernreturn = $return;
        break;
    default:
};
?>

<!DOCTYPE HTML>
<html>
    <head>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.png">
        <!-- Generic CSS -->
        <link rel="stylesheet" href="generic.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Zilla+Slab">
        <!-- Generic JS -->
        <script src="generic.js"></script>
        <!-- Page Title -->
        <title><?= $titlefancy ?></title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.png">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="<?= $include ?>.css">
        <!-- Generic CSS -->
        <link rel="stylesheet" href="generic.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Zilla+Slab">
        <script src="<?= $include ?>.js"></script>
        <script src="generic.js"></script>
    </head>
    <body>
        <!-- Header Logo -->
        <!-- Below SVG CSS Generated by Illustrator -->
        <a href="#" onclick="swatch();"><img id="headlogo" src="header-logo-dash.svg" class="headlogo"></a>
        <header>
            <!-- Top Menu Bar -->
            <nav>
                <ul class="menubartop">
                    <li <?= $indexcurrent ?>> <a href="index.php" <?= $indexreturn ?>>Home</a> </li>
                    <!-- Dropdown -->
                    <li > <a href="#" onclick="show();"> Our Organization</a> </li >
                    <ul id="dropdown" onmouseleave="hide();">
                        <li <?= $valuescurrent ?>> <a href="values.php" <?= $valuesreturn ?>>Our Values</a> </li>
                        <li <?= $wwdcurrent ?>> <a href="wwd.php" <?= $wwdreturn ?>>What We Do</a> </li>
                        <li <?= $visioncurrent ?>> <a href="vision.php" <?= $visionreturn ?>>Our Vision</a> </li>
                        <li <?= $historycurrent ?>> <a href="history.php" <?= $historyreturn ?>>Our History</a></li>
                    </ul>
                    <li <?= $productscurrent ?>> <a href="products.php" <?= $productsreturn ?>>Our Products</a> </li>
                    <li <?= $newscurrent ?>> <a href="news.php" <?= $newsreturn ?>>News</a> </li>
                    <li <?= $qerncurrent ?>> <a href="qern.php" <?= $qernreturn ?>>Qern</a> </li>
                </ul>
            </nav>
        </header>

