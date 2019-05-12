@extends('layouts.main')

@section('content')

    <!--main content wrapper-->
    <div class="content-wrapper">

    <div class="container-fluid">

        <!-- ALERT!!! -->

        <!--page title-->
        <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">View Products</h4>
            </div>
        </div>
        <!--/page title-->

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Product</button>

                        </div>
                    </div>
                    <div class="card-body- pt-3 pb-4">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Cost Price</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach ($items as $item)

                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>₦{{ $item->cost_price }}</td>
                                        <td>₦{{ $item->price }}</td>
                                        <td>
                                        <span id="delete" data-toggle="modal" data-target="#exampleModal{{ $item->id }}" data-whatever="@mdo"><i class='fa fa-trash fa-lg'></i></span>
                                        &nbsp;
                                            <span id="pendInvoice" data-toggle="modal" data-target="#editModal{{ $item->id }}" data-whatever="@mdo"><i class='fa fa-gear fa-lg'></i></span>
                                        </td>
                                    </tr>

                                    <?php $no++; ?>

                                    <!--========= MODAL EDIT PRODUCT  ============-->

                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel5">Edit Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="/items/{{ $item->id }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="_method" value="PUT">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Product Name:</label>
                                                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Category:</label>
                                                                <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                                                        <option value="{{ $item->category->id }}">{{ $item->category->name }}</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->name }} <option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Cost Price:</label>
                                                                <input type="text" name="cost_price" class="form-control" value="{{ $item->cost_price }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Selling Price:</label>
                                                                <input type="text" name="price" class="form-control" value="{{ $item->price }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Quantity:</label>
                                                                <input type="text" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
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
                            <div id="exampleModal{{ $item->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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

                                        <form action="/items/{{ $item->id }}" method="POST">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/items') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Product Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Category:</label>
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                        <option>-- Select Category --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }} <option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Cost Price:</label>
                                    <input type="text" name="cost_price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Selling Price:</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Quantity:</label>
                                    <input type="text" name="quantity" class="form-control" required>
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