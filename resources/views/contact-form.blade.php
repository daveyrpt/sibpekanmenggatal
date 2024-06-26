@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.help and support') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.help and support') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">{{ __('message.help and support') }}</h5>
                    <table id="contact-form-table" class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">{{ __('message.name') }}</th>
                                <th scope="col" class="text-start">{{ __('message.contact_no') }}</th>
                                <th scope="col" class="text-start">{{ __('message.subject') }}</th>
                                <th scope="col" class="text-start">{{ __('message.content') }}</th>
                                <th scope="col" class="text-start">{{ __('message.time') }}</th>                         
                            </tr>
                        </thead>
                            @foreach ($contactForm as $index => $data)
                                <tr>
                                    <td scope="row" class="text-start row">
                                        {{ $index + 1 }} 
                                    </td>
                                    <td class="text-start">{{ $data->name }}</td>
                                    <td class="text-start">{{ $data->contact }}</td>
                                    <td class="text-start">{{ $data->subject }}</td>
                                    <td class="text-start">{{ $data->content }}</td>
                                    <td class="text-start">{{ $data->created_at }}</td>
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
        new DataTable('#contact-form-table', {
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