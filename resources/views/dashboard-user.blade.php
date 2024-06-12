@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.setting') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.dashboard') }}</li>
            </ol>
        </nav>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    @if(App\Models\News::where('type', 'member-only')->first()->status)
                        <p>{{ App\Models\News::where('type', 'member-only')->first()->title }}</p>
                        <img src="{{ asset('images/news/members-news.png') }}" alt="Example Image" class="img-fluid">
                    @endif
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