<?php
    include 'random.php';
    $start = isset($_GET['start']) ? $_GET["start"] : 1;
    $end = isset($_GET['end']) ? $_GET["end"] : 20;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/dices.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Random Range Generator</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/dices.png" alt="dices" width="30" class="d-inline-block align-text-top">
        Random Range Generator
        </a>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 no-float">
                <form action="index.php">
                    <div class="mb-3">
                        <label for="startgange" class="form-label">Start</label>
                        <input type="number" class="form-control text-center" name="start" id="start" value="<?=$start?>">
                    </div>
                    <div class="mb-3">
                        <label for="startgange" class="form-label">End</label>
                        <input type="number" class="form-control text-center" name="end" id="end" value="<?=$end?>">
                    </div>
                    <button type="submit" style="width: 100%;" class="btn btn-primary btn-md btn-block">Generate...</button>
                </form>
            </div>
            <div class="col-md-9 no-float">
                <ul id="range">
                    <?php foreach (randomGen($start, $end) as $key => $value) : ?>
                        <li> <?= $value ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <footer>
            <a href="https://github.com/traue/random_range_gen_php">Mit License. View on GitHub</a>
    </footer> 
</body>
</html>