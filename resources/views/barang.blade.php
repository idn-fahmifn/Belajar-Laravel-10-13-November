<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="card p-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Stok</th>
                            <th>Detail</th>
                        </thead>
                        <tbody>
                            @forelse ($data as $items)
                                <tr>
                                    <td>{{ $items->nama_barang }}</td>
                                    <td>{{ $items->merk }}</td>
                                    <td>
                                        @if ($items->stok <= 10)
                                            <span class="badge text-bg-danger">{{ $items->stok }}</span>
                                        @elseif ($items->stok <= 50)
                                            <span class="badge text-bg-warning">{{ $items->stok }}</span>
                                        @else
                                            <span class="badge text-bg-success">{{ $items->stok }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ Str::limit($items->deskripsi, 30, '...') }}
                                    </td>
                                </tr>
                            @empty
                                {{-- kondisi ketika model belum ada data --}}
                                <tr>
                                    <td colspan="4"> Data Belum ada. </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
