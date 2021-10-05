<!-- .col-md-8 -->
<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    <div class="sidebar-box">
      <form action="#" class="search-form">
        <div class="form-group">
          <span class="icon icon-search"></span>
          <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
        </div>
      </form>
    </div>
    
      @include('categories._index', [
        'categories' => \App\Models\Categorie::orderBy('name', 'ASC')->get()
        ])

      @include('posts._recents', [
        'posts' => \App\Models\Post::orderBy('created_at', 'desc')->take(3)->get()
      ])

      @include('tags._cloud', ['tags' => \App\Models\Tag::orderBy('name', 'asc')->get()])

    

  </div>