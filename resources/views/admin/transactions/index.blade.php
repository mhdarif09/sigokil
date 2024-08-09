@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pending Withdrawal Requests</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Bank Account</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->bankAccount->account_number }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>
                            <form action="{{ route('admin.transactions.accept', $transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Accept</button>
                            </form>
                            <form action="{{ route('admin.transactions.reject', $transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
