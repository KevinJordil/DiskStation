@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Add file</div>

                    <div class="card-body">
                        <form method="post" action="{{ Route('files.store') }}">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter a title">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter a title">
                            </div>
                            <div class="form-group">
                                <label for="formfile">File</label>
                                <input type="file" class="form-control-file" id="formfile" aria-describedby="fileHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection