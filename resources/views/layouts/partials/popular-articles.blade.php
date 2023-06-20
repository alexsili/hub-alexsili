{{--<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">--}}
{{--    <div>--}}
{{--        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>--}}
{{--    </div>--}}
{{--    <div class="clearfix"></div>--}}
{{--    <div class="fh5co_tags_all">--}}
{{--        <a href="#" class="fh5co_tagg">Business</a>--}}
{{--        <a href="#" class="fh5co_tagg">Technology</a>--}}
{{--        <a href="#" class="fh5co_tagg">Sport</a>--}}
{{--        <a href="#" class="fh5co_tagg">Art</a>--}}
{{--        <a href="#" class="fh5co_tagg">Lifestyle</a>--}}
{{--        <a href="#" class="fh5co_tagg">Three</a>--}}
{{--        <a href="#" class="fh5co_tagg">Photography</a>--}}
{{--        <a href="#" class="fh5co_tagg">Lifestyle</a>--}}
{{--        <a href="#" class="fh5co_tagg">Art</a>--}}
{{--        <a href="#" class="fh5co_tagg">Education</a>--}}
{{--        <a href="#" class="fh5co_tagg">Social</a>--}}
{{--        <a href="#" class="fh5co_tagg">Three</a>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>--}}
{{--    </div>--}}
{{--    <div class="row pb-3">--}}
{{--        <div class="col-5 align-self-center">--}}
{{--            <img src="../public/images/download (1).jpg" alt="img" class="fh5co_most_trading"/>--}}
{{--        </div>--}}
{{--        <div class="col-7 paddding">--}}
{{--            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>--}}
{{--            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row pb-3">--}}
{{--        <div class="col-5 align-self-center">--}}
{{--            <img src="../public/images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>--}}
{{--        </div>--}}
{{--        <div class="col-7 paddding">--}}
{{--            <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>--}}
{{--            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row pb-3">--}}
{{--        <div class="col-5 align-self-center">--}}
{{--            <img src="../public/images/download (2).jpg" alt="img" class="fh5co_most_trading"/>--}}
{{--        </div>--}}
{{--        <div class="col-7 paddding">--}}
{{--            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>--}}
{{--            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row pb-3">--}}
{{--        <div class="col-5 align-self-center"><img src="../public/images/seth-doyle-133175.jpg" alt="img"--}}
{{--                                                  class="fh5co_most_trading"/></div>--}}
{{--        <div class="col-7 paddding">--}}
{{--            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>--}}
{{--            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Most Popular</div>
    </div>
    @foreach($mostPopularArticles as $mostPopularArticle)
        <div class="row pb-3">
            <div class="col-5 align-self-center">
                <a href="{{route('article', $mostPopularArticle->id)}}">
                    <img src="/uploads/images/{{$mostPopularArticle->image}}" alt="{{$mostPopularArticle->image}}"
                         class="fh5co_most_trading"/>
                </a>
            </div>
            <div class="col-7 paddding">
                <a href="{{route('article', $mostPopularArticle->id)}}">
                    <div class="most_fh5co_treding_font"> {{$mostPopularArticle->title}}</div>
                </a>
                <div class="most_fh5co_treding_font_123"> {{$article->created_at->format('M d, Y')}}</div>
            </div>
        </div>
    @endforeach
</div>
