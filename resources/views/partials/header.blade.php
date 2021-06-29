<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/">DC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'characters') active @endif" href="{{route('characters')}}">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::route()->getName() === 'fumetti.index') active @endif" href="{{route('fumetti.index')}}">COMICS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">TV</a>          
        </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </nav>