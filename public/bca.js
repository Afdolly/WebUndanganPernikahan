function copyFunctionBCA() {
    var copyText = "0352981808";

    navigator.clipboard
        .writeText(copyText)
        .then(function () {
            var tooltip = document.getElementById("myTooltipBCA");
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
