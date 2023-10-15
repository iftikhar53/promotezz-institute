@extends('admin.layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Courses</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">New Course</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
   

    <section class="content">
        <div class="container-fluid">

            @include('admin.message')

            <div class="card">
                <div class="card-body table-responsive p-3">
                    <table id="courseTbl" name="courseTbl" class="table border border-dark dataTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Sr.</th>
                                <th scope="col">Course</th>
                                <th scope="col">Banner</th>
                                <th scope="col">Description</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection



@section('customjs')
    <script>
         $(document).ready(function() {
            $('#courseTbl').DataTable();
        });
    </script>
@endsection
