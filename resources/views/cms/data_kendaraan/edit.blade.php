@extends('admin.index')
@section('title')
@section('content')

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{url('/cms/data_kendaraan/update')}}/{{$data_kendaraan->id}}" method="post">
              {{ method_field('PATCH')}}  
              {{ csrf_field() }} 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Merk Kendaraan" name="merk" value="{{$data_kendaraan->merk}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pemilik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik" value="{{$data_kendaraan->pemilik}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Polisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nomor Polisi" name="nopol" value="{{$data_kendaraan->nopol}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Beli</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="thn_beli" value="{{$data_kendaraan->thn_beli}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik"> -->
                       <textarea name="deskripsi" class="form-control" id="inputPassword3">{{$data_kendaraan->deskripsi}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="pemilik"> -->
                      <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" name="jenis_kendaraan_id">
                            <option value="0" disable> -- Pilih --</option>
                            <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                          
                            @foreach ($jenis_kendaraan as $jk)
                                @if($data_kendaraan->jenis_kendaraan_id == $jk->id)
                                    <option value="{{ $jk->id }}" selected>{{ $jk->nama }}</option>
                                @endif
                            @endforeach
                            @foreach ($jenis_kendaraan as $jk)
                                @if($data_kendaraan->jenis_kendaraan_id != $jk->id)
                                    <option value="{{ $jk->id }}" >{{ $jk->nama }}</option>
                                @endif
                            @endforeach
                            <!-- </optgroup> -->
                        </select>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kapasitas Kursi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="kapasitas_kursi" value="{{$data_kendaraan->kapasitas_kursi}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Pemilik Kendaraan" name="rating" value="{{$data_kendaraan->rating}}">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

@endsection

@push('addon-script')
@endpush