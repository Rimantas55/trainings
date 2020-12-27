const logo = document.querySelectorAll("#logo path");

for (let i = 0; i < logo.length; i++) {
    console.log(`Letter ${i} is ${logo[i].getTotalLength()}`); // in console you will see all letters length which will be used as values
}
