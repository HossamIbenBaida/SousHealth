@extends('layouts.app')
@section('content')
    <div class="tg-theme-heading">
        <h2>doctors</h2>
        <span class="tg-roundbox"></span>
        <div class="tg-description">

        </div>
    </div>

<div class="container">


        <!-- Page Header -->
    @foreach($posts as $doctor)

    <div class="col-xs-12 " style="align-content: left ;">
        <div class="row">
            <div class="fw-page-builder-content">
                <section class="tg-main-section haslayout  default">
                    <div class="builder-items">
                        <div class="col-xs-12 col-md-12 builder-column ">
                            <div class="sc-blogs">
                                <div class="tg-view tg-blog-list">
                                    <article class="tg-post">
                                        <div class="row">
                                        <div class="tg-box">
                                            <figure class="tg-feature-img">
                                                <a href="https://themographics.com/wordpress/directory/family-clinic/"><img width="470" height="300" src="{{asset('storage/'.$doctor->image)}}" alt="family-clinic"></a>
                                                <ul class="tg-metadata">
                                                    <li><i class="fa fa-clock-o"></i><time datetime="2016-04-21">21 Apr, 2016</time> </li>
                                                    <li><i class="fa fa-comment-o"></i><a href="https://themographics.com/wordpress/directory/family-clinic/#comments"> 4 Comments</a></li>
                                                </ul>
                                            </figure>
                                            <div class="tg-contentbox">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <div class="tg-heading-border tg-small">
                                                            <h3><a href="https://themographics.com/wordpress/directory/family-clinic/">{{$doctor->name}} </a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>{{$doctor->body}}</p>
                                                        </div>
                                                    </div>
                                                    <a href="{{ url('/doc/'.$doctor->id) }}"><span class="tg-show"><em class="icon-add"></em></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @endforeach

        <!-- /.row -->
         {{--@foreach($posts as $doctor)--}}
        {{--<!-- Projects Row -->--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="{{asset('storage/'.$doctor->image)}}" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">{{$doctor->name}}</a>--}}
                {{--</h3>--}}
                {{--<p>{{trim(strip_tags($doctor->body))}}</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="{{asset('storage/'.$doctor->image)}}" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">{{$doctor->name}}</a>--}}
                {{--</h3>--}}
                {{--<p>{{trim(strip_tags($doctor->body))}}</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="{{asset('storage/'.$doctor->image)}}" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">{{$doctor->name}}</a>--}}
                {{--</h3>--}}
                {{--<p>{{trim(strip_tags($doctor->body))}}</p>--}}
            {{--</div>--}}
        {{--</div>--}}
{{--@endforeach--}}

<!-- /.row -->

        {{--<!-- Projects Row -->--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Projects Row -->--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 portfolio-item">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                {{--</a>--}}
                {{--<h3>--}}
                    {{--<a href="#">Project Name</a>--}}
                {{--</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- /.row -->



        <!-- Pagination -->
        <div class="row text-center">
            <div class="row text-center">
                <div class="col-lg-12">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
  </div>


 @endsection
