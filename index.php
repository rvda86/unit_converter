<?php 
    require_once "src/constants.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>unit conversion</title>
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
            const DISTANCES = <?php echo json_encode(DISTANCES); ?>;
            const AREAS = <?php echo json_encode(AREAS); ?>;
            const VOLUMES = <?php echo json_encode(VOLUMES); ?>;
            const WEIGHTS = <?php echo json_encode(WEIGHTS); ?>;
            const TEMPERATURES = <?php echo json_encode(TEMPERATURES); ?>;
        </script>
        <script src="src/static/js/setActiveUnitCategory.js"></script>
        <script src="src/static/js/getResult.js"></script>

    </body>
</html>