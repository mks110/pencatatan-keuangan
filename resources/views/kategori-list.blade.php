@extends('index')
@section('content')
<!-- .app-main -->
      <main class="app-main">
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
               <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  <!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th>No</th>
                            <th> Jenis Kategori </th>
                            <th> Kepentingan </th>
                            <th style="width:100px; min-width:100px;"> Aksi </th>
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->                         
                          @foreach ($data as $datas)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="align-middle"> {{$datas->jenis_kategori}} </td>
                            <td class="align-middle"> {{$datas->kepentingan}} </td>
                            <td class="align-middle inline-block">
                                <a href="/kategori/{{$datas->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                                <form action="kategori/{{$datas->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                          <!-- /tr -->
                        </tbody>
                        <!-- /tbody -->
                        
                      </table>
                      <!-- /.table -->
                    </div>
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                
              </div>
              <!-- /.page-section -->

            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
      </main>
      <!-- /.app-main -->
@endsection