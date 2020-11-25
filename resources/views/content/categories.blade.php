@extends('master')

@section('content')
<div class="row">
    {{ Breadcrumbs::render('shop') }}
</div>
<!-- categories -->
<section id="categories">
<div class="container">
    <div class="page-header text-center wsub">
        <h2>Shop Categories</h2>
    </div><!--/ page-header -->
    <p class="title-description text-center">Proin malesuada commodo magna, eu porta nulla luctus id. Integer bibendum dolor id mi dignissim pulvinar. Proin tincidunt elit in augue congue efficitur.</p>
    <div class="row">
        @if ( !empty($categories) )
            @foreach ($categories as $category)    
            <div class="col-sm-4 category">
                <a href="{{ url('shop/' . $category['url']) }}">
                    <div class="category-item">
                        <img class="category-image" src="{{ asset('images/' . $category['image']) }}" alt="dressers">
                        <div class="overlay">
                            <div class="caption">
                                <h4>{{ $category['title'] }}</h4>
                            <p class="categories-description">{!! str_limit($category['description'], 20) !!}</p>
                            </div><!-- caption -->
                        </div><!--  overlay -->
                    </div><!-- / category-item -->
                </a>
            </div><!-- / category -->
            @endforeach
            @else
            <div class="col-12">
                <p><i>No Categories</i></p>
            </div>
        @endif
    </div><!-- / row -->
</div><!-- / container -->
</section>
<!-- / categories -->@endsection 