<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Mobil</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Merk</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
                <tr>
                    <td>{{ $mobil->nama }}</td>
                    <td>{{ $mobil->merk }}</td>
                    <td>{{ $mobil->tahun }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>