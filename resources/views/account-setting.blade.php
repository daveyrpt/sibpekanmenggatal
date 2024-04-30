@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.setting') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.setting') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">{{ __('message.account setting') }}</h5>
                    <form method="POST" action="{{ route('account-setting.update', Auth::user()->id) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">{{ __('message.username') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" value="{{ $userAccount->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">{{ __('message.email') }}</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $userAccount->email }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">{{ __('message.password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">{{ __('message.confirm password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="update-btn">{{ __('message.edit') }}</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#update-btn').click(function(event) {
            var form =  $(this).closest("form");
            event.preventDefault();

            Swal.fire({
                title: '{{ __('message.warning') }}',
                text: '{{ __('message.update this user') }}?',
                cancelButtonText: '{{ __('message.cancel') }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __("message.yes, update it") }}',
            }).then((result) => {
                
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
@endpush