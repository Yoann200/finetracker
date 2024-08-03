@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>

    <div>
        <strong>Name:</strong>
        {{ $category->name }}
    </div>
    <div>
        <strong>Description:</strong>
        {{ $category->description }}
    </div>

    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
