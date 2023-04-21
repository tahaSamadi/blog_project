<div class="content-block post-list-view mt--30">
    <div class="post-thumbnail">
        <a href="post-details.html">
            @if(isset($new["pic"]))
                <img src="/images/{{$new["pic"]}}" alt="Post Images">
            @else
                <img src="/no_image/no_image(295x250).jpg" alt="Post Images">
            @endif
        </a>
    </div>
    <div class="post-content">
        <div class="post-cat">
            <div class="post-cat-list">
                @if(isset($new->news_cat->title) && !empty($new->news_cat->title))
                    <a class="hover-flip-item-wrapper" href="{{route('news.show_all',['news_cat'=>$new->news_cat->slug])}}">
                        <span class="hover-flip-item">
                            <span data-text="{{$new->news_cat->title}}">{{$new->news_cat->title}}</span>
                        </span>
                    </a>
                @endif
            </div>
        </div>
        @if(isset($new["title"]) && !empty($new["title"]))
            <h4 class="title"><a href="post-details.html">{{$new["title"]}}</a></h4>
        @endif
        <div class="post-meta-wrapper">
            <div class="post-meta">
                <div class="content">
                    <h6 class="post-author-name">
                        <a class="hover-flip-item-wrapper" href="author.html">
                            <span class="hover-flip-item">
                                <span data-text="رهبی خان">رهبی خان</span>
                            </span>
                        </a>
                    </h6>
                    <ul class="post-meta-list">
                        <li>{{$new->formatTime}}</li>
                        <li>3 دقیقه زمان مطالعه</li>
                    </ul>
                </div>
            </div>
            <ul class="social-share-transparent justify-content-end">
                @if(isset($new->socialMedia["facebook"]))
                    <li><a href="{{$new->socialMedia["facebook"]}}"><i class="fab fa-facebook-f"></i></a></li>
                @endif
                @if(isset($new->socialMedia["twitter"]))
                    <li><a href="{{$new->socialMedia["twitter"]}}"><i class="fab fa-twitter"></i></a></li>
                @endif
                <li><a href="#"><i class="fas fa-link"></i></a></li>
            </ul>
        </div>
    </div>
</div>
