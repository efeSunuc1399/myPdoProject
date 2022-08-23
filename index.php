<?php
require_once "controllers/player.php";
include_once "helperFuncs.php";
$mySession = new Players();
$inputSelectDatas = $mySession->index();
//printPretty($inputSelectDatas);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body class="d-flex align-items-center vh-60 mx-auto">
<h2 class="floating-header text-white">Players Board</h2>
<div class="container bg-navy">
    <form>
        <div class="row gx-5">
            <div class="col-6">
                <select name="choice" id="choice" class="form-select bg-gray">
                    <?php foreach($inputSelectDatas as $key=>$value){ ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-6 ">
                <input type="text" class="form-control bg-gray" id="getPlayerByName" placeholder="Please enter player's name">
            </div>
            <input type="submit" class="btn btn-gray col-3 mt-4 mx-auto">
        </div>
    </form>
</div>
<script src="scripts/bootstrap.bundle.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>