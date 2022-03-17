<!DOCTYPE html>
<html lang="UTF-8">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hansol test</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../test/assets/img/.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
		<!-- background CSS (includes Bootstrap)-->
		<!-- slide CSS (includes Bootstrap)-->
        <!--aaaaaaaaaaaaaaaaaaaaaaaaaa-->
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
            <div class="container">
               <!-- <a class="navbar-brand" href="#page-top"><img src="../test/assets/img/bucket-header.JPG" alt="..." /></a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Bucket Stuadio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Contents Introduction</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">IP Protection</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">IR</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="backgroundTransition" id="header_slide">
            <div class="">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">hansol</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services" style="margin-top:100px">Tell Me More</a>
            </div>
        </header>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../test/jsfile/backgroundTransition.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
	  $('.backgroundTransition').backgroundTransition({
		  backgrounds:[
			  { src: 'http://www.blueb.co.kr/SRC2/_image/01.jpg' },
			  { src: 'http://www.blueb.co.kr/SRC2/_image/03.jpg' },
			  { src: 'http://www.blueb.co.kr/SRC2/_image/04.jpg' },
			  { src: 'http://www.blueb.co.kr/SRC2/_image/05.jpg' },
			  { src: 'http://www.blueb.co.kr/SRC2/_image/06.jpg' },
			  { src: 'http://www.blueb.co.kr/SRC2/_image/07.jpg' }
		  ],
		  transitionDelay: 1,
		  animationSpeed: 500
	  });
  });
</script>
<script>
/*
 * Simple jQuery plugin to synchronously load and then transition (fade-in/out) a list of images as full screen background-images on a web page.
 * Author: Matt Richards, http://github.com/mattyrichards
 * Licensed under the MIT license
 */
;(function( $, window, document, undefined ){

    var BackgroundTransition = function( elem, options ){
        this.elem = elem;
        this.$elem = $(elem);
        this.options = options;
        self = this;
    };

    BackgroundTransition.prototype = {
        defaults: {
            classNameBottomImage: "image-bottom",
            classNameTopImage: "image-top",
            idNameDownloadImage: "image-download",
            backgrounds: [],
            imageKey: 1,
            transitionDelay: 10,
            animationSpeed: 1000
        },

        init: function() {
            this.config = $.extend({}, this.defaults, this.options);
            if (this.config.backgrounds.length >= 2) {
                this.prepareMarkup();
                this.loadNext();
                return this;
            } else {
                console.warn('BackgroundTransition requires at least 2 background images.')
                return false;
            }
        },

        prepareMarkup: function() {
            var imageBottom = $("<div/>").addClass(this.config.classNameBottomImage + ' initial').css('background-image', 'url(' + this.config.backgrounds[0].src + ')');
            var imageTop = $("<div/>").addClass(this.config.classNameTopImage).css('display', 'none');
            $(this.elem)
                .prepend(imageBottom, imageTop)
                .css('background-image', 'none');
        },

        loadNext: function() {
            if (this.config.imageKey == this.config.backgrounds.length){
                this.config.imageKey = 0;
            }
            var deferred = $.Deferred();
            $('<img/>').attr('id', this.config.idNameDownloadImage).load(function() {
                deferred.resolve();
            }).attr('src', this.config.backgrounds[this.config.imageKey].src).prependTo('body .backgroundTransition');
            deferred.done(function() {
                setTimeout(self.replaceImage, (self.config.transitionDelay * 1000));
            });
        },

        replaceImage: function() {
            var nextSrc = $('#' + self.config.idNameDownloadImage);
            $('#' + self.config.idNameDownloadImage).remove();
            $('.' + self.config.classNameTopImage).css('background-image', 'url(' + nextSrc.attr('src') + ')');
            $('.' + self.config.classNameTopImage).fadeIn(self.config.animationSpeed, 'swing', function() {
               $('.' + self.config.classNameBottomImage).css('background-image', 'url(' + nextSrc.attr('src') + ')');
               $(this).hide();
               self.config.imageKey++;
               self.loadNext();
            });
        }
    }

    BackgroundTransition.defaults = BackgroundTransition.prototype.defaults;

    $.fn.backgroundTransition = function(options) {
        return this.each(function() {
            new BackgroundTransition(this, options).init();
        });
    };

})( jQuery, window , document );

