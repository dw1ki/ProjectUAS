@extends('admin.index')
@section('title')
@section('content')

@if (session('status'))
 <div class="alert alert-success">
    {{ session('status') }}
  </div>
@elseif (session('status-active'))
  <div class="alert alert-success">
    {{ session('status-active') }}
  </div>
@elseif (session('status-nonaktif'))
  <div class="alert alert-danger">
    {{ session('status-nonaktif') }}
  </div>
@endif

<div class="row">
    <h1>Data Transaksi Parkir</h1>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="/cms/transaksi/create" class="btn btn-primary">Buat Transaksi Baru</a>          
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                    <th>Keterangan</th>
                    <th>Biaya</th>
                    <th>Kendaraan</th>
                    <th>Area Parkir</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach($transaksi as $tr)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$tr->tanggal}}</td>
                    <td>{{$tr->mulai}}</td>
                    <td>{{$tr->akhir}}</td>
                    <td>{{$tr->keterangan   }}</td>
                    <td>{{$tr->biaya}}</td>
                    <td>{{$tr->pemilik}}</td>
                    <td>{{$tr->area}}</td>
                    <!-- <td>
                      <a href="javascript::void(0)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-url="" id="showModal">
                      Detail</a>
                      <a href="" class="btn btn-warning">Ubah</a>
                    </td> -->
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Merk</label>
                    <input type="text" name="merk" class="form-control" id="merk" placeholder="Enter email" value="{{ old('merk') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pemilik</label>
                    <input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="Enter email" value="{{ old('pemilik') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Polisi</label>
                    <input type="text" name="nopol" class="form-control" id="nopol" placeholder="Enter email" value="{{ old('nopol') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Beli</label>
                    <input type="text" name="thn_beli" class="form-control" id="thn_beli" placeholder="Enter email" value="{{ old('thn_beli') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Enter email" value="{{ old('deskripsi') }}" readonly>{{old('deskripsi')}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kendaraan</label>
                    <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" placeholder="Enter email" value="{{ old('jenis_kendaraan') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas kursi</label>
                    <input type="text" name="kapasitas_kursi" class="form-control" id="kapasitas_kursi" placeholder="Enter email" value="{{ old('kapasitas_kursi') }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Rating</label>
                    <input type="text" name="rating" class="form-control" id="rating" placeholder="Enter email" value="{{ old('rating') }}" readonly>
                  </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('addon-script')
@endpush