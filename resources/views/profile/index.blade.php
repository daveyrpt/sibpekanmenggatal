@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
            <a href="{{ route('profile.edit', ['userId' => $userProfile->user_id ?? Auth::user()->id]) }}" class="btn btn-secondary mb-2 float-right">Edit</a>
        </nav>

        <div class="col-12">
            @if(Auth::user()->role == 'admin')
            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <h1>Account Info</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberName">Username</label>
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
                                <label for="memberName">Email</label>
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
                    <h1>Personal Info</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberName">Full Name</label>
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
                                <label for="memberEmail">Date of Birth</label>
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
                                <label for="memberEmail">Address</label>
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
                                <label for="memberGender">City</label>
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
                                <label for="memberGender">State</label>
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
                                <label for="memberEmail">Postcode</label>
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
                                <label for="memberEmail">Contact Number (60+)</label>
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
                                <label for="memberEmail">Occupation</label>
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
                                <label for="memberGender">Gender</label>
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
                                <label for="memberType">Member Type</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->member_type ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">Profile Picture</label>
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
                        <h1>Family Info</h1>
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
