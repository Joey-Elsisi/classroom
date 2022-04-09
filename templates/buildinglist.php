<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css" />

    <meta name="author" content="Joey Elsisi, Stuart Paine">
    <meta name="description" content="Study Spot Project">

    <title>Buildings List</title>
</head>

<body>
<header>
    <!--Top navigation bar-->
    <div id="top-navbar-placeholder">
        <?php include("top-navbar.php"); ?>
    </div>
</header>

<main>
    <!--Navigation route breadcrumb-->
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?command=home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buildings</li>
            </ol>
        </nav>
    </div>
    <div class="row bcr-name">
        <h2>Select a Building</h2>
    </div>

    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col">
    <?php
    foreach($_SESSION["buildings"] as $building){
        ?>

        <div class="row cr-list-item open-list-item">
            <a href="?command=building&name=<?=$building["name"]?>" title="Rice Hall 011"></a>
            <div class="col-4 cr-name">
                <?=$building["name"]?>
            </div>
            <div class="col-4 open">
                Open
            </div>
            <div class="col-4 until">
                Until 2:30pm
            </div>
        </div>
     <?php

    }

    ?>






            <p class="as-of">
                <?php
                $now = new DateTime(null, new DateTimeZone($_SESSION['timezone']));
                echo "Updated " . $now->format('g:i:s A') . "<br>";
                ?>
                <a class="refresh" href="">(Refresh to update)</a>
            </p>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>

</html>