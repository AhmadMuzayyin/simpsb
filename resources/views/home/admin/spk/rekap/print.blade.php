<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('home/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>Print Rekap Siswa Penerima Bantuan</title>
</head>

<body class="text-center font-weight-bold mt-5">
    @php
        $tahun_akademik = request()->get('tahun_akademik');
    @endphp
    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
    <h1>Data Siswa Penerima Bantuan</h1>
    <h3>SMK POTENSIAL BADRUL HUDA</h3>
    @isset($tahun_akademik)
        <h4>Tahun Akademik {{ $tahun_akademik }}</h4>
    @endisset
    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Siswa</th>
                <th>Kelas</th>
                <th>Status Penerima Bantuan</th>
                <th>Status Bantuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekap as $hasil)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hasil->siswa->user->name }}</td>
                    <td>{{ $hasil->siswa->kelas->nama }}</td>
                    <td>
                        @if ($hasil->status == 'Layak')
                            <span class="text-success">{{ $hasil->status }}</span>
                        @else
                            <span class="text-danger">{{ $hasil->status }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($hasil->status == 'Layak')
                            @if ($hasil->is_delivered == 1)
                                <span class="text-success">Sudah Diterima</span>
                            @else
                                <span class="text-danger">Belum Diterima</span>
                            @endif
                        @else
                            <span class="text-danger">Tidak Dapat Menerima Bantuan</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>
