@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Only authenticated users can access this section.</p>
    <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="text-center">Sistem Pengelolaan Data Mahasiswa</h3>
                    <h5 class="text-center my-4">Kelola Program Studi</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>Jenjang</th>
                                <th>Prodi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @php $i = 1 @endphp
                            @foreach($students as $m)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $m->email }}</td>
                                <td>{{ $m->major->level }}</td>
                                <td>{{ $m->major->name }}</td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
    @endguest
</div>
@endsection