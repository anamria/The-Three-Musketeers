@extends('backend.layouts.app')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Soal Quiz Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ URL::to('/update_Soalquizcategory/' . $edit->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">soal</label>
                                <input type="text" name="soal" value="{{ $edit->soal }}"
                                    class="form-control @error('soal') is-invalid @enderror" id="UpdateSoal"
                                    placeholder="Masukkan Soal">
                                @error('soal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">a</label>
                                <input type="text" name="a" value="{{ $edit->a }}"
                                    class="form-control @error('a') is-invalid @enderror" id="UpdateA"
                                    placeholder="Masukkan Pilihan a">
                                @error('a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">b</label>
                                <input type="text" name="b" value="{{ $edit->b }}"
                                    class="form-control @error('b') is-invalid @enderror" id="UpdateB"
                                    placeholder="Masukkan Pilihan b">
                                @error('b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">c</label>
                                <input type="text" name="c" value="{{ $edit->c }}"
                                    class="form-control @error('c') is-invalid @enderror" id="UpdateC"
                                    placeholder="Masukkan Pilihan c">
                                @error('c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">d</label>
                                <input type="text" name="d" value="{{ $edit->d }}"
                                    class="form-control @error('d') is-invalid @enderror" id="UpdateD"
                                    placeholder="Masukkan Pilihan d">
                                @error('d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kunci Jawaban</label>
                                <input type="text" name="kunci_jawaban" value="{{ $edit->kunci_jawaban }}"
                                    class="form-control @error('kunci_jawaban') is-invalid @enderror" id="UpdateKunci"
                                    placeholder="Masukkan Kunci Jawaban">
                                @error('kunci_jawaban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

    {{-- <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> --}}
@endsection
