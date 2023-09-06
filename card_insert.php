<?php
if (isset($_POST['submit'])) {
    $host = "localhost";
    $dbuser = "dew_thoth";
    $dbpass = "1!Iktomi!1";
    $dbname = "dew_thoth";
    $link = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    $card_name = $_POST['card_name'];
    $card_cat = $_POST['card_cat'];
    $card_img = $_POST['card_img'];
    $upright = mysqli_real_escape_string($link, nl2br($_POST['upright']));
    $reverse = mysqli_real_escape_string($link, nl2br($_POST['reverse']));
    $upright_sql = "insert into deck (name, orientation, imgurl, category, meaning) VALUES ('$card_name', 1, '$card_img', '$card_cat', '$upright')";
    $reverse_sql = "insert into deck (name, orientation, imgurl, category, meaning) VALUES ('$card_name', 2, '$card_img', '$card_cat', '$reverse')";
    $upr_result = mysqli_query($link, $upright_sql);
    $rev_result = mysqli_query($link, $reverse_sql);
}
?>
<html>
    <head>
        <title>Tarot Inserter</title>
        <style>
            form {
                font-size: 18px;
                border-radius: 20px;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto;
                padding: 25px;
                background-color: aquamarine;
                width: 800px;
            }
            input[type=submit] {
                font-size: 32px;
                border-radius: 10px;
                padding: 5px;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        
        <form action="card_insert.php" method="POST">
            <h1>Tarot Inserter</h1>
            <label for="card_name">Card Name:</label> <input type="text" name="card_name" /><br />
            <label for="card_cat">Card Category:</label> <input type="text" name="card_cat" value="<?php echo ($card_cat) ?>"/><br />
            <label for="card_img">Card Image:</label> <input type="text" name="card_img" style="width: 600px;" /><br />
            <label for="upright">Upgright Description</label><br /><textarea name="upright" rows="20" cols="100"></textarea><br />
            <label for="reverse">Reverse Description</label><br /><textarea name="reverse" rows="20" cols="100"></textarea><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>