@extends('layout')
@section('body')
    <div class="container my-3 w-50">
        <form action="">
            @csrf
            <div class="form-group">

                <input id="myId" class="form-control my-2" type="text" placeholder="Your Id" />
            </div>

            <button id="delete-btn" onclick="deleteData()" class="btn btn-danger px-4 my-2">Delete</button>
        </form>
    </div>
@endsection
<script type="text/javascript" src="{{ asset('assets/js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
