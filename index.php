<?php

if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require '1_classes.php';
            break;
        case 'extending' :
            require '2_extending.php';
            break;
        case 'private' :
            require '3_private.php';
            break;
        case 'protect' :
            require '4_protected.php';
            break;
        case 'public' :
            require '5_public.php';
            break;
        case 'const' :
            require '6_const.php';
            break;
        case 'static' :
            require '7_static.php';
            break;
        default :
            echo '';
    };


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"

          rel="stylesheet"/>

    <link href="style.css" type="text/css" rel="stylesheet">


    <title>oop-introduction</title>
</head>
<div class="miro">
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <button class="btn border-primary" type="page" id="button" value="classes" name="page">classes</button>
        <button class="btn border-primary" type="page" id="button" value="extending" name="page">extending</button>
        <button class="btn border-primary" type="page" id="button" value="private" name="page">private</button>
        <button class="btn border-primary" type="page" id="button" value="protect" name="page">protected</button>
        <button class="btn border-primary" type="page" id="button" value="public" name="page">public</button>
        <button class="btn border-primary" type="page" id="button" value="const" name="page">const</button>
        <button class="btn border-primary" type="page" id="button" value="static" name="page">static</button>
    </form>
</div>


