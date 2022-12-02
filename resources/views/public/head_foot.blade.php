@extends('layouts.app')

@section('content')
    <main class="main-dash">
        <div class="header">
            <div class="logo">
                <img src="{{asset('asset/img/climb.png')}}" alt="" width="160px" height="60px">
            </div>
            <div class="user-online">
                <div>
                    <span>{{$user->name}}</span>
                    <span>{{$user->phone}}</span>
                </div>
                <img src="{{asset('asset/img/img-1.jpg')}}" alt="">
            </div>
        </div>

        @yield('section-dashboard')

        {{-- <div class="menu">
            <div class="menu-items">
                <li @if (Route::is('compte')) class="active" @endif><a href="{{route('compte')}}"><i class="fas fa-dashboard"></i><span>Dashboard</span></a></li>
                <li @if (Route::is('transaction')) class="active" @endif><a href="{{route('transaction')}}"><i class="fa-solid fa-repeat"></i><span>Transactions</span></a></li>
                <li @if (Route::is('investissement')) class="active" @endif><a href="{{route('investissement')}}"><i class="fas fa-wallet"></i><span>Investissement</span></a></li>
                <li @if (Route::is('profil')) class="active" @endif><a href="{{route('profil')}}"><i class="fas fa-user-gear"></i><span>Profil</span></a></li>
            </div>
        </div> --}}
    </main>
@endsection

