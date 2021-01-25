function validar(cc,cp,qtd) {
    if("" == cc || "" == cp || "" == qtd) {
        alert("Faltam dados!");
        return false;
    } else {
        return true;
    }
}