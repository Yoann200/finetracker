@extends('layouts.app')

@section('content')
    <h1>Create Expense</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" value="{{ old('amount') }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}">
        </div>
        <button type="submit">Create</button>
    </form>

    <a href="{{ route('expenses.index') }}">Back to Expenses</a>
@endsection
