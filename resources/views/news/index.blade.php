@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>News</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">News</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Configure News</h5>
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="file" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="file">
                            </div>
                        </div>

                        <p class="text-danger fst-italic">** Only one news item can be featured at a time, with file formats limited to JPG, JPEG, or PNG and a maximum size of 2MB.</p>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Current News</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Uploaded At</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->name }}</td>
                                <td>{{ $news->created_at }}</td>
                                <td>
                                    <form action="{{ route('news.updateStatus', ['id' => $news->id]) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked{{ $news->id }}" name="status" onchange="this.form.submit()" {{ $news->status ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked{{ $news->id }}"></label>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
