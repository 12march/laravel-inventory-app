@extends('layouts.main')

@section('content')

    <!--main content wrapper-->
    <div class="content-wrapper">

    <div class="container-fluid">

        <!-- ALERT!!! -->

        <!--page title-->
        <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">View Categories</h4>
            </div>
        </div>
        <!--/page title-->

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Category</button>

                        </div>
                    </div>
                    <div class="card-body- pt-3 pb-4">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Edit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($categories as $category)
                                    
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td width="70%">{{ $category->name }}</td>
                                        <td class="text-center">
                                                <span id="pendInvoice" class='btn btn-xs btn-info' data-toggle="modal" data-target="#exampleModal{{ $category->id }}" data-whatever="@mdo"><i class='fa fa-gear fa-lg'></i></span>
                                                <span id="pendInvoice" class='btn btn-xs btn-danger' data-toggle="modal" data-target=".bd-example-modal-sm{{ $category->id }}" data-whatever="@mdo"><i class='fa fa-trash fa-lg'></i></span>
                                            </td>
                                    </tr>

                                    <!-- Auto increase no -->
                                    <?php $no++; ?>

                                    <!--========= MODAL EDIT PRODUCT  ============-->

                                    <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel5">Add Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    <form action="/categories/{{ $category->id }}" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="_method" value="PUT">

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Category:</label>
                                                            <input type="text" name="name" class="form-control" id="recipient-name" value="{{ $category->name }}">
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
                                    <div class="modal fade bd-example-modal-sm{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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

                                                <form action="/categories/{{ $category->id }}" method="POST">
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
                                    <!-- END FOREACH -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--========= MODAL ADD PRODUCT  ============-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="{{ url('/categories') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Category:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" required>
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