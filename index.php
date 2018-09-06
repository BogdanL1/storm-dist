<?php get_header(); ?>
<div class="content-viewport">

      <div class="content-viewport__inner">
        <section class="index-content" id="index-content">
          <div class="index-content__inner">
            <h1 class="index-content__title">
              ПРОФЕССИОНАЛЬНАЯ <br> 
              <span class="fw-normal">РАЗРАБОТКА САЙТОВ</span> <br>
              <span class="fw-bold">С НУЛЯ ПОД КЛЮЧ</span>
              <span class="index-content__title-box">
                <span class="index-content__title-box--top"></span>
                <span class="index-content__title-box--right"></span>
                <span class="index-content__title-box--bottom"></span>
                <span class="index-content__title-box--left"></span>
              </span>
            </h1>

            <div class="services">
              <ul class="services__list">
                <li class="services__list-item">Разработка сайтов</li>
                <li class="services__list-item">WEB - дизайн</li>
                <li class="services__list-item">Копирайтинг</li>
                <li class="services__list-item">SEO продвижение</li>
              </ul>
            </div>
          </div>
        </section>


		<?php $the_query = new WP_Query('p=1'); ?>
		<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata();?>


        <section class="index-content our-services" id="our-services-content">
          <div class="index-content__inner">
            <h1 class="index-content__title">
              НАШИ 
              УСЛУГИ
              <span class="storm-ghost">storm</span>
              
            </h1>

            <div class="our-services__list-wrap">
              <ul class="our-services__list">
                <li class="our-services__list-item  our-services__list-item--comp">
                  <p class="our-services__text">
                    <a href="layout.html" class="our-services__link">
                      <span>Верстка</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>
                
                <li class="our-services__list-item  our-services__list-item--paint">
                  <p class="our-services__text">
                    <a href="design.html" class="our-services__link">
                      <span>Дизайн</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>

                <li class="our-services__list-item  our-services__list-item--seo">
                  <p class="our-services__text">
                    <a href="seo.html" class="our-services__link">
                      <span>SEO</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>

                <li class="our-services__list-item  our-services__list-item--dev">
                  <p class="our-services__text">
                    <a href="develop.html" class="our-services__link">
                      <span>Разработка сайтов</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>

                <li class="our-services__list-item  our-services__list-item--fix">
                  <p class="our-services__text">
                    <a href="develop.html" class="our-services__link">
                      <span>Fix bugs</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>

                <li class="our-services__list-item  our-services__list-item--globus">
                  <p class="our-services__text">
                    <a href="rise.html" class="our-services__link">
                      <span>Продвижение сайтов</span>
                      - от <b>1000</b> грн
                    </a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </section>


        <section class="index-content advantages" id="advantages">
          <div class="index-content__inner">
            <h1 class="index-content__title">
              НАШИ 
              ПРЕИМУЩЕСТВА
              <span class="storm-ghost">storm</span>
            </h1>

            <div class="advantages__list-wrap">
              <ul class="advantages__list">
                <li class="advantages__list-item  advantages__list-item--like">
                  <p class="advantages__text">
                    Качественно и быстро
                  </p>
                </li>

                <li class="advantages__list-item  advantages__list-item--price">
                  <p class="advantages__text">Приемлимые цены</p>
                </li>

                <li class="advantages__list-item  advantages__list-item--project">
                  <p class="advantages__text">Особое внимание 
                    к каждому проекту</p>
                </li>

                <li class="advantages__list-item  advantages__list-item--work">
                  <p class="advantages__text">Любим свою работу</p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <section class="index-content steps" id="steps">
          <div class="index-content__inner">
            <h1 class="index-content__title">
              ЭТАПЫ РАБОТЫ
              <span class="storm-ghost">storm</span>
            </h1>

            <div class="steps__list-wrap">
              <ul class="steps__list">
                <li class="steps__list-row">
                  <div class="steps__list-item  steps__list-item--project">
                    <span class="steps__arrow steps__arrow-1"></span>
                    <span class="steps__arrow steps__arrow-2"></span>
                    <p class="steps__text">
                      ПРОЕКТИРОВАНИЕ 
                      САЙТА
                    </p>
                  </div>

                  <div class="steps__list-item  steps__list-item--design">
                    <span class="steps__arrow steps__arrow-3"></span>
                    <span class="steps__arrow steps__arrow-4"></span>
                    <p class="steps__text">
                      Дизайн
                    </p>
                  </div>

                  <div class="steps__list-item  steps__list-item--prog">
                    <span class="steps__arrow steps__arrow-5"></span>
                    <span class="steps__arrow steps__arrow-6"></span>
                    <p class="steps__text">
                      ПРОГРАММИРОВАНИЕ
                    </p>
                  </div>
                </li>

                <li class="steps__list-row">
                  <div class="steps__list-item  steps__list-item--content">
                    <span class="steps__arrow steps__arrow-7"></span>
                    <span class="steps__arrow steps__arrow-8"></span>
                    <p class="steps__text">
                      НАПОЛНЕНИЕ
                    </p>
                  </div>

                  <div class="steps__list-item  steps__list-item--support">
                    <span class="steps__arrow steps__arrow-9"></span>
                    <span class="steps__arrow steps__arrow-10"></span>
                    <p class="steps__text">ПОДДЕРЖКА</p>
                  </div>

                  <div class="steps__list-item  steps__list-item--seo">
                    <p class="steps__text">ПРОДВИЖЕНИЕ</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <?php $the_query = new WP_Query('p=18'); ?>
		<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata();?>

		<?php $the_query = new WP_Query('p=50'); ?>
		<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata();?>
        
      </div>

      <div class="main-pagi">
        <ul class="main-pagi__list">
          <li class="main-pagi__list-item  main-pagi__list-item--active">
            <a href="#index-content" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">1</span></a>
          </li>
          
          <li class="main-pagi__list-item">
            <a href="#about-content" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">2</span></a>
          </li>
          
          <li class="main-pagi__list-item">
            <a href="#our-services-content" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">3</span></a>
          </li>
          
          <li class="main-pagi__list-item">
            <a href="#advantages" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">4</span></a>
          </li>
          
          <li class="main-pagi__list-item">
            <a href="#steps" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">5</span></a>
          </li>
          
          <li class="main-pagi__list-item">
            <a href="#portfolio" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">6</span></a>
          </li>

          <li class="main-pagi__list-item">
            <a href="#contacts" class="main-pagi__link"><span class="main-pagi__link-fill"></span><span class="main-pagi__link-num">7</span></a>
          </li>
        </ul>
      </div>

      <div class="scroll-down">
        <span class="scroll-down__text">SCROLL DOWN</span>
      </div>
    </div>

  </div>

  <div id="overlay" class="overlay"></div>


