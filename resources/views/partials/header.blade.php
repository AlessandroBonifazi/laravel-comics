<header>
<?php
  $navlinks = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
?>
    <div class="header-container">
      <img src="/img/dc-logo.png" alt="Logo DC" />
      <nav>
        <ul>
          @foreach ($navlinks as $navlink)
          <li>
            <a href="/">{{$navlink}}</a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </header>