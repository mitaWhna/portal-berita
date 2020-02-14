@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Siswa</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Nama Siswa</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{$siswa->nama}}" name="nama" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Kelas</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{$siswa->kelas}}" name="kelas" readonly>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
