<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Trouvez rapidement des réponses à vos questions.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-6">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment réserver un trajet ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Pour réserver un trajet, connectez-vous à votre compte, recherchez un trajet disponible, sélectionnez-le et suivez les étapes de réservation. Le paiement se fait en ligne de manière sécurisée.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment devenir conducteur ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Pour devenir conducteur, vous devez créer un compte, remplir votre profil conducteur, fournir les documents nécessaires (permis de conduire, assurance) et attendre la validation de votre dossier.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment sont calculés les prix ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Les prix sont calculés en fonction de la distance, du nombre de places disponibles, et peuvent varier selon la demande. Une commission de service est incluse dans le prix final.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment annuler une réservation ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Vous pouvez annuler votre réservation depuis votre espace personnel jusqu'à 24h avant le départ. Les frais d'annulation varient selon le délai : gratuit jusqu'à 48h avant, 50% du prix entre 48h et 24h avant, et 100% dans les 24h précédant le départ.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment contacter le support client ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Notre support client est disponible 24/7. Vous pouvez nous contacter par email à support@covoyage.com, par téléphone au +33 1 23 45 67 89, ou via le formulaire de contact sur notre site. Nous vous répondrons dans les plus brefs délais.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <button type="button" class="faq-button flex justify-between items-center w-full text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Comment fonctionne le système de paiement ?</h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-600 hidden">
                    <p>Le paiement se fait en ligne via MTN MOMO. Le montant est bloqué sur votre compte jusqu'à la fin du trajet. Une fois le trajet terminé, le conducteur confirme l'arrivée et le montant est débloqué. En cas de problème, notre service client peut intervenir pour résoudre la situation.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.faq-button');
            
            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    // Fermer toutes les autres réponses
                    document.querySelectorAll('.faq-answer').forEach(item => {
                        if (item !== answer) {
                            item.classList.add('hidden');
                            const otherIcon = item.previousElementSibling.querySelector('i');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });
                    
                    // Toggle la réponse actuelle
                    answer.classList.toggle('hidden');
                    icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                });
            });
        });
    </script>
</section>