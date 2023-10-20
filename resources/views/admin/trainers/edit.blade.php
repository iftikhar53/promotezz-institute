@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div  class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Trainer</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.trainers.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        {{-- @if (Session::has('success'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> {{ Session::get('success') }}
            </div>
        @endif --}}

        @include('message')

        <!-- Default box -->
        <div class="container-fluid">
            <form action="" method="POST" id="trainerForm" name="trainerForm">

                <input type="hidden" name="userid" value="{{ Auth::guard('web')->user()->id }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Course Name" value="{{$trainer->name}}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        placeholder="Trainers Mobile Number" value="{{$trainer->mobile_number}}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fee">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Trainer's Email" value="{{$trainer->email}}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="course">Course<span class="text-danger">*</span></label>
                                    <select name="course" id="course" class="form-control">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" {{$course->id==$trainer->course_id ? 'selected' : ''}}>{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Stutas</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" {{$trainer->status==1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$trainer->status==0 ? 'selected' : ''}}>Block</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('admin.trainers.index')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection



@section('customjs')
    <script>
        $("#trainerForm").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $("button[type=submit]").prop('disabled', true);
            $.ajax({
                url: '{{ route('admin.trainers.update',$trainer->id) }}',
                type: 'PUT',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response) {
                    $("button[type=submit]").prop('disabled', false);
                    if (response["status"] == true) {

                        window.location.href = "{{ route('admin.trainers.index') }}";

                    } else {
                        var errors = response['errors'];
                        $(".error").removeClass('invalid-feedback').html('');
                        $("input[type='text'], select, input[type='number']").removeClass('is-invalid');
                        $.each(errors, function(key, value) {
                            $(`#${key}`).addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback')
                                .html(value);
                        });
                    }
                },
                error: function(jqXHR, exception) {
                    console.log("something went wrong");
                }
            });
        });

    </script>
@endsection
