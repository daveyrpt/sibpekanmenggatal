@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Membership</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Membership</li>
                </ol>
                <a href="{{ route ('membership.create')}}" class="btn btn-success my-2">Tambah Ahli</a>
            </nav>

            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">Membership Record</h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">Member Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">#2457</a></th>
                                    <td><a href="{{ route ('membership.profile')}}" class="text-primary">Brandon Jacob</a></td>
                                    <td>Kota Kinabalu</td>
                                    <td>Jurulatih</td>
                                    <td>Bersekutu</td>
                                    <td>
                                        <a href='{{ route ('membership.edit')}}' type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2147</a></th>
                                    <td><a href="#" class="text-primary">Bridie Kessler</a></td>
                                    <td>Lahad Datu</td>
                                    <td>Peniaga</td>
                                    <td>Tetap</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2049</a></th>
                                    <td><a href="#" class="text-primary">Ashleigh Langosh</a></td>
                                    <td>Lahad Datu</td>
                                    <td>Tidak Bekerja</td>
                                    <td>Bersekutu</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2644</a></th>
                                    <td><a href="#" class="text-primary">Angus Grady</a></td>
                                    <td>Kota Belud</td>
                                    <td>Guru</td>
                                    <td>Bersekutu</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2644</a></th>
                                    <td><a href="#" class="text-primary">Raheem Lehner</a></td>
                                    <td>Sandakan</td>
                                    <td>Suri Rumah</td>
                                    <td>Tetap</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
