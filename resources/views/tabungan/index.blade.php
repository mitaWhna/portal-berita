@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                    Tabungan siswa
                    <a href="{{route('tabungan.create')}}" class="btn btn-primary float-right">
                        Tambah
                        </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                         <table class="table">
                            <thead>
                                <tr>
                                   <th>Nomor</th>
                                   <th>Nama Siswa</th>
                                   <th>Nama Kelas</th>
                                   <th>Jumlah Uang Tabungan</th>
                                   <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @php $no = 1; @endphp
                                 @foreach($tabungan as $data)
                                 <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->siswa->nama}}</td>
                                    <td>{{$data->siswa->kelas}}</td>
                                    <td>{{$data->jumlah_uang}}</td>
                                    <td>

                                       <form action="{{route('tabungan.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                       <a class="btn btn-warning"
                                           href="{{ route('tabungan.edit',$data->id) }}">Edit </a> 
                                        <a class="btn btn-warning"
                                         href=" {{ route('tabungan.show', $data->id) }}">Show</a> 
                                         <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection