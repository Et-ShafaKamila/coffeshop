@extends('layouts.template')
@section('content')
<h1 class="mt-4">Tambah Pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">
        <a href="{{ route('dashboard') }}">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('pemesanan.index') }}">List Pemesanan</a>
    </li>
    <li class="breadcrumb-item active">
        Tambah
    </li>
</ol>
<div class="row">

    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pesanan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <form action="{{ route('pemesanan.update', $pesanan->id) }}" method="post">
                @csrf
                @method('PUT')
                {{--  <div class="row mb-4">
                    <div class="col-xl-6">
                        <div class="row">
                            @forelse ($daftarMenu as $item)
                            <div class="card mr-2 mb-2" style="width: 12rem;">
                                <img class="card-img-top" src="{{ asset($item->foto) }}" alt="Card image cap">
                                <div class="card-body">
                                    {{ ucwords($item->nama) }} <br>
                                    Rp. {{ number_format($item->harga, 2, ',', '.') }}
                                </div>
                                <button type="button" name="add_cart" class="btn btn-primary add_cart" data-productname="{{ $item->nama }}" data-productprice="{{ $item->harga }}" data-productid="{{ $item->id }}" />Pilih</button>
                            </div>
                            @empty
                                <p>Belum ada menu yang tersedia.</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table-cart">
                                <tr>
                                    <th class="text-center">Menu</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>  --}}
                <div class="row">
                    <div class="col-xl-12 col-lg-11">
                      {{--  {{ $detail[0]->total_harga }}  --}}
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table-cart">
                                <tr>
                                    <th class="text-center">Menu</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Total</th>
                                </tr>
                                @php
                                  $index = 0;
                                @endphp
                                @forelse ($daftarMenu as $item)
                                <tr>
                                  <td class="text-center">
                                    <img class="img-fluid rounded" src="{{ asset($item->foto) }}" alt="Card image cap" width="160px" style="min-height: 140px;">
                                    <br>
                                    <input type="hidden" name="menu[]" value="{{ $item->id }}">
                                    {{ $item->nama }}
                                    <br>
                                    <input type="hidden" name="price[]" value="{{ $item->harga }}">
                                    Rp. <label id="price{{ $loop->iteration }}">{{ number_format($item->harga, 2, ',', '.') }}</label>
                                  </td>
                                  <td class="text-center">
                                    @if ($item->id == $detail[$index]->id_menu)
                                    <input type="number" name="qty[]" id="qty{{ $loop->iteration }}" value="{{ $item->id == $detail[$index]->id_menu ? $detail[$index]->qty : '0' }}" onchange="hitung({{ $loop->iteration }})" min="0" style="width: 5em;">
                                    @else
                                    <input type="number" name="qty[]" id="qty{{ $loop->iteration }}" value="0" onchange="hitung({{ $loop->iteration }})" min="0" style="width: 5em;">
                                    @endif
                                  </td>
                                  <td class="text-center">
                                    <input type="hidden" name="total[]" id="total_val{{ $loop->iteration }}" value="">
                                    @if ($item->id == $detail[$index]->id_menu)
                                    Rp. <label id="total{{ $loop->iteration }}">{{ number_format($detail[$index]->total_harga, 2, ',', '.') }}</label>
                                    @php
                                    if($loop->iteration < count($detail)) {
                                        $index++;
                                    }
                                    @endphp
                                    @else
                                    Rp. <label id="total{{ $loop->iteration }}">0,00</label>
                                    @endif
                                  </td>
                                </tr>
                                @empty
                                <p>Belum ada menu yang tersedia.</p>
                                @endforelse
                            <tr>
                                <th class="text-center" colspan="2">Total</th>
                                <th class="text-center">Rp. <label id="subtotal"></label></th>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 col-lg-11">
                        <div class="form-group">
                            <label for="kode_pesanan">Kode Pesanan</label>
                            <input type="number" name="kode_pesanan" id="kode_pesanan" class="form-control @error('kode_pesanan') is-invalid @enderror" value="{{ old('kode_pesanan', $pesanan->kode_pesanan) }}" readonly>
                            @error('kode_pesanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{--  <div class="form-group">
                            <label for="cust">Pelanggan</label>
                            <select name="cust" id="cust" class="form-control @error('kode_pesanan') is-invalid @enderror">
                                <option value="0">--Pilih Pelanggan--</option>
                                @foreach ($customer as $item)
                                    <option value="{{ old('cust', $item->id) }}" {{ $item->id == $pesanan->pemesan ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('kode_pesanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>  --}}
                        <div class="form-group">
                            <label for="nama_pemesan">Nama Pemesan</label>
                            <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control @error('nama_pemesan') is-invalid @enderror" value="{{ old('nama_pemesan', $pesanan->nama_pemesan) }}">
                            @error('nama_pemesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meja">Nomor Meja</label>
                            <input type="number" name="meja" id="meja" class="form-control @error('meja') is-invalid @enderror" value="{{ old('meja', $pesanan->nomor_meja) }}">
                            @error('meja')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_cust">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" cols="30" rows="5">{{ old('keterangan', $pesanan->keterangan) }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    var subtotal = 0;
    function hitung(id) {
        var qtyId = "qty"+id;
        console.log(qtyId);
        var number = resetNumberFormat($('#price'+id).text());
        subtotal += parseInt(number);
        $('#total_val'+id).val(number);
        number = number_format(($('#'+qtyId+'').val() * number), 2, ',', '.');
        $('#total'+id).text(number);

        var subtotals = number_format(subtotal, 2, ',', '.');
        $('#subtotal').text(subtotals);
    }

    function resetNumberFormat(number) {
        number = number.split(',');
        {{--  number = number[0].replace('.', '');  --}}
        var result = number[0].replace('.', '');
        return result;
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = number.toFixed(decimals);

        var nstr = number.toString();
        nstr += '';
        x = nstr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? dec_point + x[1] : '';
        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

        return x1 + x2;
    }

    $(document).ready(function() {
        var index = 1;
        $('.add_cart').click(function() {
            var product_id = $(this).data("productid");
            var product_name = $(this).data("productname");
            var product_price = number_format($(this).data("productprice"), 2, ',', '.');
            
            console.log('id: ' + product_id);
            console.log('name: ' + product_name);
            console.log('price: ' + product_price);

            $('#table-cart tr:last').after('<tr><td class="text-center">'+product_name+'</td><td class="text-center">Rp.<label id="price">'+product_price+'</label></td><td class="text-center"><input type="number" id="qty'+index+'" class="qty" class="form-control" style="width: 5em" onchange="hitung()" min="0"></td><td class="text-center">Rp. <label id="total"></label></td></tr>');

            index++;
        });
        {{--  $("#qty").keyup(function() {
            alert("The text has been changed.");
        });  --}}
    });
</script>
@endpush