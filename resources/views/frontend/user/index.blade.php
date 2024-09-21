@extends('frontend.layouts.app')

@section('content')
    <style>
        .b-inline {
            display: flex;
        }

        .b-inline a {
            margin-right: 5px;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All Users</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"> <a href="{{ route('user.create') }}"
                                        class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-plus pr-1"></i>Create User
                                    </a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tablecontents">
                                    <tr>
                                        <td>A</td>
                                        <td>B</td>
                                        <td class="b-inline">
                                            <a class="btn btn-outline-light ml-2" href="#">
                                                <i class="fas fa-eye"></i>
                                               
                                            </a>
                                            <a class="btn btn-outline-light ml-2" href="#">
                                                <i class="fas fa-edit"></i>
                                               
                                            </a>
                                            <form action="#" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="url" value="">
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                
                                            </form>
                                        </td>
                                    </tr>
                            </table>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
