<div class="sidebar-box ftco-animate">
    <div class="categories">
      <h3>Categories</h3>
      @foreach($categories as $categorie)
        <li>
            <a href="#">
              {{ $categorie->name }} [{{ count($categorie->posts) }}]
              <span class="ion-ios-arrow-forward"></span>
            </a>
        </li>
      @endforeach
    </div>
  </div>