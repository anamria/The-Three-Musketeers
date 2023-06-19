@extends('backend.layouts.app')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Teka-Teki Silang
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"> TTS</i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <div id="leftBox">
                            <table id="puzzel">
            
                            </table>
                        </div>
                        <div id="rightBox">
                            <table>
                                <tr>
                                    <td><input class="btn1" type="submit" value="Ulang" onclick="clearAllClicked()"></td>
                                    <td><input class="btn2" type="submit" value="Cek Jawaban" onclick="checkClicked()"></td>
                                    <td><input class="btn3" type="submit" value="Kunci Jawaban" onclick="solveClicked()"></td>
                                    <td><input class="btn4" type="submit" value="Petunjuk" onclick="clueClicked()"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div>
                        <table id="hintsTable">
                            <tr>
                                <td><strong>Mendatar: </strong></td>
                                <td><strong>Menurun: </strong></td>
                            </tr>
                            <tr>
                                <td>3. Ornamen Banjar yang terkenal dengan motif kain ikat</td>
                                <td>1. Ornamen khas Banjar yang terinspirasi oleh hewan ini melambangkan kesuburan dan kehidupan</td>
                            </tr>
                            <tr>
                                <td>5. Ornamen khas Banjar yang melambangkan keindahan dan kemakmuran</td>
                                <td>2. Ornamen daun yang digunakan sebagai perlambang persaudaraan dalam budaya Banjar</td>
                            </tr>
                            <tr>
                                <td>6. Fungsi utama ornamen khas Banjar</td>
                                <td>4. Ornamen Banjar yang biasanya digunakan sebagai hiasan pada pakaian adat Banjar</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@endsection