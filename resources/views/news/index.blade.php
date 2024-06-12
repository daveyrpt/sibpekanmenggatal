@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.news') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.news') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">{{ __('message.configure news') }}</h5>
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">{{ __('message.title') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="file" class="col-sm-2 col-form-label">{{ __('message.file') }}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="file">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="file" class="col-sm-2 col-form-label">{{ __('message.news type') }}</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="type" required>
                                    <option disabled selected>{{ __('message.please select') }}</option>
                                    <option value="public">Umum</option>
                                    <option value="member-only">Ahli Sahaja</option>
                                </select>
                            </div>
                        </div>

                        <p class="text-danger fst-italic">** {{ __('message.only one news item can be featured at a time, with file formats limited to JPG, JPEG, or PNG and a maximum size of 2MB') }}</p>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ __('message.edit') }}</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">{{ __('message.current news') }}</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('message.title') }}</th>
                                <th scope="col">{{ __('message.file name') }}</th>
                                <th scope="col">{{ __('message.news type') }}</th>
                                <th scope="col">{{ __('message.uploaded at') }}</th>
                                <th scope="col">{{ __('message.status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $news)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->name }}</td>
                                <td>{{ $news->type === 'public' ? 'Umum' : 'Ahli Sahaja'}}</td>
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
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
