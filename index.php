<html lang="en">
    <head>
        <title> endygamedev. </title>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(54925096, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>

        <noscript><div><img src="https://mc.yandex.ru/watch/54925096" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <!-- My Font file -->
        <link href="https://fonts.googleapis.com/css?family=Spectral&display=swap" rel="stylesheet">

        <link rel="shortcut icon" type = "image/png" href="Images/icon.png">
        <!-- My CSS file -->
        <link rel="stylesheet" type="text/css" href="style.css" !important>
        <link rel="stylesheet" type="text/css" href="animate.css" !important>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"> </script>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
  		    var arrLang = new Array();
  		    arrLang['en'] = new Array();
  		    arrLang['rus'] = new Array();


  		    arrLang['en']['about_title'] = '👋 Hi, my name is Egor. ';
  		    arrLang['en']['about_text'] = 'I study at UNECON University applied Mathematics and Computer Science, I am engaged in the development of cool games. I managed to finish the courses: "Algorithmization and programming technologies", "Fundamentals of Object-Oriented Programming", "Creating Windows Applications in the C# Programming Language", "Neural Networks and Simulation", "Object-Oriented Programming in Java". I am pretty good at poking around in Python.';
  		    arrLang['en']['about_date'] = '(11 August 2019 year)';
  		    arrLang['en']['projects_title'] = '👾 Here are a couple of my projects.';
  		    arrLang['en']['contact_title'] = '📧 If you need me, write here.';

  		    arrLang['rus']['about_title'] = '👋 Привет, меня зовут Егор.';
  		    arrLang['rus']['about_text'] = 'Учусь в СПбГЭУ на факультете прикладной математики и информатики, занимаюсь разработкой кулецких игр. Успел закончить курсы: "Алгоритмизация и технологии программирования", "Основы объектно-ориентированного программирования", "Создание Windows-приложений на языке программирования C#", "Нейронные сети и имитационное моделирование", "Объектно-ориентированное программирование на языке Java". Достаточно неплохо шарю в Python.';
  		    arrLang['rus']['about_date'] = '(11 августа 2019 год)';
  		    arrLang['rus']['projects_title'] = '👾 Вот парочка моих проектов.';
  		    arrLang['rus']['contact_title'] = '📧 Если буду нужен, то пиши сюда.';

		    $(function() {
		      $('.translate').click(function() {
		        var lang = $(this).attr('id');

		        $('.lang').each(function(index, item) {
		          $(this).text(arrLang[lang][$(this).attr('key')]);
		        });
		      });
		    });
  		</script>

    </head>

    <body>
    	<div class = "MainContainer">
        	<div class="ParallaxContainer">
        		<div id = "particles-js">
                <h1 class = "title animated zoomIn"> endygamedev. </h1>
        		</div>

            <script type="text/javascript">
                if (screen.width > 1080) document.write ('<script type="text/javascript" src="particles.js"></sc' + 'ript>');
            </script>

            <script type="text/javascript">
                if (screen.width > 1080) document.write ('<script type="text/javascript" src="app.js"></sc' + 'ript>');
            </script>
        	</div>

        <div class="ContentContainer">
        	<button id="en" class="translate en"> EN</button>
  			  <button id="rus" class="translate rus"> RUS </button>
        	<div class="Content">
        			<h2 class="lang" key = "about_title"> 👋 Привет, меня зовут Егор. </h2>
        			<div class = "lang" key = "about_text"> Учусь в СПбГЭУ на факультете прикладной математики и информатики, занимаюсь разработкой кулецких игр. Успел закончить курсы: "Алгоритмизация и технологии программирования", "Основы объектно-ориентированного программирования", "Создание Windows-приложений на языке программирования C#", "Нейронные сети и имитационное моделирование", "Объектно-ориентированное программирование на языке Java". Достаточно неплохо шарю в Python. </div>
				      <sub class = "lang" key = "about_date"> (11 августа 2019 год) </sub>

        			<h2 class="lang" key = "projects_title"> 👾 Вот парочка моих проектов. </h2>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                      <!-- Wrapper for slides TODO: HERE YOU CAN ADD MORE ITEMS-->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <a href="https://play.google.com/store/apps/details?id=om.ENDY.TimsAdventuress"> <img src="Images/tim.png"> </a>
                        </div>
                        <div class="item">
                          <a href="https://endygamedev.itch.io/plvnetkey"> <img src="Images/key.png"> </a>

                        </div>
                        <div class="item">
                            <a href="https://endygamedev.itch.io/galaga"> <img src="Images/galaga.png"> </a>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>

                          <!-- Indicators TODO: HERE YOU CAN ADD MORE PICTURES -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active" id = "indicators"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" id = "indicators"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" id = "indicators"></li>
                          </ol>
                      </div>
                    </div>

        			<h2 class="lang" key = "contact_title"> 📧 Если буду нужен, то пиши сюда. </h2>

              <form class = "contact-form" action="contactfrom.php" method="post">
                <input type = "text" name = "name" class = "form-control" placeholder="Full Name"> <br>
                <input type = "text" name = "mail" class = "form-control" placeholder="Yout E-mail Adress"> <br>
                <input type = "text" name = "subject" class = "form-control" placeholder="Subject"> <br>
                <textarea name = "message" placeholder="Message"></textarea> <br>
                <button type="submit" name="submit">SEND MAIL</button>
              </form>

        			<div class="list" align="center">
        				<li> <a href="https://t.me/endygamedev" class="link" id="contacts"> Telegram. </a> </li>
        				<li> <a href="https://vk.com/endygamedev" class="link" id="contacts"> VK. </a> </li>
        				<li> <a href="https://www.instagram.com/endygamedev/" class="link" id="contacts"> Instagram. </a> </li>
        				<li> <a href="mailto:egorbronnikov65@gmail.com" class="link" id="contacts"> Mail. </a> </li>
        				<li> <a href="https://github.com/endygamedev" class="link" id="contacts"> GitHub. </a> </li>
                <li> <a href="https://endygamedev.itch.io/" class="link" id="contacts"> Itch. </a> </li>
        			</div>
        	</div>
        	<div class="footer" align="center">
					       <span> 2019 &copy; endygamedev. </span> <span> Design: Egor Bronnikov </span>
			    </div>
    </div>
    </body>
</html>
