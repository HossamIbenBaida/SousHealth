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
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">{{$post->name}}
                    <small>{{$post->speciality}}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->



        <div class="row">
            <div class="col-md-4">

                <a href="#">
                    <img class="img-responsive" src={{asset('storage/'.$post->image)}} alt="">
                </a>
            </div>
            <div class="col-md-8">

                    <div class="sc-services">

                        <div class="tg-search-categories">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 tg-expectwidth">
                                    <div class="tg-search-category">
                                        <div class="tg-displaytable">

                                            <div class="tg-displaytablecell">
                                                <div class="tg-box">
                                                    <a href="#"><h3>CONTACT INFO</h3></a>
                                                    <img src="//themographics.com/wordpress/docdirect/wp-content/uploads/2016/03/contact-us.png" alt="CONTACT INFO"> <span class="service-list">{{$post->adresse}}</span><span class="service-list">{{$post->tel}}</span>
                                                    <span class="service-list">+44 235 856843</span><span class="service-list">admin@company.com</span>
                                                    <a href="#"><span class="tg-show"><em class="icon-add"></em></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3><{{$post->name}}</h3>
                <h4>{{$post->description}}</h4>
                <p style="font-size: 13px;">{{trim(strip_tags($post->body,200))}}</p>
            </div>
        </div>



    </div>




    </div>
    <!-- Pagination -->

@endsection
