@extends('layouts.apps')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0  font-weight-bold text-primary">Edit Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('editStoreBayar',$data->nik) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bank</label>
                    <input type="text" value="{{ $data->nm_bank_pengirim }}" name="bank" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengirim</label>
                    <input type="text" value="{{ $data->nm_pengirim }}" name="pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Norek</label>
                    <input type="text" value="{{ $data->norek_pengirim }}" name="norek" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">file</label>
                    <input type="text" value="{{ $data->file }}" name="file" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
@endsection
