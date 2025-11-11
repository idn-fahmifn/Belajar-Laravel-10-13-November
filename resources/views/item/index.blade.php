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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateBarang">
        Tambah Barang
    </button>
@endsection

@section('content')
    <div class="col-md-3 my-2">
        <div class="card">
            <img src=" ..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    {{-- section modal --}}
    <div class="modal fade" id="CreateBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
