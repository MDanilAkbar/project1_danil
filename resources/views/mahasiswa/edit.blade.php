@extends('layouts.master')
@section('title','Edit Mahasiswa')
@section('heading','Edit Mahasiswa')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Mahasiswa</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="POST" action="/mahasiswa/{{$mhs->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" name="nim" value="{{$mhs->nim}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{$mhs->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat" value="{{$mhs->tempat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal" value="{{$mhs->tempat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <select name="agama" class="form-control" id="">
                        <option value="">-Pilih Agama-</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                  <select name="jurusan" class="form-control" id="">
                    <option value="">-Pilih Jurusan-</option>
                    @foreach ($mhs as $item)
                        <option value="{{$item->id}}">{{$item->kode}} - {{$item->jurusan}}</option>
                    @endforeach

                </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
              </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection
