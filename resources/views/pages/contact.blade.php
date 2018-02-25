@extends('layout.default')

@section('content')
    <div class="card-body" style= "margin-top: 20px">
<div class="card mt-5 pl-2 pr-2">
    <h1 style="text-align: center">Contact page</h1>
    <div class="card-title"><p class="lead" style="text-align: center">please use this form to contact site owner</p>
        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input textarea name="subject" class="form-control" id="subject">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection