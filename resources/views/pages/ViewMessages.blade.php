@extends('layout.default')

@section('content')
    <div class="card-body" style= "margin-top: 50px">
        <div class="card mt-10 pl-2 pr-2">
            <table class="table table-bordered">
                <h1 style="text-align: center">View your messages</h1>
                <div style="margin-top: 50px">
                <thead>
                <tr>
                    <th>Click on the link to view messages</th>
                    <th>Click on delete to delete the message</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td><li class="nav-item">
                            <a  href="/Message">Message from Mr Adam</a>
                        </li></td>
                    <td><button type="delete" class="btn btn-primary mb-2">Delete</button></td>
                </tr>
                <tr>

                    <td><li class="nav-item">
                            <a  href="/Message1">Message from Miss Julie</a>
                        </li></td>
                    <td><button type="delete" class="btn btn-primary mb-2">Delete</button></td>
                </tr>
                </tbody>
                </div>
            </table>
        </div>
    </div>
@endsection