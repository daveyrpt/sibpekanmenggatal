@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.add') }} {{ __('message.user') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ __('message.profile') }}</li>
                <li class="breadcrumb-item active">{{ __('message.add') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card overflow-auto">
                    <div class="card-body mt-4">
                        <h1>{{ __('message.account information') }}</h1>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">{{ __('message.username') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username">
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
                                    <input type="email" class="form-control" name="email">
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
                    </div>
                </div>

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
                                    <input type="text" class="form-control" name="fullname">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_of_birth">{{ __('message.date of birth') }}</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="age">{{ __('message.age') }}</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="age" name="age" readonly>
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
                                    <input type="text" class="form-control" name="address">
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
                                    <input type="text" class="form-control" name="city">
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
                                        <option value="Sabah">Sabah</option>
                                        <option value="Labuan">Labuan</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                                        <option value="Putrajaya">Putrajaya</option>
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
                                    <input type="number" class="form-control" name="zip">
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
                                    <input type="text" class="form-control" name="phone">
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
                                    <input type="text" class="form-control" name="occupation">
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
                                        <option value="male">Lelaki</option>
                                        <option value="female">Perempuan</option>
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
                                        <option value="bersekutu">{{ __('message.alliance member') }}</option>
                                        <option value="tetap">{{ __('message.permanent member') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="member_code">{{ __('message.member code') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="member_code">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="original_church">{{ __('message.original church') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="original_church">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="baptize_date">{{ __('message.baptize date') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="baptize_date">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="begin_year">{{ __('message.begin year') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" min="1900" max="2099" step="1" class="form-control" name="begin_year">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="member_type">{{ __('message.profile img') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="profile_img">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-5">
                            <h1>{{ __('message.family information') }}</h1>
                        </div>
                        
                        <table class="table" id="addFamilyRow">
                            <tr>
                                <th>Nama Keluarga</th>
                                <th>Hubungan</th>
                                <th><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah Ahli</button></th>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type='submit' class="btn btn-primary">{{ __('message.add') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Dynamically add input row --}}
    <script>
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            var newRow = '<tr><input type="hidden" name="family[' + i +
                '][id]"/><td><input type="text" name="family[' + i +
                '][name]" class="form-control" required/></td>' +
                '<td><select class="form-control" name="family[' + i + '][relationship]" required>' +
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

    {{-- Change age based on birth date --}}
    <script>
        $(document).ready(function () {
            $('#date_of_birth').on('change', function () {
                var birthDate = new Date($(this).val());
                var today = new Date();
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                $('#age').val(age);
            });
        });
    </script>
@endpush