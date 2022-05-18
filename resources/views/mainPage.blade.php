@extends ('layouts.app')

@section('title')
   laravel comics
@endsection


<!-- start content -->
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      @foreach ($comics as $comic)
          <div class="col-12 col-md-2 m-3 text-center">
            <a href="cardDetails">
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
              <p>{{ $comic['title'] }}</p>
            </a>
          </div>
            
        @endforeach
    </div>
  </div>

@endsection
<!-- end content -->