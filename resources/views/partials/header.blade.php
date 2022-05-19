<header>
<?php
  $navlinks = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
?>
    <div class="header-container">
      <img src="/img/dc-logo.png" alt="Logo DC" />
      <nav>
        <ul>
          <li>
            @foreach ($navlinks as $navlink)
              <a href="#">{{$navlink}}</a>
            @endforeach
          </li>
        </ul>
      </nav>
    </div>
  </header>