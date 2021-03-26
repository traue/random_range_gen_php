<?php
    include 'random.php';
    $start = isset($_GET['start']) ? $_GET["start"] : 1;
    $end = isset($_GET['end']) ? $_GET["end"] : 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/dices.png">
    <script src="js/validade.js"></script>
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
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" class="form-inline" id="rangeform" onsubmit="return validateForm();">
                    <div class="form-group pt-3">
                        <label>
                            Start:
                        </label>
                        <input type="number" class="form-control text-center" id="rangestart" name="start" value="<?= $start; ?>" />
                    </div>
                    <div class="form-group pt-2">
                        <label>
                            End:
                        </label>
                        <input type="number" class="form-control text-center" id="rangeend" name="end" value="<?= $end; ?>" />
                    </div>
                    <div class="pt-4"></div>
                    <button type="submit" style="width: 100%;" class="btn btn-primary btn-block">
                        Generate
                    </button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">
                    List of random numbers:
                </h3>
                <ul id="list">
                    <?php orderHTML($start, $end); ?>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/click.js"></script>
</body>
</html>