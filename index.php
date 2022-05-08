<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("portpic.png");


        }

        h1 {
            text-align: center;
        }
    </style>

    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <?php while(have_posts()): the_post() ?>
        <img src="<?php the_field("header_image") ?>" width="100%" alt="">
        <h1>About Me</h1>

        <div class="flex">
            <iframe width="560" height="315" src="<?php the_field("youtube_url") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div>
                <h2>Video CV</h2>
                <p><?php the_field("video_cv_description") ?></p>
            </div>
        </div>



        <div class="flex">
        <a href="<?php the_field("written_cv_file") ?>">Written CV</a>
             <div>
        <h2>Written CV</h2>
        <p><?php the_field("written_cv_description") ?></p>
             </div>
          </div>


        
        <h1>Projects</h1>


        <div class="flex">
        <iframe width="560" height="315" src="<?php the_field("cornsnake_yt_url") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div>
        <h2>The Corn Snake</h2>
        <h3><?php the_field("cornsnake_worktype") ?></h3>
        <p><?php the_field("cornsnake_description") ?></p>
              </div>
          </div>

    <?php endwhile ?>

    <?php while(have_posts()): the_post() ?>
        <div class="flex">
        <a href="<?php the_field("pilsner_yt_file") ?>">Click to watch</a>
               <div>
        <h2>Pilsner Commercial</h2>
        <h3><?php the_field("pilsner_worktype") ?></h3>
        <p><?php the_field("pilsner_description") ?></p>
              </div>
        </div>
    <?php endwhile ?>

    <?php while(have_posts()): the_post() ?>
        <div class="flex">
    <a href="<?php the_field("script_file") ?>">Broken Zipper Script</a>
                <div>
        <h2>Broken Zipper</h2>
        <h3><?php the_field("script_worktype") ?></h3>
        <p><?php the_field("script_description") ?></p>
             </div>
        </div>
    <?php endwhile ?>

    <?php while(have_posts()): the_post() ?>
       <div class="flex">
        <img src="<?php the_field("kiss_gif") ?>" width="25%" alt="">
                <div>
        <h2>KISS website</h2>
        <h3><?php the_field("kiss_worktype") ?></h3>
        <p><?php the_field("kiss_description") ?></p>
                </div>
        </div>
    <?php endwhile ?>

    <?php while(have_posts()): the_post() ?>
         <div class="flex">
        <img src="<?php the_field("initials_") ?>" width="45%" alt="">
             <div>
        <h2>Initials</h2>
        <h3><?php the_field("initials_worktype") ?></h3>
        <p><?php the_field("initials_description") ?></p>
              </div>
        </div>
    <?php endwhile ?>

    <?php while(have_posts()): the_post() ?>
          <div class="flex">
           <img src="<?php the_field("trapholt_img") ?>" width="40%" alt="">
              <div>
        <h2>Trapholt</h2>
        <h3><?php the_field("trapholt_worktype") ?></h3>
        <p><?php the_field("trapholt_description") ?></p>
              </div>
        </div>
    <?php endwhile ?>

    



    <div class="footer">


    <?php while(have_posts()): the_post() ?>
    <?php wp_footer() ?>
        <h2>Contact Me</h2>
        <p><?php the_field("phonenr_text") ?></p>
        <p><?php the_field("mail_text") ?></p>
    <?php endwhile ?>
    </div>
    
</body>

</html>