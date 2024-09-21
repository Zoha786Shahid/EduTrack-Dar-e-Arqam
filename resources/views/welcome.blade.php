@extends('frontend.layouts.app')

@section('content')
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    {{-- <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                      
                    
                        <div class="col-lg-4">
                            <div class="card bg-danger border-info text-light">
                                <div class="card-body">
                                    <h5 class="mb-4 text-light"><i class="mdi mdi-block-helper me-3"></i>Urgent Notice</h5>
                                    <p class="card-text">Immediate action required! Address any urgent issues or updates related to your coursework or school activities promptly to avoid disruptions.</p>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-4">
                            <div class="card bg-warning border-warning text-dark">
                                <div class="card-body">
                                    <h5 class="mb-4 text-dark"><i class="mdi mdi-alert-outline me-3"></i>Reminder</h5>
                                    <p class="card-text">Stay updated with important announcements and deadlines to ensure you never miss a critical update for your classes or projects.</p>
                                </div>
                            </div>
                        </div><!-- end col -->
                    
                        <div class="col-lg-4">
                            <div class="card bg-primary border-dark text-light">
                                <div class="card-body">
                                    <h5 class="mb-4 text-light"><i class="mdi mdi-alert-circle-outline me-3"></i>General Information</h5>
                                    <p class="card-text">Find useful information about upcoming events, educational resources, and general school news to stay informed and engaged.</p>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    
                    <!-- end row-->

                    
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
          
@endsection