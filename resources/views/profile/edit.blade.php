@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Member</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>

            <div class="col-12">

                <form method="POST" action="{{ route('profile.update', ['userId' => $userAccount->id]) }}">
                    @csrf

                    @if(Auth::user()->role == 'admin')
                    <div class="card overflow-auto">
                        <div class="card-body mt-4">
                            <h1>Account Info</h1>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ $userAccount->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="{{ $userAccount->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password">
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
                                        <label for="fullname">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fullname" value="{{ $userProfile->fullname }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date_of_birth">
                                    </div>
                                </div>
                            </div>

                           <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="city">
                                            <option disabled selected>Please select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="state">
                                            <option disabled selected>Please select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zip">Postcode</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="zip">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Contact Number (60+)</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="occupation">Occupation</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="occupation">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="gender">
                                            <option disabled selected>Please select</option>
                                            <option value="1">1</option>
                                            <option value="0">0</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="member_type">Member Type</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="member_type">
                                            <option disabled selected>Please select</option>
                                            <option value="1">1</option>
                                            <option value="0">0</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-auto">
                        <div class="card-body mt-4">
                            <div class="d-flex justify-content-between">
                                <h1>Family Info</h1>
                                <div class="text-end">
                                    <button type="button" class="btn btn-success" onclick="addRow()">+</button>
                                    <button type="button" class="btn btn-danger" onclick="removeLastRow()">-</button>
                                </div>
                            </div>

                            <div class="row m-1">
                                <div class="col-md-8 mb-3">
                                    <input type="text" class="form-control" id="input1">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <select class="form-control" id="relationship">
                                        <option value="" disabled selected>Select Relationship</option>
                                        <option value="spouse">Spouse</option>
                                        <option value="parent">Parent</option>
                                        <option value="child">Child</option>
                                        <option value="sibling">Sibling</option>
                                    </select>
                                </div>
                            </div>

                            <div id="dynamicRows"></div>

                            <div class="text-center mt-3">

                                <button type="submit" id="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        function addRow() {
            var newRow = '<div class="row m-1">' +
                '<div class="col-md-8 mb-3">' +
                '<input type="text" class="form-control" name="nama[]" placeholder="Name" >' +
                '</div>' +
                '<div class="col-md-4 mb-3">' +
                '<select class="form-control" name="hubungan[]" >' +
                '<option value="" disabled selected>Select Relationship</option>' +
                '<option value="spouse">Spouse</option>' +
                '<option value="parent">Parent</option>' +
                '<option value="child">Child</option>' +
                '<option value="sibling">Sibling</option>' +
                '</select>' +
                '</div>' +
                '</div>';

            $('#dynamicRows').append(newRow);
        }

        function removeLastRow() {
            $('#dynamicRows .row:last').remove();
        }
    </script>
@endpush
