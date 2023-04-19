<div class="sidebar-inner">

    <!-- Start Single Widget  -->
    @if(isset($categories[0]) && !empty($categories[0]))
        <div class="axil-single-widget widget widget_categories mb--30">
            <ul>
                @foreach($categories as $category)
                    <li class="cat-item">
                        <a href="{{route('news.show_all',['news_cat'=>$category["slug"]])}}" class="inner">
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
        <form action="#">
            <div class="axil-search form-group">
                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                <input type="text" class="form-control" placeholder="جستجو">
            </div>
        </form>
    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget widget widget_postlist mb--30">
        <h5 class="widget-title">بهترین های هفته</h5>
        <!-- Start Post List  -->
        <div class="post-medium-block">

            <!-- Start Single Post  -->
            <div class="content-block post-medium mb--20">
                <div class="post-thumbnail">
                    <a href="post-details.html">
                        <img src="/images/small-images/blog-sm-01.jpg" alt="Post Images">
                    </a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="post-details.html">تغییر ناگهانی در هیات مدیره استقلال </a></h6>
                    <div class="post-meta">
                        <ul class="post-meta-list">
                            <li>14 مهر, 1400</li>
                            <li> 300 نفر بازدید</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Post  -->

            <!-- Start Single Post  -->
            <div class="content-block post-medium mb--20">
                <div class="post-thumbnail">
                    <a href="post-details.html">
                        <img src="/images/small-images/blog-sm-02.jpg" alt="Post Images">
                    </a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="post-details.html">نخستین ویدئو کامل از مک بوک پرو</a>
                    </h6>
                    <div class="post-meta">
                        <ul class="post-meta-list">
                            <li>14 مهر, 1400</li>
                            <li> 300 نفر بازدید</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Post  -->

            <!-- Start Single Post  -->
            <div class="content-block post-medium mb--20">
                <div class="post-thumbnail">
                    <a href="post-details.html">
                        <img src="/images/small-images/blog-sm-03.jpg" alt="Post Images">
                    </a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="post-details.html">محبوب‌ترین زبان برنامه‌نویسی کدام است؟</a></h6>
                    <div class="post-meta">
                        <ul class="post-meta-list">
                            <li>14 مهر, 1400</li>
                            <li> 300 نفر بازدید</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Post  -->

        </div>
        <!-- End Post List  -->

    </div>
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
