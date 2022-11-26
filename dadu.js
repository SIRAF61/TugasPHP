btnA=()=>{
	const daduA = Math.floor(Math.random()*6)+1;   
    const DaduA =`image/dadu${daduA}.png`; 
    document.getElementById ('imgA').setAttribute('src',DaduA); 
    var angka1 = document.getElementById("A");
    angka1.innerHTML=daduA;
    numberA=daduA;
}

btnB=()=>{
	const daduB = Math.floor(Math.random()*6)+1;   
    const DaduB =`image/dadu${daduB}.png`; 
    document.getElementById ('imgB').setAttribute('src',DaduB);
    var angka2 = document.getElementById("B");
    angka2.innerHTML=daduB;
    numberB=daduB;
}

function btnTotal(){
	var nilai = numberB + numberA;
	console.log(nilai);
	alert("Anda Maju Sebanyak " +nilai+ " Langkah")
}

function btnDua(){
    btnA()
    btnB()
}
