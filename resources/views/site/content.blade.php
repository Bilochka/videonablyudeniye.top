<!--Hero_Section-->
<section id="home" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated">
                            <h2>Встановлення відеоспостереження</h2>
                            <ul class="" id="list_of_works">
                                <li class="list_works_li">
                                    <i class="fa fa-thumb-tack tack" aria-hidden="true"></i>
                                    <a class="list_works">В офісах та на виробництві</a>
                                </li>
                                <li class="list_works_li">
                                    <i class="fa fa-thumb-tack tack" aria-hidden="true"></i>
                                    <a class="list_works">В магазинах та складах</a>
                                </li>
                                <li class="list_works_li">
                                    <i class="fa fa-thumb-tack tack" aria-hidden="true"></i>
                                    <a class="list_works">Для житлових будинків (ОСББ)</a>
                                </li>
                                <li class="list_works_li">
                                    <i class="fa fa-thumb-tack tack" aria-hidden="true"></i>
                                    <a class="list_works">Внутрішнє та зовнішнє обладнання</a>
                                </li>
                            </ul>
                            {{--<a href="site/contact.blade.php" class="read_more2">Оформити заявку</a>--}}
                            <button type="button" class="btn btn-info btn-lg read_more2" data-toggle="modal" data-target="#sendModal">Оформити заявку</button>

                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <img src="{{ asset('assets/img/main_device_image10.png') }}" class="zoomIn wow animated" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="sendModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="exampleModalLabel" >Надіслати заявку для зв'язку:</h4>
            </div>


            <div class="modal-body">
                <form id="contactForm" action="{{ route('home2')}}" method="post">

                    <div class="form-group">
                        <label for="name">Ім'я:</label>
                        <input id="name" class="form-control" name="name"  type="text" placeholder="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="internal_camcorder">Кількість внутрішніх камер:</label>
                        <input id="internal_camcorder" class="form-control" name="internal_camcorder"  type="number" placeholder="1" value="{{old('internal_camcorder')}}">
                    </div>
                    <div class="form-group">
                        <label for="external_camcorder">Кількість зовнішніх камер:</label>
                        <input id="external_camcorder" class="form-control" name="external_camcorder"  type="number" placeholder="1" value="{{old('external_camcorder')}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Ваш телефон: *</label>
                        <input id="phone" class="form-control" name="phone"  type="phone" placeholder="+38 (000) 000-00-00" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label for="message">Текст повідомлення:</label>
                        <textarea id="message" class="form-control"  name="message" rows="4">{{old('message')}}</textarea>
                    </div>
                    <button id="button" class="btn btn-success" type="submit">Надіслати</button>
                    {{--<div class="result">--}}
                        {{--<span id="answer">Ваше повідомлення надіслано, очікуйте зворотнього звязку!</span>--}}
                        {{--<span id="loader" style="display:none"><img src="images/loader.gif" alt=""></span>--}}
                    {{--</div>--}}


                    {{csrf_field()}}
                </form>
            </div>



            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!--Hero_Section-->



