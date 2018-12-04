@extends('layout')
 
@section('contenu')
    <form action="{{ url('user') }}" method="POST">
        {{ csrf_field() }}
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="name" id="name"> <br>
        <label for="nom">Entrez votre prénom : </label>

        <input type="text" name="firstname" id="firstname"> <br>
        <label for="nom">Entrez votre surnom : </label>

        <input type="text" name="nickname" id="nickname"> <br>
        <label for="nom">Entrez votre téléphone : </label>

        <input type="text" name="phone" id="phone"> <br>
        <label for="nom">Entrez votre mot de passe : </label>

        <input type="text" name="password" id="password"> <br>
        <label for="nom">Entrez votre email : </label>

        <input type="text" name="email" id="email"> <br>
        <label for="nom">Entrez votre statut : </label>

        <input type="text" name="statut" id="statut"> <br>
        <label for="nom">Entrez votre profession : </label>

        <input type="text" name="profession" id="profession"> <br>
        <label for="nom">Entrez votre société : </label>

        <input type="text" name="company" id="company"> <br>
        <input type="submit" value="Envoyer !">
    </form>
    
@endsection