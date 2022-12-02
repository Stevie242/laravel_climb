@extends('layouts.app')
@section('content')
    <!-- Espaces authentification -->
    <div class="auth-a">
        <div class="content">
            <div class="d-flex justify-content-center mb-3">
                <img src="{{asset('asset/img/climb.png')}}" width="180px" height="90px">
            </div>
            <div class="form-auth">
                <form action="mon-compte.html">
                    <h5>connexion</h5>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Ex: alex@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Tapez votre mot de passe">
                    </div>
                    <div class="forgot-pwd">
                        <a href="">Mot de passe oublié ?</a>
                    </div>
                    <div class="form-submit">
                        <button type="submit">Se connecter</button>
                    </div>
                    <div class="signup-link">
                        <p>Pas encore de compte ? <a href="auth-register.html">S'inscrire</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Espaces authentification -->
@endsection
