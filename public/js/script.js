var currencyInput = document.getElementsByClassName('currency-input');
var currencyParagraph = document.getElementsByClassName('currency-p');
var currencySelect = document.getElementsByClassName('select-currency');

//Show Select after Press Enter on the Input
for (let i = 0; i < currencyInput.length; i++) {
    currencyInput[i].addEventListener('keyup', (e) => {
        if (e.keyCode === 13) {
            e.preventDefault();
            currencySelect[i].hidden = false;
        }
    })
}

//Set the value of the Paragraph to the Value of the Option, hide the select
for (let k = 0; k < currencySelect.length; k++) {
    currencySelect[k].addEventListener('change', () => {
        for (let j = 0; j < currencySelect[k].length; j++) {
            console.log(currencySelect[k].options[j].value, k, j);
            if (currencySelect[k][j].selected) {
                currencyParagraph[k].hidden = false;
                currencySelect[k].hidden = true;
                currencyParagraph[k].innerText = currencySelect[k].options[j].value;
                break;
            }
        }
    })
}

//Add // between each link in the customer data field
var linksContainer =document.getElementById('links-container');
console.log(linksContainer);
linksContainer.addEventListener('keyup', (e) => {
    if(e.keyCode === 32){
        linksContainer.value += '// ';
    }
})