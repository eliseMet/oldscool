<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $date = Carbon::now()->subYears(18);

        return [
            'pseudo' => ['required', 'alpha_num', 'unique:users,pseudo', 'max:20'],
            'firstname' => ['required', 'alpha', 'max:20'],
            'lastname' => ['required', 'alpha', 'max:20'],
            'email' => ['required', 'unique:users,email', 'max:255', 'email'],
            'birthday' => ['required', 'date', 'before:' . $date],
            'phone_number' => ['regex:/^(06|07)[0-9]{8}$/'],
            'password' => ['required', 'min:8', 'confirmed']

        ];
    }

    public function messages()
    {
        return [
            'pseudo.required' => "Le champs 'pseudo' est requis.",
            'firstname.required' => "Le champs 'Prénom' est requis.",
            'lastname.required' => "Le champs 'Nom' est requis.",
            'email.required' => "Le champs 'Adresse mail' est requis.",
            'birthday.required' => "Le champs 'Date de naissance' est requis.",
            'password.required' => "Le champs 'Mot de passe' est requis.",

            'pseudo.alpha_num' => "Le pseudo doit contenir uniquement des lettres et des chifffres.",
            'pseudo.unique' => "Ce pseudo est déjà utilisé.",
            'pseudo.max' => "Le pseudo doit contenir au maximum 20 caractères.",

            'firstname.alpha' => "Le prénom doit contenir uniquement des lettres.",
            'firstname.max' => "Le prénom doit contenir au maximum 20 caractères.",

            'lastname.alpha' => "Le nom doit contenir uniquement des lettres.",
            'lastname.max' => "Le nom doit contenir au maximum 20 caractères.",

            'email.unique' => "Cette adresse mail est déjà utilisée.",
            'email.max' => "L'adresse mail doit contenir au maximum 255 caractères.",
            'email.email' => "L'adresse mail doit être dans un format valide.",

            'birthday.date' => "La date de naissance doit être au format jj/mm/aaaa.",
            'birthday.before' => "Vous devez être majeur(e) pour continuer l'inscription.",

            'phone_number.regex' => "Le numéro de téléphone doit être dans un format valide.",

            'password.min' => "Le mot de passe doit contenir au minimum 8 caractères.",
            'password.confirmed' => "Le mot de passe ne correspond pas.",

        ];
    }
}
