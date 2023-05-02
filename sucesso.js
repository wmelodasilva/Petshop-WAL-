function mascara(numeroDigitado) {
    if (numeroDigitado.value.length == 0) {
        numeroDigitado.value = '(' + numeroDigitado.value; }
    if (numeroDigitado.value.length == 4){
        numeroDigitado.value = numeroDigitado.value + ')'; } 
    if (numeroDigitado.value.length == 5){
        numeroDigitado.value = numeroDigitado.value + ' ';}
    if (numeroDigitado.value.length == 7){
        numeroDigitado.value = numeroDigitado.value + ' ';}
    if (numeroDigitado.value.length == 12){
        numeroDigitado.value = numeroDigitado.value + '-';}
}

function mascaracep(cepDigitado) {
    if (cepDigitado.value.length == 5){
        cepDigitado.value = cepDigitado.value + '-'; }
}

function mascaracpf(cpfDigitado) {
    if (cpfDigitado.value.length == 3) {
        cpfDigitado.value = cpfDigitado.value + '.';}
    if (cpfDigitado.value.length == 7){
        cpfDigitado.value = cpfDigitado.value + '.';}
    if (cpfDigitado.value.length == 11){
       cpfDigitado.value = cpfDigitado.value + '-';}
}
        
    
