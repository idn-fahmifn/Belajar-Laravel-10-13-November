@extends('item.template')

{{-- page title --}}
@section('page-title')
    Data Semua Barang
@endsection

@section('sub-title')
    Semua data tentang barang bisa anda cari disini.
@endsection

@section('button')
    {{-- button create --}}
    <button type="button" class="btn btn-transparent border" data-bs-toggle="modal" data-bs-target="#CreateBarang">
        Tambah Barang
    </button>
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

    @forelse ($data as $item)
        <div class="col-md-3 my-2">
            <div class="card">
                <img src="{{ asset('storage/images/items/'.$item->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->item_name }}</h5>
                    <p class="card-text">
                        <span class="text-success">IDR. {{ number_format($item->price) }}</span>
                        <span class="text-muted float-end">stok : {{ $item->stok }}</span>
                    </p>
                    <div class="d-grid mt-2">
                        <a href="#" class="btn btn-primary ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse




    {{-- section modal --}}
    <div class="modal fade" id="CreateBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group py-2 mx-2">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" required class="form-control mt-2">
                        </div>
                        <div class="form-group py-2 mx-2">
                            <label for="">Gambar</label>
                            <input type="file" accept="image/*" name="gambar_produk" required class="form-control mt-2">
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
