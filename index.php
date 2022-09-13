<?php 
    require "src/constants.php";
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
            include "src/components/header.php";
            include "src/components/main.php";
        ?>

        </div>

        <script>
            const AREAS = <?php echo json_encode(AREAS); ?>;
            const DISTANCES = <?php echo json_encode(DISTANCES); ?>;
            const TEMPERATURES = <?php echo json_encode(TEMPERATURES); ?>;
        </script>
        <script src="src/static/js/setActiveUnitCategory.js"></script>
        <script src="src/static/js/getResult.js"></script>

    </body>
</html>