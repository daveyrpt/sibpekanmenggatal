@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.log') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.log') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">{{ __('message.log') }}</h5>
                <table id="logs-table" class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col" class="text-start">#</th>
                            <th scope="col" class="text-start">Log</th>
                            <th scope="col" class="text-start">Date</th>
                        </tr>
                    </thead>
                        @foreach ($logs as $index => $log)
                            <tr>
                                <td scope="row" class="text-start">{{ $index + 1 }}</td>
                                <td class="text-start">{{ $log->causer->name . ' ' . $log->description}} {{$log->target->name ?? '' }}</td>
                                <td class="text-start">{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                    <tbody>

                    </tbody>
                </table>

                </div>

            </div>

        </div>
    </div>
@endsection


@push('scripts')
    {{-- Datatable --}}
    <script>
        new DataTable('#logs-table', {
            pagingType: 'simple_numbers',
            layout: {
                top: {
                   /*  buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'] */
                },
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>
@endpush