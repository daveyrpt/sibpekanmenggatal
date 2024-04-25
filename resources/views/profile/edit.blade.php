@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Member</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>

        <div class="col-12">

            <form method="POST" action="{{ route('account-setting.update', ['userId' => $userAccount->id]) }}">
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

                        <div class="text-center mt-5">
                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                @endif
            </form>

            <form method="POST" action="{{ route('profile.update', ['userId' => $userAccount->id]) }}">
                 @csrf

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
                                    <input type="text" class="form-control" name="fullname" value="{{ $userProfile->fullname ?? ''}}">
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

                        <div class="text-center mt-5">
                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <div class="d-flex justify-content-between">
                        <h1>Family Info</h1>
                    </div>

                    @foreach($userFamily as $index => $member)
                    <div class="row m-1 mt-3">
                        <div class="col-md-6 mb-3 text-center text-capitalize">
                            <p>{{$member['name']}}</p>
                        </div>
                        <div class="col-md-5 mb-3 text-center text-capitalize">
                            <p>{{$member['relation']}}</p>
                        </div>
                        <div class="col-md-1 mb-3">
                            <form method="POST" action="{{ route('family.destroy', $member['id']) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-sm btn-danger btn-flat show_confirm"
                                    data-toggle="tooltip" title='Delete'><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                    <form method="POST" action="{{ route('family.update', ['userId' => $userAccount->id]) }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-control" name="relation">
                                    <option value="" disabled selected>Select Relationship</option>
                                    <option value="spouse">Spouse</option>
                                    <option value="parent">Parent</option>
                                    <option value="child">Child</option>
                                    <option value="sibling">Sibling</option>
                                </select>
                            </div>
                        </div>

                        <p class="text-danger fst-italic">** You need to add at least one family member and save before you can add another one.</p>

                        <div class="text-center mt-3">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Delete Confirmation Modal --}}
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: 'Warning',
                    text: 'Delete family member?',
                    cancelButtonText: 'Cancel',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush