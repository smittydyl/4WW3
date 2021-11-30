<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 6</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Wlcome to my home page!</h1>
    <p>Some text</p>
    <p>Some more text.</p>

    <?php
    $x = 43;
        //How to print variable value?
        echo "Printing variable using echo ".$x."<br>";
        print("Hello using  Print");
    ?>

    <br/>
    <p>HTML content</p>
    <br/>

    <?php
        //inlcuding other files 
        include 'array_and_foreach.php'; //without error
    ?>
</body>
</html>