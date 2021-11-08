@extends('layouts.template')
@push('css')
<link href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endpush
@section('content')
            <h1 class="mt-4">Cek Kualitas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Cek Kualitas
                </li>
            </ol>
            
            <form>
                <div class="form-group">
                    <label for="Nomor Identitas">Nomor Identitas</label>
                    <input type="text" class="form-control" id="Nomor Identitas" placeholder="Nomor Identitas">
                </div>

                <div class="form-group">
                    <label for="Jenis Kopi">Jenis Kopi</label>
                    <input type="text" class="form-control" id="Jenis Kopi" placeholder="Jenis Kopi">
                </div>

                <h5 class="mt-4">Deskripsi Cita Rasa dan Nilai AKhir</h5>
                <p>Deskripsi Cita Rasa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Deskripsi Nilai Akhir</p>
                <p>0 - (Tidak Ada) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 (Tidak Layak Minum)</p>
                <p>1-2 (Sangat Rendah) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1-2 (Sangat Buruk)</p>
                <p>3-4 (Rendah) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3-4 (Buruk)</p>
                <p>5-6 (Sedang) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5-6 (Sedang)</p>
                <p>7-8 (Tinggi) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7-8 (Sangat Baik)</p>
                <p>9-10 (Sangat Tinggi) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9-10 (Ekselent)</p>

                <h6 class="mt-5">Fragrance / Aroma</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Flavor / Rasa</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">After Taste</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Acidity</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Body / Kekentalan</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Bitterness / Kepahitan</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="mt-5">Cacat Cita Rasa</h4>
                    </div>
                </div>


                <h6 class="mt-5">Fruty / Winey</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Green / Grassy</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Smokey</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Cereal</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Chemical / Medicine</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Stinkey</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>


                <h6 class="mt-5">Earthy / Mouldy / Musty</h6>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="radio0">0</label>
                    </div>
                    <div class="col">
                        <label for="radio1">1</label>
                    </div>
                    <div class="col">
                        <label for="radio2">2</label>
                    </div>
                    <div class="col">
                        <label for="radio3">3</label>
                    </div>
                    <div class="col">
                        <label for="radio4">4</label>
                    </div>
                    <div class="col">
                        <label for="radio5">5</label>
                    </div>
                    <div class="col">
                        <label for="radio6">6</label>
                    </div>
                    <div class="col">
                        <label for="radio7">7</label>
                    </div>
                    <div class="col">
                        <label for="radio8">8</label>
                    </div>
                    <div class="col">
                        <label for="radio9">9</label>
                    </div>
                    <div class="col">
                        <label for="radio10">10</label>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Tidak Ada</div>
                    <div class="col">
                        <input type="radio" id="radio0" name="radio" value="0">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio1" name="radio" value="1">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio2" name="radio" value="2">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio3" name="radio" value="3">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio4" name="radio" value="4">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio5" name="radio" value="5">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio6" name="radio" value="6">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio7" name="radio" value="7">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio8" name="radio" value="8">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio9" name="radio" value="9">
                    </div>
                    <div class="col">
                        <input type="radio" id="radio10" name="radio" value="10">
                    </div>
                    <div class="col">Sangat Tinggi</div>
                </div>

                <div class="form-group mt-4">
                    <label for="Jenis Kopi">Nilai Akhir (Score)</label>
                    <input type="text" class="form-control" id="Nilai Akhir" placeholder="Nilai Akhir">
                </div>

                <button type="button" class="btn btn-success mt-2">Kirim</button>

            </form>

@endsection

@push('js')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
  
</script>
@endpush