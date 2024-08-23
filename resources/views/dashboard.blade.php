@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.dashboard') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">{{ __('message.dashboard') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>{{ __('message.filter') }}</h6></li>
                                    <li><a class="dropdown-item" href="#" id="filter-permanent-today">{{ __('message.today') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-permanent-month">{{ __('message.this month') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-permanent-year">{{ __('message.this year') }}</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ __('message.permanent member') }} <span>| <span id="filter-permanent-type"></span></span>
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="filter-permanent-value"></h6>
{{--                                         <span id="filter-permanent-value-percentage"
                                            class="text-success small pt-1 fw-bold">%</span> <span
                                            class="text-muted small pt-2 ps-1">{{ __('message.increase') }}</span> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>{{ __('message.filter') }}</h6></li>
                                    <li><a class="dropdown-item" href="#" id="filter-alliance-today">{{ __('message.today') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-alliance-month">{{ __('message.this month') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-alliance-year">{{ __('message.this year') }}</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ __('message.alliance member') }} <span>| <span id="filter-alliance-type"></span></span>
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="filter-alliance-value"></h6>
{{--                                         <span id="filter-alliance-value-percentage"
                                            class="text-success small pt-1 fw-bold">%</span> <span
                                            class="text-muted small pt-2 ps-1">{{ __('message.increase') }}</span> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-4">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>{{ __('message.filter') }}</h6></li>
                                    <li><a class="dropdown-item" href="#" id="filter-visitor-today">{{ __('message.today') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-visitor-month">{{ __('message.this month') }}</a></li>
                                    <li><a class="dropdown-item" href="#" id="filter-visitor-year">{{ __('message.this year') }}</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ __('message.visitor') }} <span id="filter-visitor"></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="filter-visitor-value"></h6>
{{--                                         <span id="filter-visitor-value-percentage" class="text-danger small pt-1 fw-bold">%</span> <span
                                            class="text-muted small pt-2 ps-1">{{ __('message.decrease') }}</span> --}}
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title mb-0">{{ __('message.membership record') }}</h5>
                    <a href="{{ route('profile.create') }}" class="btn btn-success">{{ __('message.add member') }}</a>
                </div>
                <table id="membership-table" class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col" class="text-start">#</th>
                            <th scope="col" class="text-start">{{ __('message.name') }}</th>
                            <th scope="col" class="text-start">Tarikh Lahir</th>
                            <th scope="col" class="text-start">Umur</th>
                            <th scope="col" class="text-start">Jantina</th>
                            <th scope="col" class="text-start">{{ __('message.address') }}</th>
                            <th scope="col" class="text-start">{{ __('message.occupation') }}</th>
                            <th scope="col" class="text-center">{{ __('message.member type') }}</th>
                            <th scope="col" class="text-center">Kod Keahlian</th>
                            <th scope="col" class="text-center">Gereja Asal</th>
                            <th scope="col" class="text-center">Tarikh Baptis</th>
                            <th scope="col" class="d-print-none">{{ __('message.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userProfile as $index => $member)
                            <tr>
                                <td scope="row" class="text-start">{{ $index + 1 }}</td>
                                <td class="text-start"><a href="{{ route('profile.index', $member->user_id) }}" class="text-primary">{{ $member->fullname ?? '-' }}</a></td>
                                <td class="text-start">{{ $member->date_of_birth ?? '-' }}</td>
                                <td class="text-start">{{ $member->age ?? '-' }}</td>
                                <td class="text-start">{{ $member->gender ?? '-' }}</td>
                               <td class="text-start">{{ $member->ic ?? '-' }}</td>
                                <td class="text-start">{{ $member->city . ', ' . $member->state ?? '-' }}</td>
                                <td class="text-start">{{ $member->occupation ?? '-' }}</td>
                                <td class="text-center text-capitalize text-white"><span class="badge {{ $member->member_type == 'tetap' ? 'bg-primary ' : ($member->member_type == 'bersekutu' ? 'bg-success' : 'text-black -')}}">{{ $member->member_type ?? '-' }}</span></td>
                                <td class="text-start">{{ $member->member_code ?? '-' }}</td>
                                <td class="text-start">{{ $member->original_church ?? '-' }}</td>
                                <td class="text-start">{{ $member->baptize_date ?? '-' }}</td>
                                <td class="text-start">
                                    <div class="d-flex">
                                        <a href='{{ route('profile.edit', ['userId' => $member->user_id]) }}'
                                            type="button" class="btn btn-secondary btn-sm me-1"><i
                                                class="bi bi-pencil-fill"></i></a>

                                        <form method="POST" action="{{ route('profile.destroy', $member->user_id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm"
                                                data-toggle="tooltip" title='Delete'><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    {{-- Datatable --}}
    <script>
        new DataTable('#membership-table', {
            pagingType: 'simple_numbers',
            layout: {
                top: {
                    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                },
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>

    {{-- Delete Confirmation Modal --}}
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: '{{ __('message.warning') }}',
                    text: '{{ __('message.delete this user') }}?',
                    cancelButtonText: '{{ __('message.cancel') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{ __("message.yes, delete it") }}'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>

    {{-- Card Filter --}}
    <script>
        $(document).ready(function() {
            // for permament member 
            $("#filter-permanent-today").on("click", function() {
                updateFilterPermanentValue('{{ __('message.today') }}', {{ $totalUsersTodayForPermanentMember }});
            });

            $("#filter-permanent-month").on("click", function() {
                updateFilterPermanentValue('{{ __('message.this month') }}', {{ $totalUsersThisMonthForPermanentMember }});
            });

            $("#filter-permanent-year").on("click", function() {
                updateFilterPermanentValue('{{ __('message.this year') }}', {{ $totalUsersThisYearForPermanentMember }});
            });

            $("#filter-permanent-today").click();

            function updateFilterPermanentValue(type, value) {
                $("#filter-permanent-value").text(value);
                $("#filter-permanent-type").text(type);
            }

            // for alliance member
            $("#filter-alliance-today").on("click", function() {
                updateFilterAllianceValue('{{ __('message.today') }}', {{ $totalUsersTodayForAllianceMember }});
            });

            $("#filter-alliance-month").on("click", function() {
                updateFilterAllianceValue('{{ __('message.this month') }}', {{ $totalUsersThisMonthForAllianceMember }});
            });

            $("#filter-alliance-year").on("click", function() {
                updateFilterAllianceValue('{{ __('message.this year') }}', {{ $totalUsersThisYearForAllianceMember }});
            });

            $("#filter-alliance-today").click();

            function updateFilterAllianceValue(type, value) {
                $("#filter-alliance-value").text(value);
                $("#filter-alliance-type").text(type);
            }

            // for visitor
            $("#filter-visitor-today").on("click", function() {
                updateFilterVisitorValue('{{ __('message.today') }}', {{ $totalVisitorToday }});
            });

            $("#filter-visitor-month").on("click", function() {
                updateFilterVisitorValue('{{ __('message.this month') }}', {{ $totalVisitorThisMonth }});
            });

            $("#filter-visitor-year").on("click", function() {
                updateFilterVisitorValue('{{ __('message.this year') }}', {{ $totalVisitorThisYear }});
            });

            $("#filter-visitor-today").click();

            function updateFilterVisitorValue(type, value) {
                $("#filter-visitor-value").text(value);
                $("#filter-visitor").text(type);
            }

        });
    </script>
@endpush
