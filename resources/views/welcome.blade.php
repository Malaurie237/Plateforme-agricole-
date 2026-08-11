<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech - Plateforme Agricole Sécurisée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-vert-herbe { background-color: #2e7d32; }
        .text-vert-herbe { color: #2e7d32; }
        .bg-marron-terre { background-color: #5d4037; }
        .text-marron-terre { color: #5d4037; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- 1. EN-TÊTE -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-3xl font-extrabold text-vert-herbe">Agri<span class="text-marron-terre">Tech</span></a>

            <div class="flex items-center space-x-6">
                <a href="/catalogue" class="font-bold text-gray-700 hover:text-vert-herbe transition">Catalogue</a>
                <div class="text-sm font-semibold text-gray-600">
                    <span class="text-vert-herbe cursor-pointer font-bold">FR</span> | <span class="hover:underline cursor-pointer">EN</span>
                </div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-700 hover:text-vert-herbe">Mon Compte</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-vert-herbe font-semibold">Connexion</a>
                        <a href="{{ route('register') }}" class="bg-vert-herbe text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800 transition">Inscription</a>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- 2. BANNIÈRE PRINCIPALE -->
    <section class="bg-gradient-to-r from-green-800 to-green-600 text-white py-20 px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Achetez vos fruits en toute confiance directement auprès des producteurs</h1>
            <p class="text-lg md:text-xl mb-8 text-green-100">La première plateforme agricole garantissant des paiements sécurisés par séquestre et des agriculteurs identifiés par CNI.</p>
            <div class="space-x-4">
                <a href="/catalogue" class="bg-white text-vert-herbe px-6 py-3 rounded-lg font-bold text-lg hover:bg-gray-100 shadow-md inline-block">Explorer le Catalogue</a>
                <a href="{{ route('register') }}" class="bg-marron-terre text-white px-6 py-3 rounded-lg font-bold text-lg hover:bg-yellow-900 shadow-md inline-block">Vendre mes récoltes</a>
            </div>
        </div>
    </section>

    <!-- 3. CONFIANCE & SÉCURITÉ -->
    <section class="py-16 max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-marron-terre">Pourquoi nous faire confiance ?</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-green-600 text-center">
                <div class="text-4xl mb-4">🪪</div>
                <h3 class="text-xl font-bold mb-2">Traçabilité CNI</h3>
                <p class="text-gray-600">Chaque agriculteur est vérifié manuellement avec sa pièce d'identité officielle avant de pouvoir publier.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-yellow-600 text-center">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-bold mb-2">Séquestre d'Acompte</h3>
                <p class="text-gray-600">Votre acompte de 30% est conservé en toute sécurité par la plateforme et n'est versé qu'après livraison conforme.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-red-600 text-center">
                <div class="text-4xl mb-4">🛡️</div>
                <h3 class="text-xl font-bold mb-2">Système Anti-Arnaque</h3>
                <p class="text-gray-600">Remboursement intégral garanti en cas de non-respect du contrat de réservation.</p>
            </div>
        </div>
    </section>

    <!-- 4. AVIS -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-marron-terre">Témoignages & Évaluations</h2>
            <p class="text-center text-lg mb-12 text-gray-600">Note moyenne de la plateforme : <span class="font-bold text-yellow-500">4.8/5 ⭐</span></p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center space-x-1 text-yellow-400 mb-2">⭐⭐⭐⭐⭐</div>
                    <p class="italic text-gray-700 mb-4">"Grâce au système de séquestre, j'ai pu réserver 2 tonnes de mangues de Penja en toute sérénité."</p>
                    <p class="font-bold text-sm text-gray-900">- Jean-Paul K., Grossiste à Douala</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center space-x-1 text-yellow-400 mb-2">⭐⭐⭐⭐⭐</div>
                    <p class="italic text-gray-700 mb-4">"Mes produits sont vendus avant même la récolte. La vérification CNI rassure énormément mes clients."</p>
                    <p class="font-bold text-sm text-gray-900">- M. Tchamba, Agriculteur à Foumbot</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PIED DE PAGE -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold mb-4 text-vert-herbe">AgriTech</h4>
                <p class="text-gray-400 text-sm">La plateforme e-commerce agricole de confiance pour la vente et la réservation de fruits.</p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Liens Utiles</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="#" class="hover:text-white">Foire aux questions (FAQ)</a></li>
                    <li><a href="#" class="hover:text-white">Mentions Légales</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Contact</h4>
                <p class="text-gray-400 text-sm">Email : support@agritech.cm</p>
                <p class="text-gray-400 text-sm">Téléphone : +237 600 00 00 00</p>
            </div>
        </div>
        <div class="text-center text-gray-500 text-sm mt-8 border-t border-gray-800 pt-4">
            &copy; 2026 AgriTech. Tous droits réservés.
        </div>
    </footer>

</body>
</html> 