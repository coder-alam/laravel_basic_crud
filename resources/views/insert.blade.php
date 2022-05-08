@extends('layout')
@section('body')
    <div class="container my-3 w-50">
        <form action="">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input id="myName" class="form-control my-2" type="text" placeholder="Your Name" />
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input id="myEmail" class="form-control my-2" type="text" placeholder="Your Email" />
            </div>
            <div class="form-group">
                <label for="">Class</label>
                <input id="myClass" class="form-control my-2" type="text" placeholder="Your Class" />
            </div>
            <div class="form-group">
                <label for="">Roll</label>
                <input id="myRoll" class="form-control my-2" type="text" placeholder="Your Roll" />
            </div>
            <button onclick="sendData()" class="btn btn-primary  my-2 px-4">Insert</button>
        </form>
    </div>
@endsection
<script type="text/javascript" src="{{ asset('assets/js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
