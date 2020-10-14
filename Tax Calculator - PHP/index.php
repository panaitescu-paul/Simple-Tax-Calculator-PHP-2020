<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>Tax Calculator - PHP</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <?php
        // Check if the "Calculate" button was pressed, then get the data from inputs
        if (isset($_POST['monetaryAmmount']) && isset($_POST['taxPercentage'])) {
            $monetaryAmmount = (float) $_POST['monetaryAmmount'];
            $taxPercentage = (float) $_POST['taxPercentage'];
        } else {
            $monetaryAmmount = 0;
            $taxPercentage = 0;
        }
        // Make the calculations
        $taxAmount = round(($monetaryAmmount * $taxPercentage) / 100, 2);
        $finalAmount = round($monetaryAmmount - $taxAmount, 2);
    ?>

    <div class="content">
        <h1>Tax Calculator - PHP</h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Monetary amount</label>
            <br>
            <input type="number" id="monetaryAmmount" name="monetaryAmmount" 
            value="<?=$monetaryAmmount ?>" required pattern="[0-9]" step="0.01" min="0">
            <br>
            <label for="tax">Tax percentage</label>
            <br>
            <input type="number" id="taxPercentage" name="taxPercentage" 
            value="<?=$taxPercentage ?>" required pattern="[0-9]" step="0.01" min="0" max="100">
            <br>
            <input type="Submit" value="Calculate" id="calculateBtn">
        </form>
        <div id="summary">
            <p>Tax Ammount: 
                <span id="taxAmmount">
                    <?=$taxAmount ?>
                </span>
            </p>
            <p>Final Ammount: 
                <span id="finalAmmount">
                    <?=$finalAmount ?> 
                </span>
            </p>
        </div>
    </div>
</body>
</html>