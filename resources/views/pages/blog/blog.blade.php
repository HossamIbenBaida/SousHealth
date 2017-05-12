@extends ('layouts.app')
@section('content')
    <body class="page-template-default page page-id-213 blog-list tg-inner-header  wallpaper-inititalized">
    <div class="preloader-outer" style="display: none;">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <div id="wrapper" class="tg-haslayout">

        <main id="main" class="tg-page-wrapper tg-haslayout">

            <div class="container">
                <div class="row">
                    <div class="main-page-wrapper tg-haslayout">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right  page-section">
                            <div class="row">
                                <div class="fw-page-builder-content">
                                    <section class="tg-main-section haslayout  default">
                                        <div class="builder-items">
                                            <div class="col-xs-12 col-md-12 builder-column ">

                                                <div class="sc-blogs">
                                                    <div class="tg-view tg-blog-list">
                                                        @foreach($posts as $post)

                                                            <article class="tg-post">
                                                                <div class="tg-box">
                                                                    <figure class="tg-feature-img">
                                                                        <a href={{ url('/tstPost/'.$post->id) }}><img
                                                                                    width="470" height="300"
                                                                                    src={{asset('storage/'.$post->image)}}>
                                                                        </a>
                                                                        <ul class="tg-metadata">
                                                                            <li><i class="fa fa-clock-o"></i>
                                                                                <time datetime={{$post->created_at}}>{{$post->created_at->diffForHumans()}}
                                                                                </time>
                                                                            </li>
                                                                            <li><i class="fa fa-comment-o"></i><a
                                                                                        href="http://santemap.firstonenews.com/family-clinic/#comments">
                                                                                    4 Comments</a></li>
                                                                        </ul>
                                                                    </figure>
                                                                    <div class="tg-contentbox">
                                                                        <div class="tg-displaytable">
                                                                            <div class="tg-displaytablecell">
                                                                                <div class="tg-heading-border tg-small">
                                                                                    <h3>
                                                                                        <a href={{ url('/tstPost/'.$post->id) }}>{{$post->title}}</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="tg-description">
                                                                                    {{str_limit(trim(strip_tags($post->body)),200)}}
                                                                                </div>
                                                                                <a href={{ url('/tstPost/'.$post->id) }}><span
                                                                                            class="tg-show"><em
                                                                                                class="icon-add"></em></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </article>
                                                        @endforeach


                                                    </div>
                                                </div>
                                                <!-- Pagination -->
                                                <div class="row text-center">
                                                    <div class="col-lg-12">
                                                        {{$posts->links()}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </section>
                                </div>
                            </div>
                        </div>

                        @include('pages.blog.leftside_bar')
                    </div>
                </div>
            </div>

        </main>

    </div>


@endsection