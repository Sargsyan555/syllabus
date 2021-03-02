
@foreach($training_videos as $video)
    <tr class="{{$video->id}}" id="{{$video->id}}">
        <td>
            <label class="custom-checkbox">
                <input type="checkbox">
                <span></span>
            </label>
        </td>
        <td>
            <a href="" class="video-btn" data-toggle="modal" data-src="{{ $video->link }}" data-target="#video_pop"><i class="fa fa-play" style="font-size: 20px" aria-hidden="true"></i>   </a>
        </td>
        <td data-target="name" class="">{{ $video->name }}</td>
        <td data-target="link" class="">{{$video->link}}</td>
        <td class="">
            <input type="checkbox" class="checked_tr checked{{$video->id}} " name="services[]" value="{{$video->id}}" @if ($video->status==1) checked="checked" @endif >
        </td>
        <td>
            <ul class="list-unstyled table-actions">
                <li class="li">
                    <a class="delete_video_tr delete{{$video->id}}" data-id="{{$video->id}}"  >
                        <i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i>
                    </a>
                </li>
                <li class="li">
                    <a type="button" data-role="update_category" data-id='{{$video->id}}' class="update" data-toggle="modal" data-target="#myModal"  >
                        <i class="fal fa-pen" data-bs-original-title="Edit" data-bs-toggle="tooltip"></i>
                    </a>
                </li>
            </ul>
        </td>
    </tr>
@endforeach
<script>
    $(document).ready(function() {
        $('.checked_tr').click(function (e) {

            e.preventDefault();
            var id = $(this).val();
            $.ajax({
                url: "/change_training_video_status",
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
    $('.delete_video_tr').click(function (e) {
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
</script>
