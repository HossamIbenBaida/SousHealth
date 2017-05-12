
@extends('layouts.app')
@section('content')
    <main id="main" class="tg-page-wrapper tg-haslayout">

        <div class="container">
            <div class="row">
                <div id="tg-towcolumns" class="tg-haslayout">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-right">
                        <div id="tg-content" class="tg-content tg-post-detail tg-overflowhidden ">
                            <article class="tg-post tg-haslayout">
                                <figure class="tg-post-img">
                                    <a href="#"><img
                                                src={{asset('storage/'.$post->image)}}
                                                alt="profile"></a>
                                    <ul class="tg-metadata">
                                        <li><i class="fa fa-clock-o"></i>
                                            <time datetime={{$post->created_at}}>{{$post->created_at->diffForHumans()}}
                                            </time>
                                        </li>
                                        <li><i class="fa fa-comment-o"></i><a
                                                    href="http://themographics.com/wordpress/directory/family-clinic/#comments">
                                                4 Comments</a></li>
                                    </ul>
                                    {{--<div class="tg-tags"><span>Tags:</span>--}}
                                    {{--<ul class="tg-tag">--}}
                                    {{--<li><a href="http://themographics.com/wordpress/directory/tag/directory/"--}}
                                    {{--rel="tag">Directory</a></li>--}}
                                    {{--<li><a href="http://themographics.com/wordpress/directory/tag/medical/"--}}
                                    {{--rel="tag">Medical</a></li>--}}
                                    {{--<li><a href="http://themographics.com/wordpress/directory/tag/responsive/"--}}
                                    {{--rel="tag">Responsive</a></li>--}}
                                    {{--<li><a href="http://themographics.com/wordpress/directory/tag/unique/"--}}
                                    {{--rel="tag">Unique</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                </figure>
                                <div class="tg-post-data tg-haslayout">
                                    <div class="tg-heading-border tg-small">
                                        <h2>{{$post->title}}</h2>
                                    </div>
                                    <div class="tg-description">
                                        {!! $post->body !!}

                                    </div>
                                    <div class="social-share">
                                        <ul class="tg-socialiconstwo ">
                                            <li class="tg-facebook"><a class="tg-social-facebook"
                                                                       href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fthemographics.com%2Fwordpress%2Fdirectory%2Ffamily-clinic%2F"
                                                                       onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i
                                                            class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li class="tg-twitter"><a class="tg-social-twitter"
                                                                      href="https://twitter.com/intent/tweet?text=Family+clinic&amp;url=http%3A%2F%2Fthemographics.com%2Fwordpress%2Fdirectory%2Ffamily-clinic%2F&amp;via=Ehaantech"><i
                                                            class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li class="tg-googleplus"><a class="tg-social-google"
                                                                         href="http://plus.google.com/share?url=http://themographics.com/wordpress/directory/family-clinic/"
                                                                         onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i
                                                            class="fa fa-google-plus"></i><span>Google +</span></a></li>
                                            <li class="tg-pinterest"><a class="tg-social-pinterest"
                                                                        href="http://pinterest.com/pin/create/button/?url=http://themographics.com/wordpress/directory/family-clinic/&amp;media=http://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-01-1170x450.jpg&amp;description=Family+clinic"
                                                                        onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i
                                                            class="fa fa-pinterest-p"></i><span>Pinterest</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <div class="tg-about-author tg-haslayout">
                                <figure class="tg-author-pic tg-border">
                                    <img src="http://themographics.com/wordpress/directory/wp-content/uploads/2016/03/reviewer-img-01.jpg"
                                         alt="Author Avatar"></figure>
                                <div class="tg-author-content">
                                    <h3>About Author</h3>
                                    <div class="tg-description">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum. Mirum est notare quam littera gothica</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-haslayout" id="comments">
                                <div class="tg-heading-border tg-small">
                                    <h3>4 Comments</h3>
                                </div>
                                <ul>
                                    <li class=" byuser -author-docdirect-admin bypostauthor even thread-even depth-1 -entry clearfix"
                                        id="comment-2">
                                        <div class="comment tg-border">
                                            <figure class="tg-author-img">
                                                <img alt=""
                                                     src="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=89&amp;d=mm&amp;r=g"
                                                     srcset="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=178&amp;d=mm&amp;r=g 2x"
                                                     class="avatar avatar-89 photo" height="89" width="89"></figure>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <div class="pull-left">
                                                        <h3>docdirect-admin</h3>
                                                    </div>
                                                    <a rel="nofollow" class="tg-btn"
                                                       href="http://themographics.com/wordpress/directory/family-clinic/?replytocom=2#respond"
                                                       aria-label="Reply to docdirect-admin">Reply</a></div>
                                                <span>Posted on Apr 22, 2016 at  06:28 am</span>
                                                <div class="tg-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class=" byuser -author-docdirect-admin bypostauthor odd alt depth-2 -entry clearfix"
                                                id="comment-12">
                                                <div class="comment tg-border">
                                                    <figure class="tg-author-img">
                                                        <img alt=""
                                                             src="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=89&amp;d=mm&amp;r=g"
                                                             srcset="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=178&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-89 photo" height="89" width="89">
                                                    </figure>
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            <div class="pull-left">
                                                                <h3>docdirect-admin</h3>
                                                            </div>
                                                            <a rel="nofollow" class="tg-btn"
                                                               href="http://themographics.com/wordpress/directory/family-clinic/?replytocom=12#respond"
                                                               aria-label="Reply to docdirect-admin">Reply</a></div>
                                                        <span>Posted on Apr 22, 2016 at  06:29 am</span>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                                sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                        </ul><!-- .children -->
                                    </li><!-- #comment-## -->
                                    <li class=" byuser -author-docdirect-admin bypostauthor even thread-odd thread-alt depth-1 -entry clearfix"
                                        id="comment-31">
                                        <div class="comment tg-border">
                                            <figure class="tg-author-img">
                                                <img alt=""
                                                     src="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=89&amp;d=mm&amp;r=g"
                                                     srcset="http://1.gravatar.com/avatar/19881289bd563ec5668c21810710a20f?s=178&amp;d=mm&amp;r=g 2x"
                                                     class="avatar avatar-89 photo" height="89" width="89"></figure>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <div class="pull-left">
                                                        <h3>docdirect-admin</h3>
                                                    </div>
                                                    <a rel="nofollow" class="tg-btn"
                                                       href="http://themographics.com/wordpress/directory/family-clinic/?replytocom=31#respond"
                                                       aria-label="Reply to docdirect-admin">Reply</a></div>
                                                <span>Posted on Apr 22, 2016 at  06:33 am</span>
                                                <div class="tg-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class=" odd alt thread-even depth-1 -entry clearfix" id="comment-38">
                                        <div class="comment tg-border">
                                            <figure class="tg-author-img">
                                                <img alt=""
                                                     src="http://0.gravatar.com/avatar/f6839ef4286a4f916f035e5ab91c02f3?s=89&amp;d=mm&amp;r=g"
                                                     srcset="http://0.gravatar.com/avatar/f6839ef4286a4f916f035e5ab91c02f3?s=178&amp;d=mm&amp;r=g 2x"
                                                     class="avatar avatar-89 photo" height="89" width="89"></figure>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <div class="pull-left">
                                                        <h3>2016 at 06:33 am</h3>
                                                    </div>
                                                    <a rel="nofollow" class="tg-btn"
                                                       href="http://themographics.com/wordpress/directory/family-clinic/?replytocom=38#respond"
                                                       aria-label="Reply to 2016 at 06:33 am">Reply</a></div>
                                                <span>Posted on Nov 03, 2016 at  04:54 am</span>
                                                <div class="tg-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ul>
                            </div>

                            <div class="tg-comment-formarea tg-haslayout">
                                <div class="row">
                                    <div id="respond" class="comment-respond">
                                        <div class="col-xs-12">
                                            <div class="tg-heading-border tg-small"><h3>Add Comments<a rel="nofollow"
                                                                                                       id="cancel-comment-reply-link"
                                                                                                       href="/wordpress/directory/family-clinic/#respond"
                                                                                                       style="display:none;">Cancel
                                                        reply</a></h3></div>
                                        </div>
                                        <form action="http://themographics.com/wordpress/directory/wp-comments-post.php"
                                              method="post" id="reply-form" class="form-comment tg-haslayout">
                                            <div class="col-xs-12">
                                                <div class="form-group"><textarea class="form-control" name="comment"
                                                                                  placeholder="Message"
                                                                                  rows="4"></textarea></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group"><input class="form-control" id="author"
                                                                               placeholder="Name" name="author"
                                                                               type="text" value="" size="30"></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group"><input class="form-control" id="email"
                                                                               placeholder="Email" name="email"
                                                                               type="text" value="" size="30"></div>
                                            </div>
                                            <div class="col-xs-12"><input name="submit" type="submit" id="tg-btn"
                                                                          class="tg-btn" value="Submit"> <input
                                                        type="hidden" name="comment_post_ID" value="193"
                                                        id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent"
                                                       value="0">
                                            </div>
                                        </form>

                                    </div><!-- #respond -->
                                </div>

                            </div>

                        </div>
                    </div>

                    @include('pages.blog.leftside_bar')
                </div>

            </div>

        </div>

    </main>
@endsection