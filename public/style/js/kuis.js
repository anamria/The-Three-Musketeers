var jawab = [];
var tf = [];
var benar = 0;
var salah = 0;
var nilai = 0;

jawab[1] = "c";
jawab[2] = "b";
jawab[3] = "b";
jawab[4] = "a";
jawab[5] = "c";
jawab[6] = "b";
jawab[7] = "c";
jawab[8] = "a";
jawab[9] = "b";
jawab[10] = "a";


function ans(pertanyaan,jawaban) {
    if(jawaban == jawab[pertanyaan]){
            nilai+=10;
            benar+=1;
            let ket = "benar";
            tf.push(ket);
    }
    else {
        nilai+=0;
        salah+=1;
        let ket = "salah";
        tf.push(ket);
    }

}

function btnSubmit(){

    var popup = document.getElementById("popup");
    popup.classList.remove('hidden');

    let benar1 = document.getElementById("true");
    benar1.innerHTML = "Benar = " + benar;

    let salah1 = document.getElementById("false");
    salah1.innerHTML = "Salah = " + salah;

    let hasil = document.getElementById("hasil");
    hasil.innerHTML = "Skor = " + nilai;

    let hasil2 = document.getElementById("skorInput").value = nilai;

    
    document.getElementById('btn2').classList.remove('hidden');

}

function hidePopup() {
    var popup = document.getElementById("popup");
    popup.classList.add('hidden');

}