<!-- Portfolio -->
<section id="portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

        <!-- Title -->
        <div class="section-title">
            <h2>Каталог</h2>
        </div>
        <!--/Title -->



    {{--<div class="portfolio-top"></div>--}}

    <!-- Portfolio Filters -->
        <div class="portfolio">

            <div id="filters" class="sixteen columns">
                {{--<ul class="clearfix">--}}
                {{--<li><a id="all" href="#" data-filter="*" class="active">--}}
                {{--<h5>All</h5>--}}
                {{--</a></li>--}}
                {{--<li><a class="" href="#" data-filter=".prototype">--}}
                {{--<h5>Prototype</h5>--}}
                {{--</a></li>--}}
                {{--<li><a class="" href="#" data-filter=".design">--}}
                {{--<h5>Design</h5>--}}
                {{--</a></li>--}}
                {{--<li><a class="" href="#" data-filter=".android">--}}
                {{--<h5>Android</h5>--}}
                {{--</a></li>--}}
                {{--<li><a class="" href="#" data-filter=".appleIOS">--}}
                {{--<h5>Apple IOS</h5>--}}
                {{--</a></li>--}}
                {{--<li><a class="" href="#" data-filter=".web">--}}
                {{--<h5>Web App</h5>--}}
                {{--</a></li>--}}
                {{--</ul>--}}
            </div>
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->


            @if(isset($portfolio))

            <div class="isotope fadeInLeft animated wow grid_group_portfolio" id="portfolio_wrapper1">

                @foreach($portfolio as $item)

                    <div  class="item_portfolio">

                        <div class="grid_group_portfolio_items img_portfolio">
                            <img src="\assets\img\catalog\{{$item['image']}}"  alt="">
                        </div>

                        <div class="grid_group_portfolio_items name_portfolio">
                            <h4 class="">{{$item['name']}}</h4>
                        </div>

                        <div class="grid_group_portfolio_items manufacturer_portfolio">
                            <p class="">{{$item['manufacturer']}}</p>
                        </div>
                        <div class="grid_group_portfolio_items code_portfolio">
                            <p class="">{{$item['code']}}</p>
                        </div>
                    </div>



                    {{--<div  class="portfolio-item one-four appleIOS isotope-item">--}}
                        {{----}}
                        {{--<div class="portfolio_img"> <img src="{{$item['image']}}"  alt=""> </div>--}}
                        {{----}}
                        {{--<div class="item_overlay">--}}
                            {{--<div class="item_info">--}}
                                {{--<h4 class="project_name">{{$item['name']}}</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{----}}
                    {{----}}

                @endforeach



                {{--<!-- Portfolio Item -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic1.jpg') }}"  alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">SMS Mobile App</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item -->--}}

                {{--<!-- Portfolio Item-->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic2.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">Finance App</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item -->--}}

                {{--<!-- Portfolio Item -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic3.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">GPS Concept</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item-->--}}

                {{--<!-- Portfolio Item-->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  prototype web isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic4.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">Shopping</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Portfolio Item -->--}}

                {{--<!-- Portfolio Item -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic5.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">Managment</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item -->--}}

                {{--<!-- Portfolio Item -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic6.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">iPhone</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item -->--}}

                {{--<!-- Portfolio Item  -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic7.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">Nexus Phone</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Portfolio Item -->--}}

                {{--<!-- Portfolio Item -->--}}
                {{--<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">--}}
                    {{--<div class="portfolio_img"> <img src="{{ asset('assets/img/portfolio_pic8.jpg') }}" alt="Portfolio 1"> </div>--}}
                    {{--<div class="item_overlay">--}}
                        {{--<div class="item_info">--}}
                            {{--<h4 class="project_name">Android</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</a> </div>--}}
                {{--<!--/Portfolio Item -->--}}

            </div>
            <!--/Portfolio Wrapper -->
            @endif
        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>

    </div>
    <!-- Container -->



    <div id="project_container">
        <div class="clear"></div>
        <div id="project_data"></div>
    </div>


</section>
<!--/Portfolio -->



<!--Advantage-->
<section  id="advantage">
    <div class="container">
        <h2>Переваги</h2>
        <div class="advantage_wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="advantage_block">
                        <div class="advantage_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-clock-o"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Швидкий та якісний монтаж охоронних систем та систем відеоспостереження з гарантією на роботу, у зручний для Вас час.</h3>
                        {{--<p class="animated fadeInDown wow">Швидкий та якісний монтаж охоронних систем та систем відеоспостереження з гарантією на роботу, у зручний для Вас час.</p>--}}
                    </div>
                </div>

                <div class="col-lg-4 borderLeft">
                    <div class="advantage_block">
                        <div class="advantage_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-home"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Надійний захисти приватної власності, контроль та нагляд за роботою працівників на підприємстві чи офісі.</h3>
                        {{--<p class="animated fadeInDown wow">Захисти свою приватну  власність, або ж контролюй роботу своїх працівників на підприємстві.</p>--}}
                    </div>
                </div>

                <div class="col-lg-4 borderLeft">
                    <div class="advantage_block">
                        <div class="advantage_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-video-camera"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Керування відеоспостереженням та системою охорони зі смартфону, планшету, ноутбука з будь-якої точки планети.</h3>
                        {{--<p class="animated fadeInDown wow">Керуй відеоспостереженням та системою охорони з смартфону, планшету чи ноутбука з будь якої точки планети.</p>--}}
                    </div>
                </div>
            </div>
            {{--<div class="row borderTop">--}}
                {{--<div class="col-lg-4 mrgTop">--}}
                    {{--<div class="advantage_block">--}}
                        {{--<div class="advantage_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-cogs"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Налаштування та супровід</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft mrgTop">--}}
                    {{--<div class="advantage_block">--}}
                        {{--<div class="advantage_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-handshake-o"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Документи</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft mrgTop">--}}
                    {{--<div class="advantage_block">--}}
                        {{--<div class="advantage_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-money"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Ціна та форми розрахунку</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!--Advantage-->

<!--Aboutus-->
<section id="aboutUs">
    <div class="inner_wrapper">
        <div class="container">
            <h2>Про компанію</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        <img src="{{ asset('assets/img/about-img/cam-girl2.jpg') }}" class="about-img img-circle delay-03s animated wow zoomIn" alt="">
                    </div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <h3 class="title-ab_us">Сервісний центр Reset пропонує послугу встановлення відеоспостереження та охоронних систем безпеки.
                                Проектування, налаштування та встановлення систем комплексної охорони будь-якої складності.</h3><br/>
                            <p>
                                На сьогоднішній день відеоспостереження є важливим елементом безпеки.
                                Бажаєте знати чим займаються Ваші працівники? Хочете спостерігати за будинком та бути впевненими,
                                що Ваші діти повернулись додому вчасно? Бажаєте спостерігати за своїм авто?
                                Встановивши систему відеоспостереження ви без проблем зможете спостерігати та контролювати
                                усі ці моменти віддалено зі смартфону, планшету чи ноутбуку.</p> <br/>

                            <p> Камери відеоспостереження мають сильних психологічний ефект та впливають на поведінку,
                                як і Вашого персоналу, так і Ваших клієнтів. Ніхто не застрахований від неприємних моментів на роботі,
                                в офісі чи вдома, але встановивши систему відеоспостереження ви зможете дізнатись що чи хто став їхньою причиною.</p> <br/>

                            <p> Також ми пропонуємо послугу втановлення та налаштовування охоронних систем AJAX.
                                Охоронна система AJXA, це більше ніж просто сигналізація. Завдяки великій кількості різноманітних датчиків,
                                це впевнений крок у бік розумних будинків. Забули вимкнути праску? Бажаєте увімкнути обігрівач перед поверненням додому?
                                Не проблема. Ви зможете зробити це будучи далеко від дому.
                                З розумними резетками від компанії AJAX контролювати свій дім стає легше.</p> <br/>

                            <p> Наша компанія встановить, налаштує та допоможе освоїтись з програмним забезпеченням у зручний для Вас час.
                                Ми працюємо, як з приватними підприємцями, так і з фізичними особами.
                                Гарантія на роботу та гарантія на обладнання складає від одного до п’яти років,
                                адже ми використовуємо тільки якісне та перевірене обладнання таких виробників, як HIKVISION, AJAX та інших.</p>


                        </div>
                        <div class="work_bottom">
                            {{--<span>Want to know more..</span> --}}
                            <a href="#contact" class="contact_btn">Зв'язатись з нами</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Aboutus-->




<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Контакти</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>Адреса</h4>
                            <p>м. Вінниця, <br/> вул. Академіка Янгеля (Фрунзе), 32</p>
                        </div>
                        <div class="detail">
                            <h4>Телефон</h4>
                            <p>+38 (073) 033 83 22</p>
                        </div>
                        <div class="detail">
                            <h4>Електронна пошта</h4>
                            <p>support@sitename.com</p>
                        </div>
                    </div>



                    <div class="contacts-btn">
                        <button type="button" class="btn btn-info btn-lg read_more2" data-toggle="modal" data-target="#sendModal">Оформити заявку</button>
                        {{--<li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>--}}
                        {{--<li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>--}}
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.615660041606!2d28.48772464444619!3d49.24577566563616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b44b5af9571%3A0xb9aa50bd98cc5f1e!2z0KHQpiAiUmVzZXQi!5e0!3m2!1sru!2sua!4v1556975750511!5m2!1sru!2sua" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2018,    Template by <a href="#">Bilochka</a>. </span> </div>
    </div>
</footer>
