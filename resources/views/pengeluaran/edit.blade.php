@extends('layouts.template')
@section('content')
            <h1 class="mt-4">Edit Pengeluaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('pengeluaran.index') }}">Pengeluaran</a>
                </li>
                <li class="breadcrumb-item active">
                    Edit
                </li>
            </ol>
            <div class="row">

                <div class="col-xl-12 col-lg-11">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Pengeluaran</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <form action="{{ route('pengeluaran.update', $data->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nominal">Nominal</label>
                                <input type="number" name="nominal" id="nominal" class="form-control @error('nominal') is-invalid @enderror" value="{{ old('nominal', $data->nominal) }}">
                                @error('nominal')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" cols="30" rows="5">{{ old('keterangan', $data->keterangan) }}</textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </form>
                      </div>
                    </div>
                  </div>
            
            </div>
@endsection