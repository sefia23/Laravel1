@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" placeholder="Input Tanggal Pinjam">
                    <label for="exampleInputEmail1">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" placeholder="Input Tanggal kembali">
                    <!-- <label for="exampleInputEmail1">Lokasi Rak</label> -->
                    <!-- <input type="text" class="form-control" name="jabatan_petugas" placeholder="Input Jabatan Petugas">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp_petugas" placeholder="Input No Telepon Petugas">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="penerbit_buku" placeholder="Input Penerbit Buku"> -->
</div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection