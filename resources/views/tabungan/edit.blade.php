@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                <div class="card-body">
                   {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!--}}
                    <form action="{{ route('tabungan.update' , $data->id)}} " method="POST">
                       @csrf
                       @method("PUT")
                       <div class="row">
                            <div class="col-md-4">
                                <label for="">Pilih Nama Siswa</label>
                        </div>
                        <div class="col-md-8">
                        <select name="siswa_id" class="form-control">
                               @foreach ($siswa as $item)
                               <option value="{{ $item->id}}" 
                               {{ $item->id == $data->siswa_id ? 'selected' : ''}}> 
                               {{ $item->nama}} - {{ $item->kelas}}</option>
                               @endforeach
                        </select>
                        </div>
                        <div class="col-md-4">
                                <label for="">Masukan Jumlah Uang</label>
                        </div>
                        <div class="col-md-8">
                             <input  type="text" name="jumlah_uang" value="{{ $data->jumlah_uang}}" required>

                             </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-warning" type="submit">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
