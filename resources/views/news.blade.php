@extends("layout.layout")
@section("content")

    <div class="site-section">
        <div class="banner_area " data-aos="fade">
            <div class="banner_inner d-flex align-items-center"
                 style="background: url({{asset('images/news-banner.png')}}) scroll center center;background-repeat: no-repeat;background-size: 100%;">
                <div class="container p-5">
                    <div class="banner_content text-center">
                        <h2>News</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="latest_blog_area p_120 mb-5">
        <div class="container">
            <div class="row latest_blog_inner">
                @foreach($blogs as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="l_blog_item">
                            <img class="img-fluid" src="{{ Voyager::image( $item->image ) }}" alt="">
                            <a class="date">{{$item->created_at}} | By {{$item->author}}</a>
                            <a href="/news/{{$item->id  }}"><h4>{{$item->title}}</h4></a>
                            <p>{!! $item->body !!}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection