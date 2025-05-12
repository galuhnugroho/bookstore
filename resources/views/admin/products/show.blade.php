@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Show</h5>
                    <img src="/storage/{{ $book->bookImage }}" alt="{{ $book->bookImage }}"
                        class="img-thumbnail w-25 mx-auto d-block mb-4">
                    <h1 class="mb-4 text-center"><strong>{{ $book->title }}</strong></h1>

                    <div class="text-start mb-4">
                        <div class="row mb-2">
                            <div class="col-4 fw-semibold">Author</div>
                            <div class="col-1">:</div>
                            <div class="col">{{ $book->author }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 fw-semibold">Description</div>
                            <div class="col-1">:</div>
                            <div class="col">{{ $book->description }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 fw-semibold">Price</div>
                            <div class="col-1">:</div>
                            <div class="col">Rp{{ number_format($book->price, 0, ',', '.') }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 fw-semibold">Stock</div>
                            <div class="col-1">:</div>
                            <div class="col">{{ $book->stock }}</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">← Kembali</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">✏️Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
