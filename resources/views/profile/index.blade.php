@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>{{ __('message.profile') }}</h1>
        <nav class="d-flex justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ __('message.profile') }}</li>
                <li class="breadcrumb-item active">{{$userAccount->name}}</li>
            </ol>
            <a href="{{ route('profile.edit', ['userId' => $userProfile->user_id ?? Auth::user()->id]) }}" class="btn btn-secondary mb-2 float-right">{{ __('message.edit') }}</a>
        </nav>

        <div class="col-12">
            @if(Auth::user()->role == 'admin')
            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <h1>{{ __('message.account information') }}</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.username') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userAccount->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.email') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userAccount->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.role') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userAccount->role === 'admin' ? 'Admin' : __('message.normal user') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="card overflow-auto">
                <div class="card-body mt-4">
                    <h1>{{ __('message.personal information') }}</h1>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.fullname') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->fullname ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.date of birth') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->date_of_birth ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.age') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->age ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.address') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->address ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.city') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->city ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.state') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->state ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.postcode') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->zip ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.contact number') }} (60+)</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->phone ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('message.occupation') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->occupation ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberGender">{{ __('message.gender') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->gender ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">{{ __('message.member type') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->member_type ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">{{ __('message.member code') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->member_code ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">{{ __('message.original church') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p>{{ $userProfile->original_church ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memberType">{{ __('message.profile img') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6">  
                            @if(isset($userProfile->profile_img))
                                <div class="d-flex justify-content-between">
                                    <a href="{{ asset('images/profile/' . $userProfile->profile_img) }}">{{ $userProfile->original_profile_img}}</a>
                                    <form method="POST" action="{{route('profile.destroyImage', $userProfile->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger btn-flat delete-profile-img"
                                            data-toggle="tooltip" title='Delete'><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            @else
                                -
                            @endif
                        </div>
                    </div>

                    <div class="container m-3 mt-5">
                        <h1>{{ __('message.family information') }}</h1>
                    </div>

                    @if(isset($userFamily))
                        @foreach($userFamily as $index => $familyMember)
                        <div class="row m-3">
                            <div class="col-md-2 mb-1">
                                <p>{{$index+1}}.</p>
                            </div>
                            <div class="col-md-4 mb-1 text-capitalize">
                                <a href="{{ route('profile.index', $familyMember->user_id) }}">{{$familyMember->fullname}}</a>
                            </div>
                            <div class="col-md-4 mb-1 text-capitalize">
                                <p>{{ __('message.' . $familyMember->relationship) }}</p>
                            </div>
                            <div class="col-md-2 mb-1">
                                <form method="POST" action="{{ route('profile.destroy', $familyMember->user_id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger btn-flat delete-family-member"
                                        data-toggle="tooltip" title='Delete'><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Delete Confirmation Modal --}}
    <script type="text/javascript">
        $('.delete-profile-img').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: '{{ __('message.warning') }}',
                    text: '{{ __('message.delete this profile image') }}?',
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

        $('.delete-family-member').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: '{{ __('message.warning') }}',
                    text: '{{ __('message.delete this family user') }}?',
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
@endpush