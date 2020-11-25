@extends('master')
@section('content')
<div class="row">
    {{ Breadcrumbs::render('content', $url) }}
</div>
@if ($contents->count())
  @foreach($contents as $content)
  <div class="row">
    <div class="col-12">
      <h1>{{ $content->ctitle }}</h1>
      <p>{!! $content->article !!}</p>
    </div>
  </div>
  @endforeach
  
  @else
      <div class="row">
        <div class="col-12">
          <p>No content</p>
        </div>
      </div>
  @endif

@endsection 