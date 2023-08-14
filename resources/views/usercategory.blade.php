@extends('layouts.app1')
@section('content1')
    <div class="col-lg-8 posts-list">
        <div class="single-post">
            <div class="feature-img">
                <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="">
            </div>
            <div class="blog_details">
                <h2>{{ $post->name }}
                </h2>
                @if ($post->category)
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{ $post->category->name }}</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> {{ $post->comments->             () }} Comments</a></li>
                       
                    </ul>
                @endif

                <p class="excert">
                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                    fraction of the camp price. However, who has the willpower
                </p>
                <p>
                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                    fraction of the camp price. However, who has the willpower to actually sit through a
                    self-imposed MCSE training. who has the willpower to actually
                </p>
                <div class="quote-wrapper">
                    <div class="quotes">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at
                        a fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training.
                    </div>
                </div>
                <p>
                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                    fraction of the camp price. However, who has the willpower
                </p>
                <p>
                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                    fraction of the camp price. However, who has the willpower to actually sit through a
                    self-imposed MCSE training. who has the willpower to actually
                </p>
            </div>
        </div>
        <div class="navigation-top mt-5">
            <div class="d-sm-flex justify-content-between text-center">
                <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                    people like this</p>
                <div class="col-sm-4 text-center my-2 my-sm-0">
                    <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                </div>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>


            <div class="navigation-area">
                <div class="row">
                    @foreach ($sl_post as $data)
                        <div
                            class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#">
                                    <img style="width: 60px; height:60px;" src="{{ Storage::url($data->image) }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                    <h4>{{ $data->details }}</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="blog-author mt-5">
            <div class="media align-items-center">
                <img src="{{ asset('assets1/img/blog/author.png') }}" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Harvard milan</h4>
                    </a>
                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                </div>
            </div>
        </div>

        <div class="comments-area">
            <h4>{{ $post->comments->count() }} Comments</h4>
            @foreach ($post->comments as $comment)
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="img/comment/comment_1.png" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    {{ $comment->comment }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">{{ $comment->user ? $comment->user->name : '' }}</a>
                                        </h5>
                                        <p class="date">{{$comment->created_at->format('d M y h:i A')}}</p>
                                    </div>
                                    {{-- <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        @php
            $commentsToPost = App\Models\Comment::where('post_id', $post->id)->get();
            $bought = $commentsToPost->where('user_id', auth()->id());
            
        @endphp
        @auth
            @if ($bought->isEmpty())
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form action="{{ route('comment_store', $post) }}" method="post" class="form-contact comment_form"
                        action="#" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            @endif
        @else
            <p>Plese login and comment</p>
        @endauth

    </div>
    <div class="col-lg-4">
        <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget search_widget">
                <form action="#">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder='Search Keyword'
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
                </form>
            </aside>
            <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Category</h4>
                <ul class="list cat-list">
                    @foreach ($list_category as $category)
                        <li>
                            <a href="#" class="d-flex">
                                <p>{{ $category->name }}</p>
                                <p>( {{$category->posts->count()}}  )</p>
                              
                                
                            </a>
                        </li>
                    @endforeach36


                </ul>
            </aside>

            <aside class="single_sidebar_widget popular_post_widget">
                <h3 class="widget_title">Recent Post</h3>
                @foreach ($recent_post as $post)
                    <div class="media post_item">
                        <img style="width: 85px; height:80px;" src="{{ Storage::url($post->image) }}" alt="post">
                        <div class="media-body">
                            <a href="{{ route('usercategory', $post) }}">
                                <h3>{{ $post->name }}</h3>
                            </a>
                            <p>{{ $post->created_at->format('M d Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </aside>



            <aside class="single_sidebar_widget tag_cloud_widget">
                <h4 class="widget_title">Tag Clouds</h4>
                <ul class="list">
                    @foreach ($tag_post as $post)
                        <li>
                            <a href="{{ route('usercategory', $post) }}">{{ $post->name }}</a>
                        </li>
                    @endforeach


                </ul>
            </aside>
            <aside class="single_sidebar_widget instagram_feeds">
                <h4 class="widget_title">Instagram Feeds</h4>
                <ul class="instagram_row flex-wrap">
                    @foreach ($nstagram_post1 as $post)
                        <li>
                            <a href="{{ route('usercategory', $post) }}">
                                <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="">
                            </a>
                        </li>
                    @endforeach


                </ul>
            </aside>
            <aside class="single_sidebar_widget newsletter_widget">
                <h4 class="widget_title">Newsletter</h4>
                <form action="#">
                    <div class="form-group">
                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Subscribe</button>
                </form>
            </aside>
        </div>
    </div>
@endsection
