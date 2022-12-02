@extends('layouts.app')

@section('content')
    <!-- Espaces authentification -->
    <div class="auth-a">
        <div class="content  my-4">
           <div class="d-flex justify-content-center mb-3">
                <img src="{{asset('asset/img/climb.png')}}" width="180px" height="90px">
            </div>
            <div class="form-auth">
                @if ($errors->any())
                <div class="error-com-a">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
                @endif
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <h5>Inscription</h5>
                    <div class="user_pic">
                        <img src="img/img-1.jpg" alt="" id="image_profile">
                        <label for="add_pic" id="btn-add-pic"><i class="fas fa-camera-alt"></i></label>
                        <input type="file" name="picture" id="add_pic">
                    </div>
                    <div class="form-group">
                        <label for="full_name">Nom et prénom</label>
                        <input type="text" name="name" id="full_name" placeholder="Ex: Alex Wilder">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Ex: alex@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Ex: 066065050">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" name="password" id="pwd" placeholder="Tapez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="conf_pwd">Confirmer votre mot de passe</label>
                        <input type="password" name="password_confirmation" id="conf_pwd" placeholder="Retapez votre mot de passe">
                    </div>
                    <div class="form-submit">
                        <button type="submit">S'inscrire'</button>
                    </div>
                    <div class="signup-link">
                        <p>Vous avez déjà un compte ? <a href="{{route('login')}}">Se connecter</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Espaces authentification -->
@endsection
