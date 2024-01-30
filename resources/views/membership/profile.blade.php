@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Membership #2457</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Membership</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="card overflow-auto">
                </div>
            </div>
        </div>

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Add
                                        Family Member</button>
                                </li>

                                {{--     <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> --}}

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <div class="card">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                            <img src="{{ asset('NiceAdmin/assets/img/profile-img.jpg') }}" alt="Profile"
                                                class="rounded-circle">
                                            <h2>Brandon Jacob</h2>
                                            <h3>Jurulatih</h3>
                                            <div class="social-links mt-2">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                        rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                        unde.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label ">Nama Penuh</div>
                                            <div class="col-lg-9 col-md-8">Brandon Jacob</div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                            <div class="col-lg-9 col-md-8">Jurulatih</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label ">Tarikh Lahir</div>
                                            <div class="col-lg-9 col-md-8">16 Mei 1994</div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label">Umur</div>
                                            <div class="col-lg-9 col-md-8">30</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label ">Alamat Tetap</div>
                                            <div class="col-lg-9 col-md-8">......</div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label">Alamat Surat</div>
                                            <div class="col-lg-9 col-md-8">.......</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label ">Nombor Telefon</div>
                                            <div class="col-lg-9 col-md-8">010-1234567</div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">example@example.com</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label ">Jenis</div>
                                            <div class="col-lg-9 col-md-8">Anggota Tetap</div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-lg-3 col-md-4 label">Status</div>
                                            <div class="col-lg-9 col-md-8">Aktif</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('NiceAdmin/assets/img/profile-img.jpg') }}"
                                                    alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Penuh</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control"
                                                    id="fullName" value="Brandon Jacob">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company"
                                                class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company"
                                                    value="Jurulatih">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Tarikh
                                                Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control" id="Job"
                                                    value="16 Mei 1994">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Umur</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="Country"
                                                    value="30">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat
                                                Tetap</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                    value="......">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Alamat
                                                Surat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    value="......">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Nombor
                                                Telefon</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="010-1234567">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="twitter" type="text" class="form-control" id="Twitter"
                                                    value="example@example.com">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">

                                    <!-- Settings Form -->
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8 mb-3">
                                                <label for="input1">Nama</label>
                                                <input type="text" class="form-control" id="input1" placeholder="Masukkan nama keluarga" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="relationship">Hubungan</label>
                                                <select class="form-control" id="relationship" required>
                                                    <option value="" disabled selected>Pilih Hubungan</option>
                                                    <option value="spouse">Pasangan</option>
                                                    <option value="parent">Ibu</option>
                                                    <option value="child">Bapa</option>
                                                    <option value="sibling">Anak</option>
                                                    <option value="sibling">Kakak</option>
                                                    <option value="sibling">Abang</option>
                                                    <!-- Add more relationship options as needed -->
                                                </select>
                                            </div>
                                        </div>
                        
                                        <div id="dynamicRows"></div>

                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-success" onclick="addRow()">Add New Row</button>
                                            <button type="button" class="btn btn-danger" onclick="removeLastRow()">Remove Last Row</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End settings Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script>
    function addRow() {
        var newRow = '<div class="row">' +
            '<div class="col-md-8 mb-3">' +
            '<label for="input1">Nama</label>' +
            '<input type="text" class="form-control" name="nama[]" placeholder="Masukkan nama keluarga" required>' +
            '</div>' +
            '<div class="col-md-4 mb-3">' +
            '<label for="relationship">Hubungan</label>' +
            '<select class="form-control" name="hubungan[]" required>' +
            '<option value="" disabled selected>Pilih Hubungan</option>' +
            '<option value="spouse">Pasangan</option>' +
            '<option value="parent">Ibu</option>' +
            '<option value="child">Bapa</option>' +
            '<option value="sibling">Anak</option>' +
            '<option value="sibling">Kakak</option>' +
            '<option value="sibling">Abang</option>' +
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