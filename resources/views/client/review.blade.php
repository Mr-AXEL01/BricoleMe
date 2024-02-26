<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/artisan.css">
</head>

<body class="text-gray-800 font-inter">
    <div class="max-w-[80%] mx-auto bg-white rounded-md shadow-md overflow-hidden mt-32">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Formulaire d'avis</h2>
            <!-- Formulaire de réclamation -->
            <form action="#" method="POST">
                <!-- Champ pour entrer la note (nombre entre 1 et 5) -->
                <div class="mb-4">
                    <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Note (entre 1 et 5)
                        :</label>
                    <input type="number" id="rating" name="rating" min="1" max="5" class="border rounded-md w-full">
                </div>
                <!-- Champ pour entrer le commentaire -->
                <div class="mb-6">
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-2">Commentaire :</label>
                    <textarea id="comment" name="comment" rows="4"
                        class="resize-none border rounded-md w-full"></textarea>
                </div>
                <!-- Bouton de soumission -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Envoyer</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>