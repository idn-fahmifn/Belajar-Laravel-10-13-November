@extends('item.template')

{{-- page title --}}
@section('page-title')
    Data Semua Barang
@endsection

@section('sub-title')
    Semua data tentang barang bisa anda cari disini.
@endsection

@section('content')
    <div class="col-md-3 my-2">
        <div class="card" ">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
