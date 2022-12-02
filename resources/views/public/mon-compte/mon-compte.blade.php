@extends('public.head_foot')

@section('section-dashboard')
    <section class="dashboard">
        <div class="i-name">
            <h5>Tableau de bord</h5>
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

        <div class="view-action">
            <div class="action-card">
                <div class="item-action">
                    <a href="" data-bs-toggle="modal" data-bs-target="#investirModal"><span
                            class="fas fa-wallet"></span></a>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#investirModal">Investir</a>
            </div>
            <div class="action-card">
                <div class="item-action">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detailsModal"><span
                            class="fas fa-file-circle-question"></span></a>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#detailsModal">Details</a>
            </div>
            <div class="action-card">
                <div class="item-action">
                    <a href="" data-bs-toggle="modal" data-bs-target="#bonusModal"><span
                            class="fas fa-retweet"></span></a>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#bonusModal">Bonus</a>
            </div>
        </div>

        <div class="inventory">
            <h4>Investissement en cours</h4>
            <table id="investissement">
                <thead>
                    <tr>
                        <td>Investissement</td>
                        <td>Gain</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="list-inv">
                        <td>
                            <span>XAF</span> <span>60.000</span>
                        </td>
                        <td>
                            <span>XAF</span> <span>60.000</span>
                        </td>
                        <td>
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <span class="fas fa-chevron-down"></span>
                            </a>
                        </td>
                    </tr>
                    <tr class="collapse delay-wait" id="collapseExample">
                        <td colspan="3"><span id="days"></span>J - <span id="hours"></span>H - <span
                                id="minutes"></span>M - <span id="seconde"></span>S</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
