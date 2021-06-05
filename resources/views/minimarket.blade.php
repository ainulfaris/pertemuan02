<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        thead {
            background-color: #f2f2f2;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'minimarket.create')}}">
            Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>no</th>
                    <th>kode_produksi</th>
                    <th>nama_barang</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($minimarket as $mrkt)
                    
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $mrkt->kode_produksi }}</td>
                    <td>{{ $mrkt->nama_barang }}</td>
                    <td>
                        <a href="#">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<body>