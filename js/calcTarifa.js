function calcTarifa(distance) {
	document.getElementById('displayDistancia').innerHTML = distance;
	document.getElementById('displayTarifa').innerHTML = "R$" + (4.5 + 0.25 * parseInt(distance.substr(0, distance.indexOf(" "))) * 20);
}