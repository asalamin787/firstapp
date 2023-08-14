@extends('layouts.app1')
@section('content1')
    <!--================Blog Area =================-->
    <!-- bradcam_area  -->
    <div class="bradcam_area bg1">
        <div class="bradcam_shap">
            <img src="{{ asset('assets1/img/ilstrator/bradcam_ils.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Blog</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($posts as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ Storage::url($post->image) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ $post->created_at->format('d') }}</h3>
                                        <p>{{ $post->created_at->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('usercategory', $post) }}">
                                        <h2>{{ $post->name }}</h2>
                                    </a>

                                    <p>{{ $post->details }}</p>
                                    <ul class="blog-info-link">

                                        <li><a href="#"><i class="fa fa-user"></i>
                                                {{ $post->category ? $post->category->name : '' }}</a></li>

                                        <li><a href="#"><i class="fa fa-comments"></i> {{ $post->comments->count() }}
                                                Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach



                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{route('blog')}}" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
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
                                @foreach ($categorys as $category)
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>{{ $category->name }}</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($recentposts as $post)
                                <div class="media post_item">
                                    <img style="width: 85px; height:80px;" src="{{ Storage::url($post->image) }}"
                                        alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
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
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                @foreach ($instagram_posts as $post)
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="">
                                        </a>
                                    </li>
                                @endforeach

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

            </div>
        </div>
    </section>


    <!--================Blog Area =================-->
@endsection
