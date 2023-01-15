@extends('layouts.app-master')
@section('title', 'Sistem Pengelolaan Data Mahasiswa')
@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Selamat datang di Sistem Pengelolaan Data Mahasiswa.</p>
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Anda sedang di halaman home. Silakan login terlebih dahulu untuk mengelola data.</p>
    @endguest
</div>
@endsection