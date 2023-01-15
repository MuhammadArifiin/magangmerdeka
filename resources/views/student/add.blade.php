@extends('layouts.app-master')
@section('title', 'Edit Pengelola')
@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <h3 class="text-center">Tambah Data Mahasiswa</h3>
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
                <form action="{{ url('/mahasiswa') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester">
                    </div>
                    <div class="mb-3">
                        <label for="entry_year" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="entry_year" name="entry_year">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label" name="major">Prodi</label>
                        <select id="major_id" class="form-select" name="major_id">
                            <option value="" selected>Choose...</option>
                            @foreach ($majors as $mjr)
                            <option value="{{ $mjr->id }}">{{ $mjr->major }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label" name="kelas">Kelas</label>
                        <select id="kelas_id" class="form-select" name="kelas_id">
                            <option value="" selected>Choose...</option>
                            @foreach ($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->classroom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success text-white">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection