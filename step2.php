<html>
    <head>
        <title>Tarot Interpreter Step 2</title>
        <style>
            td {
                text-align: center;
            }
            .layout {
                margin: 0 auto;
                text-align: center;
            }
            table {
                margin-left: auto;
                margin-right: auto;
            }
            .info {
                margin: 0 auto;
                border-radius: 20px;
                width: 600px;
                background-color: aquamarine;
                padding: 20px;
                font-size: 18px;
            }
            .header{
                margin: 0;
                width: 100%;
                height: 100px;
                background-color: aquamarine;
                padding: 50px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Step 2 - Tarot Card Meaning Helper</h1>
        </div>
<?php
$the_layout = $_GET['layoutselect'];

if ($the_layout == "ThreeCard") {
    ?>
        <div class="layout">
            <h1>Basic Three Card Layout - Enter your cards below</h1>
            <form action="step3.php" method="POST">
                <input type="hidden" name="numcards" value="3" />
                <input type="hidden" name="layoutselect" value="<?php echo $the_layout ?>">
                <table>
                    <tr>
                        <td style="text-align: center;">space 1<br /><img id="imgone" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 2<br /><img id="imgtwo" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 3<br /><img id="imgthree" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="cardone" /></td>
                        <td><input type="text" name="cardtwo" /></td>
                        <td><input type="text" name="cardthree" /></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="cardone_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardtwo_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardthree_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit" name="submit" value="Get Interpretation >>" /></td>
                    </tr>
                </table>
            </form>
        </div>
    <?php
}

if ($the_layout == "FiveAcross") {
    ?>
        <div class="layout">
            <h1>Basic Five Card Layout - Enter your cards below</h1>
            <form action="step3.php" method="POST">
                <input type="hidden" name="numcards" value="3" />
                <input type="hidden" name="layoutselect" value="<?php echo $the_layout ?>">
                <table>
                    <tr>
                        <td style="text-align: center;">space 1<br /><img id="imgone" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 2<br /><img id="imgtwo" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 3<br /><img id="imgthree" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 4<br /><img id="imgone" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                        <td style="text-align: center;">space 5<br /><img id="imgtwo" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="cardone" /></td>
                        <td><input type="text" name="cardtwo" /></td>
                        <td><input type="text" name="cardthree" /></td>
                        <td><input type="text" name="cardfour" /></td>
                        <td><input type="text" name="cardfive" /></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="cardone_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardtwo_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardthree_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardfour_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                        <td><input type="radio" name="cardfive_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    </tr>
                    <tr>
                        <td colspan="5"><input type="submit" name="submit" value="Get Interpretation >>" /></td>
                    </tr>
                </table>
            </form>
        </div>
    <?php
}

if ($the_layout == "FourDirections"){
    echo ("<h1>Coming Soon</h1>");
}

if ($the_layout == "FiveCardCross"){
    echo ("<h1>Coming Soon</h1>");
}

if ($the_layout == "SevenHorseshoe"){
    echo ("<h1>Coming Soon</h1>");
}

if ($the_layout == "CelticCross"){
    echo ("<h1>Coming Soon</h1>");
}

if ($the_layout == "Crowley") {
    ?>
        <div class="layout">
            <h1>15 Card Crowley Layout</h1>
            <form action="step3.php" method="POST">
                <input type="hidden" name="numcards" value="3" />
                <input type="hidden" name="layoutselect" value="<?php echo $the_layout ?>">
            <table>
                <tr>
                    <td style="text-align: center;">space 13<br /><img id="imgthirteen" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 9<br /><img id="imgnine" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 5<br /><img id="imgfive" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">space 4<br /><img id="imgfour" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 8<br /><img id="imgeight" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 12<br /><img id="imgtwelve" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cardthirteen" /></td>
                    <td><input type="text" name="cardnine" /></td>
                    <td><input type="text" name="cardfive" /></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="text" name="cardfour" /></td>
                    <td><input type="text" name="cardeight" /></td>
                    <td><input type="text" name="cardtwelve" /></td>
                </tr>
                <tr>
                    <td><input type="radio" name="cardthirteen_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardnine_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardfive_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="radio" name="cardfour_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardeight_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardtwelve_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                </tr>
                <tr>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">space 2<br /><img id="imgtwo" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 1<br /><img id="imgone" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 3<br /><img id="imgthree" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="text" name="cardtwo" /></td>
                    <td><input type="text" name="cardone" /></td>
                    <td><input type="text" name="cardthree" /></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="radio" name="cardtwo_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardone_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardthree_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align: center;">space 14<br /><img id="imgfourteen" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 10<br /><img id="imgten" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 6<br /><img id="imgsix" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">space 7<br /><img id="imgseven" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 11<br /><img id="imgeleven" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                    <td style="text-align: center;">space 15<br /><img id="imgfifteen" src="https://www.usgamesinc.com/images/product/CR80_card_backwborder.jpg" style="max-width: 190px; height: auto;"></td>
                </tr>
                <tr>
                <td><input type="text" name="cardfourteen" /></td>
                    <td><input type="text" name="cardten" /></td>
                    <td><input type="text" name="cardsix" /></td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="text" name="cardseven" /></td>
                    <td><input type="text" name="cardeleven" /></td>
                    <td><input type="text" name="cardfifteen" /></td>
                </tr>
                <tr>
                    <td><input type="radio" name="cardfourteen_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardten_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardsix_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: center;">&nbsp;</td>
                    <td><input type="radio" name="cardseven_ur" value="upright" checked>upright - <input type="radio" name="cardone_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardeleven_ur" value="upright" checked>upright - <input type="radio" name="cardtwo_ur" value="reverse">reverse</td>
                    <td><input type="radio" name="cardfifteen_ur" value="upright" checked>upright - <input type="radio" name="cardthree_ur" value="reverse">reverse</td>
                </tr>
                <tr>
                    <td colspan="9"><input type="submit" name="submit" value="Get Interpretation >>" style="font-size: 20px;" /></td>
                </tr>
            </table></form>
        </div>
    <?php
}
?>
        <div class="info">
            <p>To give to a person you have done a reading for, after entering in the card names and selecting the orientation, click Get Interpretation above. Then on the next page, right click on the page and select to print the page, then in the Destination simply click Save as PDF. That will download a PDF of the layout and the card meanings that you can email to the person you did the reading for.</p>
        </div>
    </body>
</html>