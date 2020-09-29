<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
      <div class="wrapper header__nav-container">
  
        <a href="/" class="header__logo">
        logo
        </a>
  
        <button 
          id="nav-toggle"
        >
          <span class="show">
            <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M0 3.5h15m-15 8h15m-15-4h15" stroke="currentColor"></path></svg>
          </span>

          <span>
            <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M1.5 1.5l12 12m-12 0l12-12" stroke="currentColor"></path></svg>
          </span>

        </button>
  
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/examples">Examples</a>
            </li>
            <li>
              <a href="/">Page</a>
            </li>
            <li>
              <a href="/">Page</a>
            </li>
            <li>
              <a class="btn btn--cta btn--no-shadow btn--sm" href="/">Page</a>
            </li>
          </ul>
        </nav>
  
      </div>
    </header>



<main role="main" id="main">