</script>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Bucket Studio </h2>
                    <h3 class="section-subheading text-muted" id="Binggrae_font">(주)버킷스튜디오는 10년 이상의 콘텐츠 제작 및 유통 비지니스 노하우와 온라인/모바일 영역을 아우르는 기술력을 보유한 새로운 개념의 미디어 기업입니다.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" id="Binggrae_font">지금 더 가치있는 수익창출</h4>
                        <p class="text-muted" >Digital Biz</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" id="Binggrae_font">다양한 문화 콘텐츠</h4>
                        <p class="text-muted" >Contents Distribution</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" id="Binggrae_font" >콘텐츠 필터링</h4>
                        <p class="text-muted" >IP Protection</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contents Introduction</h2>
                    <h3 class="section-subheading text-muted">밑에 사진 파일만 구하면 괜찮게 될 것 같은데 쓸만한 사진파일만 찾으면 될 것 같음</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../test/assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Digital Biz</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  src="../test/assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Contents Distribution</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../test/assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">IP Protection</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../test/assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CONTENTS 4</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../test/assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CONTENTS 5</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../test/assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CONTENTS 6</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"  id="NotoSansKR-Light">Contents Filtering</h2>
                    <h3 class="section-subheading text-muted" id="NotoSansKR-Light">저작권보호팀의 콘텐츠 필터링 기술은 한국저작권위원회의 엄격한 기술검정을 통과하여 그 기술력을 인정받았습니다.<br>
						저작권보호팀은 콘텐츠 제공자(CP, Contents Provider)와 온라인서비스제공자(OSP, Online Service Provider)<br>
						사이의 중립적인 위치에서 보다 투명한 콘텐츠 유통을 위해 앞장서고 있습니다.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../test/assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">콘텐츠 필터링 기술이란 ?</h4>
                            </div>
                            <div class="timeline-body">
								<p class="text-muted" id="">디지털 콘텐츠가 가지고 있는 고유의 특징 정보를 추출해 그 정보
								를 데이터베이스로 구축하고,이를 기반으로 유통 중인 콘텐츠를 비교, 검색하는 기술입니다.
								현재 콘텐츠 필터링 기술은 온라인에서 불법 유통 중인 콘텐츠를 차단하여 저작권 콘텐츠를 보호하는데 사용되고 있습니다.</p>
							</div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../test/assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">불법음란정보 유통 방지</h4>
                            </div>
                            <div class="timeline-body">
								<p class="text-muted">방송통신위원회와 방송통신심의위원회에서 제공하는 불법음란정보 데이터를 이용하여 불법음란정보 유통에 관한 온라인서비스제공자(OSP)의 기술적 조치 이행을 지원합니다.</p>
							</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../test/assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">개인 영상 저작권 보호</h4>
                            </div>
                            <div class="timeline-body">
								<p class="text-muted">개인이 제작한 영상과 디지털 저작물의 영상 인식 기술을 이용한 저작권 보호 사업을 함께 하고 있습니다. 개인 영상 저작물 등록 대행하고 있으며 영구적인 특징정보를 추출하여 영상 콘텐츠를 식별할 수 있도록 영구 디지털화 합니다.</p>
							</div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../test/assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">여기다가 뭘 해야할까</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../test/assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../test/assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../test/assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items" id="slide">
						<div class="col-md-3" id="slide1">
						   <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://img.hankyung.com/photo/202107/01.26850590.1.jpg" alt="..." /></a>
						</div>
						<div class="col-md-3" id="slide2">
						  <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://img.hankyung.com/photo/202108/01.27064669.1.jpg" alt="..." /></a>
						</div>
						<div class="col-md-3" id="slide3">
							<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://newsimg.sedaily.com/2021/03/19/22JV9J2JYL_1.jpg" alt="..." /></a>
						</div>
						<div class="col-md-3" id="slide4" >
							<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../test/assets/img/hansol.png"  alt="..." /></a>
						</div>
						<div class="col-md-3" id="slide5" style="display:none">
							<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../test/assets/img/hansol.png"  alt="..." /></a>
						</div>
				</div>
			</div>
		</div>
		<!-- 이거 슬라이드 인데 무한루프 내가 원하는거 아님
		<script>
			var slideIndex = 0;
				showSlides();

				function showSlides() {
					var i;
					var slides = document.getElementsByClassName("col-md-3");
					 var dots = document.getElementsByClassName("dot");

					for (i = 0; i < slides.length; i++) {
					   slides[i].style.display = "none";
					}
					console.log(slides2);
					slideIndex++;
					if (slideIndex > slides.length) {slideIndex = 1}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " active";
					setTimeout(showSlides, 500); // Change image every 2 seconds
				}
		</script>-->

	  <script>

		var ul = document.querySelector('#slide1');
		var ul2 = document.querySelector('#slide2');
		var ul3 = document.querySelector('#slide3');
		var ul4 = document.querySelector('#slide4');
		var ul5 = document.querySelector('#slide5');
		var ul6 = document.querySelector('#slide6');
        var i ;
        function move(){
            var curIndex = 0;
            setInterval(function(){
					ul.style.transition = '0.2s';
					ul.style.transform = "translate3d(-"+200*(curIndex+1)+"px, 0px, 0px)";
					ul2.style.transition = '0.4s';
					ul2.style.transform = "translate3d(-"+200*(curIndex+1)+"px, 0px, 0px)";
					ul3.style.transition = '0.6s';
					ul3.style.transform = "translate3d(-"+200*(curIndex+1)+"px, 0px, 0px)";
					ul4.style.transition = '0.8s';
					ul4.style.transform = "translate3d(-"+200*(curIndex+1)+"px, 0px, 0px)";
					ul5.style.transition = '0.8s';
					ul5.style.transform = "translate3d(-"+200*(curIndex+1)+"px, 0px, 0px)";
					ul5.style.transform = $('#slide5').show();
                curIndex++;

                if(curIndex === 4){
					curIndex = -1;
					 $('#slide5').show();
                }

            },500);
        }

        document.addEventListener("DOMContentLoaded",function(){
            move();
        });
    </script>


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">오시는길</h2>
                    <h3 class="section-subheading text-muted">Bucket Studio</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
					  <!-- Kakaomap-->
                        <div class="col-md-6"  id="map" style="width:100%;height:300px;"></div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 my-3 my-lg-0">
                      <div class="timeline-image"><img class="rounded-circle img-fluid" src="../test/assets/img/bucket-logo.JPG" alt="..." />
					  </div>
                    </div>
                    <div class="col-lg-4 ">
						<div style="">
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:99px;" id="Binggrae_font">서울특별시 강남구 선릉로 803 4층, 5층(신사동)</p>
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:249px;" id="Binggrae_font">T:02-6205-5400</p>
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:27px;"id="Binggrae_font">영상콘텐츠 제작 및 배급문의 : contents@bucketstudio.co.kr</p>
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:113px;"id="Binggrae_font">제휴관련 문의 : alliance@bucketstudio.co.</p>
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:112px;"id="Binggrae_font">기타문의 : webmaster@bucketstudio.co.kr</p>
							<p class="" style="font-size:12px;margin-bottom:5px;margin-right:23px;"id="Binggrae_font">Copyright © BUCKET STUDIO Co., Ltd. All Rights Reserved.</p>
						</div>
					</div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../test/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../test/assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>
		window.addEventListener('DOMContentLoaded', event => {

		// Navbar shrink function
		var navbarShrink = function () {
			const navbarCollapsible = document.body.querySelector('#mainNav');
			if (!navbarCollapsible) {
				return;
			}
			if (window.scrollY === 0) {
				navbarCollapsible.classList.remove('navbar-shrink')
			} else {
				navbarCollapsible.classList.add('navbar-shrink')
			}

		};

		// Shrink the navbar
		navbarShrink();

		// Shrink the navbar when page is scrolled
		document.addEventListener('scroll', navbarShrink);

		// Activate Bootstrap scrollspy on the main nav element
		const mainNav = document.body.querySelector('#mainNav');
		if (mainNav) {
			new bootstrap.ScrollSpy(document.body, {
				target: '#mainNav',
				offset: 74,
			});
		};

		// Collapse responsive navbar when toggler is visible
		const navbarToggler = document.body.querySelector('.navbar-toggler');
		const responsiveNavItems = [].slice.call(
			document.querySelectorAll('#navbarResponsive .nav-link')
		);
		responsiveNavItems.map(function (responsiveNavItem) {
			responsiveNavItem.addEventListener('click', () => {
				if (window.getComputedStyle(navbarToggler).display !== 'none') {
					navbarToggler.click();
				}
			});
		});

	});
