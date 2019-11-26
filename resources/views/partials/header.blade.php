<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-light" href="/"><img src="/images/sporters.png" height="80px" class="ml-2"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form method="GET" action="/search" class="form-inline my-2 my-lg-0">
    @csrf
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Zoek!" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Zoek!</button>
    </form>
  </div>
</nav>
