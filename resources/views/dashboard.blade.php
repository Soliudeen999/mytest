@section('butt') 
    <button class="btn btn-primary-rgba" data-toggle="modal" data-target="#add_user_modal"><i class="feather icon-plus mr-2"></i>Add User</button>

@endsection 
@extends('layout.main')
@section('style')

<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">List Users</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="default-datatable" class="display table">
                            <thead class="" style="background-color: #f2f6fa;">
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Created Date</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-5">
                                                <img src="assets/images/users/profile.svg" class="img-fluid float-right" width="65" alt="product">
                                            </div>
                                            <div class="col-7 py-2 pl-0">
                                                <h6>Me</h6>
                                                <p class="text-muted">John Doe</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-pill badge-danger">Super Admin</span></td>
                                    <td>2011/04/25</td>
                                    <td>CEO and Founder</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contentbar -->

{{-- Modals --}}

<div class="modal fade bd-example-modal-lg" id="add_user_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleLargeModalLabel">Add Useer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" name="employee_id" class="form-control" placeholder="Employee ID *">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputCity" placeholder="First Name *">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputCity" placeholder="Last Name *">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="email" class="form-control" id="inputCity" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" id="inputCity" placeholder="Mobile *">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" class="form-control">
                                <option selected="">Select Role Type...</option>
                                <option>Super Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="inputCity" placeholder="Username">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="password" class="form-control" id="inputCity" placeholder="Password *">
                        </div>

                        <div class="form-group col-md-4">
                            <input type="c_password" class="form-control" id="inputCity" placeholder="Confirm Password *">
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Module Permissions</th>
                                    <th scope="col" class="text-center">Read</th>
                                    <th scope="col" class="text-center">Write</th>
                                    <th scope="col" class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Super Admin</th>
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox-danger">
                                          <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline2">
                                          <label for="customCheckboxInline8"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox-danger">
                                          <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline2">
                                          <label for="customCheckboxInline8"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox-danger">
                                          <input type="checkbox" checked="" disabled="" id="customCheckboxInline8" name="customCheckboxInline2">
                                          <label for="customCheckboxInline8"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>          
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add User</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
                </form>
        </div>
    </div>
</div>
@endsection 
@section('script')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endsection 