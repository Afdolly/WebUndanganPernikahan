const cardMandiri = document.querySelector(".card-mandiri");

cardMandiri.addEventListener("click", function () {
    const cardInnerMandiri = this.querySelector(".card-inner-mandiri");

    cardInnerMandiri.classList.toggle("is-flipped");
});

