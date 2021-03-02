       <tr class="{{$members_video->id}}" id="{{$members_video->id}}">
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox">
                    <span></span>
                </label>
            </td>
            <td>
                <a href="" class="video-btn" data-toggle="modal" data-src="{{ $members_video->link }}" data-target="#video_pop"><i class="fa fa-play" style="font-size: 20px" aria-hidden="true"></i>   </a>
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
    <script>
        $(document).ready(function() {
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
        });
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
    </script>