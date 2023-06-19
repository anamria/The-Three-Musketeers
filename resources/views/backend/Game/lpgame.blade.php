@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner" style="text-align: center">
                    <h3>Drag & Drop</h3>
                    <img height="150" width="180" src="{{ asset("img/drag-and-drop.png")}}"/>
                    <p>Bermain Dengan Mencocokkan Gambar Mengenai Ornamen Khas Banjar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{URL::to('/gamedandd')}}" class="small-box-footer">Mulai Bermain<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner" style="text-align: center">
                    <h3>TTS</h3>
                    <img height="150" width="180" src="{{ asset("img/crossword.png")}}"/>
                    <p>Bermain Dengan Mengisi Kalimat Mengenai Ornamen Khas Banjar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{URL::to('/gametts')}}" class="small-box-footer">Mulai Bermain<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection