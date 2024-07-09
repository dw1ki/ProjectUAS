@extends('admin.index')
@section('title')
@section('content')

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Buat Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{url('/cms/transaksi/store')}}" method="post">
              {{ csrf_field() }} 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Tanggal" name="tanggal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mulai</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="mulai">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Akhir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="Nomor Polisi" name="akhir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Biaya</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nomor Polisi" name="biaya">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik"> -->
                       <textarea name="keterangan" class="form-control" id="inputPassword3"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik"> -->
                      <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" name="kendaraan_id">
                            <option value="0" disable> -- Pilih --</option>
                            <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                            @foreach ($jenis_kendaraan as $jk)
                                    <option value="{{ $jk->id }}">{{ $jk->pemilik }}</option>                                
                            @endforeach
                            <!-- </optgroup> -->
                        </select>
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Area Parkir</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik"> -->
                      <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" name="area_parkir_id">
                            <option value="0" disable> -- Pilih --</option>
                            <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                            @foreach ($area_parkir as $jk)
                                    <option value="{{ $jk->id }}">{{ $jk->nama }}</option>                                
                            @endforeach
                            <!-- </optgroup> -->
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

@endsection

@push('addon-script')
@endpush