<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="card p-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold">Nama Barang</td>
                                <td class="">{{ $data->nama_barang }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Merk</td>
                                <td class="">{{ $data->merk }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Harga</td>
                                <td class="">IDR. {{ number_format($data->harga) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Stok</td>
                                <td class="">{{ $data->stok }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Kategori</td>
                                <td class="">{{ $data->kategori }}</td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    {{ $data->deskripsi }}
                                </td>
                            </tr>
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
