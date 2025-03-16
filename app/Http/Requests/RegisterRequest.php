<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // Modifier à true pour autoriser l'utilisateur à effectuer la requête
    }

    /**
     * Obtenez les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'telephone' => 'required|numeric|digits_between:10,15',
            'sexe' => 'required|in:homme,femme',
            'type' => 'required|in:conducteur,passager',
            'password' => 'required|string|min:8|confirmed|regex:/[A-Z]/|regex:/[0-9]/',
            'password_confirmation' => 'required',
            'conditions' => 'required|accepted',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse email valide.',
            'email.unique' => 'L\'email est déjà utilisé.',
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.numeric' => 'Le numéro de téléphone doit être un nombre valide.',
            'telephone.digits_between' => 'Le numéro de téléphone doit comporter 10.',
            'sexe.required' => 'Le sexe est obligatoire.',
            'type.required' => 'Le type d\'utilisateur est obligatoire.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.regex' => 'Utilisez au moins une lettre majuscule et un chiffre.',
            'password_confirmation.required' => 'La confirmation du mot de passe est obligatoire.',
            'conditions.required' => 'Vous devez accepter les conditions d\'utilisation.',
            'conditions.accepted' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.',
        ];
    }
}
