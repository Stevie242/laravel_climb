@extends('layouts.app')

@section('content')
    <header class="d-md-flex d-sm-block justify-content-between grey-bg-color py-2 px-5 com-a" id="home">
        <div>
            <i class="fa-sharp fa-solid fa-envelope"></i><span>contact@climbrc.com</span>
        </div>
        <div>
            <a href="auth-login.html"><i class="fa-solid fa-right-to-bracket"></i><span>Connexion</span></a>
            <a href="auth-register.html"><i class="fa-solid fa-user-plus"></i><span>Inscription</span></a>
        </div>
    </header>

    <!-- Menu navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light com-b">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="#">
                <img src="{{asset('asset/img/climb.png')}}" alt="" width="140px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#home">Accueil</a>
                    <a class="nav-link" href="#features">Features</a>
                    <a class="nav-link" href="#faqs">FAQs</a>
                    <a class="nav-link" href="#contacts" tabindex="-1" aria-disabled="true">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- /Menu navigation -->

    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide com-c" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 img set-bg" data-setbg="{{asset('asset/img/slide-1.jpg')}}"></div>
                <!-- <img class="d-block w-100 set-bg" data-setbg="img/slide-1.jpg" alt=" "> -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img d-block w-100 set-bg" data-setbg="{{asset('asset/img/slide-2.jpg')}}"></div>
                <!-- <img  class="d-block w-100 set-bg" data-setbg="img/slide-2.jpg" alt=" "> -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img d-block w-100 set-bg" data-setbg="{{asset('asset/img/slide-3.jpg')}}"></div>
                <!-- <img  class="d-block w-100 set-bg" data-setbg="img/slide-3.jpg" alt=" "> -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- /Slider -->

    <!-- A propos de Climb Rc -->
    <div class="container com-d my-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 order-sm-last order-md-first info">
                <div class="title">
                    <h3>Présentation</h3>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque id veritatis laudantium tempora.
                        Facere non blanditiis vel accusamus maiores nam dolores, accusantium facilis autem nihil atque
                        voluptas
                        corporis quibusdam! Temporibus.
                        Maxime excepturi maiores, eum eaque possimus iste inventore facere alias est. Architecto ipsum
                        facilis dolor
                        hic, repudiandae unde, atque doloremque reiciendis, quia vitae dignissimos asperiores necessitatibus
                        veritatis sapiente eos modi!
                    </p><br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat magnam soluta obcaecati quod dolor
                        quasi
                        voluptate incidunt odio ad ea, voluptas aspernatur nulla eum debitis aliquid officiis iste, veniam
                        reiciendis!</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 order-md-last">
                <div class="img">
                    <img src="{{asset('asset/img/about-climb.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- /A propos de Climb Rc -->

    <!-- Process -->
    <div class="container com-e my-4">
        <div class="title d-flex justify-content-center text-center">
            <h3>Comment gagner de l'argent avec <span>Climb</span> ?</h3>
        </div>
        <div class="row my-4">
            <div class="col-md-3">
                <div class="my-card">
                    <h3><i class="fa-solid fa-user-plus"></i></h3>
                    <h3>S'inscrire sur Climb</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, dignissimos doloribus tempora
                        sint,
                        iusto numquam adipisci officia at, nobis eligendi quas? Soluta harum tempora quo autem sed non nemo
                        unde?
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="my-card">
                    <h3><i class="fa-solid fa-user-plus"></i></h3>
                    <h3>S'inscrire sur Climb</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, dignissimos doloribus tempora
                        sint,
                        iusto numquam adipisci officia at, nobis eligendi quas? Soluta harum tempora quo autem sed non nemo
                        unde?
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="my-card">
                    <h3><i class="fa-solid fa-user-plus"></i></h3>
                    <h3>S'inscrire sur Climb</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, dignissimos doloribus tempora
                        sint,
                        iusto numquam adipisci officia at, nobis eligendi quas? Soluta harum tempora quo autem sed non nemo
                        unde?
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="my-card">
                    <h3><i class="fa-solid fa-user-plus"></i></h3>
                    <h3>S'inscrire sur Climb</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, dignissimos doloribus tempora
                        sint,
                        iusto numquam adipisci officia at, nobis eligendi quas? Soluta harum tempora quo autem sed non nemo
                        unde?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Process -->

    <!-- FAQs -->
    <div class="container com-f mt-md-5 mt-sm-3 mb-3" id="faqs">
        <div class="title mb-md-3">
            <h3>FAQs</h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="img mb-sm-2 mb-md-0">
                    <img src="{{asset('asset/img/faqs.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <div class="accordion mt-2" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control
                                the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                this with
                                custom CSS or overriding our default variables. It's also worth noting that just about any
                                HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control
                                the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                this with
                                custom CSS or overriding our default variables. It's also worth noting that just about any
                                HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control
                                the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                this with
                                custom CSS or overriding our default variables. It's also worth noting that just about any
                                HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /FAQs -->

    <!-- Contact -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 d-contact-img">
                    <div class="img-momo">
                        <img src="{{asset('asset/img/contact.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 cont">
                    <div class="title">
                        <h3>Nous contacter</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="form">
                                <form action="">
                                    <div class="form-group">
                                        <label for="name">Nom complet</label>
                                        <input type="text" name="name" id="name" placeholder="Nom complet">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="mail" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Message</label>
                                        <textarea name="msg" id="msg" placeholder="Veuillez saisir votre message......."></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit"><i class="fa-solid fa-paper-plane"></i> Envoyer
                                            message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact -->

    <!-- footer -->
    <footer class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="content">
                        <h3>Climb Rc</h3>
                        <p><i class="fa-sharp fa-solid fa-envelope"></i><span>contact@climbrc.com</span></p>
                        <p><i class="fa-sharp fa-solid fa-phone"></i><span>(+33) 00000000</span></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="content">
                        <h3>Menu</h3>
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#home">Accueil</a>
                            <a class="nav-link" href="#features">Features</a>
                            <a class="nav-link" href="#faqs">FAQs</a>
                            <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="content">
                        <h3>Newsletter</h3>
                        <div class="footer-description">
                            Abonnez-vous a notre newsletter pour être informer de nos nouveautés.
                        </div>
                        <div class="footer-form">
                            <form action="">
                                <div class="form-group">
                                    <label for="mail">Email</label>
                                    <input type="email" name="mail" id="mail"
                                        placeholder="Veuillez saisir votre email">
                                    <button type="submit">Souscrire</button>
                                </div>
                                <div class="footer-submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
@endsection
