<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            "id" => 1,
            "announcement_id"=> 1,
            "path" => 'Seed/blacklotus.jpg',
        ]);

        Image::create([
            "id" => 2,
            "announcement_id"=> 2,
            "path" => 'Seed/thewitcher1.jpg',
        ]);

        Image::create([
            "id" => 3,
            "announcement_id"=> 3,
            "path" => 'Seed/oshinoko1.jpg',
        ]);
        Image::create([
            "id" => 4,
            "announcement_id"=> 3,
            "path" => 'Seed/oshinoko2.jpg',
        ]);

        Image::create([
            "id" => 5,
            "announcement_id"=> 4,
            "path" => 'Seed/goku1.jpg',
        ]);

        Image::create([
            "id" => 6,
            "announcement_id"=> 4,
            "path" => 'Seed/goku2.jpg',
        ]);

        Image::create([
            "id" => 7,
            "announcement_id"=> 5,
            "path" => 'Seed/batman3.jpg',
        ]);

        Image::create([
            "id" => 8,
            "announcement_id"=> 5,
            "path" => 'Seed/batman3.jpg',
        ]);

        Image::create([
            "id" => 9,
            "announcement_id"=> 5,
            "path" => 'Seed/batman1.jpg',
        ]);

        Image::create([
            "id" => 10,
            "announcement_id"=> 5,
            "path" => 'Seed/batman2.jpg',
        ]);

        Image::create([
            "id" => 11,
            "announcement_id"=> 6,
            "path" => 'Seed/thor1.jpg',
        ]);

        Image::create([
            "id" => 12,
            "announcement_id"=> 6,
            "path" => 'Seed/thor2.jpg',
        ]);

        Image::create([
            "id" => 13,
            "announcement_id"=> 6,
            "path" => 'Seed/thor3.jpg',
        ]);

        Image::create([
            "id" => 14,
            "announcement_id"=> 7,
            "path" => 'Seed/tazzapoke1.jpg',
        ]);

        Image::create([
            "id" => 15,
            "announcement_id"=> 7,
            "path" => 'Seed/tazzapoke2.jpg',
        ]);

        Image::create([
            "id" => 16,
            "announcement_id"=> 7,
            "path" => 'Seed/tazzapoke3.jpg',
        ]);

        Image::create([
            "id" => 17,
            "announcement_id"=> 8,
            "path" => 'Seed/cosplayMewMew1.jpg',
        ]);

        Image::create([
            "id" => 18,
            "announcement_id"=> 8,
            "path" => 'Seed/cosplayMewMew2.jpg',
        ]);


    }
}
