<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-white p-4 shadow-lg transform translate-y-full transition-transform duration-500 ease-in-out z-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-gray-700">
                <p class="mb-2">
                    Nous utilisons des cookies pour améliorer votre expérience sur notre site. En poursuivant votre navigation, 
                    vous acceptez notre <a href="{{ route('politique') }}" class="text-blue-600 hover:text-blue-800 font-semibold">politique de confidentialité</a> 
                    et l'utilisation des cookies.
                </p>
            </div>
            <div class="flex gap-4">
                <button id="accept-cookies" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                    J'accepte
                </button>
                <button id="reject-cookies" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300">
                    Je refuse
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById("cookie-banner");
    const acceptButton = document.getElementById("accept-cookies");
    const rejectButton = document.getElementById("reject-cookies");

    // Vérifie si l'utilisateur a déjà fait un choix
    if (!localStorage.getItem("cookiesChoice")) {
        // Affiche la bannière avec une animation
        setTimeout(() => {
            banner.classList.remove("translate-y-full");
        }, 1000);
    } else {
        banner.classList.add("hidden");
    }

    // Gestion du clic sur "J'accepte"
    acceptButton.addEventListener("click", function() {
        localStorage.setItem("cookiesChoice", "accepted");
        banner.classList.add("translate-y-full");
        setTimeout(() => {
            banner.classList.add("hidden");
        }, 500);
    });

    // Gestion du clic sur "Je refuse"
    rejectButton.addEventListener("click", function() {
        localStorage.setItem("cookiesChoice", "rejected");
        banner.classList.add("translate-y-full");
        setTimeout(() => {
            banner.classList.add("hidden");
        }, 500);
    });
});
</script>