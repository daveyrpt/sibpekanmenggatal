@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create New Member</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Membership</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="card overflow-auto">
                    <!-- Member Information Form -->
                    <div class="card-body mt-4">
                        <form>
                            <h1>Maklumat Diri</h1>
                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberName">Nama Penuh</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="memberName"
                                            placeholder="Masukkan nama penuh" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberEmail">Tarikh Lahir</label>
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
                                        <label for="memberDOB">Umur</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="memberDOB"
                                            placeholder="Masukkan umur" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberGender">Jantina</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="memberGender" required>
                                            <option value="" disabled selected>Pilih jantina</option>
                                            <option value="male">Lelaki</option>
                                            <option value="female">Perempuan</option>
                                            <option value="other">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat the structure for other fields -->

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberType">Jenis Anggota</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="memberType" required>
                                            <option value="" disabled selected>Pilih jenis anggota</option>
                                            <option value="permanent">Tetap</option>
                                            <option value="associate">Bersekutu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memberType">Gambar Profil</label>
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
                                <h1>Maklumat Keluarga</h1>
                                <div class="text-end">
                                    <button type="button" class="btn btn-success" onclick="addRow()">+</button>
                                    <button type="button" class="btn btn-danger" onclick="removeLastRow()">-</button>
                                </div>
                            </div>

                            <div class="row  m-3">
                                <div class="col-md-8 mb-3">
                                    <label for="input1">Nama</label>
                                    <input type="text" class="form-control" id="input1"
                                        placeholder="" required>
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

                                <button type="submit" class="btn btn-primary">Save Changes</button>
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
            var newRow = '<div class="row m-3">' +
                '<div class="col-md-8 mb-3">' +
                '<label for="input1">Nama</label>' +
                '<input type="text" class="form-control" name="nama[]" placeholder="" required>' +
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
