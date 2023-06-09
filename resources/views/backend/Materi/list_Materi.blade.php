@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header info">
                    <h3 class="card-title">Materi Category List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Isi Materi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $row)
                                <tr>
                                    <td>{{ $row->id_materi }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td> {{ $row->isi_materi }} </td>
                                    <td>
                                        <a href="{{ URL::to('edit_Materi/' . $row->id_materi) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ URL::to('delete_Materi/' . $row->id_materi) }}"
                                            class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Isi Materi</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
