function copyFunctionMandiri() {
    var copyText = "1230012044642";

    navigator.clipboard
        .writeText(copyText)
        .then(function () {
            var tooltip = document.getElementById("myTooltipMandiri");
            tooltip.innerHTML = "Copied!";
            setTimeout(() => {
                tooltip.classList.add("hidden");
            }, 2000);
            tooltip.classList.remove("hidden");
        })
        .catch(function (error) {
            console.error("Copy failed", error);
        });
}
