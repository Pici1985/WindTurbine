<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Setting the favicon -->
    <link rel="shortcut icon" type="image/jpg" href="./img/logo.png"/>
    <!-- linking stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- pulling in jQuery library CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- site title -->
    <title> Wind Turbine Damage Checker </title>    
</head>

<body>
    <div class="title-area">
        <h1>Wind Turbine Damage Checker</h1>
    </div>

    <!-- wrapper div for button section -->
    <div class="btn-wrp">
        <h1> Wind turbines: </h1>
        <div class="buttons">
            <button onClick="calculate();">CHECK</button>
            <button onClick="reset();">RESET</button>
        </div>
    </div>

    <!-- wrapper div for list section -->
    <div class="list-wrp" id="list">
        
    </div>

    <!-- connecting own javascript -->
    <script src="scripts.js"></script>
</body>
</html>