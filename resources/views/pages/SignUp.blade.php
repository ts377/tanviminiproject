@extends('layout.default')

@section('content')
    <div class="card-body" style= "margin-top: 20px">
        <div class="card mt-5 pl-2 pr-2">
            <h1 style="text-align: center">Sign Up page</h1>
            <div class="card-title">
                <div class="card-body">
                    <form action="/contact" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input textarea name="name" class="form-control" id="name" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input textarea name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input textarea name="cpassword" class="form-control" id="cpassword">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection