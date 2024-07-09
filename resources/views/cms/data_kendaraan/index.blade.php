@extends('admin.index')
@section('title')
@section('content')

<div class="row">
    <h1>Data Kendaraan</h1>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table berisikan data kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Merk</th>
                    <th>Pemilik</th>
                    <th>Nomor Polisi</th>
                    <th>Jenis Kendaraan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach( $data_kendaraan as $dk )
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$dk->merk}}</td>
                    <td>{{$dk->pemilik}}</td>
                    <td>{{$dk->nopol}}</td>
                    <td>{{$dk->jenis_kendaraan}}</td>
                    <td>
                      <a href="javascript::void(0)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-url="{{ route('data_kendaraan.show', $dk->id) }}" id="showModal">
                      Detail</a>
                      <a href="/cms/data_kendaraan/ubah/{{$dk->id}}" class="btn btn-warning">Ubah</a>
                    </td>
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

<script>

  // Passing data in Modal
  $(document).ready(function() {
    $('body').on('click', '#showModal', function() {
    var userURL = $(this).data('url');
    // console.log(userURL);
      $.get(userURL, function(data) {
          // console.log(data);
          // console.log(imageName);
          $('#largeModal').modal('show');
          // untuk get data from name
          $('input[name="merk"]').val(data.merk);
          $('input[name="pemilik"]').val(data.pemilik);
          $('input[name="nopol"]').val(data.nopol);
          $('input[name="thn_beli"]').val(data.thn_beli);
          $('textarea[name="deskripsi"]').val(data.deskripsi);
          $('input[name="jenis_kendaraan"]').val(data.jenis_kendaraan);
          $('input[name="kapasitas_kursi"]').val(data.kapasitas_kursi);
          $('input[name="rating"]').val(data.rating);
      })
    });
   });


    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
</script>

@endpush