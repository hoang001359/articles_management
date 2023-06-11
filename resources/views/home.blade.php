@extends('layouts.base')

{{-- Trien khai title  --}}
@section('title','Home Page')
   @section('main')
    <div class="row mt-4">
        @foreach ($articles as $article)
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $article->hinhanh }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $article->tieude }}</h4>
                      <p class="card-text">{{ $article->tomtat }}</p>
                      <a href="{{ route('article.show',$article->ma_bviet) }}">{{ $article->ten_bhat }}</a>
                    </div>
                  </div>
        </div>
        @endforeach
    </div>

@endsection
