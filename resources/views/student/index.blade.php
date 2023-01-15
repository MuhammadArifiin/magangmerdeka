@extends('layouts.app-master')
@section('title', 'Mahasiswa')
@section('content')
<div class="bg-light p-5 rounded">
@auth
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Sistem Pengelolaan Data Mahasiswa</h3>
                <div class="d-md-flex mb-3">
                    <a href="{{ url('/mahasiswa/tambah') }}" class="btn btn-primary text-white">Tambah</a>
                </div>
                <table class="table table-bordered table-striped" id="data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>Angkatan</th>
                            <th>Kelas</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @if($students->isNotEmpty())
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->semester }}</td>
                            <td>{{ $student->entry_year }}</td>
                            <td>{{ $student->kelas->classroom }}</td>
                            <td>{{ $student->major->major }}</td>
                            <td>{{ $student->major->level }}</td>
                            <td>
                                <a href="{{ url('/mahasiswa/detail', $student->id) }}"
                                    class="btn btn-success m-1 text-white" style="">Lihat</a>
                                <a class="btn btn-warning m-1 text-white" href="{{ url('/mahasiswa', $student->id) }}"
                                    style="">Edit</a>
                                <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                    action="{{ url('/mahasiswa', $student->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-1 text-white text-nowrap" type="submit"
                                        style="">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <div>
                            <h2>Data tidak ditemukan</h2>
                        </div>
                        @endif
                    </tbody>
                </table>

                <div class="d-flex justify-content-end mt-3">
                    {!! $students->appends(\Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
@endauth

@guest
<h1>Mahasiswa</h1>
<p class="lead">Anda sedang di halaman mahasiswa. Silakan login terlebih dahulu untuk mengelola data.</p>
@endguest
</div>
@endsection