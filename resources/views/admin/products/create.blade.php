@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Forms Create</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="mb-3">
                                    <label for="author" class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" id="author">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" id="price">
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="number" class="form-control" name="stock" id="stock">
                                </div>
                                <div class="mb-3">
                                    <label for="bookImage" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="bookImage" id="bookImage">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
