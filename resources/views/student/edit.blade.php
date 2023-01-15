@extends('layouts.app-master')
@section('title', 'Edit Pengelola')
@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <h3 class="text-center">Edit Data Mahasiswa</h3>
        <div class="card mt-3">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger mt-2 mb-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">

                                <form action="{{ url('/mahasiswa',$students->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim"
                                            value="{{ $students->nim }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $students->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $students->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Telepon</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $students->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $students->address }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="semester" class="form-label">Semester</label>
                                        <input type="text" class="form-control" id="semester" name="semester"
                                            value="{{ $students->semester }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="entry_year" class="form-label">Angkatan</label>
                                        <input type="text" class="form-control" id="entry_year" name="entry_year"
                                            value="{{ $students->entry_year }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="major" class="form-label" name="major">Prodi</label>
                                        <select id="major_id" class="form-select" name="major_id">
                                            @foreach ($majors as $mjr)
                                            <option value="{{ $mjr->id }}">{{ $mjr->major }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelas" class="form-label" name="kelas">Kelas</label>
                                        <select id="kelas_id" class="form-select" name="kelas_id">
                                            @foreach ($kelas as $kls)
                                            <option value="{{ $kls->id }}">{{ $kls->classroom }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success text-white">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection