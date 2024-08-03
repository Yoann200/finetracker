@extends('layouts.app')

@section('content')
    <h1>Edit Expense</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $expense->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" value="{{ $expense->amount }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $expense->description }}</textarea>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="{{ $expense->date }}">
        </div>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('expenses.index') }}">Back to Expenses</a>
@endsection
