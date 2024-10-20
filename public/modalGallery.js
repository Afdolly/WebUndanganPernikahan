function showModal(img) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");

    modal.style.display = "flex";
    modalImg.src = img.src;

    modal.onclick = function(event) {
        if (event.target !== modalImg) {
            closeModal();
        }
    }
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}