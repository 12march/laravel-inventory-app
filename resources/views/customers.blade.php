@extends('layouts.main')

@section('content')

    <!--main content wrapper-->
    <div class="content-wrapper">

    <div class="container-fluid">

        <!-- ALERT!!! -->

        <!--page title-->
        <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">View Customers</h4>
            </div>
        </div>
        <!--/page title-->

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal" data-whatever="@mdo">Add New Customer</button>

                        </div>
                    </div>
                    <div class="card-body- pt-3 pb-4">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Category</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach ($customers as $customer)

                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        
                                        <td>
                                        <span id="delete" data-toggle="modal" data-target="#deleteModal{{ $customer->id }}" data-whatever="@mdo"><i class='fa fa-trash fa-lg'></i></span>
                                        &nbsp;
                                            <span id="pendInvoice" data-toggle="modal" data-target="#editModal{{ $customer->id }}" data-whatever="@mdo"><i class='fa fa-gear fa-lg'></i></span>
                                        </td>
                                    </tr>

                                    <?php $no++; ?>

                                    <!--========= MODAL EDIT PRODUCT  ============-->

                                <div class="modal fade" id="editModal{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel5">Edit Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="/customers/{{ $customer->id }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="_method" value="PUT">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">First Name:</label>
                                                                <input type="text" name="first_name" class="form-control" value="{{ $customer->first_name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Last Name:</label>
                                                                <input type="text" name="last_name" class="form-control" value="{{ $customer->last_name }}" required>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Email:</label>
                                                                <input type="text" name="email" class="form-control" value="{{ $customer->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Address:</label>
                                                                <input type="text" name="address" class="form-control" value="{{ $customer->address }}" required>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Phone:</label>
                                                                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--============== //END ===============-->

                            <!--========= MODAL DELETE PRODUCT  ============-->
                            <div id="deleteModal{{ $customer->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mySmallModalLabel"></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this!
                                        </div>

                                        <form action="/customers/{{ $customer->id }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="_method" value="DELETE">
                                                
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--============== //END ===============-->



                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--========= MODAL ADD PRODUCT  ============-->

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/customers') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name:</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address:</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone:</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--============== //END ===============-->

@endsection