
@extends('layouts.admin')

@section('title', 'Members Videos')

@section('content')
    <div class="page-content">
        <!-- Button trigger modal -->
        <!-- POPUP -->
        <div class="modal fade" id="video_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                            <span class="" >x</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9 col-12">
                            <iframe class="embed-responsive-item col-12 " height="400" src="" id="video"  allowscriptaccess="always"></iframe>
                        </div>
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
                                </thead>
                                <tbody id="table_data" >
                                @foreach ($training_videos as $training_video)
                                    <tr class="{{$training_video->id}}" id="{{$training_video->id}}">
                                        <td>
                                            <label class="custom-checkbox">
                                                <input type="checkbox">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="" class="video-btn" data-toggle="modal" data-src="{{ $training_video->link }}" data-target="#video_pop"><i class="fa fa-play" style="font-size: 20px" aria-hidden="true"></i>   </a>
                                        </td>
                                        <td data-target="name" class="">{{ $training_video->name }}</td>
                                        <td data-target="link" class="">{{$training_video->link}}</td>
                                        <td class="">
                                            <input type="checkbox" class="checked checked{{$training_video->id}} " name="services[]" value="{{$training_video->id}}" @if ($training_video->status==1) checked="checked" @endif >
                                        </td>
                                        <td>
                                            <ul class="list-unstyled table-actions">
                                                <li class="li">
                                                    <a class="delete_video delete{{$training_video->id}}" data-id="{{$training_video->id}}"  >
                                                        <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                                                    </a>
                                                </li>
                                                <li class="li">
                                                    <a type="button" data-role="update_category" data-id='{{$training_video->id}}' class="update" data-toggle="modal" data-target="#myModal"  >
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
                        <form data-toggle="validator">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" data-target="name" id="name" required="required">
                            </div>
                            <div class="form-group">
                                <label for="link">Link:</label>
                                <input type="text" class="form-control " name="link" data-target="link" id="link" required="required">
                            </div>
                            <input type="hidden" name="id" id="id" />
                            <button  class="btn btn-primary mt-3 update_data" name="insert"  value="" data-dismiss="modal">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.update', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                var name = $('#' + id).children('td[data-target="name"]').text();
                var link = $('#' + id).children('td[data-target="link"]').text();
                $('#name').val(name)
                $('#link').val(link)
                $('#id').val(id)
            });
            $(document).on('click', '.update_data', function (e) {
                e.preventDefault();
                var id = $('#id').val();

                $.ajax({
                    url: "/edit_training_video",
                    data: {
                        id: $('#id').val(),
                        name: $('#name').val(),
                        link: $('#link').val()
                    },
                    method: "POST",
                    dataType: 'html',
                    success: function (res) {
                        $('.'+id).remove();
                        $('#table_data').prepend(res);
                        },
                    error: function () {
                        alert('There are nothing for change')
                    }
                });
            });
            $('.delete_video').click(function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                $.ajax({
                    url: "/delete_training_video",
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
                    url: "/change_training_video_status",
                    data: {id: id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        if (res.success == 1) {
                            $('.checked' + id).prop("checked", true);
                        } else {
                            $('.checked' + id).prop("checked", false);
                        }

                    },
                });
            })
            // Gets the video src from the data-src on each button
            var $videoSrc;
            $('.video-btn').click(function () {
                $videoSrc = $(this).data("src");
                $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");

            });
            //console.log($videoSrc);

            // when the modal is opened autoplay it
            $('#video_pop').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            })
            // stop playing the youtube video when I close the modal
            $('#video_pop').on('hide.bs.modal', function (e) {
                $("#video").attr('src', $videoSrc);
            })


        })
    </script>



@endsection
