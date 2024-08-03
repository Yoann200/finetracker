@extends('layouts.app')

@section('content')
    <h1>Expenses</h1>
    <a href="{{ route('expenses.create') }}">Create New Expense</a>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table>
        <thead>
        <tr>
            <th>Category</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($expenses as $expense)
            <tr>
                <td>{{ $expense->category->name }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->date }}</td>
                <td>
                    <a href="{{ route('expenses.edit', $expense->id) }}">Edit</a>
                    <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
