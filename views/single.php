<!DOCTYPE HTML>

<html>

<head>
    <title>Single - Future Imperfect by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/views/assets/css/main.css" />
</head>

<body class="single">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="#">Future Imperfect</a></h1>
            <nav class="links">
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Ipsum</a></li>
                    <li><a href="#">Feugiat</a></li>
                    <li><a href="#">Tempus</a></li>
                    <li><a href="#">Adipiscing</a></li>
                </ul>
            </nav>
            <nav class="main">
                <ul>
                    <li class="search">
                        <a class="fa-search" href="#search">Search</a>
                        <form id="search" method="get" action="#">
                            <input type="text" name="query" placeholder="Search" />
                        </form>
                    </li>
                    <li class="menu">
                        <a class="fa-bars" href="#menu">Menu</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Menu -->
        <section id="menu">

            <!-- Search -->
            <section>
                <form class="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
            </section>

            <!-- Links -->
            <section>
                <ul class="links">
                    <li>
                        <a href="#">
                            <h3>Lorem ipsum</h3>
                            <p>Feugiat tempus veroeros dolor</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Dolor sit amet</h3>
                            <p>Sed vitae justo condimentum</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Feugiat veroeros</h3>
                            <p>Phasellus sed ultricies mi congue</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Etiam sed consequat</h3>
                            <p>Porta lectus amet ultricies</p>
                        </a>
                    </li>
                </ul>
            </section>

            <!-- Actions -->
            <section>
                <ul class="actions vertical">
                    <li><a href="#" class="button big fit">Log In</a></li>
                </ul>
            </section>

        </section>

        <!-- Main -->
        <div id="main">

            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="#"><?= $newsItem['title'] ?></a></h2>
                        <p><?= $newsItem['short_content'] ?></p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01"><?= $newsItem['date'] ?></time>
                        <a href="#" class="author"><span class="name"><?= $newsItem['author'] ?></span><img src="/views/images/avatar.jpg" alt="" /></a>
                    </div>
                </header>
                <span class="image featured"><img src="<?= $newsItem['preview'] ?>" alt="" /></span>
                <p><?= $newsItem['content'] ?></p>
                <footer>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon fa-heart">28</a></li>
                        <li><a href="#" class="icon fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

        </div>

        <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
                <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
        </section>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
