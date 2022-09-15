<?php 
    require_once "src/constants.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>unit conversion</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="src/static/css/style.css" type="text/css" />
    </head>

    <body>
        <div id="grid">

        <?php
            require_once "src/components/header.php";
            require_once "src/components/main.php";
        ?>

        </div>

        <script>
            const DISTANCES = <?php echo json_encode(UNITS["DISTANCES"]); ?>;
            const AREAS = <?php echo json_encode(UNITS["AREAS"]); ?>;
            const VOLUMES = <?php echo json_encode(UNITS["VOLUMES"]); ?>;
            const WEIGHTS = <?php echo json_encode(UNITS["WEIGHTS"]); ?>;
            const TEMPERATURES = <?php echo json_encode(UNITS["TEMPERATURES"]); ?>;
        </script>
        <script src="src/static/js/setActiveUnitCategory.js"></script>
        <script src="src/static/js/getResult.js"></script>

    </body>
</html>