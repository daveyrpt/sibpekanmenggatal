@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile Member</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Membership</li>
                    <li class="breadcrumb-item active">Profile</li>
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
                                        <p>Jackk12</p>
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
                                        <p>Jack@gmail.com</p>
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
                                        <p>*******</p>
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
                                        <p>Jack Arson</p>
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
                                        <p>31/12/2024</p>
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
                                        <p>Kompleks Mahkamah Kota Kinabalu No. 1 Jalan Kebajikan</p>
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
                                        <p>Kota Kinabalu</p>
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
                                        <p>Sabah</p>
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
                                        <p>88300</p>
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
                                        <p>0123456789</p>
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
                                        <p>example@gmail.com</p>
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
                                        <p>Contract Teacher</p>
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
                                        <p>Lelaki</p>
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
                                        <p>Bersekutu</p>
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

                            <div class="container m-3">
                                <h1>Family Info</h1>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-2 mb-1">
                                    <p>1.</p>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <p>John</p>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <p>Parent</p>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-2 mb-1">
                                    <p>2.</p>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <p>mary</p>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <p>Parent</p>
                                </div>
                            </div>

                        </form><!-- End Member Information Form -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

