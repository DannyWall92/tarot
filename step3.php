<?php
$host = "localhost";
$dbuser = "dew_thoth";
$dbpass = "1!Iktomi!1";
$dbname = "dew_thoth";
$link = mysqli_connect($host, $dbuser, $dbpass, $dbname);

$the_layout = $_POST['layoutselect'];
$cardone = $_POST['cardone'];
$cardtwo = $_POST['cardtwo'];
$cardthree = $_POST['cardthree'];
$cardfour = $_POST['cardfour'];
$cardfive = $_POST['cardfive'];
$cardsix = $_POST['cardsix'];
$cardseven = $_POST['cardseven'];
$cardeight = $_POST['cardeight'];
$cardnine = $_POST['cardnine'];
$cardten = $_POST['cardten'];
$cardeleven = $_POST['cardeleven'];
$cardtwelve = $_POST['cardtwelve'];
$cardthirteen = $_POST['cardthirteen'];
$cardfourteen = $_POST['cardfourteen'];
$cardfifteen = $_POST['cardfifteen'];

$cardone_ur = $_POST['cardone_ur'];
$cardtwo_ur = $_POST['cardtwo_ur'];
$cardthree_ur = $_POST['cardthree_ur'];
$cardfour_ur = $_POST['cardfour_ur'];
$cardfive_ur = $_POST['cardfive_ur'];
$cardsix_ur = $_POST['cardsix_ur'];
$cardseven_ur = $_POST['cardseven_ur'];
$cardeight_ur = $_POST['cardeight_ur'];
$cardnine_ur = $_POST['cardnine_ur'];
$cardten_ur = $_POST['cardten_ur'];
$cardeleven_ur = $_POST['cardeleven_ur'];
$cardtwelve_ur = $_POST['cardtwelve_ur'];
$cardthirteen_ur = $_POST['cardthirteen_ur'];
$cardfourteen_ur = $_POST['cardfourteen_ur'];
$cardfifteen_ur = $_POST['cardfifteen_ur'];

