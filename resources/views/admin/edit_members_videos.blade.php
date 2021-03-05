
@extends('layouts.admin')

@section('title', 'Members Videos')

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
                        <h4 class="fw-700 m-0 fs-base">Add Members Videos</h4>
                    </div>
                    <div id="cardBasicInput" class="card-body show">
                        <form id="add_details" name="productForm" class="group">
                            <div class="mb-3">
                                <label for="category_inser">Select Category</label>

                                <select class="form-control" name="category" id="category_insert"  aria-label=".form-select-lg example">
                                    <option value="">  Select   </option>
                                    <option value="use_of_software">Use of Software</option>
                                    <option value="manually_setup">Manually Setup</option>
                                    <option value="automated_setup">Automated Setup</option>
                                    <option value="run_simulation">Run Simulation</option>
                                    <option value="flat_bet_and_videos">Flat Bet And Videos</option>
                                </select>
                                <span class="text-danger error-text category_err"></span>
                            </div>
                            <div class="mb-3">
                                <label for="name_insert">Video Name</label>
                                <input type="text" id="name_insert" class="form-control" name="name">
                                <span class="text-danger error-text name_err"></span>
                            </div>
                            <div class="mb-3">
                                <label for="example-input-link">Video Link</label>
                                <input type="text" id="link_insert" name="link" class="form-control">
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
                                </thead>
                                <tbody id="table_data" >
                                @foreach ($members_videos as $members_video)
                                    <tr class="{{$members_video->id}}" id="{{$members_video->id}}">
                                        <td>
                                            <label class="custom-checkbox">
                                                <input type="checkbox">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="" class="video-btn" data-toggle="modal" data-target="#myModal" data-src="{{ $members_video->link }}" >
                                                <i class="fa fa-play " aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td data-target="name" class="">{{ $members_video->name }}</td>
                                        <td data-target="link" class="">{{$members_video->link}}</td>
                                        <td class="">
                                            <input type="checkbox" class="checked checked{{$members_video->id}} " name="services[]" value="{{$members_video->id}}" @if ($members_video->status==1) checked="checked" @endif >
                                        </td>
                                        <td>
                                            <ul class="list-unstyled table-actions">
                                                <li class="li">
                                                    <a class="delete_video delete{{$members_video->id}}" data-id="{{$members_video->id}}"  >
                                                        <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                                                    </a>
                                                </li>
                                                <li class="li">
                                                    <a type="button" data-role="update_category" data-id='{{$members_video->id}}' class="update" data-toggle="modal" data-target="#myModalEdit"  >
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

        <div class="modal" id="myModalEdit">
            <div class="modal-dialog">
                <div class="modal-content">
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


    </div>
    <script>
        $(document).ready(function() {
            // Gets the video src from the data-src on each button
            var $videoSrc;
            $('.video-btn').click(function() {
                $videoSrc = $(this).data( "src" );
                $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );

            });
            //console.log($videoSrc);

            // when the modal is opened autoplay it
            $('#video_pop').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            })
            // stop playing the youtube video when I close the modal
            $('#video_pop').on('hide.bs.modal', function (e) {
                $("#video").attr('src',$videoSrc);
                $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
            })
            /*Insert*/
            $('.add_video').click(function (e) {
                e.preventDefault();
                $('.error-text').empty();

                $.ajax({
                    url: "/add_members_videos",
                    data: {
                        category:$('#category_insert').val(),
                        name:$('#name_insert').val(),
                        status:1,
                        link:$('#link_insert').val(),

                    },
                    method: "POST",
                    success: function (res) {
                        if($.isEmptyObject(res.error)){
                            $('#add_details')[0].reset();
                            $('#table_data').prepend(res);

                        }else{
                            printErrorMsg(res.error)
                        }
                    }
                });
            })

            /*Insert Modal*/
            $(document).on('click', '.update', function(e){
                e.preventDefault();
                var id = $(this).data('id');
                var name = $('#'+id).children('td[data-target="name"]').text();
                var link = $('#'+id).children('td[data-target="link"]').text();
                $('#name_update').val(name)
                $('#link_update').val(link)
                $('#id').val(id)
            });
            /*Update*/
            $(document).on('click', '.update_data', function(e) {
                e.preventDefault();
                $('.error-text').empty();

                var id = $('#id').val();
                $.ajax({
                    url: "/update_members_video",
                    data: {
                        id: $('#id').val(),
                        name_update: $('#name_update').val(),
                        link_update: $('#link_update').val()
                    },
                    method: "POST",
                    success: function (res) {
                        if($.isEmptyObject(res.error)) {
                            $('.' + id).remove();
                            $('#table_data').prepend(res);
                        }else{
                            printErrorMsg(res.error)
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
            /*Delete*/
            $('.delete_video').click(function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                $.ajax({
                    url: "/delete_members_video",
                    data: {id:id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        $('.delete'+id).parent().parent().parent().parent().remove();
                    }
                });
            });
            /*Change status*/
            $('.checked').click(function (e) {

                e.preventDefault();
                var id = $(this).val();
                $.ajax({
                    url: "/change_members_video_status",
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
                });
            })

        });
    </script>
@endsection
