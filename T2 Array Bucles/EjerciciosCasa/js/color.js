var valoresHex = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"];

function cambioColor(){
	let hijos = document.getElementsByClassName("hijo");
	for (let x = 0; x < hijos.length; x++) {
		hijos[x].style.background = ramX(valoresHex);

	}
	
	function ramX(caracteresHexa){
		let color = "#"
		for (let i = 0; i < 6; i++) {
			let aleat = Math.random() * caracteresHexa.length;
			color += caracteresHexa[Math.floor(aleat)];
		}
		return color;
	}
}