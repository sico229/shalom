var TypePretOutput = document.querySelector('.TypePretOutput');
var TypePret = document.querySelector('#typePret');
var MontantSouhaiteOutput = document.querySelector('.MontantSouhaiteOutput');
var DureeDeRemboursementSouhaiteOutput = document.querySelector('.DureeDeRemboursementSouhaiteOutput');
var MensualiteOutput = document.querySelector('.MensualiteOutput');
var TauxOutput = document.querySelector('.TauxOutput');
var montantInput = document.querySelector('.montantInput');
var indicator1 = document.querySelector('.indicator1');
var step = parseFloat(montantInput.getAttribute("step"));
var montant = 0;
var parametres = JSON.parse(document.getElementById('params').getAttribute('data-pays'));
TypePret === null || TypePret === void 0 ? void 0 : TypePret.addEventListener('change', function (e) {
    estimateur();
});
montantInput === null || montantInput === void 0 ? void 0 : montantInput.addEventListener('input', function (e) {
    estimateur();
});
function estimateur() {
    var pret = {
        type: TypePret.value,
        montant: parseFloat(montantInput.value),
        dure: montantInput.value,
        taux: 0,
        mensualite: 0
    };
    TypePretOutput.innerHTML = pret.type;
    MontantSouhaiteOutput.innerHTML = "".concat(pret.montant.toLocaleString()).concat(parametres.monnaie);
    indicator1.innerHTML = "".concat(pret.montant.toLocaleString()).concat(parametres.monnaie);
    indicator1.style.left = "".concat(pret.montant / 5000, "%");
}
