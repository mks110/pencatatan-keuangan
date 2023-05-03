@extends('index')
@section('content')
<!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h4 class="card-title"> Tambah Transaksi </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/transaksi">
                      @csrf
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="jeniskategori">Kategori</label>
                        <select class="form-control" name="jeniskategori" id="jeniskategori" required>
                          <option value="" selected>Pilih</option>
                          @foreach ($datakategori as $data)
                          <option value="{{$data->id}}">{{$data->jenis_kategori}} | {{$data->kepentingan}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal  
                        </label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                      </div>
                      <div class="form-group">
                        <label for="nominal">Nominal  
                        </label>
                        <input type="number" name="nominal" class="form-control" id="nominal">
                      </div>
                      <center><button style="width: 50%" class="btn btn-primary btn-lg btn-block" type="submit">Tambah</button></center>
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->

            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
      </main>
      <!-- /.app-main -->
@endsection