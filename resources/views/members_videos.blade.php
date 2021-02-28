@extends('layouts.admin')

@section('title', 'Members Videos')

@section('content')
    <div class="page-content">
    <div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header justify-content-between">
                <h4 class="fw-700 m-0 fs-base">Add Members Videos</h4>
                </div>
            <div id="cardBasicInput" class="card-body show">
                <form id="mc-form" name="productForm" class="group">
                    @csrf
                    <div class="mb-3">
                        <label for="example-input">Select Category</label>

                        <select class="form-control" name="category" id="category" required="" aria-label=".form-select-lg example">
                            <option value="">  Select   </option>
                            <option value="Use_of_Software">Use of Software</option>
                            <option value="Manually_Setup">Manually Setup</option>
                            <option value="Automated_Setup">Automated Setup</option>
                            <option value="Run_Simulation">Run Simulation</option>
                            <option value="Flat_Bet_And_Videos">Flat Bet And Videos</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name">Video Name</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="example-input-link">Video Link</label>
                        <input type="text" id="link" name="link" class="form-control">
                    </div>
                    <button class="add_video btn btn-highlight waves-effect" type="submit">Add Video</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.add_video').click(function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                $.ajax({
                    url: "/add_members_videos",
                    data: {
                        category:$('#category').val(),
                        name:$('#name').val(),
                        link:$('#link').val()
                    },
                    method: "POST",
                    dataType: 'json',
                    success: function (res) {
                        alert(res.status)

                    }
                });
            })
        });
    </script>

@endsection
