@extends('layouts.app')
@section('content')
<div class="container-fluid bg-white py-2">
    <div class="row my-2 py-3">
        <div class="col-3 offset-1">
            <h3>All category</h3>
        </div>
        <div class="col-1 offset-1">
            <p class="float-end mt-1">Search</p>
        </div>
        <div class="col-3 d-flex ">
            <input class="form-control me-2 float-start" type="search" placeholder="Search here" aria-label="Search"><button
                type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    @foreach ($categories as $category)
    <div class="container">
        <div class="row mt-2 border border-danger">
            <div class="col-3">
                <table>
                    <tbody>
                        <tr>
                            <td> <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" class="img"
                                    style="width: 100%; height:100%;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-9">
                <table class="mt-5">
                    <tbody>
                        <tr>
                            <td>Name : {{ $category->name}}</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    Action:
                                    <a href="{{ route('category.edit', $category->id) }}">
                                        <i class="bi bi-pen-fill me-2"></i>
                                    </a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <a href="{{ route('category.destroy', $category->id)}}">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </form>
                                    <form action="{{route('category.status', $category->id) }}" method="POST">
                                        @csrf
                                        <button
                                            class="btn btn-{{ $category->status ? "danger" : "success" }} ms-1">{{ $category->status ? "Deactivate" : "Activate" }}
                                            category</button>
                                        <a style="font-size: 10px"
                                            class="btn btn-{{ $category->status ? "success" : "danger" }} ms-1">{{ $category->status ? "active" : "not-active" }}
                                            category</a>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    @endforeach
</div>
@endsection
