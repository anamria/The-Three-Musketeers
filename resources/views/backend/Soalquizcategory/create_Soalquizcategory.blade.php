@extends('backend.layouts.app')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Soal Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ URL::to('/insert_Soalquizcategory') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">soal</label>
                                <input type="text" name="soal"
                                    class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter Soal Quiz">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">a</label>
                                <input type="text" name="a"
                                    class="form-control @error('a') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter a">
                                @error('a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">b</label>
                                <input type="text" name="b"
                                    class="form-control @error('b') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter b">
                                @error('b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">c</label>
                                <input type="text" name="c"
                                    class="form-control @error('c') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter c">
                                @error('c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">d</label>
                                <input type="text" name="d"
                                    class="form-control @error('d') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter d">
                                @error('d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kunci Jawaban</label>
                                <input type="text" name="kunci_jawaban"
                                    class="form-control @error('kunci_jawaban') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Enter kunci jawaban">
                                @error('kunci_jawaban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Cover</label>
                                <input type="file" name="cover"
                                    class="form-control @error('cover') is-invalid @enderror" id="exampleInputEmail1">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
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
