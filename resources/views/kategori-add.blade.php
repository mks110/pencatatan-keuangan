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
                    <h4 class="card-title"> Tambah Pesanan </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/kategori">
                      @csrf
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="jeniskategori">Jenis Kategori</label>
                        <select class="form-control" name="jeniskategori" id="jeniskategori" required>
                          <option value="" selected>Pilih</option>
                          <option value="Pengeluaran">Pengeluaran</option>
                          <option value="Pemasukan">Pemasukan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kepentingan">Kepentingan  
                        </label>
                        <input type="text" name="kepentingan" class="form-control" id="kepentingan">
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