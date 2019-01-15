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
                <form id="contactForm" action="{{ route('home')}}" method="post">
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
                            <img src="{{$item['image']}}"  alt="">
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
                        <div class="advantage_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 1</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft">
                    <div class="advantage_block">
                        <div class="advantage_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 2</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft">
                    <div class="advantage_block">
                        <div class="advantage_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 3</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row borderTop">
                <div class="col-lg-4 mrgTop">
                    <div class="advantage_block">
                        <div class="advantage_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-dropbox"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 4</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft mrgTop">
                    <div class="advantage_block">
                        <div class="advantage_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-slack"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 5</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft mrgTop">
                    <div class="advantage_block">
                        <div class="advantage_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-users"></i></span> </div>
                        <h3 class="animated fadeInUp wow">Перевага 6</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
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
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/about-img.jpg') }}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
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
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>UNIQUE Infoway</h4>
                            <p>104, Some street, NewYork, USA</p>
                        </div>
                        <div class="detail">
                            <h4>call us</h4>
                            <p>+1 234 567890</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>support@sitename.com</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">
                        <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                        <input class="input-btn" type="submit" value="send message">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2018,    Template by <a href="#">Bilochka</a>. </span> </div>
    </div>
</footer>
