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
                       @csrf
                       <div class="row">
                            <div class="col-md-4">
                                <label for="">Pilih Nama Siswa</label>
                        </div>
                        <div class="col-md-8">
                        <select name="siswa_id" class="form-control">
                               @foreach ($siswa as $item)
                               <option value="{{ $item->id}}"> {{ $item->nama}} - {{ $item->kelas}}
                               @endforeach
                               </option>
                        </select>
                        </div>
                        <div class="col-md-4">
                                <label for="">Masukan Jumlah Uang</label>
                        </div>
                        <div class="col-md-8">
                        <input  type="text" name="jumlah_uang" value="{{ $data->jumlah_uang}}" readonly>
                             
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
