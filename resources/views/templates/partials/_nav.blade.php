<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('blog') }}">Read<i>it</i>.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{ route('posts.index') }}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ route('contacts.form') }}" class="nav-link">Contact</a></li>
        @if (Auth::check())
          <li class="nav-item"><a href="{{ route('forum.index') }}" class="nav-link">Forum</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
