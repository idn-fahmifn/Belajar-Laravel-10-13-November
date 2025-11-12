@extends('item.template')

{{-- page title --}}
@section('page-title')
    Detail Barang
@endsection

@section('sub-title')
    {{ $data->item_name }}
@endsection

@section('button')
    {{-- button create --}}
    <form action="{{ route('item.destroy', $data->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="button" class="btn btn-transparent border" data-bs-toggle="modal" data-bs-target="#CreateBarang">
            Edit Barang
        </button>
        <button type="submit" onclick="return confirm('Yakin akan dihapus?')" class="btn btn-transparent border border-danger text-danger">
            Hapus Barang
        </button>
    </form>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Yahh ada error</strong>
            <ul>
                {{-- loop error --}}
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="fw-bold">Nama Barang</td>
                    <td class="">{{ $data->item_name }}</td>
                </tr>

                <tr>
                    <td class="fw-bold">Harga</td>
                    <td class="">IDR. {{ number_format($data->price) }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Stok</td>
                    <td class="">{{ $data->stok }}</td>
                </tr>
                <tr>
                    <td class="text-center" colspan="2">
                        <img src="{{ asset('storage/images/items/'.$data->image) }}" width="200" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    {{-- section modal --}}
    <div class="modal fade" id="CreateBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('item.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- header untuk edit --}}
                    @method('put')
                    <div class="modal-body">
                        <div class="form-group py-2 mx-2">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $data->item_name }}" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" value="{{ $data->price }}" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" value="{{ $data->stok }}" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Gambar</label>
                            <input type="file" accept="image/*" name="gambar_produk" class="form-control mt-2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
