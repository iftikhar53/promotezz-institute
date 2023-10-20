@extends('admin.layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Batches</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.batches.create') }}" class="btn btn-primary">New Batch</a>
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
                    <table id="courseTbl" name="courseTbl" class="table border border-dark display nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Sr.</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Course</th>
                                <th scope="col">Trainer</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">Ent Date</th>
                                <th scope="col">Status</th>
                                {{-- <th scope="col">Created By</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($batches->isNotEmpty())
                                @foreach ($batches as $key => $batch)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $batch->name }}</td>
                                        <td>{{ $batch->Course->name }}</td>
                                        <td>{{ $batch->Trainer->name }}</td>
                                        <td>{{ $batch->start_date }}</td>
                                        <td>{{ $batch->end_date }}</td>
                                        <td>
                                            @if ($batch->status == 1)
                                                <svg class="text-success-500 h-6 w-6 text-success"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            @else
                                                <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            @endif
                                        </td>
                                        {{-- <td>{{ $trainer->user->name }}</td> --}}
                                        <td>
                                            <a href="{{ route('admin.batches.edit', $batch->id) }}">
                                                <svg class="filament-link-icon w-4 h-4 mr-1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                                                class="text-danger w-4 h-4 mr-1">
                                                <svg wire:loading.remove.delay="" wire:target=""
                                                    class="filament-link-icon w-4 h-4 mr-1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path ath fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <div class="modal" tabindex="-1" role="dialog" id="confirmDeleteModal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this Batch?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="deleteBatch({{ $batch->id }})">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
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
            $('#courseTbl').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ]
            });

        });




        function deleteBatch(id) {
            var url = '{{ route('admin.batches.delete', 'ID') }}';
            //alert(url);

            var newURL = url.replace("ID", id);
            // alert(newURL);

            // return false;

            $.ajax({
                url: newURL,
                type: 'DELETE', // Use the DELETE method
                data: {}, // You can remove this line if you're not sending any data
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response["status"]) {
                        window.location.href = "{{ route('admin.batches.index') }}";
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle error here, if needed
                    console.log("Error:", textStatus, errorThrown);
                }
            });
        }
    </script>
@endsection
