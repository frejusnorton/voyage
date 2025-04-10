<!-- FAQ Section -->
<section class="py-20 bg-gray-50" id="faq">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Questions fréquentes</h2>
            <p class="text-xl text-gray-600">Tout ce que vous devez savoir sur notre service</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(1)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Comment fonctionne le paiement ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon1"></i>
                </button>
                <div id="faqContent1" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Le paiement se fait directement sur notre plateforme de manière sécurisée. Vous pouvez payer par carte bancaire ou mobile money. Le conducteur reçoit le paiement après validation du trajet.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(2)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Comment sont sélectionnés les conducteurs ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon2"></i>
                </button>
                <div id="faqContent2" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Tous nos conducteurs sont vérifiés et doivent fournir des documents d'identité valides, leur permis de conduire et leur historique de trajets. Nous vérifions également leur réputation auprès des passagers.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(3)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Puis-je annuler un trajet ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon3"></i>
                </button>
                <div id="faqContent3" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Oui, vous pouvez annuler un trajet jusqu'à 24 heures avant le départ sans frais. Pour les annulations de dernière minute, des frais peuvent s'appliquer selon les conditions générales.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(4)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Comment fonctionne le système de notation ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon4"></i>
                </button>
                <div id="faqContent4" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Après chaque trajet, les passagers et les conducteurs se notent mutuellement. Ces notes sont publiques et contribuent à maintenir une communauté de confiance. Les utilisateurs avec des notes insatisfaisantes peuvent être exclus de la plateforme.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(5)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Quels sont les avantages pour les conducteurs ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon5"></i>
                </button>
                <div id="faqContent5" class="hidden px-6 pb-6">
                    <p class="text-gray-600">En tant que conducteur, vous pouvez rentabiliser vos trajets réguliers, rencontrer de nouvelles personnes, et bénéficier d'une assurance spéciale covoiturage. Notre plateforme vous permet également de gérer facilement vos trajets et vos paiements.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(6)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Comment puis-je modifier mon trajet ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon6"></i>
                </button>
                <div id="faqContent6" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Vous pouvez modifier votre trajet jusqu'à 12 heures avant le départ. Les modifications incluent l'heure de départ, le point de rendez-vous, et le nombre de places disponibles. Les passagers seront notifiés automatiquement des changements.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(7)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Quelle est la politique de bagages ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon7"></i>
                </button>
                <div id="faqContent7" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Chaque passager peut emporter un bagage à main et une valise moyenne. Les bagages volumineux doivent être signalés lors de la réservation. Le conducteur a le droit de refuser les bagages qui ne respectent pas ces conditions.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <button onclick="toggleFAQ(8)" class="w-full flex justify-between items-center p-6 text-left">
                    <span class="text-lg font-semibold">Comment fonctionne l'assurance ?</span>
                    <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon8"></i>
                </button>
                <div id="faqContent8" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Tous nos trajets sont couverts par une assurance responsabilité civile spécifique au covoiturage. Cette assurance couvre les dommages matériels et corporels pouvant survenir pendant le trajet. Les détails de la couverture sont disponibles dans nos conditions générales.</p>
                </div>
            </div>
        </div>
    </div>
</section>