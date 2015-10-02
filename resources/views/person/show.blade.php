@extends('layouts.master')

@section('content')

    <h1>Person</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>Email</th><th>Phone</th>
            </tr>
            <tr>
                <td>{{ $person->id }}</td> <td> {{ $person->name }} </td><td> {{ $person->email }} </td><td> {{ $person->phone }} </td>
            </tr>
        </table>
    </div>

@endsection
