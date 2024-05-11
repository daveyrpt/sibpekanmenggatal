@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.edit') }} {{ __('message.user') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ __('message.profile') }}</li>
                <li class="breadcrumb-item">{{ __('message.edit') }}</li>
                <li class="breadcrumb-item active">{{$userAccount->name}}</li>
            </ol>
        </nav>

        <div class="col-12">

            <form method="POST" action="{{ route('account-setting.updateUserProfile', ['userId' => $userAccount->id]) }}">
                @csrf

                @if(Auth::user()->role == 'admin')
                <div class="card overflow-auto">
                    <div class="card-body mt-4">
                        <h1>{{ __('message.account information') }}</h1>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('message.username') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{ $userAccount->name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ __('message.email') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="{{ $userAccount->email }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">{{ __('message.role') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                   <select class="form-control" name="role">
                                        <option disabled selected>{{ __('message.please select') }}</option>
                                        <option value="admin" {{ $userAccount->role == 'admin' ? 'selected' : ''}}>Administrator</option>
                                        <option value="user" {{ $userAccount->role == 'user' ? 'selected' : ''}}>{{ __('message.normal user') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">{{ __('message.password') }}</label>
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
                                    <label for="confirm_password">{{ __('message.confirm password') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">{{ __('message.edit') }}</button>
                        </div>
                    </div>
                </div>
                @endif
            </form>

            <form method="POST" action="{{ route('profile.update', ['userId' => $userAccount->id]) }}">
                 @csrf

                <div class="card overflow-auto">
                    <div class="card-body mt-4">
                        <h1>{{ __('message.personal information') }}</h1>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullname">{{ __('message.fullname') }}</label>
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
                                    <label for="date_of_birth">{{ __('message.date of birth') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date_of_birth" value="{{ $userProfile->date_of_birth ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">{{ __('message.address') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" value="{{ $userProfile->address ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">{{ __('message.city') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" value="{{ $userProfile->city ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">{{ __('message.state') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="state">
                                        <option disabled selected>{{ __('message.please select') }}</option>
                                        <option value="Sabah" {{ $userProfile->state == 'Sabah' ? 'selected' : ''}}>Sabah</option>
                                        <option value="Labuan" {{ $userProfile->state == 'Labuan' ? 'selected' : ''}}>Labuan</option>
                                        <option value="Sarawak" {{ $userProfile->state == 'Sarawak' ? 'selected' : ''}}>Sarawak</option>
                                        <option value="Johor" {{ $userProfile->state == 'Johor' ? 'selected' : ''}}>Johor</option>
                                        <option value="Kedah" {{ $userProfile->state == 'Kedah' ? 'selected' : ''}}>Kedah</option>
                                        <option value="Kelantan" {{ $userProfile->state == 'Kelantan' ? 'selected' : ''}}>Kelantan</option>
                                        <option value="Melaka" {{ $userProfile->state == 'Melaka' ? 'selected' : ''}}>Melaka</option>
                                        <option value="Negeri Sembilan" {{ $userProfile->state == 'Negeri Sembilan' ? 'selected' : ''}}>Negeri Sembilan</option>
                                        <option value="Pahang" {{ $userProfile->state == 'Pahang' ? 'selected' : ''}}>Pahang</option>
                                        <option value="Perak" {{ $userProfile->state == 'Perak' ? 'selected' : ''}}>Perak</option>
                                        <option value="Perlis" {{ $userProfile->state == 'Perlis' ? 'selected' : ''}}>Perlis</option>
                                        <option value="Penang" {{ $userProfile->state == 'Penang' ? 'selected' : ''}}>Penang</option>
                                        <option value="Selangor" {{ $userProfile->state == 'Selangor' ? 'selected' : ''}}>Selangor</option>
                                        <option value="Terengganu" {{ $userProfile->state == 'Terengganu' ? 'selected' : ''}}>Terengganu</option>
                                        <option value="Kuala Lumpur" {{ $userProfile->state == 'Kuala Lumpur' ? 'selected' : ''}}>Kuala Lumpur</option>
                                        <option value="Putrajaya" {{ $userProfile->state == 'Putrajaya' ? 'selected' : ''}}>Putrajaya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip">{{ __('message.postcode') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="zip" value="{{ $userProfile->zip ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">{{ __('message.contact number') }} (60+)</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" value="{{ $userProfile->phone ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="occupation">{{ __('message.occupation') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="occupation" value="{{ $userProfile->occupation ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">{{ __('message.gender') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender">
                                        <option disabled selected>{{ __('message.please select') }}</option>
                                        <option value="male" {{ $userProfile->gender == 'male' ? 'selected' : ''}}>Lelaki</option>
                                        <option value="female" {{ $userProfile->gender == 'female' ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="member_type">{{ __('message.member type') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="member_type">
                                        <option disabled selected>{{ __('message.please select') }}</option>
                                        <option value="bersekutu" {{ $userProfile->member_type == 'bersekutu' ? 'selected' : ''}}>{{ __('message.alliance member') }}</option>
                                        <option value="tetap" {{ $userProfile->member_type == 'tetap' ? 'selected' : ''}}>{{ __('message.permanent member') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="member_type">{{ __('message.member code') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="member_code" value="{{ $userProfile->member_code ?? ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="member_type">{{ __('message.original church') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="original_church" value="{{ $userProfile->original_church ?? ''}}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card overflow-auto">
                    <div class="card-body mt-4">
                        <div class="d-flex justify-content-between">
                            <h1>{{ __('message.family information') }}</h1>
                        </div>
                        
                        <table class="table" id="addFamilyRow">
                            <tr>
                                <th>Nama Keluarga</th>
                                <th>Hubungan</th>
                                <th><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah Ahli</button></th>
                            </tr>

                        @php
                            $userProfile->family = json_decode($userProfile->family);
                            $index = count((array)$userProfile->family);
                        @endphp
                        @if(isset($userProfile->family))
                            @foreach($userProfile->family as $index => $member)
                                <tr>
                                    <td>
                                        <input type="text" name="family[{{$index}}][name]" class="form-control" value="{{ $member->name }}"/>
                                    </td>
                                    <td>
                                        <select class="form-control" name="family[{{$index}}][relationship]">
                                            <option value="" disabled selected>{{ __('message.please select relationship') }}</option>
                                            <option value="parent" {{ $member->relationship == 'parent' ? 'selected' : ''}}>{{ __('message.parent') }}</option>
                                            <option value="sibling" {{ $member->relationship == 'sibling' ? 'selected' : ''}}>{{ __('message.sibling') }}</option>
                                            <option value="spouse" {{ $member->relationship == 'spouse' ? 'selected' : ''}}>{{ __('message.spouse') }}</option>
                                            <option value="child"  {{ $member->relationship == 'child' ? 'selected' : ''}}>{{ __('message.child') }}</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-outline-danger remove-input-field">Buang</button></td>
                                </tr>
                            @endforeach
                        @endif
                        </table>

                        <div class="text-center mt-3">
                            <button type='submit' class="btn btn-primary">{{ __('message.edit') }}</button>
                        </div>
                    </div>
                </div>
           </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Dynamically add input row --}}
    <script>
        var i = {{$index}};
        $("#dynamic-ar").click(function () {
            ++i;
            var newRow = '<tr><td><input type="text" name="family[' + i +
                '][name]" class="form-control" /></td>' +
                '<td><select class="form-control" name="family[' + i + '][relationship]">' +
                '<option value="" disabled selected>Sila Pilih Hubungan</option>' +
                '<option value="parent">{{ __("message.parent") }}</option>' +
                '<option value="sibling">{{ __("message.sibling") }}</option>' +
                '<option value="spouse">{{ __("message.spouse") }}</option>' +
                '<option value="child">{{ __("message.child") }}</option>' +
                '</select></td>' +
                '<td><button type="button" class="btn btn-outline-danger remove-input-field">Buang</button></td></tr>';

            $("#addFamilyRow").append(newRow);
        });

    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
    </script>

@endpush