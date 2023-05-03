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
                    <h4 class="card-title"> Edit Transaksi </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/transaksi/{{$data->id}}">
                      @csrf
                      @method('PUT')
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="jeniskategori">Jenis Kategori</label>
                        <select class="form-control" name="jeniskategori" id="jeniskategori" required>
                          <option value="">Pilih</option>
                          @foreach ($datakategori as $datas)
                          <option value="{{$datas->id}}">{{$datas->jenis_kategori}} | {{$datas->kepentingan}}</option>   
                          @endforeach
                         
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal  
                        </label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$data->tanggal}}">
                      </div>
                      <div class="form-group">
                        <label for="nominal">Nominal  
                        </label>
                        <input type="number" name="nominal" class="form-control" id="nominal" value="{{$data->amount}}">
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