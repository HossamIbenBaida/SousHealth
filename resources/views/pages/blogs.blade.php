@extends('layouts.app')
@section('content')

<!-- <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right  page-section">
  <div class="row">
    <div class="fw-page-builder-content">
      <section class="tg-main-section haslayout  default">
        <div class="builder-items">
          <div class="col-xs-12 col-md-12 builder-column ">
            <div class="sc-blogs">
              <div class="tg-view tg-blog-list">
                <article class="tg-post">
                  <div class="tg-box">
                    <figure class="tg-feature-img">
                      <a href="https://themographics.com/wordpress/directory/family-clinic/"><img width="470" height="300" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-01-470x305.jpg" alt="family-clinic"></a>
                      <ul class="tg-metadata">
                        <li><i class="fa fa-clock-o"></i><time datetime="2016-04-21">21 Apr, 2016</time> </li>
                        <li><i class="fa fa-comment-o"></i><a href="https://themographics.com/wordpress/directory/family-clinic/#comments"> 4 Comments</a></li>
                      </ul>
                    </figure>
                    <div class="tg-contentbox">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell">
                          <div class="tg-heading-border tg-small">
                            <h3><a href="https://themographics.com/wordpress/directory/family-clinic/">Family clinic </a></h3>
                          </div>
                          <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al...</p>
                          </div>
                        </div>
                        <a href="https://themographics.com/wordpress/directory/family-clinic/"><span class="tg-show"><em class="icon-add"></em></span></a>
                      </div>
                    </div>
                  </div>
                </article>

              </div>
            </div>
          </div>
      </section>
      </div>
    </div>
  </div> -->
  <div class="container">

       <!-- Page Heading -->

       <!-- /.row -->


       @foreach($posts as $post)
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">{{$post->title}}
                     <small>{{$post->seo_title}}</small>
                 </h1>
             </div>
         </div>
          <div class="row">
            <div class="col-md-4">

                <figure class="tg-feature-img">
                    <a href="https://themographics.com/wordpress/directory/family-clinic/"><img width="470" height="300" src={{asset('storage/'.$post->image)}} alt="family-clinic"></a>
                    <ul class="tg-metadata">
                        <li><i class="fa fa-clock-o"></i><time datetime="2016-04-21">21 Apr, 2016</time> </li>
                        <li><i class="fa fa-comment-o"></i><a href="https://themographics.com/wordpress/directory/family-clinic/#comments"> 4 Comments</a></li>
                    </ul>
                </figure>
            </div>

            <div class="col-md-8">
              <h4>{{$post->excerpt}}</h4>
              <p style="font-size: 13px;">{{trim(strip_tags($post->body))}}</p>
              <a class="btn btn-primary" href="{{ url('/tstPost/'.$post->id) }}">View details </a>
            </div>
          </div>
        @endforeach

       <!-- Pagination -->
       <div class="row text-center">
           <div class="col-lg-12">
          {{$posts->links()}}
           </div>
       </div>
    </div>
  @endsection
