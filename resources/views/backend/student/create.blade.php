@extends('backend.layouts.master')

@section("meta")
    <title>Students | Auca Alumni</title>
@stop

@section('page-header')
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5">Students</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-muted">Students</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--end::Toolbar-->
        </div>
    </div>
@stop

@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Students List</h3>
                    </div>
                    <div class="card-toolbar">
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#exampleModalLong">
                            <span class="flaticon-add"></span>
                            Add New Student
                        </button>

                        <!-- Modal-->
                    </div>
                </div>
                <div class="card-body">


                    <!--begin: Datatable-->
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            {{--                    <table class="table table-striped" id="kt_datatable">--}}
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($students as $key=>$item)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->id_number}}</td>
                                    <td>{{$item->first_name}}</td>
                                    <td>{{$item->last_name}}</td>
{{--                                    <td>--}}

{{--                                        <div class="dropdown">--}}
{{--                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"--}}
{{--                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                                                    aria-expanded="false">--}}
{{--                                                Action--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">--}}
{{--                                                <a href="#" data-id="{{$item->id}}"--}}
{{--                                                   data-id-number="{{$item->id_number}}"--}}
{{--                                                   data-first-name="{{$item->first_name}}"--}}
{{--                                                   data-last-name="{{$item->last_name}}"--}}
{{--                                                   class="dropdown-item js-edit">Edit</a>--}}
{{--                                                <a href="{{route('student.delete',$item->id)}}"--}}
{{--                                                   class="dropdown-item js-delete">Delete</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

    <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('student.store')}}" method="post" id="submissionForm" class="submissionForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Student ID Number</label>
                            <input type="text" name="id_number" id="id_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="photo">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <label for="title">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
    </div>




    <div class="modal fade" id="modalUpdate" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('student.update')}}" method="post" id="submissionFormEdit" class="submissionForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="0"  id="StudentId" name="StudentId">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Student ID Number</label>
                            <input type="text" name="id_number" id="edit_id_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="photo">First Name</label>
                            <input type="text" id="edit_first_name" name="first_name" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <label for="title">Last Name</label>
                            <input type="text" name="last_name" id="edit_last_name" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
    </div>


@endsection


@section("scripts")
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest(\App\Http\Requests\ValidateStudent::class,'.submissionForm') !!}
    <script>

        $(document).ready(function() {
            $('#table').DataTable();
        } );

        // $("#submissionForm").validate();
        // $("#submissionFormEdit").validate();
        $(document).on('click', '.js-edit', function (e) {
            e.preventDefault();
            $("#modalUpdate").modal('show');
            console.log($(this).data('name'));
            var url = $(this).data('url');
            $("#StudentId").val($(this).data('id'));
            $("#edit_id_number").val($(this).data('id-number'));
            $("#edit_first_name").val($(this).data('first-name'));
            $("#edit_last_name").val($(this).data('last-name'));
            $('#submissionFormEdit').attr('action', url);

            $('#edit_type').trigger('change');
        });

        $(document).on('click', '.js-delete', function (e) {
            e.preventDefault();
            var href = this.href;
            Swal.fire({
                title: "Are you sure?",
                text: "Delete this Student ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((willDelete) => {
                if (willDelete.value) {
                    window.location = href;
                } else {
                    //swal("Your imaginary file is safe!");
                }
            });
        });

        $('#exampleModal').on('hidden.bs.modal', function (e) {
            $('#StudentId').val(0);
        });

    </script>

@endsection






