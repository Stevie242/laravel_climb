@extends('public.head_foot')

@section('section-dashboard')
    <section class="dashboard">
        <div class="i-name">
            <h5>Mon profil</h5>
        </div>

        <div class="profil">
            <div class="user-profil row">
                <div class="col-sm-12 col-md-3 col-lg-2 mb-3 mb-md-0">
                    <div class="img-profil">
                        <img src="{{asset('asset/img/img-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-10">
                    <div class="info">
                        <div class="top-info text-center text-md-start">
                            <h5>Alex Wilder </h5>
                        </div>
                        <div class="bottom-info pt-2">
                            <div class="row w-100">
                                <div class="col-4 col-sm-4 col-md-3">
                                    <div class="nbr-info">
                                        <b>08</b>
                                        <span>Investis</span>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4 col-md-3">
                                    <div class="nbr-info">
                                        <b>02</b>
                                        <span>En cours</span>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4 col-md-3">
                                    <div class="nbr-info last">
                                        <b>05</b>
                                        <span>Terminer</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 mt-3 mt-md-0">
                                    <div class="btn-change-pwd">
                                        <button data-bs-toggle="modal" data-bs-target="#editProfile">Modifier
                                            profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="carte">
                        <span>Mes revenues</span>
                        <h4><span>XAF</span> <span>40.000</span></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="carte">
                        <span>Fonds investis</span>
                        <h4><span>XAF</span> <span>120.000</span></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="carte">
                        <span>Bonus</span>
                        <h4><span>XAF</span> <span>0</span></h4>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
