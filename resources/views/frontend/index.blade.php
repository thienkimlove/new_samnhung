@extends('frontend.template')

@section('content')
    <div class="box-slider" id="slide_header">
            @foreach (\App\Site::getFrontendBanners()->where('position', 5) as $banner)
                <a class="thumb" href="{{$banner->link}}" title="Banner" target="_blank">
                    <img src="{{url('files', $banner->image)}}" alt="">
                </a>
            @endforeach
    </div>
    <div class="section bg">
        <div class="fixCen">
            <div class="layout-home">
                <div class="box-uses cf">
                    <div class="title-panel cf">
                        <div class="title">
                            <h3 class="tab-bg">
                                <a href="javascript:void(0)" rel="nofollow"
                                   class="tab"
                                   data-content="#tab-index"
                                   data-parent="news-type"
                                   data-reset="news-home">
                                    {{$topIndexCategory->name}}
                                </a>
                            </h3>
                        </div>
                        <div class="menu-tabs">
                            <ul class="news-type">
                                @foreach ($topIndexCategory->subCategories as $subTop)
                                    <li>
                                        <a href="javascript:void(0)" rel="nofollow"
                                           class="tab"
                                           data-content="#{{$firstTabs[$loop->index]}}"
                                           data-parent="news-type"
                                           data-reset="news-home"
                                           title="{{$subTop->name}}">
                                            {{$subTop->name}}
                                        </a>
                                    </li>
                                     @if (!$loop->last)
                                        <li class="line">|</li>
                                    @endif
                                @endforeach
                            </ul><!--//news-type-->
                        </div>
                    </div>

                    <div class="news-home cf active" id="tab-index">
                        @if ($getIndexTopCategoryPosts = \App\Site::getIndexCategoryPosts($topIndexCategory, 3))

                            @foreach ($getIndexTopCategoryPosts as $getIndexTopCategoryPost)
                                <article class="item">
                                    <a href="{{url($getIndexTopCategoryPost->slug.'.html')}}" title="{{$getIndexTopCategoryPost->title}}" class="thumbs" style="background-image: url({{url('files', $getIndexTopCategoryPost->image)}})">
                                        <img src="{{url('files', $getIndexTopCategoryPost->image)}}" alt="" class="imgFull">
                                    </a>
                                    <h3>
                                        <a href="{{url($getIndexTopCategoryPost->slug.'.html')}}" title="{{$getIndexTopCategoryPost->title}}">
                                            {{str_limit($getIndexTopCategoryPost->title, 50)}}
                                        </a>
                                    </h3>
                                    <p>
                                        {{str_limit($getIndexTopCategoryPost->desc, 85)}}
                                    </p>

                                    @if ($getIndexTopCategoryPost->related_posts->count() > 0)
                                        <div class="related-post">
                                            <ul>
                                                @foreach ($getIndexTopCategoryPost->related_posts->slice(2) as $rPost)
                                                    <li><a href="{{url($rPost->slug.'.html')}}">{{str_limit($rPost->title, 50)}}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    @endif
                                </article>
                            @endforeach
                        @endif
                    </div><!--//news-list-->

                    @foreach ($topIndexCategory->subCategories as $subTop)
                        <div class="news-home cf" id="{{$firstTabs[$loop->index]}}">
                        @if ($indexTopCategoryPosts = \App\Site::getIndexCategoryPosts($subTop, 3))
                            @foreach ($indexTopCategoryPosts as $indexTopCategoryPost)
                            <article class="item">
                            <a href="{{url($indexTopCategoryPost->slug.'.html')}}" title="{{$indexTopCategoryPost->title}}" class="thumbs" style="background-image: url({{url('files', $indexTopCategoryPost->image)}})">
                                <img src="{{url('files', $indexTopCategoryPost->image)}}" width="310" height="230" alt=""/>
                            </a>
                            <h3>
                                <a href="{{url($indexTopCategoryPost->slug.'.html')}}" title="{{$indexTopCategoryPost->title}}">
                                    {{str_limit($indexTopCategoryPost->title, 50)}}
                                </a>
                            </h3>
                            <p>
                                {{str_limit($indexTopCategoryPost->desc, 55)}}
                            </p>

                             @if ($indexTopCategoryPost->related_posts->count() > 0)
                                <div class="related-post">
                                    <ul>
                                        @foreach ($indexTopCategoryPost->related_posts->slice(2) as $rPost)
                                            <li><a href="{{url($rPost->slug.'.html')}}">{{str_limit($rPost->title, 50)}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                             @endif
                        </article>
                            @endforeach
                        @endif
                        </div><!--//news-list-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="section fixCen">
        <div class="layout-home block-info groups">
            <div class="col-left left-content">
                <div class="title-panel cf">
                    <div class="title">
                        <h3 class="tab-bg">
                            <a href="javascript:void(0)"
                               rel="nofollow"
                               class="tab"
                               data-content="#tab-demo"
                               data-parent="news-type"
                               data-reset="news-list">
                                {{$secondIndexCategory->name}}
                            </a>
                        </h3>
                    </div>
                    <div class="menu-tabs">
                        <ul class="news-type">
                            @foreach ($secondIndexCategory->subCategories as $subSecond)
                            <li>
                                <a href="javascript:void(0)"
                                   rel="nofollow"
                                   class="tab"
                                   data-content="#{{$secondTabs[$loop->index]}}"
                                   data-parent="news-type"
                                   data-reset="news-list"
                                   title="{{$subSecond->name}}">{{$subSecond->name}}</a>
                            </li>
                                @if (!$loop->last)
                                    <li class="line">|</li>
                                @endif
                            @endforeach
                        </ul><!--//news-type-->
                    </div>
                </div>
                <div class="news-list active" id="tab-demo">
                    @if ($getIndexSecondCategoryPosts = \App\Site::getIndexCategoryPosts($secondIndexCategory, 4))
                    <div class="box-news cf">
                        @if ($firstPosts = $getIndexSecondCategoryPosts->shift())
                            <div class="item01">
                                <a href="{{url($firstPosts->slug.'.html')}}" class="thumbs" style="background-image: url({{url('files', $firstPosts->image)}})">
                                    <img src="{{url('files', $firstPosts->image)}}" alt="">
                                </a>
                                <h3>
                                    <a href="{{url($firstPosts->slug.'.html')}}">
                                        {{ str_limit($firstPosts->title, 50) }}
                                    </a>
                                </h3>
                                <p>
                                    {{ str_limit($firstPosts->desc, 55) }}
                                </p>
                            </div>
                        @endif

                        <div class="item02">
                            @foreach ($getIndexSecondCategoryPosts as $getIndexSecondCategoryPost)
                            <div class="item">
                                <a href="{{url($getIndexSecondCategoryPost->slug.'.html')}}" class="thumbs">
                                    <img src="{{url('files', $getIndexSecondCategoryPost->image)}}" alt="" width="110">
                                </a>
                                <h3>
                                    <a href="{{url($getIndexSecondCategoryPost->slug.'.html')}}">
                                        {{ str_limit($getIndexSecondCategoryPost->title, 50) }}
                                    </a>
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div><!--//news-list-->
                @foreach ($secondIndexCategory->subCategories as $subSecond)
                    <div class="news-list cf" id="{{$secondTabs[$loop->index]}}">
                        @if ($getIndexSecondCategoryPosts = \App\Site::getIndexCategoryPosts($subSecond, 4))
                            <div class="box-news cf">
                                @if ($firstPosts = $getIndexSecondCategoryPosts->shift())
                                    <div class="item01">
                                        <a href="{{url($firstPosts->slug.'.html')}}" class="thumbs" style="background-image: url({{url('files', $firstPosts->image)}})">
                                            <img src="{{url('files', $firstPosts->image)}}" alt="" width="300" height="177">
                                        </a>
                                        <h3>
                                            <a href="{{url($firstPosts->slug.'.html')}}">
                                                {{ str_limit($firstPosts->title, 50) }}
                                            </a>
                                        </h3>
                                        <p>
                                            {{ str_limit($firstPosts->desc, 55) }}
                                        </p>
                                    </div>
                                @endif

                                <div class="item02">
                                    @foreach ($getIndexSecondCategoryPosts as $getIndexSecondCategoryPost)
                                        <div class="item">
                                            <a href="{{url($getIndexSecondCategoryPost->slug.'.html')}}" class="thumbs">
                                                <img src="{{url('files', $getIndexSecondCategoryPost->image)}}" alt="" width="110" height="70">
                                            </a>
                                            <h3>
                                                <a href="{{url($getIndexSecondCategoryPost->slug.'.html')}}">
                                                    {{ str_limit($getIndexSecondCategoryPost->title, 50) }}
                                                </a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div><!--//news-list-->
                @endforeach



                <div class="box-adv-center">

                    @foreach (\App\Site::getFrontendBanners()->where('position', 1) as $banner)
                        <a href="{{$banner->link}}" title="Banner" target="_blank">
                            <img src="{{url('files', $banner->image)}}" alt="">
                        </a>
                    @endforeach

                </div><!--//box-adv-center-->
                <div class="block-news">
                    <h3 class="tab-bg">
                        <a href="{{url('chuyen-muc', $thirdCate->slug)}}">{{strtoupper($thirdCate->name)}}</a>

                    </h3>
                    @if ($getIndexThirdCategoryPosts = \App\Site::getIndexCategoryPosts($thirdCate, 6))
                    <div class="listNews cf">
                        @foreach ($getIndexThirdCategoryPosts as $getIndexThirdCategoryPost)
                            <div class="item">
                            <a href="{{url($getIndexThirdCategoryPost->slug.'.html')}}" class="thumbs" style="background-image: url({{url('files', $getIndexThirdCategoryPost->image)}})">
                                <img src="{{url('files', $getIndexThirdCategoryPost->image)}}" alt="{{$getIndexThirdCategoryPost->title}}">
                            </a>
                            <h3>
                                <a href="{{url($getIndexThirdCategoryPost->slug.'.html')}}">
                                    {{str_limit($getIndexThirdCategoryPost->title, 55)}}
                                </a>
                            </h3>
                            <p>
                                {{str_limit($getIndexThirdCategoryPost->desc, 55)}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <!-- //listButton -->
                <ul class="listAdv clearFix">
                    <li>
                        <a href="tel:092571190">
                            <img src="{{url('viemgan/images/btn02.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="{{url('phan-phoi')}}">
                            <img src="{{url('viemgan/images/btn01.jpg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            @include('frontend.right_content')
        </div>
    </div>
        @include('frontend.exp')
@endsection