</script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b842ce4d518f04233b655cc29d8ff6b7"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(37.52406 , 127.03894), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커를 표시할 위치입니다
var position =  new kakao.maps.LatLng(37.52406 , 127.03894);

// 마커를 생성합니다ㅛ
var marker = new kakao.maps.Marker({
  position: position
});

// 마커를 지도에 표시합니다.
marker.setMap(map);

// 마커에 커서가 오버됐을 때 마커 위에 표시할 인포윈도우를 생성합니다
var iwContent = '<div style="padding:5px;">Bucket studio</div>'; // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent
});

// 마커에 마우스오버 이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'mouseover', function() {
  // 마커에 마우스오버 이벤트가 발생하면 인포윈도우를 마커위에 표시합니다
    infowindow.open(map, marker);
});

// 마커에 마우스아웃 이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'mouseout', function() {
    // 마커에 마우스아웃 이벤트가 발생하면 인포윈도우를 제거합니다
    infowindow.close();
});
</script>
<!--  미디어배경화면
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../test/jsfile/vidbg.js"></script>
	<script>
    jQuery(function($){
          $('header').vidbg({
				'mp4': '../test/media/mp4_video.mp4',

          }, {
            // Options
            muted: true,
            loop: true,
  			overlay: false,
          });
      });
</script>
-->
</html>

