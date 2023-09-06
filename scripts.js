function LayoutSelect() {
    var selection = document.getElementById("layoutselect");
    var value = selection.options[selection.selectedIndex].value;
    if (value == "Crowley") {
        document.getElementById("ThreeCard").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("Crowley").style.display = "inline";
    } 
    if (value == "ThreeCard") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "inline";
    }
    if (value == "FiveAcross") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "inline";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "none";
    }
    if (value == "FourDirections") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "inline";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "none";
    }
    if (value == "FiveCardCross") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "inline";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "none";
    }
    if (value == "SevenHorseshoe") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "inline";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "none";
    }
    if (value == "TenCelticCross") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "inline";
        document.getElementById("ThreeCard").style.display = "none";
    }
    if (value == "none") {
        document.getElementById("Crowley").style.display = "none";
        document.getElementById("FiveAcross").style.display = "none";
        document.getElementById("FourDirections").style.display = "none";
        document.getElementById("FiveCardCross").style.display = "none";
        document.getElementById("SevenHorseshoe").style.display = "none";
        document.getElementById("TenCelticCross").style.display = "none";
        document.getElementById("ThreeCard").style.display = "none";
    }
}
function find_url (get_url) {
    if (get_url == "The Fool") {
        card_content = "http://www.esotericmeanings.com/thoth-fool-tarot-card-tutorial/";
    }
    if (get_url == "The Magus") {
        card_content = "http://www.esotericmeanings.com/thoth-magus-tarot-card-tutorial/";
    }
    if (get_url == "The Priestess") {
        card_content = "http://www.esotericmeanings.com/thoth-priestess-tarot-card-tutorial/";
    }
    if (get_url == "The Empress") {
        card_content = "http://www.esotericmeanings.com/thoth-empress-tarot-card/";
    }
    if (get_url == "The Emperor") {
        card_content = "http://www.esotericmeanings.com/thoth-emperor-tarot-card-tutorial/";
    }
    if (get_url == "The Hierophant") {
        card_content = "http://www.esotericmeanings.com/thoth-hierophant-tarot-card-tutorial/";
    }
    if (get_url == "The Lovers") {
        card_content = "http://www.esotericmeanings.com/thoth-lovers-tarot-card-tutorial/";
    }
    if (get_url == "The Chariot") {
        card_content = "http://www.esotericmeanings.com/thoth-chariot-tarot-card-tutorial/";
    }
    if (get_url == "Adjustment") {
        card_content = "http://www.esotericmeanings.com/thoth-adjustment-tarot-card-tutorial/";
    }
    if (get_url == "The Hermit") {
        card_content = "http://www.esotericmeanings.com/thoth-hermit-tarot-card-tutorial//";
    }
    if (get_url == "Fortune") {
        card_content = "http://www.esotericmeanings.com/thoth-fortune-tarot-card-tutorial/";
    }
    if (get_url == "Lust") {
        card_content = "http://www.esotericmeanings.com/thoth-lust-tarot-card-tutorial/";
    }
    if (get_url == "The Hanged Man") {
        card_content = "http://www.esotericmeanings.com/thoth-hanged-man-tarot-card-tutorial/";
    }
    if (get_url == "Death") {
        card_content = "http://www.esotericmeanings.com/thoth-death-tarot-card-tutorial/";
    }
    if (get_url == "Art") {
        card_content = "http://www.esotericmeanings.com/thoth-art-tarot-card-tutorial/";
    }
    if (get_url == "The Devil") {
        card_content = "http://www.esotericmeanings.com/thoth-devil-tarot-card-tutorial/";
    }
    if (get_url == "The Tower") {
        card_content = "hhttp://www.esotericmeanings.com/thoth-tower-tarot-card-tutorial/";
    }
    if (get_url == "The Star") {
        card_content = "http://www.esotericmeanings.com/thoth-star-tarot-card-tutorial/";
    }
    if (get_url == "The Moon") {
        card_content = "http://www.esotericmeanings.com/thoth-moon-tarot-card-tutorial/";
    }
    if (get_url == "The Sun") {
        card_content = "http://www.esotericmeanings.com/thoth-sun-tarot-card-tutorial/";
    }
    if (get_url == "The Aeon") {
        card_content = "http://www.esotericmeanings.com/thoth-aeon-tarot-card-tutorial/";
    }
    if (get_url == "The Universe") {
        card_content = "http://www.esotericmeanings.com/thoth-universe-tarot-card-tutorial/";
    }
    return card_content;
}
function find_img (get_img) {
    if (get_img == "The Fool") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_fool-204x300.jpg";
    }
    if (get_img == "The Magus") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_magus-202x300.jpg";
    }
    if (get_img == "The Priestess") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_priestess-203x300.jpg";
    }
    if (get_img == "The Empress") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_empress-204x300.jpg";
    }
    if (get_img == "The Emperor") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_emperor-202x300.jpg";
    }
    if (get_img == "The Hierophant") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_hierophant-200x300.jpg";
    }
    if (get_img == "The Lovers") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_lovers-199x300.jpg";
    }
    if (get_img == "The Charoit") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_cchariot-201x300.jpg";
    }
    if (get_img == "Adjustment") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/thoth_tarot_adjustment-202x300.jpg";
    }
    if (get_img == "The Hermit") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.16-206x300.jpg";
    }
    if (get_img == "Fortune") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.19-203x300.jpg";
    }
    if (get_img == "Lust") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.17-202x300.jpg";
    }
    if (get_img == "The Hanged Man") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.18-203x300.jpg";
    }
    if (get_img == "Death") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.20-204x300.jpg";
    }
    if (get_img == "Art") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.21-6-202x300.jpg";
    }
    if (get_img == "The Devil") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot.13-203x300.jpg";
    }
    if (get_img == "The Tower") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/screenshot2017-03-13-3-204x300.jpg";
    }
    if (get_img == "The Star") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/PHOTO18-203x300.jpg";
    }
    if (get_img == "The Moon") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/PHOTO17-204x300.jpg";
    }
    if (get_img == "The Sun") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/PHOTO19-203x300.jpg";
    }
    if (get_img == "The Aeon") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/PHOTO22-203x300.jpg";
    }
    if (get_img == "The Universe") {
        img_url = "http://www.esotericmeanings.com/wp-content/uploads/2016/01/PHOTO23-201x300.jpg";
    }
    return img_url;
}
function card_info(card, orientation) {
    card = card.replaceAll(' ', '%20');
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cardcontent").innerHTML += this.responseText;
        } else {
            document.getElementById("cardcontent").innerHTML += "<h1>Problem - readystate: " + this.readyState + " - status: " + this.status + "</h1>";
        }
    };
    var $query_string = "http://dewdevelopment.com/tarot/getcardinfo.php?c=" + card + "&o=" + orientation;
    
    xmlhttp.open("GET", $query_string, true);
    xmlhttp.send();
}

