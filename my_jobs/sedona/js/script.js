var findHotels = document.querySelector(".find-hotels__button");
var popup = document.querySelector(".popup");

var arrival = popup.querySelector("[name=arrival]");
var form = document.querySelector("form");
var departure = popup.querySelector("[name=departure]");

var storageArrival = localStorage.getItem("arrival");
var storageDeparture = localStorage.getItem("departure");


findHotels.addEventListener("click", function (evt) {
	evt.preventDefault();
	popup.classList.toggle("popup_show");
	popup.classList.remove("modal-error");
	
	if (storageArrival || storageDeparture) {
		arrival.value = storageArrival;
		departure.value = storageDeparture;
		storage.focus();
	} else {
		arrival.focus();
	}
});

form.addEventListener ("submit", function (evt) {
	if (!arrival.value || !departure.value) {
		evt.preventDefault();
		popup.classList.remove("modal-error");
		popup.offsetWidth = popup.offsetWidth;
		popup.classList.add("modal-error");
	} else {
		localStorage.setItem("arrival", arrival.value);
		localStorage.setItem("departure", departure.value);
	}
});
