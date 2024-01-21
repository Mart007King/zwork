<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sidebar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="sidebar">
    <div class="sidebar-top-wrapper">
      <div class="sidebar-top">
        <a href="#" class="logo__wrapper">
          <img src="assets/astra.svg" alt="Logo" class="logo-small">
          <span class="hide">Astra</span>
        </a>
      </div>
      <div class="expand-btn"> <!-- svg --> </div>
    </div>
    <div class="search__wrapper">
      <!-- svg search icon -->
      <input type="search" placeholder="Search for anything...">
    </div>
    <div class="sidebar-links">
      <h2>Main</h2>
      <ul>
        <li>
          <a href="#dashboard" title="Dashboard" class="tooltip">
            <!-- svg dashboard -->
            <span class="link hide">Dashboard</span>
            <span class="tooltip__content">Dashboard</span>
          </a>
        </li>
        <!-- more links -->
      </ul>
    </div>

    <div class="sidebar-links bottom-links">
      <h2>Settings</h2>
      <ul>
        <li>
          <a href="#settings" title="Settings" class="tooltip">
            <!-- svg icon -->
            <span class="link hide">Settings</span>
            <span class="tooltip__content">Settings</span>
          </a>
        </li>
        <!-- more links -->
    </div>
    <div class="divider"></div>
    <div class="sidebar__profile">
      <div class="avatar__wrapper">
        <img class="avatar" src="assets/profile.png" alt="Joe Doe Picture">
        <div class="online__status"></div>
      </div>
      <section class="avatar__name hide">
        <div class="user-name">Joe Doe</div>
        <div class="email">joe.doe@atheros.ai</div>
      </section>
      <a href="#logout" class="logout">
        <!-- svg logout -->
      </a>
    </div>
    </div>
  </nav>
  <script src="script.js"></script>
</body>

</html>