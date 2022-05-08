@extends('layout')

@section('body')
    <div class="row justifyContent-center m-auto">
        <table class="table my-3">
            <thead>
                <tr scope="row">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectKey as $item)
                    <tr scope="row">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->class }}</td>
                        <td>{{ $item->roll }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
