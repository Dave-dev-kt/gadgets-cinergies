<?php

namespace Database\Seeders;

use App\Models\gadgets;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GadgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gadgets = [

            //AGENT DE MAITRISE
            [
                'id' => 1,
                'designation' => 'Agenda Grand public',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()

            ],
            [
                'id' => 2,
                'designation' => 'Agenda grand poche',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'designation' => 'Note book Grand public',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()

            ],
            [
                'id' => 4,
                'designation' => 'Stylo Grand public',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'designation' => 'Gourde isothème',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'designation' => 'Sac isotherme',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'designation' => 'Porte clé GP métal en pylone tête de chat',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'designation' => 'Cle USB Noire métallique',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'designation' => 'Calendrier mural 8 fuillets',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'designation' => 'Chevalet de table 7 feuillets',
                'quantite' => 1,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'designation' => 'Sac en toile personnalise',
                'quantite' => 2,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'designation' => 'Confection des blocs notes',
                'quantite' => 3,
                'categorie_id' => 4,
                'created_at' => Carbon::now()
            ],

            //CADRES
            [
                'id' => 13,
                'designation' => 'Agenda Grand public',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'designation' => 'Agenda grand poche',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'designation' => 'Note book Grand public',
                'quantite' => 2,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'designation' => 'Stylo Grand public',
                'quantite' => 2,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'designation' => 'Gourde isothème',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'designation' => 'Sac isotherme',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'designation' => 'Porte clé GP métal en pylone tête de chat',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'designation' => 'Cle USB Noire métallique',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'designation' => 'Calendrier mural 8 fuillets',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'designation' => 'Chevalet de table 7 feuillets',
                'quantite' => 1,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 23,
                'designation' => 'Sac en toile personnalise',
                'quantite' => 3,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'designation' => 'Confection des blocs notes',
                'quantite' => 4,
                'categorie_id' => 3,
                'created_at' => Carbon::now()
            ],

            //CHEFS DE SERVICE
            [
                'id' => 25,
                'designation' => 'Agenda VIP de type PORTOFOLIO amovible',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'designation' => 'Agenda Grand public',
                'quantite' => 2,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'designation' => 'Agenda grand poche',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 28,
                'designation' => 'Note book Grand public',
                'quantite' => 2,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'designation' => 'Note book VIP',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 30,
                'designation' => 'Pochette de voyage VIP',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 31,
                'designation' => 'Stylo Grand public',
                'quantite' => 5,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 32,
                'designation' => 'Gourde isothème',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'designation' => 'Power Bank',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'designation' => 'Sac isotherme',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'designation' => 'Set de 2 stylos VIP CERRUTI 1881',
                'quantite' => 1,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 36,
                'designation' => 'Porte clé GP métal en pylone tête de chat',
                'quantite' => 3,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'designation' => 'Cle USB Noire métallique',
                'quantite' => 2,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'designation' => 'Calendrier mural 8 fuillets',
                'quantite' => 2,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 39,
                'designation' => 'Chevalet de table 7 feuillets',
                'quantite' => 2,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 40,
                'designation' => 'Sac en toile personnalise',
                'quantite' => 4,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 41,
                'designation' => 'Confection des blocs notes',
                'quantite' => 4,
                'categorie_id' => 2,
                'created_at' => Carbon::now()
            ],

            //EMPLOYE OUVRIER
            [
                'id' => 42,
                'designation' => 'Agenda Grand public',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 43,
                'designation' => 'Agenda grand poche',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'designation' => 'Note book Grand public',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 45,
                'designation' => 'Stylo Grand public',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 46,
                'designation' => 'Gourde isothème',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 47,
                'designation' => 'Sac isotherme',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 48,
                'designation' => 'Porte clé GP métal en pylone tête de chat',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 49,
                'designation' => 'Cle USB Noire métallique',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'designation' => 'Calendrier mural 8 fuillets',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'designation' => 'Chevalet de table 7 feuillets',
                'quantite' => 1,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'designation' => 'Sac en toile personnalise',
                'quantite' => 2,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 53,
                'designation' => 'Confection des blocs notes',
                'quantite' => 3,
                'categorie_id' => 1,
                'created_at' => Carbon::now()
            ],

        ];

        gadgets::insert($gadgets);
    }
}
