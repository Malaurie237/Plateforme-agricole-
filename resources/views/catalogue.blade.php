<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des Récoltes - AgriTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-vert-herbe { background-color: #2e7d32; }
        .text-vert-herbe { color: #2e7d32; }
        .bg-marron-terre { background-color: #5d4037; }
        .text-marron-terre { color: #5d4037; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- EN-TÊTE -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-3xl font-extrabold text-vert-herbe">Agri<span class="text-marron-terre">Tech</span></a>
            <div class="flex items-center space-x-6">
                <a href="/" class="font-bold text-gray-700 hover:text-vert-herbe transition">Accueil</a>
                <a href="/catalogue" class="font-bold text-vert-herbe underline">Catalogue</a>
            </div>
        </div>
    </header>

    <!-- TITRE ET FILTRES DE RECHERCHE -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-extrabold text-marron-terre mb-2">Catalogue Public des Récoltes</h1>
        <p class="text-gray-600 mb-8">Découvrez et réservez des fruits frais directement auprès de nos agriculteurs vérifiés.</p>

        <!-- Barre de Filtres -->
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 mb-8 flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-4">
                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-vert-herbe">
                    <option value="">Toutes les zones (Penja, Foumbot...)</option>
                    <option value="penja">Penja</option>
                    <option value="njombe">Njombé</option>
                    <option value="foumbot">Foumbot</option>
                    <option value="loum">Loum</option>
                </select>

                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-vert-herbe">
                    <option value="">Tous les fruits</option>
                    <option value="mangue">Mangue</option>
                    <option value="ananas">Ananas</option>
                    <option value="papaye">Papaye</option>
                    <option value="goyave">Goyave</option>
                </select>
            </div>
            <button class="bg-vert-herbe text-white px-5 py-2 rounded-lg font-semibold hover:bg-green-800 transition text-sm">Filtrer</button>
        </div>

        <!-- GRILLE DES CARTE DE FRUITS (4 EXEMPLES) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- FRUIT 1 : MANGUE -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-48 bg-amber-100 flex items-center justify-center text-6xl">🥭</div>
                <div class="p-5">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-bold flex items-center">
                            ✓ Agriculteur Vérifié (CNI)
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Mangues Greffées</h3>
                    <p class="text-sm text-gray-500 mb-3">📍 Zone : Penja</p>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>Quantité : <span class="font-bold text-gray-800">1 500 Kg</span></p>
                        <p>Prix/Kg : <span class="font-bold text-vert-herbe">500 FCFA</span></p>
                    </div>
                    <a href="#" class="block text-center bg-vert-herbe text-white py-2 rounded-lg font-semibold hover:bg-green-800 transition">Réserver (Acompte 30%)</a>
                </div>
            </div>

            <!-- FRUIT 2 : ANANAS -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-48 bg-yellow-100 flex items-center justify-center text-6xl">🍍</div>
                <div class="p-5">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-bold flex items-center">
                            ✓ Agriculteur Vérifié (CNI)
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Ananas Pain de Sucre</h3>
                    <p class="text-sm text-gray-500 mb-3">📍 Zone : Njombé</p>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>Quantité : <span class="font-bold text-gray-800">3 000 Kg</span></p>
                        <p>Prix/Kg : <span class="font-bold text-vert-herbe">350 FCFA</span></p>
                    </div>
                    <a href="#" class="block text-center bg-vert-herbe text-white py-2 rounded-lg font-semibold hover:bg-green-800 transition">Réserver (Acompte 30%)</a>
                </div>
            </div>

            <!-- FRUIT 3 : PAPAYE -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-48 bg-orange-100 flex items-center justify-center text-6xl">🍈</div>
                <div class="p-5">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-bold flex items-center">
                            ✓ Agriculteur Vérifié (CNI)
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Papayes Solo</h3>
                    <p class="text-sm text-gray-500 mb-3">📍 Zone : Foumbot</p>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>Quantité : <span class="font-bold text-gray-800">800 Kg</span></p>
                        <p>Prix/Kg : <span class="font-bold text-vert-herbe">400 FCFA</span></p>
                    </div>
                    <a href="#" class="block text-center bg-vert-herbe text-white py-2 rounded-lg font-semibold hover:bg-green-800 transition">Réserver (Acompte 30%)</a>
                </div>
            </div>

            <!-- FRUIT 4 : GOYAVE -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-48 bg-red-100 flex items-center justify-center text-6xl">🍏</div>
                <div class="p-5">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-bold flex items-center">
                            ✓ Agriculteur Vérifié (CNI)
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Goyaves Rouges</h3>
                    <p class="text-sm text-gray-500 mb-3">📍 Zone : Loum</p>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>Quantité : <span class="font-bold text-gray-800">500 Kg</span></p>
                        <p>Prix/Kg : <span class="font-bold text-vert-herbe">300 FCFA</span></p>
                    </div>
                    <a href="#" class="block text-center bg-vert-herbe text-white py-2 rounded-lg font-semibold hover:bg-green-800 transition">Réserver (Acompte 30%)</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>