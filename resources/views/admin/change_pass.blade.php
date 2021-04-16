
@extends('layouts.admin')

@section('title', 'Training Videos')

@section('content')
    <div class="page-content">
        <!-- Modal -->
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4 class="fw-700 m-0 fs-base">Change Password</h4>
                    </div>
                    <div id="cardBasicInput" class="card-body show">
                        <form  id="add_details" name="productForm" class="group">
                            <div class="mb-3">
                                <label for="name_insert">Old Password</label>
                                <input type="text" id="old_pass" class="form-control" name="old_pass" required>
                                <span class="text-danger error-text old_pass_err"></span>
                            </div>
                            <div class="mb-3">
                                <label for="link_insert">New password</label>
                                <input type="url" id="new_pass" name="new_pass" class="form-control" required>
                                <span class="text-danger error-text new_pass_err"></span>

                            </div>
                            <div class="mb-3">
                                <label for="link_insert">Confirm new password</label>
                                <input type="url" id="confirm_pass" name="confirm_pass" class="form-control" required>
                                <span class="text-danger error-text confirm_pass_err"></span>

                            </div>
                            <button class="change_pass btn btn-highlight waves-effect">Save change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $('.change_pass').click(function (e) {

                e.preventDefault();
                $('.error-text').empty();
                $.ajax({
                    url: "/change_pass",
                    data: {
                        old_pass:$('#old_pass').val(),
                        new_pass:$('#new_pass').val(),
                        new_pass:$('#confirm_pass').val()
                    },
                    method: "POST",
                    success: function (res) {
                        if($.isEmptyObject(res.error)){
                            console.log(res)
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
        })
    </script>



@endsection
