@extends('layouts.apps')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0  font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('createBayar') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                    <thead class="mt-5">
                        <tr>
                            <th>NIK</th>
                            <th>Nama Bank</th>
                            <th>Nama Pengirim</th>
                            <th>No. Rekening</th>
                            <th>File</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th>{{ $item->nik }}</th>
                            <th>{{ $item->nm_bank_pengirim }}</th>
                            <th>{{ $item->nm_pengirim }}</th>
                            <th>{{ $item->norek_pengirim }}</th>
                            <th>{{ $item->file }}</th>
                            <th>{{ $item->tanggal_upload }}</th>
                            <th>
                                <a href="{{ route('editBayar',$item->nik) }}" class="btn btn-primary" >Edit</a> |
                                <a href="{{ route('deleteBayar',$item->nik) }}" class="btn btn-danger" >Delete</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
