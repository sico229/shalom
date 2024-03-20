const TypePretOutput: HTMLElement | null = document.querySelector('.TypePretOutput');
const TypePret: HTMLElement | null = document.querySelector('#typePret');
const MontantSouhaiteOutput: HTMLElement | null = document.querySelector('.MontantSouhaiteOutput');
const DureeDeRemboursementSouhaiteOutput: HTMLElement | null = document.querySelector('.DureeDeRemboursementSouhaiteOutput');
const MensualiteOutput: HTMLElement | null = document.querySelector('.MensualiteOutput');
const TauxOutput: HTMLElement | null = document.querySelector('.TauxOutput');
const montantInput: HTMLElement | null = document.querySelector('.montantInput');
const indicator1: HTMLElement | null = document.querySelector('.indicator1');
const step:number=parseFloat(montantInput.getAttribute("step"));
let montant:number=0;

type Pret={
    type:String|null,
        montant:Number|null,
        dure:Number|null,
        taux:Number|null,
        mensualite:Number|null

}

const parametres:{
    monnaie:string,
    devise:string,

}=JSON.parse(document.getElementById('params').getAttribute('data-pays'));

TypePret?.addEventListener('change',(e:any)=>{
    estimateur()
    
})
montantInput?.addEventListener('input', (e: any) => {
    estimateur()
});

function estimateur(){
    let pret:Pret={
        type:TypePret.value,
        montant: parseFloat(montantInput.value),
        dure:montantInput.value,
        taux:0,
        mensualite:0
    }
    TypePretOutput.innerHTML=pret.type;
    MontantSouhaiteOutput.innerHTML=`${pret.montant.toLocaleString()}${parametres.monnaie}`;
    indicator1.innerHTML=`${pret.montant.toLocaleString()}${parametres.monnaie}`;
    indicator1.style.left=`${pret.montant/5000}%`
    
}