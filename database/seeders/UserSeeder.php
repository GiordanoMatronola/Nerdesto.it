<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "Hanaris",
            "firstname" => "Elisa",
            "lastname" => "Poggi",
            "birthdate" => "1997-12-24",
            "genre" => 2,
            "address" => 'Via dei gatti 8',
            "city" => 'Firenze',
            'country' => 1,
            "telephone"=> "435443345",
            "email"=> "elisa@gmail.com",
            "password" => Hash::make('qwerty123'),
            "is_admin" => true,
            "is_revisor" => true,
        ]);

        User::create([
            "username" => "Treddez",
            "firstname" => "Giordano",
            "lastname" => "Matronola",
            "birthdate" => "1998-06-20",
            "genre" => 3,
            "address" => 'Via Rossi 10',
            "city" => 'Roma',
            'country' => 2,
            "telephone"=> "328231892547",
            "email"=> "giordano@gmail.com",
            "password" => Hash::make('password'),
            "is_admin" => true,
            "is_revisor" => true,
        ]);

        User::create([
            "username" => "Leone De Ladispoli",
            "firstname" => "Emanuele",
            "lastname" => "Virgili",
            "birthdate" => "1995-08-22",
            "genre" => 1,
            "address" => 'Via Marco polo 10',
            "city" => 'Ladispoli',
            'country' => 1,
            "telephone"=> "543767865",
            "email"=> "7emanuelevirgili@gmail.com",
            "password" => Hash::make('Password7'),
            "is_admin" => true,
            "is_revisor" => true,
        ]);

        User::create([
            "username" => "Rino pellino inviato da Berlino",
            "firstname" => "Rino",
            "lastname" => "Isernia",
            "birthdate" => "1994-05-07",
            "genre" => 1,
            "address" => 'Via Marconi 20',
            "city" => 'Reggio Emilia',
            'country' => 3,
            "telephone"=> "312321455432",
            "email"=> "rino@gmail.com",
            "password" => Hash::make('abcd1234'),
            "is_admin" => true,
            "is_revisor" => true,
        ]);
    }
}
