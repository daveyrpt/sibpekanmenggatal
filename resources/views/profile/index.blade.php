@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.profile') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ __('message.profile') }}</li>
                <li class="breadcrumb-item active">{{$userAccount->name}}</li>
            </ol>
            <a href="{{ route('profile.edit', ['userId' => $userProfile->user_id ?? Auth::user()->id]) }}" class="btn btn-secondary mb-2 float-right">{{ __('message.edit') }}</a>
        </nav>

        <div class="col-12">
            @if(Auth::user()->role == 'admin')
            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <h1>{{ __('message.account information') }}</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberName">{{ __('message.username') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userAccount->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberName">{{ __('message.email') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userAccount->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <h1>{{ __('message.personal information') }}</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberName">{{ __('message.fullname') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->fullname ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberEmail">{{ __('message.date of birth') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->date_of_birth ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberEmail">{{ __('message.address') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->address ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.city') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->city ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.state') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->state ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberEmail">{{ __('message.postcode') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->zip ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberEmail">{{ __('message.contact number') }} (60+)</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->phone ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberEmail">{{ __('message.occupation') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->occupation ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.gender') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->gender ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">{{ __('message.member type') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->member_type ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <div class="container m-3">
                        <h1>{{ __('message.family information') }}</h1>
                    </div>

                    @foreach($userFamily as $index => $member)
                    <div class="row m-3">
                        <div class="col-md-2 mb-1">
                            <p>{{$index+1}}.</p>
                        </div>
                        <div class="col-md-6 mb-1 text-capitalize">
                            <p>{{$member['name']}}</p>
                        </div>
                        <div class="col-md-4 mb-1 text-capitalize">
                            <p>{{$member['relation']}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