?>
<html>
    <head>
        <title>Tarot Card Meanings</title>
        <style>
            td {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Tarot Card Meanings</h1>
        <p>Keep in mind that these meanings are only the general/generic meanings for the cards. A card's meaning shifts and changes based on its position in a layout. This is why a good reading comes from a skilled tarot practitioner. These card meanings are meant only as a guidepost.</P>
        <p>To assist with understanding meaning and position, an explaination of meaning of a given layout is also being provided. <stonrg>BUT UNDERSTAND</stonrg> that at times there is more than one type of reading possible for a given layout. Therefore you need to know what kind of question/energy was put into the reading to truly understand the meaning of the cards as they are shown.</p>
        <p>This is why, once again, the best readings come from a skilled tarot practitioner.</p>
        <?php
            if ($the_layout == "ThreeCard"){
                
                ?>
                
                <h1>3 Card Past-Present-Future</h1>
                <p>In the past, present, and future tarot spread, the first card pulled represents elements from the past affecting present events.</p>
                <p>This can give you some clues about themes. A Minor Arcana suit alone can guide your interpretation.</p>
                <p>For instance, a cup card reveals a feelings-driven question, while a pentacles card may suggest underlying ideas about material gains or security.</p>
                <p>The second card, placed in the middle of the line-up, shows the nature of the tarot question or the querent’s current position.</p>
                <p>Generally speaking, a Major Arcana card in this position suggests a period of time during which the querent must humble themselves to larger forces.</p>
                <p>Meanwhile, a Minor Arcana card in this position indicates that the querent has more control in the situation.</p>
                <p>Finally, the third card represents the likely outcome. Meditating on the past and the present cards can show you how the future card fits in.</p>
                <p>That said, if the future is undesirable, meditation can also help you make better choices for the given circumstances.</p>
                
                <h1>3 Card Situation-Obstacle-Advice</h1>
                <p>This spread is especially useful to help understand a conflict or resolve the tension. The first card pulled for the situation often represents the querent’s role.</p>
                <p>Then, the obstacle card in this tarot spread crosses the first card to show what elements are causing the conflict or tension.</p>
                <p>The final card can be flexible. Perhaps it reveals a likely outcome, or it can offer advice for the querent: how should they act to make the most of the situation?</p>
                
                <h1>3 Card Mind-Body-Spirit</h1>
                <p>Mind, body, and spirit tarot spreads can help a reader understand what is needed to add balance to a querent’s life.</p>
                <p>For this reason, consider using it for general lessons or impressions. Depending on the querent’s needs, each card may represent the current state, approaching energies, or advice for alignment in each realm.</p>
                
                <?php
                
                // **********************************
                // ** FIRST SHOW CARDS AS LAID OUT **
                // **********************************
                echo ("<h1>Cards As Laid Out</h1><table><tr>");

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardone' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardtwo' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("</tr></table>");


                // ***********************************
                // ** HOW GIVE CARD INTERPRETATIONS **
                // ***********************************
                echo ("<h1>Card Meanings</h1><table border='1'>");

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardone' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardone - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardone - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardtwo' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardtwo - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardtwo - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardthree - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardthree - Reverse</h2>$meaning</td></tr>");
                }

                echo ("</table>");
            }

            if ($the_layout == "FiveAcross"){

                // **********************************
                // ** FIRST SHOW CARDS AS LAID OUT **
                // **********************************
                echo ("<h1>Cards As Laid Out</h1><table><tr>");
                ?>
                
                <p>Keep in mind that these meanings are only the general/generic meanings for the cards. A card's meaning shifts and changes based on its position in a layout. This is why a good reading comes from a skilled tarot practitioner. These card meanings are meant only as a guidepost.</P>
                <p>To assist with understanding meaning and position, an explaination of meaning of a given layout is also being provided. <stonrg>BUT UNDERSTAND</stonrg> that at times there is more than one type of reading possible for a given layout. Therefore you need to know what kind of question/energy was put into the reading to truly understand the meaning of the cards as they are shown.</p>
                <p>This is why, once again, the best readings come from a skilled tarot practitioner.</p>
                
                <h1>The Path</h1>
                <p>This layout is a slightly more detailed reading compared to any of the basic 3 card "quick" layouts.</p>
                <p>The first card is a representation of "who you are right now" ... or more accurately stated, where you are in your personal journey right now.</p>
                <p>The second card is an indication of whether or not you are on the right path along with explaining in the present where on that path you are.</p>
                <p>The third card indicates potential obstacles in your way as you journey on your path.</p>
                <p>The fourth card explains what circustances are in your favor or can be of assistance.</p>
                <p>The fifth card explains how you can make progress and move forward in your journey.</p>
                <p>This layout, particularly because of the third, fourth, and fifth cards, in many ways requires the most skill with the cards to understand. It is possible in this layout to have a card that in most circumstances would be possive, however in the third place is a warning as to an obstacle. It takes a skilled practitioner to help "make sense" of this layout and understand the energies at play in your life.</p>
                
                <?php

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardone' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardtwo' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardfour_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardfour' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardfive_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardfive' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("</tr></table>");


                // ***********************************
                // ** HOW GIVE CARD INTERPRETATIONS **
                // ***********************************
                echo ("<h1>Card Meanings</h1><table border='1'>");

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardone' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardone - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardone - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardtwo' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardtwo - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardtwo - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardthree - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardthree - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfour_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfour' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardfour - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfour - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfive_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfive' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto;'></td><td><h2>$cardfive - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 200px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfive - Reverse</h2>$meaning</td></tr>");
                }

                echo ("</table>");
            }
        ?>











        <?php
            if ($the_layout == "Crowley"){

                // **********************************
                // ** FIRST SHOW CARDS AS LAID OUT **
                // **********************************
                echo ("<h1>Cards As Laid Out</h1><table><tr>");

                if ($cardthirteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardthirteen' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardnine_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardnine' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardfive_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardfive' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("<td></td><td></td><td></td>");

                if ($cardfour_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardfour' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardeight_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardeight' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardtwelve_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardtwelve' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("</tr><tr><td></td><td></td><td></td>");

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardtwo' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardone' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("<td></td><td></td><td></td></tr><tr>");

                if ($cardfourteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardfourteen' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardten_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardten' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardsix_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardsix' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("<td></td><td></td><td></td>");

                if ($cardseven_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl from deck where name like '$cardseven' and orientation = $orientation";
                
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardeleven_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardeleven' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                if ($cardfifteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select  imgurl from deck where name like '$cardfifteen' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                if ($orientation == "1"){
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto;'></td>");
                } else {
                    echo ("<td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td>");
                }

                echo ("</tr></table>");


                // ***********************************
                // ** NOW GIVE CARD INTERPRETATIONS **
                // ***********************************
                echo ("<h1>Card Meanings</h1><table border='1'>");

                if ($cardone_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardone' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardone - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardone - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardtwo_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardtwo' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardtwo - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardtwo - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardthree_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardthree' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardthree - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardthree - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfour_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfour' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardfour - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfour - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfive_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfive' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardfive - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfive - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardsix_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardsix' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardsix - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardsix - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardseven_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardseven' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardseven - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardseven - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardeight_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardeight' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardeight - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardeight - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardnine_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardnine' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardnine - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardnine - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardten_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardten' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardten - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardten - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardeleven_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardeleven' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardeleven - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardeleven - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardtwelve_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardtwelve' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardtwelve - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardtwelve - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardthirteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardthirteen' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardthirteen - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardthirteen - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfourteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfourteen' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardfourteen - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfourteen - Reverse</h2>$meaning</td></tr>");
                }

                if ($cardfifteen_ur == "upright") {
                    $orientation = "1";
                } else {
                    $orientation = "2";
                }
                $sql = "select imgurl, meaning from deck where name like '$cardfifteen' and orientation = $orientation";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $imgurl = $row['imgurl'];
                $meaning = $row['meaning'];
                if ($orientation == "1"){
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto;'></td><td><h2>$cardfifteen - Upright</h2>$meaning</td></tr>");
                } else {
                    echo ("<tr><td><img src='$imgurl' style='max-width: 150px; height: auto; transform: scaleY(-1);'></td><td><h2>$cardfifteen - Reverse</h2>$meaning</td></tr>");
                }

                echo ("</table>");
            }
        ?>

    </body>
</html>
