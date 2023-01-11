<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 20px
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            top: 150;
            bottom: 0;
            left: 0;
            right: 0;
        }
        th, td {
            text-align: left;
            padding: 16px;
        }
        thead{
            background-color: #e8f2ff;
        }
    </style>
</head>
<body>
    <p>Matricule : {{ $agents[0]->matricule }}</p>
    <p>Nom : {{ $agents[0]->nom }}</p>
    <p>Prenoms : {{ $agents[0]->prenoms }}</p>
    <p>Categorie : {{ $agents[0]->libelle }}</p>
    <h2 class="items-center">Gadgets</h2>



    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Désignation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantite
                    </th>
                </tr>
            </thead>
            @foreach ($agents as $agent)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $agent->designation }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $agent->quantite }}
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <br>
        <p class="text-right">Signature</p>
    </div>
</body>
</html>
