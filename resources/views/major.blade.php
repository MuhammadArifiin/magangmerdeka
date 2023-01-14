<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Studi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($students as $m)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $m->email }}</td>
                                <td>{{ $m->major->level }}</td>
                                <td>{{ $m->major->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>