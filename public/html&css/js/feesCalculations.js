var fees = document.getElementById('fees');
var paid = document.getElementById('paid');
var unpaid = document.getElementById('unpaid');

let feesAmount = 0.00;
let paidAmount = 0.00;
let unpaidAmount = 0.00;

fees.addEventListener('blur', () => {
    feesAmount = fees.value;
    console.log(feesAmount);
})

paid.addEventListener('blur', () => {
    paidAmount = paid.value;
    unpaidAmount = feesAmount - paidAmount;
    unpaid.innerText = unpaidAmount;
    console.log(unpaidAmount);
})

