function moveAd() {
    left = 0;
    setInterval(function() {
        image = document.getElementById("sideImage");
        image.style.left = left + "px";
        left--;
        if (left == -400) {
            left = 0;
        }
    }, 50);
}

function moveText() {
    top1 = -400;
    textNo = 1;
    setInterval(function() {
        if (textNo == 1) {
            text = document.getElementById("text1");
            text.style.display = "inline";
            text.style.top = top1 + "px";
            top1++;
            if (top1 == -100) {
                textNo = 2;
                top1 = -400;
                text.style.display = "none";
            }
        } else {
            text = document.getElementById("text2");
            text.style.display = "inline";
            text.style.top = top1 + "px";
            top1++;
            if (top1 == -100) {
                textNo = 1;
                top1 = -400;
                text.style.display = "none";
            }
        }

    }, 50);
}

function addToCart(e) {
    cart = document.getElementById("cartDiv");
    switch (e.id) {
        case "addInstinctive":
            qty = document.getElementById("instinctiveQty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Instinctive: <input type="number" class="cartInput" id = "cartInstinctive" pName = "Instinctive" price="3.2" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 3.2)
                    + '</p>');
            break;
        case "addKitten":
            qty = document.getElementById("kittenQty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Kitten: <input type="number" class="cartInput" id = "cartKitten" pName = "Kitten price="2.9" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 2.9)
                    + '</p>');
            break;
        case "addSpread":
            qty = document.getElementById("spreadQty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Spread: <input type="number" class="cartInput" id = "cartSpread" pName = "Spread" price="9" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 9)
                    + '</p>');
            break;
        case "addMilk1":
            qty = document.getElementById("milk1Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Milk1: <input type="number" class="cartInput" id = "cartMilk1" pName = "Milk1" price="4.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 4.5)
                    + '</p>');
            break;
        case "addMilk2":
            qty = document.getElementById("milk2Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Milk2: <input type="number" class="cartInput" id = "cartMilk2" pName = "Milk1" price="2.32" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 2.32)
                    + '</p>');
            break;
        default:
        // code block
    }

}

function addToInvoice() {

}

/**
 * Show invoice page
 */
function invoice() {
    console.log("open invoice here");
    voicePage = document.getElementById("voicePage");
    //Get the button that opens the modal
    var btn = document.getElementById("showInvoiceBut");

    //Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    //When the user clicks on the button, open the modal 
    btn.onclick = function() {
        cart = document.getElementsByClassName("cartInput");
        voiceContent = document.getElementById("voice-content");
        Total = 0;
        var elems = document.getElementsByClassName("items");
        i = 0
        while (i<elems.length){
            elems[i].parentNode.removeChild(elems[i]);
        }


        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) {
                case "cartInstinctive":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Instinctive: Qty:'+ qty +' Price:$' + (Number(qty) * 3.2)+ '</p>');
                    Total += (Number(qty) * 3.2);
                    break;
                case "cartKitten":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Kitten: Qty:'+ qty +' Price:$' + (Number(qty) * 2.9)+ '</p>');
                    Total += (Number(qty) * 2.9);
                    break;
                case "cartSpread":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 9)+ '</p>');
                    Total += (Number(qty) * 9);
                    break;
                case "cartMilk1":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 4.5)+ '</p>');
                    Total += (Number(qty) * 4.5);
                    break;
                case "cartMilk2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 2.32)+ '</p>');
                    Total += (Number(qty) * 2.32);
                    break;
                default:
                // code block
            }

            i++;

        }
        voiceContent.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total: $'+ Total+'</p>');

        voicePage.style.display = "block";
    }

    //When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        voicePage.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == voicePage) {
            voicePage.style.display = "none";
        }
    }
}
//Food Shop. (n.d.). Retrieved October 23, 2020, from https://moodle.unitec.ac.nz/mod/folder/view.php?id=515159