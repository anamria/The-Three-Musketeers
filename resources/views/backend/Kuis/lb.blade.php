@extends('backend.layouts.app')
@section('content')
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Leaderboard
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"> Leaderboard</i> 
                    </li>
                </ol>
                <a action="{{ URL::to('/export_lb') }}" class="btn btn-info text-white">Cetak</a>
            </div>
            
        </div>
        <div>

            <div class="containerlb">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Skor</th>
                    </tr>
                    <tbody class="table">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($list as $data)
                      <tr>
                        <th scope="row">{{$no}}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->skor}}</td>
                      </tr>
                      @php
                        $no++;
                        @endphp
                        @endforeach
                    </tbody>
                  </table>
                </div>
            
            
        </div>
        
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
@endsection