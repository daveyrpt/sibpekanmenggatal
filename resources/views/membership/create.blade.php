@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add Member</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Membership</li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="card overflow-auto">
                    <!-- Member Information Form -->
                    <div class="card-body mt-4">
                        <form>
                            <h1>Account Info</h1>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberName">Username</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="memberName"
                                            placeholder="" required>
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
                                        <input type="email" class="form-control" id="memberName"
                                            placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberName">Password</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="memberName"
                                            placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <h1>Personal Info</h1>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberName">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="memberName"
                                            placeholder="e.g., Jack Arson" required>
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
                                        <input type="date" class="form-control" id="memberEmail" required>
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
                                        <input type="text" class="form-control" id="memberName"
                                            placeholder="e.g., Kompleks Mahkamah Kota Kinabalu No. 1 Jalan Kebajikan" required>
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
                                        <select class="form-control" id="memberGender" required>
                                            <option value="Kota Kinabalu" selected>Kota Kinabalu</option>
                                            <option value="male">1</option>
                                            <option value="female">2</option>
                                        </select>
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
                                        <select class="form-control" id="memberGender" required>
                                            <option value="Sabah" selected>Sabah</option>
                                            <option value="male">1</option>
                                            <option value="female">2</option>
                                        </select>
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
                                        <input type="number" class="form-control" id="memberName"
                                            placeholder="e.g., 88300" required>
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
                                        <input type="number" class="form-control" id="memberName"
                                            placeholder="e.g., 0123456789" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberEmail">Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="memberName"
                                            placeholder="e.g., example@gmail.com" required>
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
                                        <input type="email" class="form-control" id="memberName"
                                            placeholder="e.g., Contract Teacher" required>
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
                                        <select class="form-control" id="memberGender" required>
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat the structure for other fields -->

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberType">Member Type</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="memberType" required>
                                            <option value="permanent" selected>Tetap</option>
                                            <option value="associate">Bersekutu</option>
                                        </select>
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
                                        <input type="file" class="form-control" id="memberDOB"
                                            placeholder="Masukkan gambar" required>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-5 d-flex justify-content-between">
                                <h1>Family Info</h1>
                                <div class="text-end">
                                    <button type="button" class="btn btn-success" onclick="addRow()">+</button>
                                    <button type="button" class="btn btn-danger" onclick="removeLastRow()">-</button>
                                </div>
                            </div>

                            <div class="row m-1">
                                <div class="col-md-8 mb-3">
                                    <input type="text" class="form-control" id="input1"
                                        placeholder="Name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <select class="form-control" id="relationship" required>
                                        <option value="" disabled selected>Select Relationship</option>
                                        <option value="spouse">Spouse</option>
                                        <option value="parent">Parent</option>
                                        <option value="child">Child</option>
                                        <option value="sibling">Sibling</option>
                                        <!-- Add more relationship options as needed -->
                                    </select>
                                </div>
                            </div>

                            <div id="dynamicRows"></div>

                            <div class="text-center mt-3">

                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form><!-- End Member Information Form -->
                    </div>
                </div>
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
                '<input type="text" class="form-control" name="nama[]" placeholder="Name" required>' +
                '</div>' +
                '<div class="col-md-4 mb-3">' +
                '<select class="form-control" name="hubungan[]" required>' +
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
