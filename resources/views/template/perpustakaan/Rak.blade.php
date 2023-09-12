@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama rak</label>
                    <input type="text" class="form-control" name="nama_rak" placeholder="Input nama rak">
                    <label for="exampleInputEmail1">Lokasi Rak</label>
                    <input type="text" class="form-control" name="lokasi_rak" placeholder="Input lokasi rak">
                    <!-- <label for="exampleInputEmail1">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp_petugas" placeholder="Input No Telepon Petugas">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="penerbit_buku" placeholder="Input Penerbit Buku">  -->
</div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection 