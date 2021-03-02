@extends('layouts.admin')

@section('title', 'Members Videos')

@section('content')
    <div class="page-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ps-0 fs-base">
                <li class="breadcrumb-item"><a href="#">Syllabus</a></li>
                <li class="breadcrumb-item"><span>Members Videos </span></li>
                <li class="breadcrumb-item active" aria-current="page">Flat Bet And Videos</li>
            </ol>
        </nav>
        <div class="row">
            @foreach($videos as $video)
                <div class="col-6">
                    <div class="card">
                        <div class="card-header card-reverse justify-content-between">
                            <h4 class="fw-700 m-0 fs-base">{{$video->name}}</h4>
                        </div>
                        <div id="cardTableDefault" class="card-body show p-0">
                            <iframe height="300" class="video-2 w-100   p-0" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end colunm -->

            @endforeach

        </div>
    </div><!-- end row -->
    </div>

@endsection
