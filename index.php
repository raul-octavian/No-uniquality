<?php get_header();?>

<body>
    <header class="header-flex">
        <nav class="navigation">

            <ul class="navigation-list">
                <li class="navigation-item">
                    <a href="https://sdgs.un.org/goals" target="_blank">
                        <img src="<?php the_field('header-logo'); ?>" /></a>

                </li>

                <li class="navigation-item">
                    <a href="">
                        <i class="<?php the_field('home-logo'); ?> fa-2x">
                        
                    </i>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <main>
        <section class="title-banner flex padding_control">
            <div class="title-banner__img">
    
            <img src="<?php the_field('goal-symbol'); ?> " alt="" srcset="">
            </div>
            <div class="title-banner__text">
                <div>
                    <h1><?php the_field('banner-h1'); ?></h1>
                    <h2>
                    <?php the_field('banner-h2'); ?>
                    </h2>
                    <h3><?php the_field('banner-h3'); ?></h3>
                </div>
            </div>
        </section>
        <section class="what-is flex">
            <div class="container-box">
                <div class="title-banner__text">
                <?php the_field('about-text'); ?>
                </div>
            </div>
            <div class="container-box">
                <article class="container-iframe">
                    <iframe src="<?php the_field('about-video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
            	        picture-in-picture" width="560" height="349" allowfullscreen class="resp-iframe"></iframe>
                </article>
            </div>


        </section>
        <section class="how-to-contribute flex">

            <div class="container-box">
                <div class="contribute-container-img ">

                    <img class="image"
                        src="<?php the_field('contribute-img'); ?>"
                        alt="" srcset="" />
                </div>
            </div>

            <div class="container-box">
                <article class="small-about title-banner__text">
                    <h2><?php the_field('contribute-h2'); ?> </h2>
                    <?php the_field('contribute-text'); ?>
                </article>
            </div>

        </section>
        <section class="what-has-been-done"></section>
    </main>

    <?php get_footer();?>
    
</body>

</html>