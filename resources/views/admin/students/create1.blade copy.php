@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Courses</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-primary">Back</a>
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
            <form action="" method="POST" id="courseForm" name="courseForm">

                <input type="hidden" name="userid" value="{{ Auth::guard('web')->user()->id }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Course Name" onkeyup="generateSlug()">
                                    <p></p>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        placeholder="Slug">
                                    <p></p>
                                    @if ($errors->has('slug'))
                                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="hidden" name="image_id" id="image_id" value="">
                                    <label for="image">Course Banner </label>
                                    <div id="image" class="dropzone dz-clickable">
                                        <div class="dz-message needsclick">
                                            <br>Drop files here or click to upload.<br><br>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="hidden" name="course_logo" id="course_logo" value="">
                                    <label for="courseLogo">Course Logo (Logo Size 152px X 142px )</label>
                                    <div id="courseLogo" class="dropzone dz-clickable">
                                        <div class="dz-message needsclick">
                                            <br>Drop files here or click to upload.<br><br>
                                        </div>
                                    </div>
                                    @if ($errors->has('course-logo'))
                                        <span class="text-danger">{{ $errors->first('course-logo') }}</span>
                                    @endif
                                </div>
                            </div>

                           


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Short Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder=""></textarea>
                                    <p></p>
                                </div>
                                @if ($errors->has('shortDescription'))
                                    <span class="text-danger">{{ $errors->first('shortDescription') }}</span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fee">Fee</label>
                                    <input type="text" name="fee" id="fee" class="form-control"
                                        placeholder="Course Fee">
                                    <p></p>
                                    @if ($errors->has('fee'))
                                        <span class="text-danger">{{ $errors->first('fee') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Stutas</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ShowInHome">Show in Home Page</label>
                                    <select name="ShowInHome" id="ShowInHome" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option selected value="No">No</option>
                                    </select>
                                    @if ($errors->has('ShowInHome'))
                                        <span class="text-danger">{{ $errors->first('ShowInHome') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection



@section('customjs')
    <script>
        $("#courseForm").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $("button[type=submit]").prop('disabled', true);
            $.ajax({
                url: '{{ route('admin.courses.store') }}',
                type: 'POST',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response) {
                    $("button[type=submit]").prop('disabled', false);
                    if (response["status"] == true) {

                        window.location.href = "{{ route('admin.courses.index') }}";

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


        function generateSlug() {
            var CourseName = document.getElementById('name').value;

            // Remove special characters and replace spaces with dashes
            var slug = CourseName.toLowerCase().replace(/[^a-zA-Z0-9\s]/g, '').replace(/\s+/g, '-');

            document.getElementById('slug').value = slug;
        }



        Dropzone.autoDiscover = false;
        const dropzone1 = new Dropzone("#courseLogo", {
            url: "{{ route('temp-images.create') }}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#course_logo").val(response.image_id);
                //console.log(response)
            }
        });

        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('temp-images.create') }}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#image_id").val(response.image_id);
                //console.log(response)
            }
        });
    </script>
@endsection
