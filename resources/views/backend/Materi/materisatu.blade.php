@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach($items as $item)
                            <h4>{{ $item->judul }}</h4>
                            <center><img  height="150" width="180" style="margin: 6px" src="{{ asset("img/gambar1.jpg")}}"/></center>
                            <p style="text-align: justify">{{ $item->isi_materi }}</p>
                        @endforeach
                        <a href="{{URL::to('/materi2')}}" class="small-box-footer">Lanjut Membaca<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
