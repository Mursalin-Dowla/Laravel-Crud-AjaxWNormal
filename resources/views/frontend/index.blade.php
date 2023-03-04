<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front End</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--myStyle-->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
</head>
<body>
    <!--navigation-->
    <nav>
        <div class="cont my-nav">
            <div class="brand w-30">
                <a href="./">
                    <img src="{{asset('frontend')}}/images/logo.png" alt="Logo" class="logo">
                </a>
            </div>
            <div class=" w-70">
                <div class="menu">
                    <ul>
                        <li><a href="./" class="t-up">home</a></li>
                        <li><a href="#" class="t-up">about</a></li>
                        <li><a href="#" class="t-up">services</a></li>
                        <li><a href="#" class="t-up">skill</a></li>
                        <li><a href="#" class="t-up">portfolio</a></li>
                        <li><a href="#" class="t-up">team</a></li>
                        <li><a href="#" class="t-up">blog</a></li>
                        <li><a href="#" class="t-up">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="t-white overlay t-center my-header">
        <div class="cont">
            <h1 class="t-cap">
                welcome to <span class="t-myColor">themeforest</span>
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis alias facilis adipisci ad reiciendis quas ut nemo! Tempora porro optio fugit earum quibusdam ratione, incidunt harum perspiciatis iusto commodi dolorem, doloribus, enim itaque odit repellendus? Laborum, impedit adipisci nulla beatae tempore animi necessitatibus quas architecto iste ratione deserunt vero veritatis ex tenetur fugit ea at vel asperiores, fugiat, neque sunt nemo. Dolorum deserunt fugiat sunt doloribus iure, laudantium quasi dolore sequi adipisci magnam, vitae rem neque ullam. Eos, nihil quia!
            </p>
            <a href="#" class="btn bg-myColor">
                read more
            </a>
        </div>
    </header>

    <!--about us-->
    <section class="blank about t-center">
        <h2 class="s-title t-up">
            about <span class="t-myColor">us</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">
        <div class="cont px-10">
            
            <div class="profile w-40 ">
                <img src="{{asset('frontend')}}/images/about.png" class="w-100" alt="Female Image">
                <div class="img-over t-white">
                    <p class="t-cap">
                        henly
                    </p>
                    <div class="menu">
                        <ul class="">
                            <li>
                                <i class="fab fa-facebook"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter"></i>
                            </li>
                            <li>
                                <i class="fab fa-google"></i>
                            </li>
                            <li>
                                <i class="fab fa-github-alt"></i>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="w-60 t-left box pl-15">
                <h3>
                    I'm a Freelancer and Web Developer
                </h3>
                <p>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit</b>. Neque, voluptatum suscipit error sint fuga quod id exercitationem iusto eos nisi, doloribus repellendus! Consequatur porro corrupti aspernatur dicta doloribus. Saepe ex obcaecati porro quisquam maiores rerum iure, 
                </p>
                <p class="mb-50">
                    <b>Lorem ipsum, dolor sit amet consectetur adipisicing</b> elit. Voluptate cum, numquam reprehenderit eos tempora possimus obcaecati est accusantium voluptatibus eligendi, nam placeat doloribus excepturi delectus 
                </p>
                <a href="#" class="btn bg-red">
                    Resume / CV <i class="fas fa-download"></i>
                </a>
            </div>
        </div>
    </section>


    <!--know-more-->
    <section class="hands know-more overlay h-375">
        <siv class="cont flex-col">
            <h2 class="t-white t-cap">
                want to know more about us?
            </h2>
            <i class="fas fa-play t-white"></i>
        </siv>
    </section>


    <section class="blank services">
        <h2 class="s-title t-up t-center">
            our <span class="t-myColor">services</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">

        <div class="cont">
            <div class="w-33 t-center">
                <i class="fas fa-tv t-myColor"></i>
                <h4 class="t-cap">
                    web design
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
            <div class="w-33 t-center">
                <i class="fab fa-stack-overflow t-myColor"></i>
                <h4 class="t-cap">
                    graphics design
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
            <div class="w-33 t-center">
                <i class="fas fa-code t-myColor"></i>
                <h4 class="t-cap">
                    web development
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
        </div>
        <div class="cont">
            <div class="w-33 t-center">
                <i class="fas fa-comments t-myColor"></i>
                <h4 class="t-cap">
                    live support
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
            <div class="w-33 t-center">
                <i class="fab fa-chrome t-myColor"></i>
                <h4 class="t-cap">
                    support
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
            <div class="w-33 t-center">
                <i class="fas fa-cloud-download t-myColor"></i>
                <h4 class="t-cap">
                    download
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim delectus soluta voluptas totam fuga. Quos modi soluta quod labore cumque.</p>
            </div>
        </div>
    </section>
    <section class="blank my-skill bg-gray">
        <h2 class="s-title t-up t-center">
            my <span class="t-myColor">skill</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">
        <div class="cont non-flex mb-50">
            <div class="t-box w-50">
                <h1 class="t-cap">
                    why people about us
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos accusamus unde quidem modi culpa sit beatae. Alias voluptatibus nesciunt sed. Corrupti autem dolore a, 
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque similique voluptas neque ipsum magnam quam tempora saepe eveniet harum iste! Unde impedit, eos ab omnis, optio rem non nulla deleniti molestiae excepturi consectetur asperiores! Obcaecati omnis iste magni, quaerat possimus repudiandae minima, soluta optio quo aperiam tempora? Sunt, soluta iusto.
                </p>
            </div>
            <div class="t-box w-50">
                <h1 class="t-cap">
                    why are good in
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos accusamus unde quidem modi culpa sit beatae. Alias  
                </p>
                <p class="t-cap"><strong>web development</strong></p>
                <div class="out">
                    60%
                    <div class="in w-60"></div>
                </div>
                <p class="t-cap"><strong>web design</strong></p>
                <div class="out">
                    70%
                    <div class="in w-70"></div>
                </div>
                <p class="t-cap"><strong>graphics design</strong></p>
                <div class="out">
                    80%
                    <div class="in w-80"></div>
                </div>
            </div>
        </div>
    </section>

    <!--coffee-->
    <section class="coffee overlay h-375">
        <div class="cont">
            <div class="w-25 t-white t-center">
                <!--<i class="fas fa-happy"></i>-->
                <i class='fa fa-american-sign-language-interpreting'></i>
                <p>150</p>
                <p class="t-cap">happy client</p>
            </div>
            <div class="w-25 t-white t-center">
                <i class='fa fa-american-sign-language-interpreting'></i>
                <p>150</p>
                <p class="t-cap">happy client</p>
            </div>
            <div class="w-25 t-white t-center">
                <i class='fa fa-american-sign-language-interpreting'></i>
                <p>150</p>
                <p class="t-cap">happy client</p>
            </div>
            <div class="w-25 t-white t-center">
                <i class='fa fa-american-sign-language-interpreting'></i>
                <p>150</p>
                <p class="t-cap">happy client</p>
            </div>
        </div>
    </section>

    <section class="blank portfolio">
        <h2 class="s-title t-up t-center">
            our <span class="t-myColor">portfolio</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">

        <div class="menu t-up mx-10 ">
            <ul class="mb-50">
                <li><a href="#" class="t-up">all</a></li>
                <li><a href="#" class="t-up">graphics</a></li>
                <li><a href="#" class="t-up">web design</a></li>
                <li><a href="#" class="t-up">web development</a></li>
            </ul>
        </div>
        <div class="cont flex-col">
            <div class="row-of-3">
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/p1.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/p2.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/p3.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
            </div>
            <div class="row-of-3">
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/p4.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/5.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
                <div class="col portfolio-img">
                    <img src="{{asset('frontend')}}/images/p6.png" alt="" class="w-100">
                    <div class="over">
                        <i class="fa-sharp fa-solid fa-arrows-up-down-left-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blank bg-gray">
        <h2 class="s-title t-up t-center">
            my <span class="t-myColor">team</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">
        <div class="container my-team">
            <div class="team-row">
            <div class="each-my-team">
                <img src="{{asset('frontend')}}/images/t1.png" alt="" class="w-100">
                <div class="team-over">
                    <div class="team-detail">
                        <p class="t-cap">
                            henly
                        </p>
                            <ul>
                                <li>
                                    <i class="fab fa-facebook"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter"></i>
                                </li>
                                <li>
                                    <i class="fab fa-google"></i>
                                </li>
                                <li>
                                    <i class="fab fa-github-alt"></i>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
            <div class="each-my-team">
                <img src="{{asset('frontend')}}/images/t2.png" alt="" class="w-100">
                <div class="team-over">
                     <div class="team-detail">
                        <p class="t-cap">
                            henly
                        </p>
                            <ul>
                                <li>
                                    <i class="fab fa-facebook"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter"></i>
                                </li>
                                <li>
                                    <i class="fab fa-google"></i>
                                </li>
                                <li>
                                    <i class="fab fa-github-alt"></i>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
            <div class="each-my-team">
                <img src="{{asset('frontend')}}/images/t3.png" alt="" class="w-100">
                <div class="team-over">
                     <div class="team-detail">
                        <p class="t-cap">
                            henly
                        </p>
                            <ul>
                                <li>
                                    <i class="fab fa-facebook"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter"></i>
                                </li>
                                <li>
                                    <i class="fab fa-google"></i>
                                </li>
                                <li>
                                    <i class="fab fa-github-alt"></i>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
            <div class="each-my-team">
                <img src="{{asset('frontend')}}/images/4.png" alt="" class="w-100">
                <div class="team-over">
                     <div class="team-detail">
                        <p class="t-cap">
                            henly
                        </p>
                            <ul>
                                <li>
                                    <i class="fab fa-facebook"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter"></i>
                                </li>
                                <li>
                                    <i class="fab fa-google"></i>
                                </li>
                                <li>
                                    <i class="fab fa-github-alt"></i>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--coding-->
    <section class=" overlay h-375 coding t-white">
        <div class="cont flex-col">
            <img src="{{asset('frontend')}}/images/profile-m.png" alt="Male Pic">
            <h4 class="t-up">shipon kormokar</h4>
            <p class="t-center">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa voluptatum illo facilis similique, deserunt quaerat nostrum maxime quo magni vero expedita, animi sint quis voluptatem error libero earum eos nemo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem aut vitae corporis provident similique adipisci praesentium, quibusdam asperiores. Laudantium sit praesentium inventore accusantium? Delectus iusto deleniti modi excepturi architecto ea?
            </p>
        </div>
    </section>


    <section class="blank">
        <h2 class="s-title t-up t-center">
            latest <span class="t-myColor">blog</span>
        </h2>
        <hr class="my-underline bg-myColor mb-50">

        <div class="cont">
            <div class="row-of-3">
                <div class="col card">
                    <img src="{{asset('frontend')}}/images/11.png" alt="" class="w-100 h-200">
                    <div class="below-img">
                        <h4 class="t-cap t-gray">
                            web design course
                        </h4>
                        <small>
                            <i class="fas fa-clock t-myColor"></i>
                            <i>11 dec 2022</i>
                        </small>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis quos neque explicabo facere. Temporibus eligendi necessitatibus quis? Impedit necessitatibus 
                        </p>
                        <button class="t-cap"> 
                            <i>read more</i>
                        </button>
                    </div>
                </div>
                <div class="col card">
                    <img src="{{asset('frontend')}}/images/12.png" alt="" class="w-100 h-200">
                    <div class="below-img">
                        <h4 class="t-cap t-gray">
                            web design course
                        </h4>
                        <small>
                            <i class="fas fa-clock t-myColor"></i>
                            <i>11 dec 2022</i>
                        </small>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis quos neque explicabo facere. Temporibus eligendi necessitatibus quis? Impedit necessitatibus 
                        </p>
                        <button class="t-cap"> 
                            <i>read more</i>
                        </button>
                    </div>
                </div>
                <div class="col card">
                    <img src="{{asset('frontend')}}/images/13.png" alt="" class="w-100 h-200">
                    <div class="below-img">
                        <h4 class="t-cap t-gray">
                            web design course
                        </h4>
                        <small>
                            <i class="fas fa-clock t-myColor"></i>
                            <i>11 dec 2022</i>
                        </small>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis quos neque explicabo facere. Temporibus eligendi necessitatibus quis? Impedit necessitatibus 
                        </p>
                        <button class="t-cap"> 
                            <i>read more</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    <section class="overlay contact t-white px-10">
        <h2 class="s-title t-up t-center mx-10">
            latest <span class="t-myColor">blog</span>
        </h2>
        <hr class="my-underline bg-myColor">

        <div class="cont flex-col">
            <!--<div class="row w-100">
                <div class="col w-50"></div>
                <div class="col w-50"></div>
            </div>
            <div class="row">
                <div class="col w-100"></div>
            </div>
            <div class="row">
                <div class="col w-100"></div>
            </div>-->
            <form action="#" method="post" class="c-form flex-col">
                <input type="text" name="name" id="name" placeholder="Your Name" class="t-cap">
                <input type="email" name="mail" id="male" style="float: right;" placeholder="Your Email"> 
                <br>
                <textarea name="msg" id="msg" cols="30" rows="15" placeholder="Your Message" class="w-100"></textarea>
                
                <button class="btn btn-round bg-red t-cap">
                    send message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>


    <footer>
        <div class="cont">
            <div class="col-50">
                <div class="icons">
                    <a href="#" class="t-white"><i class="fab fa-github-alt"></i></a>
                    <a href="#" class="t-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="t-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="t-white"><i class="fa-solid fa-envelope-open"></i></i></a>
                    <a href="#" class="t-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-50 t-cap t-right t-white">
                copyright &copy; 2023 | Md Mursalin Dowla
            </div>
        </div>
    </footer>
    
    
</body>
</html>