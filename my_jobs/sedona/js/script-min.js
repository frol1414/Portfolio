var findHotels=document.querySelector(".find-hotels__button"),popup=document.querySelector(".popup"),arrival=popup.querySelector("[name=arrival]"),form=document.querySelector("form"),departure=popup.querySelector("[name=departure]"),storageArrival=localStorage.getItem("arrival"),storageDeparture=localStorage.getItem("departure");findHotels.addEventListener("click",function(e){e.preventDefault(),popup.classList.toggle("popup_show"),popup.classList.remove("modal-error"),storageArrival||storageDeparture?(arrival.value=storageArrival,departure.value=storageDeparture,storage.focus()):arrival.focus()}),form.addEventListener("submit",function(e){arrival.value&&departure.value?(localStorage.setItem("arrival",arrival.value),localStorage.setItem("departure",departure.value)):(e.preventDefault(),popup.classList.remove("modal-error"),popup.offsetWidth=popup.offsetWidth,popup.classList.add("modal-error"))});