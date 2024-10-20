const card = document.querySelector(".card-bca");

card.addEventListener("click", function () {
    const cardInner = this.querySelector(".card-inner-bca");

    cardInner.classList.toggle("is-flipped");
});

