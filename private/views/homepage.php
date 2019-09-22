<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
Home
<?php $this->stop( 'page_title' ) ?>

<?php   $first_post = $blogposts[0];
        $second_post = $blogposts[1];
        $third_post = $blogposts[2];
        $fourth_post = $blogposts[3];
        $fifth_post = $blogposts[4]
?>


    <div class="main__first-post-wrapper">
        <div class="main__first-post-wrapper__container">
            <img class="main__first-post-wrapper__container--blog-img" src="<?= url( '/content/' . $first_post['foto'] ) ?>" alt="blog_pic">
            <div class="main__first-post-wrapper__container--blog-content">
                <h3><?= $first_post['naam'] ?></h3>
                <p><?= $first_post['short'] ?></p>
                <a href="<?= url('/view-blog/blogpost/' . $first_post['id']) ?>" class="readmore__blue">Read more...</a>
            </div>
        </div>
    </div>

    <div class="main__grid">

        <div class="main__grid__post">
            <div class="main__grid__post__container">
                <!-- Input voor image -->
                <img class="main__grid__blog-post--img" src="<?= url( '/content/' . $second_post['foto'] ) ?>" alt="blog_pic">
                <div class="main__grid__blog-post--content">
                    <h3><?= $second_post['naam'] ?></h3>
                    <a href="<?= url('/view-blog/blogpost/' . $second_post['id']) ?>" class="readmore__blue">Read more...</a>
                </div>
            </div>
        </div>

        <div class="main__grid__post">
            <img class="main__grid__species-perch--img" src="content/baars.jpeg" alt="">
            <div class="main__grid__species-perch--content">
                <h3>The Perch</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p class="extraTekst400"> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. .</p></p>
                <a class="readmore__blue">Read more...</a>
            </div>
        </div>

        <div class="main__grid__post--about-us">
            <img class="main__grid__post--about-us--img" src="content/snoekbaars.jpeg" alt="snoekbaars">
            <div class="main__grid__post--about-us--content">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="readmore__blue">Read more...</a>
            </div>

        </div>
        <div class="main__grid__post">
            <div class="main__grid__post__container">
                <!-- Input voor image -->
                <img class="main__grid__blog-post--img" src="<?= url( '/content/' . $third_post['foto'] ) ?>" alt="blog_pic">
                <div class="main__grid__blog-post--content">
                    <h3><?= $third_post['naam'] ?></h3>
                    <a href="<?= url('/view-blog/blogpost/' . $third_post['id']) ?>" class="readmore__blue">Read more...</a>
                </div>
            </div>
        </div>

        <div class="main__grid__post">
            <div class="month">
                <ul>
                    <li class="prev">&#10094;</li>
                    <li class="next">&#10095;</li>
                    <li>August<br><span style="font-size:18px">2017</span></li>
                </ul>
            </div>
            <ul class="weekdays">
                <li>Mo</li>
                <li>Tu</li>
                <li>We</li>
                <li>Th</li>
                <li>Fr</li>
                <li>Sa</li>
                <li>Su</li>
            </ul>
            <ul class="days">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li><span class="active">28</span></li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ul>
        </div>

        <div class="main__grid__post">
            <img class="main__grid__species-zander--img" src="content/snoekbaars.jpeg" alt="">
            <div class="main__grid__species-zander--content">
                <h3>The Zander</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p class="extraTekst400"> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></p>
                <a class="readmore__blue">Read more...</a>
            </div>
        </div>

        <div class="main__grid__post">
            <div class="main__grid__post__container">
                <img class="main__grid__blog-post--img" src="<?= url( '/content/' . $fourth_post['foto'] ) ?>" alt="blog_pic">
                <div class="main__grid__blog-post--content">
                    <h3><?= $fourth_post['naam'] ?></h3>
                    <a href="<?= url('/view-blog/blogpost/' . $fourth_post['id']) ?>" class="readmore__blue">Read more...</a>
                </div>
            </div>
        </div>

        <div class="main__grid__post">
            <div class="main__grid__post__container">
                <!-- Input voor image -->
                <img class="main__grid__blog-post--img" src="<?= url( '/content/' . $fifth_post['foto'] ) ?>" alt="blog_pic">
                <div class="main__grid__blog-post--content">
                    <h3><?= $fifth_post['naam'] ?></h3>
                    <a href="<?= url('/view-blog/blogpost/' . $fifth_post['id']) ?>" class="readmore__blue">Read more...</a>
                </div>
            </div>
        </div>

        <div class="main__grid__post">
            <div class="main__grid__post__helper">
                <div class="main__grid__post__contact-us">
                    <img class="main__grid__post__contact-us--img" src="content/ik.jpeg" alt="">
                    <div class="main__grid__post__contact-us__content">
                        <h2>Contact Us!</h2>
                        <p>We really want to know what you are thinking about this website.</p>
                        <p class="readmore__blue">Contact Us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
