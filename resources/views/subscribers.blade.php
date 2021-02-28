@extends('layouts.admin')

@section('title', 'Subscribers')

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
                                    <th class="no-sort">email</th>
                                    <th class="text-center no-sort">Action</th>
                                </tr>
                                </thead>
                                @foreach ($subscribers as $subscriber)
                                    <tbody >
                                        <tr>
                                            <td class="">{{ $subscriber->email }}</td>
                                            <td>
                                                <ul class="list-unstyled table-actions">
                                                    <li class="li">
                                                        <a class="deleteProduct delete{{$subscriber->id}}" data-id="{{ $subscriber->id }}"  ><i class="fal fa-trash" data-bs-original-title="Archive" data-bs-toggle="tooltip"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <span class="pagination d-flex justify-content-center">{{$subscribers->links() }}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.deleteProduct').click(function (e) {
                e.preventDefault();

                var id = $(this).data("id");
                $.ajax({
                    url: "/delete_subscriber",
                    data: {id:id},
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        $('.delete'+id).parent().parent().parent().parent().parent().remove();
                    }
                });
            })
        });
    </script>
@endsection
