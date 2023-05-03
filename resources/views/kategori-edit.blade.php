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
                    <h4 class="card-title"> Edit Data </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/kategori/{{$data->id}}">
                      @csrf
                      @method('PUT')
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="jeniskategori">Jenis Kategori</label>
                        <select class="form-control" name="jeniskategori" id="jeniskategori" required>
                          @if ($data->jenis_kategori = 'Pengeluaran')
                          <option value="">Pilih</option>
                          <option value="Pengeluaran" selected>Pengeluaran</option>
                          <option value="Pemasukan">Pemasukan</option>
                          
                          @else
                          <option value="">Pilih</option>
                          <option value="Pemasukan" selected>Pemasukan</option>
                          <option value="Pengeluaran">Pengeluaran</option>
                              
                          @endif
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kepentingan">Kepentingan  
                        </label>
                        <input type="text" name="kepentingan" class="form-control" id="kepentingan" value="{{$data->kepentingan}}">
                      </div>
                      <center><button style="width: 50%" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></center>
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