<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'firstname' => ['required','string', 'max:255'],
            'lastname' => ['required','string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'imgProfile' => ['image'],
            'genre' => ['required', 'integer','min:1','max:3'],
            'address' => ['required','string', 'max:300'],
            'city' => ['required','string', 'max:50'],
            'country' => ['required', 'integer','min:1','max:3'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'username' => $input['username'],
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'birthdate' => $input['birthdate'],
            'genre' => $input['genre'],
            'address' => $input['address'],
            'city' => $input['city'],
            'country' => $input['country'],
            'telephone' => $input['telephone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
