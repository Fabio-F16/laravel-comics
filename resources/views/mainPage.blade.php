@extends ('layouts.app')

@section('title')
   laravel comics
@endsection


<!-- start content -->
@section('content')
<main>
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($comics as $comic)
          <div class="col-12 col-md-2 m-3 text-center">
            
            <img src="{{ $comic['thumb'] }}" alt="img">
            <p>{{ $comic['title'] }}</p>

          </div>
            
        @endforeach
    </div>
  </div>
</main>

@endsection
<!-- end content -->