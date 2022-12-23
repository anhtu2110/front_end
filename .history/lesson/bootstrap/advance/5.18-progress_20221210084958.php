<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <title>Progress Bar</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Progress bar bootstrap</h1>
                <div class="progress" style="height: 25px;">
                    <?php
                    for ($i = 0; $i <= 100; $i++) {
                    ?>
                        <div class="progress-bar" style="width: <?php echo $i ?>%;" aria-valuenow="<?php echo $i ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>