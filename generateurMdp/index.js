const dataLowercase = "azertyuiopqsdfghjklmwxcvbn";
const dataUppercase = dataLowercase.toLocaleUpperCase();
const dataNumbers = "0123456789";
const dataSymbols = "$^*ù!:;,&é\"'(-è_ç";
const rangeValue = document.getElementById('password-length');
const passWordOutput = document.getElementById("password-output");

function generatePassword(){
    let data =[];
    let password = ""
    // les checkbox sont connues par JS, coché = true non coché = false/ les ... cassent les chaines de caractères
    if(lowercase.checked) data.push(...dataLowercase);
    if(uppercase.checked) data.push(...dataUppercase);
    if(numbers.checked) data.push(...dataNumbers);
    if(symbols.checked) data.push(...dataSymbols);

    if (data.length ===0) {
        alert('Veuillez sélectionner des critères');
        return;
    }

    for(i=0; i< rangeValue.value; i++){
    password += data[Math.floor(Math.random() * data.length)];
    }
    //on ne peux pas mettre un innerhtml sur une balise input html
    passWordOutput.value = password;
}

generateButton.addEventListener("click", generatePassword); //le bouton est connu par JS sans le declarer