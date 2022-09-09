<?php include 'settings.php';?>
<?php include 'assets/css/design.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/design.php" rel="stylesheet" type="text/css">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css">
    <title>Yourport : <?= title() ?></title>
</head>

<header>

    <div class="yp-header">
        <h1><?= upperMenuName() ?></h1>
        <ul>
            <li><a><?= list_value1() ?></a></li>
            <li><a><?= list_value2() ?></a></li>
            <li><a><?= list_value3() ?></a></li>
        </ul>
    </div>

</header>

<body>

    <div class="hello">
        <h1><?= hello() ?></h1>
        <p> <?= devStatus() . " " . languages() ?> Developer</p>
    </div>

</body>
</html>




