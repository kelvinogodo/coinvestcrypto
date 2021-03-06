<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/blog.css')}}">
    <link rel="icon" href="{{asset('/images/coininvest.png')}}">
    <title>blog</title>
</head>
<body>
    <!-- this is the header section that contains the logo and the navigation bars   -->
    <header id="head">
        <!-- this is the logo container -->
        <div class="logo-container">
            <img src="{{asset('/images/coininvest22.png')}}" alt="" class="logo">
        </div>

        <!-- this is the navigation bar  for the destop view -->
        <nav class="navbar">

            <ul class="navlist">
                <li class="tab">
                    <!-- these are the navbar links to different pages -->
                    <a href="{{route("index")}}" class="link">home</a>
                </li>
                <li class="tab">
                    <a href="{{route("how_it_works")}}" class="link">how it works</a>
                </li>
                <li class="tab">
                    <a href="{{route("blog")}}" class="link">blog</a>
                </li>
                <li class="tab">
                    <a href="{{route("about")}}" class="link">about</a>
                </li>
                <li class="tab">
                    <a href="{{route("contact")}}" class="link">contact</a>
                </li>
            </ul>
        </nav>

        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="../images/1193.png" alt=""  id="close-sidebar" class="close-btn">
            </div>
         <ul class="list-items">
            <li><a href="{{route("index")}}">home <img src="{{asset('/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
             <li><a href="{{route("contact")}}">contact  <img src="{{asset('/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
              <li><a href="{{route("blog")}}">blog  <img src="{{asset('/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="{{route("about")}}">about <img src="{{asset('/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="{{route("how_it_works")}}">how it works  <img src="{{asset('/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
         </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->

        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </header>
<!-- end of the header section -->
    <main class="wrapper">
        <!-- this is the blog header that has the text 'blog' written on it  -->
        <div class="head-image-container">
            <div class="head-image">
                <h1>blog</h1>
            </div>
        </div>
        <!-- this is the blog posts container  -->
        <section class="blogpost-container">
            <!-- this is the left section of blog post that contains majore posts  -->
            <section class="blogpost">
                <!-- this is this big post card in blogpost  -->
                    <div class="post-card">
                        <img src="{{asset('/images/1000_F_261258321_GP0Q6btipSzYzOQYQCvM8xzbU78jebdk.jpg')}}" alt="" class="post-image">
                        <div class="text-area">
                            <!-- this is the post header  -->
                            <h5>Do you know?</h5>
                            <!-- this is the blog body  -->
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime
                            </p>
                            <!-- this is th blog post date -->
                            <h6>posted a day ago</h6>
                            <!-- this section contains veiw icon, comment icon and a litle comment section -->
                            <div class="post-data">
                                <div class="comment-section">
                                    <input type="text" name="comment" id="" class="comment-input" placeholder="comment">
                                </div>
                                <div class="post-icon-container">
                                    <img src="{{asset('/images/comment.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/paper-plane.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/view.png')}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                <div class=" side-post-container">
                    <div class="side-post-card">
                        <img src="{{asset('/images/yellow.jpg')}}" alt="" class="post-image">
                        <div class="text-area">
                            <h5>the benefits of trading with coinvestcrypto</h5>
                            <p>dogs are the most precious pets you would ever want to have, see why...

                            </p>
                            <div class="post-data-for-small-card">
                                <h6>posted 5mins ago</h6>
                                <div class="post-icon-container-for-small-card">
                                    <img src="{{asset('/images/comment.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/paper-plane.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/view.png')}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-post-card">
                        <img src="{{asset('/images/happy-diverse-business-people-making-deal_53876-159561.jpg')}}" alt="" class="post-image">
                        <div class="text-area">
                            <h5>coins you should go for in 2022</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime

                            </p>
                            <div class="post-data-for-small-card">
                                <h6>posted 3mins ago</h6>
                                <div class="post-icon-container-for-small-card">
                                    <img src="{{asset('/images/comment.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/paper-plane.png')}}" alt="" class="post-icon">
                                    <img src="{{asset('/images/view.png')}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="side-bar" >
                <div class="recent-post">
                    <div class="recent-post-img-container">
                        <h1>recent posts</h1>
                    </div>
                    <div class="recent-post-img-container">
                        <h1>recent posts</h1>
                    </div>
                    <div class="social-media-handle">

                            <h1 class="grey-bg">follow us on</h1>
                            <div class="social-media-container">
                                <img src="{{asset("/images/facebook.png")}}" alt="" class="post-icon"><p>facebook</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/insta.png")}}" alt="" class="post-icon"><p>instagram</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/whatsapp.png")}}" alt="" class="post-icon"><p>whatsapp</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/mail.png")}}" alt="" class="post-icon"><p>email</p>
                            </div>
                    </div>
                </div>
            </aside>
        </section>
    </main>
    <main class="wrapper">
        <div class="head-image-container">
            <div class="head-image">
                <h1>featured post</h1>
            </div>
        </div>
        <section class="blogpost-container">
            <section class="blogpost">
                    <div class="post-card">
                        <img src="{{asset("/images/195.jpg")}}" alt="" class="post-image">
                        <div class="text-area">
                            <h5>Do you want to become a crypto guru?</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime
                            </p>
                            <h6>posted 3mins ago</h6>
                            <div class="post-data">
                                <div class="comment-section">
                                    <input type="text" name="comment" id="" class="comment-input" placeholder="comment">
                                </div>
                                <div class="post-icon-container">
                                    <img src="{{asset("/images/comment.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/view.png")}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                <div class=" side-post-container">
                    <div class="side-post-card">
                        <img src="{{asset("/images/stock-market-analysis-concept_52683-40756.webp")}}" alt="" class="post-image">
                        <div class="text-area">
                            <h5>the economic importance of crypto trading</h5>
                            <p>dogs are the most precious pets you would ever want to have, see why...

                            </p>
                            <div class="post-data-for-small-card">
                                <h6>posted 3mins ago</h6>
                                <div class="post-icon-container-for-small-card">
                                    <img src="{{asset("/images/comment.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/view.png")}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-post-card">
                        <img src="{{asset("/images/2444379.jpg")}}" alt="" class="post-image">
                        <div class="text-area">
                            <h5>secrets of the crypto market</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae tempore maxime

                            </p>
                            <div class="post-data-for-small-card">
                                <h6>posted 3mins ago</h6>
                                <div class="post-icon-container-for-small-card">
                                    <img src="{{asset("/images/comment.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon">
                                    <img src="{{asset("/images/view.png")}}" alt="" class="post-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="side-bar" >
                <div class="recent-post">
                    <div class="recent-post-img-container featured-post">
                        <h1>featured posts</h1>
                    </div>
                    <div class="recent-post-img-container featured-post">
                        <h1>featured posts</h1>
                    </div>
                    <div class="social-media-handle">

                            <h1 class="grey-bg">post title</h1>
                            <div class="social-media-container">
                                <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon"><p>how to create wallet</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon"><p>how to create account with us</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon"><p>why choose us?</p>
                            </div>
                            <div class="social-media-container">
                                <img src="{{asset("/images/paper-plane.png")}}" alt="" class="post-icon"><p>is this paltform secure</p>
                            </div>
                    </div>
                </div>
            </aside>
        </section>
    </main>
    <!-- footer section -->
    <footer>
        <!-- first division -->
        <div class="foot1">
            <h2>useful links</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur neque excepturi debitis hic quasi labore amet
            </p>
            <div class="social-media-handle-for-blog-footer">
                <img src="{{asset("/images/facebook.png")}}" alt="" class="social-icon">
                <img src="{{asset("/images/insta.png")}}" alt="" class="social-icon">
                <img src="{{asset("/images/whatsapp.png")}}" alt="" class="social-icon">
                <img src="{{asset("/images/mail.png")}}" alt="" class="social-icon">
            </div>
        </div>
        <!-- second division  -->
        <div class="foot1">
            <h2>contact me</h2>
            <li ><img src="{{asset("/images/paper-plane.png")}}" alt=""class="my-img"> <a href="#">@emmanula/twitter.com</a></li>
            <li ><img src="{{asset("/images/paper-plane.png")}}" alt=""class="my-img"> <a href="#">www.google.com</a></li>
            <li ><img src="{{asset("/images/paper-plane.png")}}" alt=""class="my-img"> <a href="#">+234 7042244539</a></li>
        </div>
        <!-- 3rd division  -->

        <div class="foot1">
            <p>
            <h2>newsletter</h2>
               <p> Consequuntur neque excepturi debitis hic quasi labore amet
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deserunt.
            </p>
            <input type="email" name="" id="" placeholder="enter your email" class="input">
        </div>
    </footer>
    <script src="{{asset("/js files/main.js")}}"></script>
</body>
</html>
