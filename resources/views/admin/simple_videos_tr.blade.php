
        <tr class="{{$simple_video->id}}" id="{{$simple_video->id}}">
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox">
                    <span></span>
                </label>
            </td>
            <td>
                <a href="" class="video_btn1" data-toggle="modal" data-target="#myModal" data-src="{{ $simple_video->link }}">
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

        });

    </script>
