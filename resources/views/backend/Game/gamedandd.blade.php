@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
            <div class="card-body">
                <div class="container-div">
                    <div id="drag1" class="drag-item item1"></div>
                    <div id="drop1" class="drop-item">Pilis</div>
                </div>
                <div class="container-div">
                    <div id="drag2" class="drag-item item2"></div>
                    <div id="drop2" class="drop-item">Pucuk Bubungan</div>
                </div>
                <div class="container-div">
                    <div id="drag3" class="drag-item item3"></div>
                    <div id="drop3" class="drop-item">Lawang</div>
                </div>
                <div class="container-div">
                    <div id="drag4" class="drag-item item4"></div>
                    <div id="drop4" class="drop-item">Palatar</div>
                </div>
                <div class="container-div">
                    <div id="drag5" class="drag-item item5"></div>
                    <div id="drop5" class="drop-item">Tangga</div>
                </div>
        
                <div id="check-answers" class="disabled btn" role="button">Cek Jawaban</div>
                <div id="play-again" class="hidden btn" role="button">Main Ulang</div>
                <div id="response"></div>
            </div>
      </div>
    </div>
</div>

{{-- <div id="page-wrapper">
    <div class="container-fluid">
        <div class="container-div">
            <div id="drag1" class="drag-item item1"></div>
            <div id="drop1" class="drop-item">Pilis</div>
        </div>
        <div class="container-div">
            <div id="drag2" class="drag-item item2"></div>
            <div id="drop2" class="drop-item">Pucuk Bubungan</div>
        </div>
        <div class="container-div">
            <div id="drag3" class="drag-item item3"></div>
            <div id="drop3" class="drop-item">Lawang</div>
        </div>
        <div class="container-div">
            <div id="drag4" class="drag-item item4"></div>
            <div id="drop4" class="drop-item">Palatar</div>
        </div>
        <div class="container-div">
            <div id="drag5" class="drag-item item5"></div>
            <div id="drop5" class="drop-item">Tangga</div>
        </div>

        <div id="check-answers" class="disabled btn" role="button">Cek Jawaban</div>
        <div id="play-again" class="hidden btn" role="button">Main Ulang</div>
        <div id="response"></div>
    </div>
</div> --}}
@endsection