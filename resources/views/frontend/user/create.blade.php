@extends('frontend.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a class="btn btn-outline-info btn-sm"
                                        href="{{ URL::previous() }}">
                                        <i class="fa fa-backward" aria-hidden="true"></i> Back
                                    </a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        {{-- <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form groups</h5> --}}
                                        <form action="{{ route('user.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title" class="form-label">Name</label>
                                                        <input type="text" name="name" placeholder="Enter Name"
                                                            class="@error('title') is-invalid @enderror form-control"
                                                            value="{{ old('title') }}" required>
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title" class="form-label">Email</label>
                                                        <input type="email" name="email" placeholder="Enter Email"
                                                            class="@error('title') is-invalid @enderror form-control"
                                                            value="{{ old('title') }}" required>
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Row end -->

                                    <!-- Form actions footer start -->

                                    <!-- Form actions footer end -->
                                    </form>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var startDateInput = document.getElementById('start_date');
            var endDateInput = document.getElementById('end_date');

            var today = new Date().toISOString().split('T')[0];
            startDateInput.setAttribute('min', today);

            startDateInput.addEventListener('change', function() {
                var startDate = new Date(startDateInput.value);
                if (startDate) {
                    var nextDay = new Date(startDate);
                    nextDay.setDate(startDate.getDate() + 1);

                    var nextDayFormatted = nextDay.toISOString().split('T')[0];

                    endDateInput.setAttribute('min', nextDayFormatted);

                    endDateInput.value = nextDayFormatted;
                }
            });
        });
    </script>
@endsection
