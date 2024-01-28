@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>News and Event</h1>
            <nav class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">News Record</h5>
                                      <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Fail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Tarikh</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>

    
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>

                    </div>

                </div>

                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">News Record</h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Fail</th>
                                    <th scope="col">Tarikh</th>
                                    <th scope="col">Tetatapn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">#1</a></th>
                                    <td><a href="#" class="text-primary">Event2023.mp4</a></td>
                                    <td>23/1/2024</td>
                                    <td>
                                        <a href='{{ route ('membership.profile')}}' type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2</a></th>
                                    <td><a href="#" class="text-primary">Event2023(1).mp4</a></td>
                                    <td>23/1/2024</td>
                                    <td>
                                        <a href='{{ route ('membership.profile')}}' type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
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
