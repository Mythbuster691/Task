@extends('layouts.app')

@section('content')

<div class="container-fluid py-4 bg-light m">
    <h2>Category</h2>
    <div class="container-fluid">
        <form action="{{ route('category.update',$category->id) }}" method="POST" class="bg-white p-4 rounded" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" value="{{ $category->name }}" placeholder="Enter category name"  class="form-control @error('name')is-invalid @enderror" name="name"
                        value=" {{ $category->name}} "
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Parent
                            category</label>
                        <select name="parent_id" id="" class="form-control @error('parent_id') is-invalid @enderror">
                            <option value="{{ $category->parent_id }}" selected>Select Parent Id</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"->{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="Image" class="form-label" value>Image</label>
                        <input type="file" class="form-control"  name="image" id="image"
                            aria-describedby="emailHelp">
                            <img src="{{ asset($category->image) }}" alt="" class="img-fluid my-2" style="height: 70px; object-fit:contain;">
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary p-1 mt-2 ">Update category</button>
            </div>
        </form>
    </div>
</div>

@endsection
