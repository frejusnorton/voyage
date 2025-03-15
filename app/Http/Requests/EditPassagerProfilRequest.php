<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPassagerProfilRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // Assurez-vous que l'utilisateur est autorisé à faire cette requête.
    }

    /**
     * Obtenez les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'nullable|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255|unique:users,email,' . $this->user()->id,
            'sexe' => 'nullable|in:femme,homme',
            'adresse' => 'nullable|string|max:255',
            'telephone' => 'nullable|regex:/^\d{10}$/',
            'profil_img' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'naissance' => 'nullable|date|before_or_equal:today',
        ];
    }

    /**
     * Obtenez les messages d'erreur personnalisés pour les règles de validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'sexe.in' => 'Le sexe doit être l\'un des suivants : male, female, other.',
            'adresse.string' => 'L\'adresse doit être une chaîne de caractères.',
            'telephone.regex' => 'Le numéro de téléphone est invalide.',
            'avatar.mimes' => "Le profil doit être au format .jpg, .jpeg ou .png.",
            'avatar.max' => 'Le profil ne doit pas dépasser 2 Mo.',
            'naissance.before_or_equal' => 'La date de naissance ne peut pas être dans le futur.',
        ];
    }
}
