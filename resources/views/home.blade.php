@extends('backend.layouts.app')

@section('content')
@if (Auth::user()->role == 1 )
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <b> {{ Auth::user()->name }} </b> {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Auth::user()->role == 3 )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner" style="text-align: center">
                    <h3>Materi</h3>
                    <img height="150" width="180" src="{{ asset("img/gambar1.jpg")}}"/>
                    <p>Mari Belajar Mengenai Ornamen Khas Banjar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{URL::to('/materisatu')}}" class="small-box-footer">Mulai Membaca<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner" style="text-align: center">
                    <h3>Game</h3>
                    <img height="150" width="180" src="{{ asset("img/gambar4.png")}}"/>
                    <p>Mari Bermain Mengenai Ornamen Khas Banjar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{URL::to('/lpgame')}}" class="small-box-footer">Mulai Bermain<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner" style="text-align: center">
                    <h3>Peringkat</h3>
                    <img height="150" width="180" src="{{ asset("img/leaderboard.png")}}"/>
                    <p>Mari Melihat Siapa Yang Ada Di Papan Peringkat Game</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/lb" class="small-box-footer">Mulai Melihat<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner" style="text-align: center">
                    <h3>Tentang</h3>
                    <img height="150" width="180" src="{{ asset("img/about.png")}}"/>
                    <p>Mari Mengenal Pengembang Media Pembelajaran Ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/about" class="small-box-footer">Mulai Mengenal<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection