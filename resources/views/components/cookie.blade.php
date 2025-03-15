<div id="cookie-banner"
    class="position-fixed top-50 start-50 translate-middle bg-white text-dark p-4 rounded shadow-lg d-none"
    style="z-index: 1050; width: 90%; max-width: 500px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between; align-items: start; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    
    <div class="fs-5">
        <p class="mb-3 mt-20 text-start">
            Nous utilisons des cookies pour améliorer votre expérience sur notre site. En poursuivant votre navigation, 
            vous acceptez notre <a href="{{ route('conditions') }}" class="text-primary fw-bold">politique de confidentialité</a> 
            et l'utilisation des cookies.
        </p>
    </div>

    <div class="mt-auto text-start w-100">
        <button id="accept-cookies" class="btn btn-primary ">J'accepte</button>
    </div>
</div>


<style>
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    #cookie-banner {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translate(100%, -50%);
        background: white;
        text-align: center;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 500px;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1050;
        opacity: 0;
        transition: transform 0.6s ease-out, opacity 0.6s ease-out;
    }

    #cookie-banner.show {
        transform: translate(0, -50%);
        opacity: 1;
    }
</style>

<div id="cookie-banner" class="d-none">
    <div class="text-center">
        <p class="mb-3">Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre
            politique de confidentialité.</p>
        <button id="accept-cookies" class="btn btn-primary">Accepter</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (!localStorage.getItem("cookiesAccepted")) {
            const banner = document.getElementById("cookie-banner");
            banner.classList.remove("d-none");
            setTimeout(() => {
                banner.classList.add("show");
            }, 100);
        }

        document.getElementById("accept-cookies").addEventListener("click", function () {
            localStorage.setItem("cookiesAccepted", "true");
            const banner = document.getElementById("cookie-banner");
            banner.style.transform = "translate(100%, -50%)"; // Cache la bannière avec une animation inverse
            banner.style.opacity = "0";
            setTimeout(() => {
                banner.classList.add("d-none");
            }, 600);
        });
    });
</script>