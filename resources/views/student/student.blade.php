@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Sistem Pengelolaan Data Mahasiswa</h3>
                <h5 class="text-center my-4">Kelola Program Studi</h5>
                <div class="d-md-flex mb-3">
                    <a href="{{ url('/mahasiswa') }}" class="btn btn-primary text-white">Kembali</a>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Semester</th>
                            <th>Angkatan</th>
                            <th>Kelas</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp

                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->semester }}</td>
                            <td>{{ $student->entry_year }}</td>
                            <td>{{ $student->kelas->classroom }}</td>
                            <td>{{ $student->major->major }}</td>
                            <td>{{ $student->major->level }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection