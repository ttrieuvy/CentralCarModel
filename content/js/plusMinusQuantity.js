editQuantity = (mathSymbol) => {
    var quantity = document.getElementById('quantity')
    if (mathSymbol == '+') {
        quantity.value ++
        console.log(quantity.value);

    } else {
        if (quantity.value > 1) {
            quantity.value --
            console.log(quantity.value);
        }
    }

}