@extends('layouts.admin')

@section('title', 'Simple Video')

@section('content')
    <div class="page-content">
        <!-- Modal -->
        <div class="container">
            <div class="modal fade rounded" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">


                        <div class="modal-body">

                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                &times;
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item col-12 " height="400" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4 class="fw-700 m-0 fs-base">Add Simple Videos</h4>
                    </div>
                    <div id="cardBasicInput" class="card-body show">
                        <form  id="add_details" name="productForm" class="group">
                            <div class="mb-3">
                                <label for="name_insert">Video Name</label>
                                <input type="text" id="name_insert" class="form-control" name="name" required>
                                <span class="text-danger error-text name_err"></span>
                            </div>
                            <div class="mb-3">
                                <label for="link_insert">Video Link</label>
                                <input type="url" id="link_insert" name="link" class="form-control" required>
                                <span class="text-danger error-text link_err"></span>

                            </div>
                            <button class="add_video btn btn-highlight waves-effect">Add Video</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="ecommerce-datatable" class="table table-middle table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th class="no-sort">
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </th>
                                    <th class="no-sort">Video</th>
                                    <th class="no-sort">Name</th>
                                    <th class="no-sort">Link</th>
                                    <th class="no-sort">Status</th>
                                    <th class="text-center no-sort">Action</th>
                                </tr>
                                </thead >
                                <tbody id="table_data">
                                @foreach ($simple_videos as $simple_video)
                                    <tr class="{{$simple_video->id}}" id="{{$simple_video->id}}">
                                        <td>
                                            <label class="custom-checkbox">
                                                <input type="checkbox">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="" class="video_btn" data-toggle="modal" data-target="#myModal" data-src="{{$simple_video->link }}" >
                                                <i class="fa fa-play " aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td data-target="name" class="">{{ $simple_video->name }}</td>
                                        <td data-target="link" class="">{{$simple_video->link}}</td>
                                        <td class="">
                                            <input type="checkbox" class="checked checked{{$simple_video->id}} " name="services[]" value="{{$simple_video->id}}" @if ($simple_video->status==1) checked="checked" @endif >
                                        </td>
                                        <td>
                                            <ul class="list-unstyled table-actions">
                                                <li class="li">
                                                    <a class="delete_video delete{{$simple_video->id}}" data-id="{{$simple_video->id}}"  >
                                                        <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                                                    </a>
                                                </li>
                                                <li class="li">
                                                    <a type="button" data-role="update_category" data-id='{{$simple_video->id}}' class="update" data-toggle="modal" data-target="#myModalEdit"  >
                                                        <i class="fal fa-pen" data-bs-original-title="Edit" data-bs-toggle="tooltip"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="modal" id="myModalEdit"  role="dialog">
        <div class="modal-dialog">
            <div class="modal-content ">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update videos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body col-6 m-auto">
                    <form >
                        <div class="form-group">
                            <label for="name_update">Name:</label>
                            <input type="text" class="form-control" name="name_update" data-target="name_update" id="name_update">
                            <span class="text-danger error-text name_update_err"></span>

                        </div>
                        <div class="form-group">
                            <label for="link_update">Link:</label>
                            <input type="url" class="form-control " name="link_update" data-target="link_update" id="link_update">
                            <span class="text-danger error-text link_update_err"></span>

                        </div>
                        <input type="hidden" name="id" id="id" />
                        <button  class="btn btn-primary mt-3  update_data" name="insert"  value="" >Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.video_btn').click(function() {
                var videoSrc = $(this).data( "src" );
                $("#video").attr('src',videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
            });
            //console.log($videoSrc);

            // when the modal is opened autoplay it
            $('#video_btn').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            })
            // stop playing the youtube video when I close the modal
            $('#video_pop').on('hide.bs.modal', function (e) {
                $("#video").attr('src',videoSrc);
                $("#video").attr('src',videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
            })
            /*Insert*/

            $('.add_video').click(function (e) {

                e.preventDefault();
                $('.error-text').empty();

                $.ajax({
                    url: "/add_simple_video",
                    data: {
                        status:1,
                        name:$('#name_insert').val(),
                        link:$('#link_insert').val()
                    },
                    method: "POST",
                    success: function (res) {
                        if($.isEmptyObject(res.error)){
                            $('#add_details')[0].reset();
                            $('#table_data').prepend(res);

                        }else {
                            printErrorMsg(res.error);
                        }
                    }
                });
            })
            function printErrorMsg (msg) {
                $.each( msg, function( key, value ) {
                    console.log(key);
                    $('.'+key+'_err').text(value);
                });
            }
            $(document).on('click', '.update', function(e){
                e.preventDefault();
                var id = $(this).data('id');
                var name = $('#'+id).children('td[data-target="name"]').text();
                var link = $('#'+id).children('td[data-target="link"]').text();
                $('#name_update').val(name)
                $('#link_update').val(link)
                $('#id').val(id)
            });
            $(document).on('click', '.update_data', function (e) {
                e.preventDefault();
                $('.error-text').empty();

                var id = $('#id').val();
                $.ajax({
                    url: "/edit_simple_video",
                    data: {
                        id: $('#id').val(),
                        name_update: $('#name_update').val(),
                        link_update: $('#link_update').val(),

                        },
                    method: "POST",
                    success: function (res) {
                        if ($.isEmptyObject(res.error)) {
                            $('.' + id).remove();
                            $('#table_data').prepend(res);
                        } else {
                            printErrorMsg(res.error);
                        }
                    }
                });
            });
            function printErrorMsg (msg) {
                $.each( msg, function( key, value ) {
                    console.log(key);
                    $('.'+key+'_err').text(value);
                });
            }
            $('.delete_video').click(function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                $.ajax({
                    url: "/delete_simple_video",
                    data: {id: id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        $('.delete' + id).parent().parent().parent().parent().remove();
                    }
                });
            });
            $('.checked').click(function (e) {
                e.preventDefault();
                var id = $(this).val();
                $.ajax({
                    url: "/change_simple_video_status",
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
