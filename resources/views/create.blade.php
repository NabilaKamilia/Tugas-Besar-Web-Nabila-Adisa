@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="row m-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2 mb-3">
            <h2>DETAIL CUCIAN</h2>
        </div>
        <form method="POST" action="/dashboard" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" class="form-control @error ('plat_nomor') is-invalid @enderror" id="plat_nomor" placeholder="Masukkan plat nomor" name="plat_nomor" value="{{old('plat_nomor')}}"> 
            @error('plat_nomor') <div class="invalid-feedback">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="nama_pemilik">Nama Pemilik</label>
            <input type="text" class="form-control @error ('nama_pemilik') is-invalid @enderror" id="nama_pemilik" placeholder="Masukkan Nama Pemilik" name="nama_pemilik" value="{{old('nama_pemilik')}}">
            @error('nama_pemilik') <div class="invalid-feedback">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jenis_mobil">Jenis Mobil</label>
            <select name="jenis_mobil" id="jenis_mobil" class="form-control">
                @foreach($jenises as $jenis)
                    <option value="{{$jenis->id}}">{{$jenis->jenis_mobil}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="harga" class="form-control @error ('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga" name="harga" value="{{old('harga')}}"></input>
            @error('harga') <div class="invalid-feedback">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select multipleclass ="form-control @error ('harga') is-invalid @enderror" id="status" placeholder="Masukkan status" name="status" value="{{old('status')}}">
            <option>Sedang Dicuci</option>            
            <option>Sudah Dicuci</option>            
            <option>Selesai</option>            
            </select>
            @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
