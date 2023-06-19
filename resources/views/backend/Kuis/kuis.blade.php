@extends('backend.layouts.app')
@section('content')
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Latihan Quiz
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"> Quiz</i> 
                    </li>
                </ol>
            </div>
        </div>
        <div>

            <form action="" method="POST">
                @php
                    $no = 1;
                @endphp
                @foreach ($list as $data)

                
                <p>{{ $no }}. {{ $data->soal }}</p>

                <div class="tip">
                    <input type="radio" name="pilihan[{{ $no }}]" onclick="ans({{ $no }}, this.value)" value="a">
                    <label>{{ $data->a }}</label><br>
        
                    <input type="radio" name="pilihan[{{ $no }}]" onclick="ans({{ $no }}, this.value)" value="b">
                    <label>{{ $data->b }}</label><br>
        
                    <input type="radio" name="pilihan[{{ $no }}]" onclick="ans({{ $no }}, this.value)" value="c">
                    <label>{{ $data->c }}</label><br>
        
                    <input type="radio" name="pilihan[{{ $no }}]" onclick="ans({{ $no }}, this.value)" value="d">
                    <label>{{ $data->d }}</label><br><br>
                    </div>
                @php
                    $no++;
                @endphp
                @endforeach

                
            </form>	

            <div class="tengah">
                <button id="btn" onclick="btnSubmit()">Submit</button>
            </div>
            
            <div id="popup" class="popup-overlay hidden">
                <div class="popup-content">
                    <p id="true"></p>
                    <p id="false"></p>
                    <p id="hasil"></p>
            
                  <form action="{{ URL::to('/add_kuis') }}" method="post">
                    @csrf
                    <input type="text" id="skorInput" name="skorInput" class="hidden">
                    <input type="text" id="namaInput" name="namaInput">
                    <div id="div2">
                        <button type="submit" id="btn2" class="btn">Oke</button>
                    </div>
                </form>

                </div>
              </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
@endsection