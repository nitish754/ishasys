<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.head')
</head>
<body>
<!-- nav start here -->
<nav id="navbar" class="push better-nav fixed-top">
  <div class="container">
    <div class="head">
      <a href="#" class="brand">
        <div class="logo">
          <img class="image" src="{{ asset('image/logo.png') }}" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Branding" />
        </div>
        <div class="title">
          <h3>Fixed</h3>
        </div>
      </a>
    </div>
    <div class="body">
      <ul>
        <li class="home"><a href="#">Home</a></li>
        <li class="page"><a href="#">Portfolio</a></li>
        <li class="blog active dropdown"><a href="#">Blog</a>
          <span class="selector"></span>
          <ul>
            <li><a href="#">Latest</a></li>
            <li><a href="#">Popular</a></li>
            <li class="dropdown"><a href="#">Categories</a>
              <span class="selector"></span>
              <ul>
                <li><a href="#">HTML</a></li>
                <li class="dropdown"><a href="#">CSS</a>
                  <span class="selector"></span>
                  <ul>
                    <li><a href="#">Something really long like a sentence or something!?</a></li>
                    <li><a href="#">CSS3</a></li>
                  </ul>
                </li>
                <li><a href="#">JavaScript</a></li>
                <li class="dropdown"><a href="#">Others</a>
                  <span class="selector"></span>
                  <ul>
                    <li><a href="#">Bootstrap</a></li>
                    <li><a href="#">JQuery</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="page"><a href="#">Contacts</a></li>
        <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <span class="selector"></span>
          <ul>
            <li><a href="#">RSS</a></li>
            <li class="search clearfix">
              <form>
                <input type="text" placeholder="Search" />
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="toggle">
      <a href="#navbar-slide">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</nav>

<!-- nav end here  -->
    