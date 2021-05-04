<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>contact-app</title>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      <div class="top-right links">
        @if(Auth::user())
          <a href="{{ url('/home') }}">Home</a>
          <a href="{{ url('/logout') }}">Logout</a>
        @else
          <a href="{{ route('login') }}">Login</a>
        @endif
      </div>
      @endif
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
              <div class="panel-heading">contact-app</div>
              @if(Auth::user())
              <!-- Table -->
              <table class="table">
                <tr>
                  <th>Character</th>
                  <th>Real Name</th>
                </tr>
                @foreach($characters as $key => $value)
                  <tr>
                  <td>{{ $key }}</td><td>{{ $value }}</td>
                  </tr>
                @endforeach
              </table>
              @endif
            </div>
            @if(Auth::guest())
            <a href="/login" class="btn btn-info"> You need to login >></a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </body>
</html>