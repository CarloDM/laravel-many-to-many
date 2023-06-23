@extends('layouts.guest')
@section('content')

<div class="container">
    <h1>home pubblica</h1>
    <h3>ultimi 10 post </h3>
    <p>mettere sito vue</p>

    <div class="row h-100">

      @foreach ($posts as $post )

      <div class="card h-20" style="width: 18rem;">
        @if ($post->image_path)
        <img src="{{asset('storage/' . $post->image_path)}}" class="card-img-top" alt="{{$post->title}}">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text sc-card-text">{!! substr($post->text, 0, 50) . '...' !!}</p>
          <a href="{{route('detail', $post)}}" class="btn btn-primary">vai</a>
        </div>
      </div>

      @endforeach

    </div>
</div>

@endsection
