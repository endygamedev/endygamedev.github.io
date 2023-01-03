<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/47fd0040bd.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/png" href="/favicon.png">

        <title>Egor Bronnikov</title>
    </head>
    <body>
        <main class="index">
            <section class="article-list">
                <h1>Posts</h1>
                <div class="article">
                    <span>July 14, 2022</span>
                    <div class="remote">
                        <a href="https://github.com/endygamedev/network-traffic">Collecting traffic statistics</a>
                    </div>
                </div>
                <div class="article">
                    <span>June 28, 2022</span>
                    <div class="remote">
                        <a href="https://github.com/endygamedev/social-network-analysis">Social network analysis (SNA)</a>
                    </div>
                </div>
                <div class="article">
                    <span>November 19, 2021</span>
                    <div>
                        <a href="./posts/build-server/">Build your own home server</a>
                    </div>
                </div>
                <div class="article">
                    <span>October 24, 2021</span>
                    <div>
                        <a href="./posts/monads/">How monads work?</a>
                    </div>
                </div>
                <div class="article">
                    <span>August 25, 2021</span>
                    <div>
                        <a href="./posts/disk-size/">Increasing / directory at the expense of the /home directory</a>
                    </div>
                </div>
                <div class="article">
                    <span>July 16, 2021</span>
                    <div>
                        <a href="./posts/hello-world/">Hello World</a>
                    </div>
                </div>
            </section>
            <aside>
                <div class="person">
                    <div class="avatar">
                        <img src="./assets/avatar.png" alt="Picture of myself." width="150" height="150">
                    </div>
                    <div class="name">
                        <h1>Egor Bronnikov</h1>
                        <p>@endygamedev</p>
                    </div>
                </div>
                <div class="about">
                    Software Engineer, student at Saint Petersburg State University of Economics. Writing software to improve the experience of writing software. Interested in C/C++, Python, Bash and Linux.
                </div>
                <ul class="external-links">
                    <li>
                        <span class="icon"><i class="fa-brands fa-github-alt"></i></span>
                        <span class="link">
                            <a href="https://github.com/endygamedev" target="blank_">endygamedev</a>
                        </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-brands fa-telegram"></i></span>
                        <span class="link">
                            <a href="https://t.me/endygamedev" target="blank_">endygamedev</a>
                        </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-solid fa-at"></i></span>
                        <span class="link">
                            <a href="mailto:bronnikov.40@mail.ru" target="blank_">bronnikov.40@mail.ru</a>
                        </span>
                    </li>
                </ul>
                <div class="cv">
                        <span class="icon"><i class="fa-solid fa-id-card"></i></span>
                        <span class="link">
                            <a href="./cv">Curriculum Vitae</a>
                        </span>
                </div>
            </aside>
        </main>
        <footer>
            <span>&copy; 2019-<?php echo date("Y"); ?> Egor Bronnikov</span>
        </footer>
    </body>
</html>
