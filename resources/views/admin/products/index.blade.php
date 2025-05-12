@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <a href="{{ route('books.create') }}" class="btn btn-primary m-1 mb-2">Add Product</a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">List Products</h5>
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $book->title }}</td>
                                                <td>{{ $book->author }}</td>
                                                <td>
                                                    <img src="/storage/{{ $book->bookImage }}" alt="{{ $book->bookImage }}"
                                                        class="img-thumbnile" width="80px">
                                                </td>
                                                <td>Rp{{ number_format($book->price, 0, ',', '.') }}</td>
                                                <td>{{ $book->stock }}</td>
                                                <td>
                                                    <a href="{{ route('books.show', $book->id) }}"
                                                        class="btn btn-info btn-sm">Show</a>
                                                    <a href="{{ route('books.edit', $book->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                                        class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
