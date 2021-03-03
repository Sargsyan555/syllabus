
<tr class="{{$members_video->id}}" id="{{$members_video->id}}">
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox">
                    <span></span>
                </label>
            </td>
            <td>
                <a href="" class="video_btn1" data-toggle="modal" data-target="#myModal" data-src="{{ $members_video->link }}" >
                    <i class="fa fa-play" aria-hidden="true"></i>
                </a>
            </td>
            <td data-target="name" class="">{{ $members_video->name }}</td>
            <td data-target="link" class="">{{$members_video->link}}</td>
            <td class="">
                <input type="checkbox" class="checked_tr checked{{$members_video->id}} " name="services[]" value="{{$members_video->id}}" @if($members_video->status==1) checked="checked" @endif >
            </td>
            <td>
                <ul class="list-unstyled table-actions">
                    <li class="li">
                        <a class="delete_video delete{{$members_video->id}}" data-id="{{$members_video->id}}"  >
                            <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                        </a>
                    </li>
                    <li class="li">
                        <a type="button" data-role="update_category" data-id='{{$members_video->id}}' class="update" data-toggle="modal" data-target="#myModal"  >
                            <i class="fal fa-pen" data-bs-original-title="Edit" data-bs-toggle="tooltip"></i>
                        </a>
                    </li>
                </ul>
            </td>
        </tr>
       <!-- Modal -->
       <div class="container">
           <div class="modal fade rounded" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">

                    asdfhjkl;jdasfhjkldfs
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

       <script>
        $(document).ready(function() {
            // Gets the video src from the data-src on each button
            $('.video_btn1').click(function() {
                var videoSrc1 = $(this).data( "src" );
                $("#video").attr('src',videoSrc1 + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
            });
            //console.log($videoSrc);

            // when the modal is opened autoplay it
            $('#video_btn').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            })
            // stop playing the youtube video when I close the modal
            $('#video_pop').on('hide.bs.modal', function (e) {
                $("#video").attr('src',videoSrc1);
                $("#video").attr('src',videoSrc1 + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
            })
            $('.checked_tr').click(function (e) {

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
                    error: function (err) {
                        alert('not');
                    }
                });
            })
            $('.delete_video').click(function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                $.ajax({
                    url: "/delete_members_video",
                    data: {id: id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        $('.delete' + id).parent().parent().parent().parent().remove();
                    }
                });
            });

        });
    </script>