function crowleylinks() {
    var card_val = document.getElementById("cardone").value;
    var card_upright = document.getElementById("cardone_upright").value
    if (card_upright == true) {
        var card_orientation = "upright";
    } else {
        var card_orientation = "reverse";
    }
    document.getElementById("cardone_url").value = find_url(card_val);
    document.getElementById("imgone").src = find_img(card_val);
    document.getElementById("cardcontent").innerHTML = card_info(card_val, card_orientation)

    card_val = document.getElementById("cardtwo").value;
    document.getElementById("cardtwo_url").value = find_url(card_val);
    document.getElementById("imgtwo").src = find_img(card_val);

    card_val = document.getElementById("cardthree").value;
    document.getElementById("cardthree_url").value = find_url(card_val);
    document.getElementById("imgthree").src = find_img(card_val);

    card_val = document.getElementById("cardfour").value;
    document.getElementById("cardfour_url").value = find_url(card_val);
    document.getElementById("imgfour").src = find_img(card_val);

    card_val = document.getElementById("cardfive").value;
    document.getElementById("cardfive_url").value = find_url(card_val);
    document.getElementById("imgfive").src = find_img(card_val);

    card_val = document.getElementById("cardsix").value;
    document.getElementById("cardsix_url").value = find_url(card_val);
    document.getElementById("imgsix").src = find_img(card_val);

    card_val = document.getElementById("cardseven").value;
    document.getElementById("cardseven_url").value = find_url(card_val);
    document.getElementById("imgseven").src = find_img(card_val);

    card_val = document.getElementById("cardeight").value;
    document.getElementById("cardeight_url").value = find_url(card_val);
    document.getElementById("imgeight").src = find_img(card_val);

    card_val = document.getElementById("cardnine").value;
    document.getElementById("cardnine_url").value = find_url(card_val);
    document.getElementById("imgnine").src = find_img(card_val);

    card_val = document.getElementById("cardten").value;
    document.getElementById("cardten_url").value = find_url(card_val);
    document.getElementById("imgten").src = find_img(card_val);

    card_val = document.getElementById("cardeleven").value;
    document.getElementById("cardeleven_url").value = find_url(card_val);
    document.getElementById("imgeleven").src = find_img(card_val);

    card_val = document.getElementById("cardtwelve").value;
    document.getElementById("cardtwelve_url").value = find_url(card_val);
    document.getElementById("imgtwelve").src = find_img(card_val);

    card_val = document.getElementById("cardthirteen").value;
    document.getElementById("cardthirteen_url").value = find_url(card_val);
    document.getElementById("imgthirteen").src = find_img(card_val);

    card_val = document.getElementById("cardfourteen").value;
    document.getElementById("cardfourteen_url").value = find_url(card_val);
    document.getElementById("imgfourteen").src = find_img(card_val);

    card_val = document.getElementById("cardfifteen").value;
    document.getElementById("cardfifteen_url").value = find_url(card_val);
    document.getElementById("imgfifteen").src = find_img(card_val);
}
function BTCLlinks() {
    var card_upright = document.getElementById("BTCLcardone_upright").checked
    if (card_upright == true) {
        var card_orientation = "upright";
    } else {
        var card_orientation = "reverse";
    }
    var card_val = document.getElementById("BTCLcardone").value;
    document.getElementById("BTCLcardone_url").value = find_url(card_val);
    document.getElementById("BTCLimgone").src = find_img(card_val);
    card_info(card_val, card_orientation);

    card_upright = document.getElementById("BTCLcardtwo_upright").checked
    if (card_upright == true) {
        card_orientation = "upright";
    } else {
        card_orientation = "reverse";
    }
    card_val = document.getElementById("BTCLcardtwo").value;
    document.getElementById("BTCLcardtwo_url").value = find_url(card_val);
    document.getElementById("BTCLimgtwo").src = find_img(card_val);
    card_info(card_val, card_orientation);

    card_upright = document.getElementById("BTCLcardthree_upright").checked
    if (card_upright == true) {
        card_orientation = "upright";
    } else {
        card_orientation = "reverse";
    }
    card_val = document.getElementById("BTCLcardthree").value;
    document.getElementById("BTCLcardthree_url").value = find_url(card_val);
    document.getElementById("BTCLimgthree").src = find_img(card_val);
    card_info(card_val, card_orientation);
}
function BFALlinks() {
    var card_val = document.getElementById("BFALcardone").value;
    document.getElementById("BFALcardone_url").value = find_url(card_val);
    document.getElementById("BFALimgone").src = find_img(card_val);

    card_val = document.getElementById("BFALcardtwo").value;
    document.getElementById("BFALcardtwo_url").value = find_url(card_val);
    document.getElementById("BFALimgtwo").src = find_img(card_val);

    card_val = document.getElementById("BFALcardthree").value;
    document.getElementById("BFALcardthree_url").value = find_url(card_val);
    document.getElementById("BFALimgthree").src = find_img(card_val);

    card_val = document.getElementById("BFALcardfour").value;
    document.getElementById("BFALcardfour_url").value = find_url(card_val);
    document.getElementById("BFALimgfour").src = find_img(card_val);

    card_val = document.getElementById("BFALcardfive").value;
    document.getElementById("BFALcardfive_url").value = find_url(card_val);
    document.getElementById("BFALimgfive").src = find_img(card_val);
}
function FCCLlinks() {
    var card_val = document.getElementById("FCCLcardone").value;
    document.getElementById("FCCLcardone_url").value = find_url(card_val);
    document.getElementById("FCCLimgone").src = find_img(card_val);

    card_val = document.getElementById("FCCLcardtwo").value;
    document.getElementById("FCCLcardtwo_url").value = find_url(card_val);
    document.getElementById("FCCLimgtwo").src = find_img(card_val);

    card_val = document.getElementById("FCCLcardthree").value;
    document.getElementById("FCCLcardthree_url").value = find_url(card_val);
    document.getElementById("FCCLimgthree").src = find_img(card_val);

    card_val = document.getElementById("FCCLcardfour").value;
    document.getElementById("FCCLcardfour_url").value = find_url(card_val);
    document.getElementById("FCCLimgfour").src = find_img(card_val);

    card_val = document.getElementById("FCCLcardfive").value;
    document.getElementById("FCCLcardfive_url").value = find_url(card_val);
    document.getElementById("FCCLimgfive").src = find_img(card_val);
}
function Directionlinks() {
    var card_val = document.getElementById("directioncardone").value;
    document.getElementById("directioncardone_url").value = find_url(card_val);
    document.getElementById("directionimgone").src = find_img(card_val);

    card_val = document.getElementById("directioncardtwo").value;
    document.getElementById("directioncardtwo_url").value = find_url(card_val);
    document.getElementById("directionimgtwo").src = find_img(card_val);

    card_val = document.getElementById("directioncardthree").value;
    document.getElementById("directioncardthree_url").value = find_url(card_val);
    document.getElementById("directionimgthree").src = find_img(card_val);

    card_val = document.getElementById("directioncardfour").value;
    document.getElementById("directioncardfour_url").value = find_url(card_val);
    document.getElementById("directionimgfour").src = find_img(card_val);
}
function contentview (content_item) {
    if (content_item == "one") {
        document.getElementById("contentframe").src = document.getElementById("cardone_url").value;
    }
    if (content_item == "two") {
        document.getElementById("contentframe").src = document.getElementById("cardtwo_url").value;
    }
    if (content_item == "three") {
        document.getElementById("contentframe").src = document.getElementById("cardthree_url").value;
    }
    
    if (content_item == "BTCLone") {
        document.getElementById("contentframe").src = document.getElementById("BTCLcardone_url").value;
    }
    if (content_item == "BTCLtwo") {
        document.getElementById("contentframe").src = document.getElementById("BTCLcardtwo_url").value;
    }
    if (content_item == "BTCLthree") {
        document.getElementById("contentframe").src = document.getElementById("BTCLcardthree_url").value;
    }
    if (content_item == "BFALone") {
        document.getElementById("contentframe").src = document.getElementById("BFALcardone_url").value;
    }
    if (content_item == "BFALtwo") {
        document.getElementById("contentframe").src = document.getElementById("BFALcardtwo_url").value;
    }
    if (content_item == "BFALthree") {
        document.getElementById("contentframe").src = document.getElementById("BFALcardthree_url").value;
    }
    if (content_item == "FCCLone") {
        document.getElementById("contentframe").src = document.getElementById("FCCLcardone_url").value;
    }
    if (content_item == "FCCLtwo") {
        document.getElementById("contentframe").src = document.getElementById("FCCLcardtwo_url").value;
    }
    if (content_item == "FCCLthree") {
        document.getElementById("contentframe").src = document.getElementById("FCCLcardthree_url").value;
    }
    if (content_item == "directionone") {
        document.getElementById("contentframe").src = document.getElementById("directioncardone_url").value;
    }
    if (content_item == "directiontwo") {
        document.getElementById("contentframe").src = document.getElementById("directioncardtwo_url").value;
    }
    if (content_item == "directionthree") {
        document.getElementById("contentframe").src = document.getElementById("directioncardthree_url").value;
    }

    if (content_item == "four") {
        document.getElementById("contentframe").src = document.getElementById("cardfour_url").value;
    }
    if (content_item == "directionfour") {
        document.getElementById("contentframe").src = document.getElementById("directioncardfour_url").value;
    }

    if (content_item == "five") {
        document.getElementById("contentframe").src = document.getElementById("cardfive_url").value;
    }

    if (content_item == "BFALfour") {
        document.getElementById("contentframe").src = document.getElementById("BFALcardfour_url").value;
    }
    if (content_item == "BFALfive") {
        document.getElementById("contentframe").src = document.getElementById("BFALcardfive_url").value;
    }
    if (content_item == "FCCLfour") {
        document.getElementById("contentframe").src = document.getElementById("FCCLcardfour_url").value;
    }
    if (content_item == "FCCLfive") {
        document.getElementById("contentframe").src = document.getElementById("FCCLcardfive_url").value;
    }

    if (content_item == "six") {
        document.getElementById("contentframe").src = document.getElementById("cardsix_url").value;
    }
    if (content_item == "seven") {
        document.getElementById("contentframe").src = document.getElementById("cardseven_url").value;
    }
    if (content_item == "eight") {
        document.getElementById("contentframe").src = document.getElementById("cardeight_url").value;
    }
    if (content_item == "nine") {
        document.getElementById("contentframe").src = document.getElementById("cardnine_url").value;
    }
    if (content_item == "ten") {
        document.getElementById("contentframe").src = document.getElementById("cardten_url").value;
    }
    if (content_item == "eleven") {
        document.getElementById("contentframe").src = document.getElementById("cardeleven_url").value;
    }
    if (content_item == "twelve") {
        document.getElementById("contentframe").src = document.getElementById("cardtwelve_url").value;
    }
    if (content_item == "thirteen") {
        document.getElementById("contentframe").src = document.getElementById("cardthirteen_url").value;
    }
    if (content_item == "fourteen") {
        document.getElementById("contentframe").src = document.getElementById("cardfourteen_url").value;
    }
    if (content_item == "fifteen") {
        document.getElementById("contentframe").src = document.getElementById("cardfifteen_url").value;
    }
}