const search = document.getElementById("search");
const cards = document.querySelectorAll(".card");

search.addEventListener("input", function () {
    let value = this.value.toLowerCase();

    cards.forEach(card => {
        let name = card.getAttribute("data-name");
        card.style.display = name.includes(value) ? "block" : "none";
    });
});

function filterPackage(pkg) {
    cards.forEach(card => {
        let cardPackage = card.getAttribute("data-package");

        if (pkg === "all" || cardPackage === pkg) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}