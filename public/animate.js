function animateOnScroll() {
    const animatedElements = document.querySelectorAll(".animate-on-scroll");

    animatedElements.forEach((element) => {
        if (isElementInViewport(element)) {
            if (element.classList.contains("zoomIn")) {
                element.classList.add(
                    "animate__animated",
                    "animate__zoomIn",
                    "animate__slower"
                );
            } else if (element.classList.contains("bounceRight")) {
                element.classList.add(
                    "animate__animated",
                    "animate__bounceInRight",
                    "animate__slower"
                );
            } else if (element.classList.contains("bounceLeft")) {
                element.classList.add(
                    "animate__animated",
                    "animate__bounceInLeft",
                    "animate__slower"
                );
            } else if (element.classList.contains("fadeDown")) {
                element.classList.add(
                    "animate__animated",
                    "animate__fadeInDown",
                    "animate__slower"
                );
            } else if (element.classList.contains("fadeUp")) {
                element.classList.add(
                    "animate__animated",
                    "animate__fadeInUp",
                    "animate__slower"
                );
            }
        }
    });
}

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}
window.addEventListener("scroll", animateOnScroll);
