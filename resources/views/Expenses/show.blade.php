@extends('layouts.app')

@section('content')
    <h1>Expense Details</h1>

    <div>
        <strong>Category:</strong>
        {{ $expense->category->name }}
    </div>
    <div>
        <strong>Amount:</strong>
        {{ $expense->amount }}
    </div>
    <div>
        <strong>Description:</strong>
        {{ $expense->description }}
    </div>
    <div>
        <strong>Date:</strong>
        {{ $expense->date }}
    </div>

    <a href="{{ route('expenses.index') }}">Back to Expenses</a>
@endsection
