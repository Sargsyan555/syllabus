@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<!-- end page-content -->
    <div class="page-content">
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
                                <th class="no-sort">Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th style="width: 80px;" class="text-center no-sort">Action</th>
                            </tr>
                            </thead>
                            @foreach ($users as $user)
                            <tbody>
                            <tr>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <a href="#"><img src="{{asset('assets_admin/images/avatar.png')}}" style="height: 50px;" alt="User" class="rounded-circle"></a>
                                </td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td class="">
                                    <input type="checkbox" class="checked checked{{$user->id}} " name="services[]" value="{{$user->id}}" @if ($user->status==1) checked="checked" @endif >
                                </td>
                                <td>
                                    <ul class="list-unstyled table-actions">
                                        <li><a href="#"><i class="fal fa-pen" data-bs-original-title="Edit" data-bs-toggle="tooltip"></i></a></li>
                                        <li><a href="#"><i class="fal fa-cog" data-bs-original-title="Settings" data-bs-toggle="tooltip"></i></a></li>
                                        <li><a href="#"><i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i></a></li>
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

<script>
    $('.checked').click(function (e) {
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
            url: "/change_user_status",
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
</script>
@endsection
