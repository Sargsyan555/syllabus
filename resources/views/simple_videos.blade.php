@extends('layouts.admin')

@section('title', 'Simle Video')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="ecommerce-datatable" class="table table-middle table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th class="no-sort">Email</th>
                                    <th class="no-sort">Link</th>
                                    <th class="no-sort">Status</th>
                                    <th class="text-center no-sort">Action</th>
                                </tr>
                                </thead>
                                @foreach ($simple_videos as $simple_video)
                                    <tbody >
                                    <tr id="{{$simple_video->id}}">
                                        <td data-target="name" class="">{{ $simple_video->name }}</td>
                                        <td data-target="link" class="">{{$simple_video->link}}</td>
                                        <td class="">
                                            <input type="checkbox" class="checked checked{{$simple_video->id}} " name="services[]" value="{{$simple_video->id}}" @if ($simple_video->status==1) checked="checked" @endif >
                                        </td>
                                        <td>
                                            <ul class="list-unstyled table-actions">
                                                <li class="li">
                                                    <a class="deleteProduct delete{{$simple_video->id}}" data-id="{{$simple_video->id}}"  >
                                                        <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                                                    </a>
                                                </li>
                                                <li class="li">
                                                    <a type="button" data-role="update_category" data-id='{{$simple_video->id}}' class="update" data-toggle="modal" data-target="#myModal"  >
                                                        <i class="fal fa-pen" data-bs-original-title="Edit" data-bs-toggle="tooltip"></i>                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update videos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form >
                         <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" data-target="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="link">Link:</label>
                            <input type="text" class="form-control" name="link" data-target="link" id="link">
                        </div>
                        <input type="hidden" name="id" id="id" />
                        <button  class="btn btn-primary mt-3" name="insert" id="update_data" value="" data-dismiss="modal">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" />

    <script>
        $(document).ready(function() {
            $(document).on('click', '.update', function(e){
                e.preventDefault();
                var id = $(this).data('id');
                var name = $('#'+id).children('td[data-target="name"]').text();
                var link = $('#'+id).children('td[data-target="link"]').text();
                $('#name').val(name)
                $('#link').val(link)
                $('#id').val(id)
            });
            $(document).on('click', '#update_data', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "/edit_simle_video",
                    data: {
                        id: $('#id').val(),
                        name: $('#name').val(),
                        link: $('#link').val()
                    },
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {

                    },
                    error: function () {
                        alert('error')
                    }
                });
            });

            $('.checked').click(function (e) {

                e.preventDefault();
                var id = $(this).val();
                $.ajax({
                    url: "/change_status",
                    data: {id:id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        if (res.success==1) {
                            $('.checked' + id).prop("checked", true);
                        }else {
                            $('.checked' + id).prop("checked", false);
                        }

                    },
                    error: function (err) {
                        alert('not');
                    }
                });
            })
        });
    </script>
@endsection
