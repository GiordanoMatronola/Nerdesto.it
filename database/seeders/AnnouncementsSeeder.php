<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Announcement::create([
            "title"=>'Black Lotus',
            "body"=>'Carta rara di magic che vale milioni di dollari se in lingua originale, ma questa è stampata con la stampante tranquilli',
            "price"=>'1',
            'category_id'=>7,
            'user_id'=> 3,
        ]);

        Announcement::create([
            "title"=>'The Witcher 3',
            "body"=>'Gioco della madonna, lo vendo per doppia copia. Me so comprato la special edition stronzi',
            "price"=>'40',
            'category_id'=>1,
            'user_id'=> 1,
        ]);

        Announcement::create([
            "title"=>'Oshi no ko',
            "body"=>'Oshi no ko completo 1-12, vendo per mancanza di spazio ',
            "price"=>'40',
            'category_id'=>3,
            'user_id'=> 1,
        ]);

        Announcement::create([
            "title"=>'Goku Super Saiyan 3',
            "body"=>'Vendo action figure comprata su sito cinese a poco meno di due dollari, toccata da me ne vale di più',
            "price"=>'20',
            'category_id'=>4,
            'user_id'=> 2,
        ]);

        Announcement::create([
            "title"=>'Funko pop di Batman',
            "body"=>'Funko pop, vendo perchè mi fanno schifo gli avengesss',
            "price"=>'30',
            'category_id'=>4,
            'user_id'=> 4,
        ]);

        Announcement::create([
            "title"=>'Thor 1-100',
            "body"=>'Vendo fumetti di mio fijo perchè si deve trovare una moglie, prima edizione',
            "price"=>'10',
            'category_id'=>2,
            'user_id'=> 1,
        ]);

        Announcement::create([
            "title"=>'Tazza Sfera poke',
            "body"=>'Non faccio mai colazione',
            "price"=>'5',
            'category_id'=>6,
            'user_id'=> 2,
        ]);

        Announcement::create([
            "title"=>'Cosplay MewMew Ichigo Momomiya',
            "body"=>'Sono ingrassata, fanculo.',
            "price"=>'50',
            'category_id'=>5,
            'user_id'=> 1,
        ]);

    }
}