<script type="text/javascript">
	jQuery(document).ready(function($) {
    var videobackground = new $.backgroundVideo($('#main-content'), {
      "align": "centerXY",
      "width": 1280,
      "height": 720,
      "path": "http://storm-dist/wp-content/themes/storm/media/",
      "filename": "sea_2",
      "types": ["mp4", "ogv", "webm"],
      "preload": true,
      "autoplay": true,
      "loop": true,
      "muted": true
    });
  });
</script>

/*=============================
  START POSITION OF THE ELEMENTS
  =============================
  */
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#index-content').addClass('content-active');
    $('.index-content__title-box--top').addClass('to-right');
    $('.index-content__title-box--right').addClass('to-bottom');
    $('.index-content__title-box--bottom').addClass('to-left');
    $('.index-content__title-box--left').addClass('to-top');
    var pageH = $('.index-content').height();
    $('.content-viewport__inner').height(pageH);
  });

</script>

/*=============================
      PORTFLOLIO SCROLLBAR CHANGE
  ===============================
  */
  <script type="text/javascript">
    (function($){
        $(window).on("load",function(){
            $("#scrollbar").mCustomScrollbar({
              scrollbarPosition: 'otside'
            });
        });
    })(jQuery);
</script>

    /*=============================
              SCROLLING SLIDES
  =============================
  */
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  $('#main-content').on('mousewheel', function(event) {
      var delta = event.deltaY;

      if(delta > 0) {
        $('.main-pagi__list-item--active:not(:first-of-type)').removeClass('main-pagi__list-item--active').prev().addClass('main-pagi__list-item--active');
          str = $('.main-pagi__list-item--active').children('.main-pagi__link').attr("href");
          //alert(str);
          $(str).addClass('content-active').siblings().removeClass('content-active');
          $('.main-nav__list-item').removeClass('main-nav__list-item--active');
          $('.main-nav__list-item:not(.main-nav__list-item--active) a[href="'+str+'"').parent().addClass('main-nav__list-item--active').siblings().removeClass('main-nav__list-item--active');
      }
      else {
          $('.main-pagi__list-item--active:not(:last-of-type)').removeClass('main-pagi__list-item--active').next().addClass('main-pagi__list-item--active');
          str = $('.main-pagi__list-item--active').children('.main-pagi__link').attr("href");
          //alert(str);
          $(str).addClass('content-active').siblings().removeClass('content-active');
          $('.main-nav__list-item').removeClass('main-nav__list-item--active');
          $('.main-nav__list-item:not(.main-nav__list-item--active) a[href="'+str+'"').parent().addClass('main-nav__list-item--active').siblings().removeClass('main-nav__list-item--active');
      }
  });
  });
  </script>
<?php get_footer( ); ?>