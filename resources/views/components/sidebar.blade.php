
<div class="sidebar-inner">

    <!-- Start Single Widget  -->
    @if(isset($categories[0]) && !empty($categories[0]))
        <div class="axil-single-widget widget widget_categories mb--30">
            <ul>
                @foreach($categories as $category)
                    <li class="cat-item">
                        <a href="{{route('news.show_all',['news_cat'=>$category["slug"],'q'=>request()->get('q')])}}" class="inner">
                            <div class="thumbnail">
                                @if(isset($category["pic"]) && !empty($category["pic"]))
                                    <img src="/images/{{$category["pic"]}}" alt="{{$category["slug"]}}">
                                @else
                                    <img src="/no_image/no_image(50x50).jpg" alt="{{$category["slug"]}}">
                                @endif
                            </div>
                            <div class="content">
                                <h6 class="title">{{$category["title"]}}</h6>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget widget widget_search mb--30">
        <h5 class="widget-title">جستجو</h5>
        <form action="{{route("news.show_all")}}">
            <div class="axil-search form-group">
                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                <input type="text" value="{{request()->get('q')}}" class="form-control" placeholder="جستجو" name="q">
            </div>
        </form>
    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    @if(isset($news[0]) && !empty($news[0]->hit_news()))
    <div class="axil-single-widget widget widget_postlist mb--30">
        <h5 class="widget-title">بهترین های هفته</h5>
        <!-- Start Post List  -->
        <div class="post-medium-block">
            @foreach($news[0]->hit_news() as $new)
            <div class="content-block post-medium mb--20">
                <div class="post-thumbnail">
                    <a href="post-details.html">
                        @if(isset($new["pic"]) && !empty($new["pic"]))
                        <img src="/images/{{$new["pic"]}}" alt="Post Images">
                        @else
                        <img src="/no_image/no_image(50x50).jpg" alt="Post Images">
                        @endif
                    </a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="post-details.html">{{$new["title"]}}</a></h6>
                    <div class="post-meta">
                        <ul class="post-meta-list">
                            <li>{{$new->getformatTimeAttribute()}}</li>
                            <li> {{$new["hit"]}} نفر بازدید</li>
                            <li>{{$new->news_cat->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Post List  -->
    </div>
    @endif
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget widget widget_social mb--30">
        <h5 class="widget-title">شبکه های اجتماعی ما</h5>
        <!-- Start Post List  -->
        <ul class="social-icon md-size justify-content-center">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-slack"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <!-- End Post List  -->
    </div>
    <!-- End Single Widget  -->
    <!-- Start Single Widget  -->
    <div class="axil-single-widget widget widget_instagram mb--30">
        <h5 class="widget-title">اینستاگرام</h5>
        <!-- Start Post List  -->
        <ul class="instagram-post-list-wrapper">
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-01.jpg" alt="Instagram Images">
                </a>
            </li>
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-02.jpg" alt="Instagram Images">
                </a>
            </li>
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-03.jpg" alt="Instagram Images">
                </a>
            </li>
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-04.jpg" alt="Instagram Images">
                </a>
            </li>
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-05.jpg" alt="Instagram Images">
                </a>
            </li>
            <li class="instagram-post-list">
                <a href="#">
                    <img src="/images/small-images/instagram-06.jpg" alt="Instagram Images">
                </a>
            </li>
        </ul>
        <!-- End Post List  -->
    </div>
    <!-- End Single Widget  -->
    @yield('test')
</div>
