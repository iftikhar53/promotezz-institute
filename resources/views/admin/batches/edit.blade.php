@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Batch</h1>
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
            <form action="" method="POST" id="batchForm" name="batchForm" autocomplete="off">
                @csrf
                <input type="hidden" name="userid" value="{{ Auth::guard('web')->user()->id }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Batch Name" value="{{$batch->name}}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="start_date">Start Date:</label>
                                    <input type="text" id="start_date" name="start_date" class="form-control" value="{{$batch->start_date}}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="end_date">End Date:</label>
                                    <input type="text" id="end_date" name="end_date" class="form-control" value="{{$batch->end_date}}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer">Trainer<span class="text-danger">*</span></label>
                                    <select name="trainer" id="trainer" class="form-control">
                                        <option value="0">Select a trainer</option>
                                        @foreach ($trainers as $trainer)
                                            <option value="{{ $trainer->id }}" {{$trainer->id==$batch->trainer_id ? 'selected' : ''}}>{{ $trainer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="course">Course<span class="text-danger">*</span></label>
                                    <select name="course" id="course" class="form-control">
                                        <option value="0">Select a course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" {{$course->id==$batch->id ? 'selected' : ''}}>{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Stutas</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" {{$batch->status==1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$batch->status==0 ? 'selected' : ''}}>Block</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.batches.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection



@section('customjs')

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $("#batchForm").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $("button[type=submit]").prop('disabled', true);
            $.ajax({
                url: '{{ route('admin.batches.update',$batch->id) }}',
                type: 'PUT',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response) {
                    $("button[type=submit]").prop('disabled', false);
                    if (response["status"] == true) {

                        window.location.href = "{{ route('admin.batches.index') }}";

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


        $(function() {
            $("#start_date").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function(selected) {
                    var startDate = new Date(selected);
                    var endDate = new Date($("#end_date").val());
                    if (startDate > endDate) {
                        $("#end_date").val(selected);
                    }
                    $("#end_date").datepicker("option", "minDate", selected);
                }
            });

            $("#end_date").datepicker({
                dateFormat: 'yy-mm-dd',
            });
        });
    </script>
@endsection
