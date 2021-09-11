<?php
    include("random.php");
    $start = isset($_POST['start']) ? $_POST["start"] : 1;
    $end = isset($_POST['end']) ? $_POST["end"] : 20;
?>
<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Thiago G. Traue">
    <link href="https://traue.com.br/random_range/img/dices.png" rel="icon" type="image/x-icon" />

    <title>Random Range Generator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/xlsx.full.min.js"></script>
    <script type="text/javascript" src="js/exportTable.js"></script>
    <script src="js/validate.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://traue.com.br/random_range/img/dices.png" alt="Random Range Generator" width="30" class="d-inline-block align-text-top"> Random Range Generator
                </a>
            </div>
        </nav>
        </div>
    </header>

    <main role="main">
        <div class="container-fluid">

            <form action="index.php" method="post" id="rangeform" onsubmit="return validateForm();">
                <div class="row top">
                    <div class="form-group col-md-2 mb-2" id="rangeform">
                        <label>Start</label>
                        <input type="number" class="form-control" name="start" id="rangestart" value="<?= $start; ?>">
                    </div>

                    <div class="form-group col-md-2 mb-2">
                        <label>End (max. 3000)</label>
                        <input type="number" class="form-control" name="end" id="rangeend" value="<?= $end; ?>">
                    </div>

                    <div class="form-group col-md-1 mb-2">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary"  style="margin: 0 auto;">Generate</button>
                    </div>
                </div>
            </form>

            <br><br>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Result</h3>
                    <br>
                </div>
                <div class="panel-body scrollable-panel">
                <table class="table table-bordered table-striped text-center" id="generated">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Random Number</th>
					</tr>
				</thead>
				<tbody>
                    <?php orderHtml($start, $end); ?>
				</tbody>
			</table>
                </div>
                <div class="export">
                    <button class="btExport" onclick="ExportToExcel('xlsx')">
                        Export to Excel
                        <img src="img/excel.ico" alt="Save icon"/>
                    </button>
                </div>
            </div>
        </div>

    </main>
    <script src="js/click.js"></script>
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted"><a href="https://github.com/traue/random_range_gen_php"><img height="30" 
            src="https://raw.githubusercontent.com/simple-icons/simple-icons/9fdbb57ccc1b8613f080b77be6846275113d5662/icons/github.svg"></a><br>Thiago G. Traue</span>
        </div>
    </footer>
</body>
</html>