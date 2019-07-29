<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<meta charset="utf-8" />
		<!--↑↑模板中请务必使用HTML5的标准head结构↑↑-->
		<meta name="author" content="shopex UED Team" />
		<link rel="icon" href="https://wd.hnmall.com/app/topwap/statics/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="https://wd.hnmall.com/app/topwap/statics/favicon.ico" type="image/x-icon" />
		<title>测试环境，请勿进行真实业务行为_友阿微店</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link type='image/x-icon' href='/images/a2/12/48/d180da5fd7665600b83ad0ec74a64272f42377e0.png' rel='apple-touch-icon-precomposed'>
		<link href="static/css/shopex.picker_3.css" rel="stylesheet" media="screen, projection" />
		<link href="static/css/shopex.picker.min_3.css" rel="stylesheet" media="screen, projection" />
		<link href="static/css/shopex.poppicker_3.css" rel="stylesheet" media="screen, projection" />
		<link href="static/css/style_3.css" rel="stylesheet" media="screen, projection" />
		<link href="static/css/widgets_3.css" rel="stylesheet" media="screen, projection" />
		<script src="static/js/zepto_3.js"></script>
		<script src="static/js/shopex_3.js"></script>
		<script src="static/js/shopex.picker_3.js"></script>
		<script src="static/js/shopex.poppicker_3.js"></script>
		<script src="static/js/shopex.zoom_3.js"></script>
		<script src="static/js/shopex.previewimage_3.js"></script>
		<script src="static/js/common_3.js"></script>
		<script src="static/js/validate_3.js"></script>
	</head>
	<body class="body-padding-mini">
		<header class="icons-header">
			<i class="header-left icon-func bbc-icon bbc-icon-back shopex-action-back"></i>
			<a href="#minimenu" class="header-right icon-func bbc-icon bbc-icon-more-vertical btn-mini-menu"></a>
		</header>
		<script src="static/js/jweixin-1.3.2_1.js"></script>
		<link href="static/css/swiper.min_1.css" rel="stylesheet" media="screen, projection" />
		<script src="static/js/swiper.min_1.js"></script>
		<style>
			.box_1{width: 100%;height: 100%;position: fixed;background: rgba(0,0,0,0.5);z-index: 99999;top: 0;left: 0;}
			.tan_1{background: #fff;width: 80%;height: 260px;position: absolute;top: 50%;z-index: 99999; margin-left: 10%;margin-top: -130px;}
			.tan_nei{padding: 20px;text-align: center;}
			.img-b {
					display: block;
					max-width: 100%;
			}
			.statement {
					background-color: white;
					font-size: 12px;
					color: #666;
			}
			.state-title {
					text-align: center;
					font-weight: bold;
					font-size: 14px;
					border-bottom: 1px solid #f7f7f7;
					padding-top: 7px;
					margin-bottom: 5px;
			}
			.state-content {
					padding-bottom: 10px;
					margin-left: 10px;
					margin-right: 10px;
			}

			.activity-img-list {
					width: 100%;
					padding: 0 3%;
					display: table;
					background-color: white;
					padding-bottom: 10px;
			}

			.activity-img-list li {
					float: left;
					width: 32.4%;
					margin-left: 1.4%;
					margin-top: 0.5rem;
			}

			.activity-img-list li:nth-child(1) {
					margin-left: 0;
			}
			.activity-img-list img {
					display: block;
					width: 100%;
			}
			.goods-row {
					display: -webkit-flex;
					display: flex;
					justify-content: center;
					-webkit-justify-content:center;
					height: 40px;
					line-height: 40px;
					background-color: white;
					margin: 5px auto;
			}
			.row-name {
					display: -webkit-flex;
					display: flex;
					align-items: center;
					-webkit-align-items:center;
					margin: auto;
					position: relative;
					text-align: center;
					color: red;
					font-size: 14px;
			}
			.row-name::before{
					margin: auto 5px;
					display: inline-block;
					content: '';
					width: 20px;
					height: 1px;
					background-color: red;
			}
			.row-name::after{
					margin: auto 5px;
					display: inline-block;
					content: '';
					width: 20px;
					height: 1px;
					background-color: red;
			}

			.swiper-container {
					margin-bottom: 5px;
					background-color: white;
			}
			.swiper-slide {
					display: -webkit-flex;
					display: flex;
					-webkit-align-items: center;
					align-items: center;
					position: relative;
					background-color: white;
			}

			.goods-img {
					display: block;
					margin: 10px;
					overflow: hidden;
			}
			.goods-img img {
					display: block;
					max-width: 100%;
			}
			.name {
					height: 28px;
					line-height: 14px;
					font-size: 12px;
					color: #666;
					overflow : hidden;
					text-overflow: ellipsis;
					display: -webkit-box;
					-webkit-line-clamp: 2;
					-webkit-box-orient: vertical;
					white-space:normal;
					margin: 8px auto 2px;
			}
			.price {
					color: #DD1732;
					font-size: 12px;
			}
			.no-more {
					background-color: transparent;
			}
			.one {
					display: block;
					text-align: center;
					padding: 60% 0;
					overflow: hidden;
					font-size: 14px;
			}


			.goods-sku-modal .btn-modal-close {
					position: absolute;
					left: auto;
					top: 0;
					right: 0;
					bottom: auto;
					font-size: 0.9rem;
					color: #666;
					width: 44px;
					height: 44px;
					text-align: center;
					line-height: 44px;
			}

			.broad-coast {
					position: relative;
					z-index: 15;
					width: 100%;
					display: flex;
					justify-content: center;
			}
			.icon-cost {
					width: 40px;
					height: 40px;
					background: url(static/images/v_3_1.png) no-repeat center center;
					background-size: 20px 20px;
			}
			.broad{
					position: relative;
					width: 80%;
					font-size: 0.85rem;
					color: #333;
					white-space: nowrap;
					overflow: hidden;
			}
			.broad a {
					display: block;
					width: 100%;
			}
			.inner{width: 5000px;height:40px;line-height:40px;}
			.inner .txt{ display:inline-block;}
		</style>
		<div id='nearStore' style="z-index: 99999;"></div>
		<script src="static/js/public_2.js"></script>
		<section class="container no-header">
			<style>
				.bbc-slider-b .shopex-slider-group.shopex-slider-loop {
					position: relative;
				}
				.shopex-slider .shopex-slider-group .shopex-slider-item {
					height: auto;
				}
				.bbc-slider-b:after {
					padding-top: 0;
				} 
				.activity-img {
					position: absolute;
					top: 0;
					left: 0;
					width: 5.9rem;
					z-index: 16;
					pointer-events: none;
				}
				.absolute {
					position: absolute;
					bottom: 1rem;
					right: 5px;
					z-index: 16;
					width: 10rem;
					height: 4rem;
					pointer-events: none;
				}
			</style>
			<div id="slider" class="shopex-slider bbc-slider-b theme-border-bottom">
				<div class="shopex-slider-group shopex-slider-loop">
					<!-- 第一张 -->
					<div class="shopex-slider-item shopex-slider-item-duplicate">
						<a href="#"> <img src="static/picture/8481920178645849298.jpg_l.jpg">
						</a>
					</div>
					<div class="shopex-slider-item">
						<a href="#">
							<img src="static/picture/1777638521985852309.jpg_l.jpg">
						</a>
					</div>
					<div class="shopex-slider-item">
						<a href="#">
							<img src="static/picture/9043840138741835667.jpg_l.jpg">
						</a>
					</div>
					<div class="shopex-slider-item">
						<a href="#">
							<img src="static/picture/8481920178645849298.jpg_l.jpg">
						</a>
					</div>
					<div class="shopex-slider-item shopex-slider-item-duplicate">
						<a href="#"> <img src="static/picture/1777638521985852309.jpg_l.jpg">
						</a>
					</div>
				</div>
				<div class="shopex-slider-indicator">
					<div class="shopex-indicator shopex-active"></div>
					<div class="shopex-indicator "></div>
					<div class="shopex-indicator "></div>
				</div>
				<div class="absolute corner"></div>
				<img class="activity-img" src="static/picture/40d7d8559a4edbd09b85e3fd581235d025838c05_1.png" alt="">
			</div>

			<section class="section-white shopex-content-padded">
				<div class="goods-detail-brief">
					<div class="goods-detail-title">
						<h1>远大车载空气净化器FC3 蜂窝进风面 50片风叶 120转每秒 46mm轻薄设计 H13级过滤网 消除雾霾 PM2.5有效过滤率99% 包邮</h1>
						<h2>远大车载空气净化器FC3 H13级过滤网</h2>
					</div>
				</div>
				<div class="goods-detail-purchase">
					<div class="goods-detail-purchase-price action-update-price">
						<!--￥390.00-->
						￥390.00 <span class="font-gray-40 font08rem">
							<em class="original-price action-update-mkt-price">￥390.00</em>
						</span>
					</div>
					<div>
					</div>
					<!--<div class="goods-detail-purchase-num">0人购买</div>-->
				</div>
				<div class="ya-goods-mebuy" style="display:none;">
					<div class="ya-goods-mebuy-txt">总共有 <em>7676</em> 人在卖
					</div>
				</div>
			</section>
			<form action="https://wd.hnmall.com/wap/cart-add.html?mode=fastbuy" method="post" id="form_items">
				<input type="hidden" name="price_mode" value="price">
				<input type="hidden" name="selected_promotion" value="">
				<section class="section-white">
					<div class="shopex-table-view">
						<div class="shopex-table-view-cell">
							<a href="#sku" class="shopex-navigate-right section-list-item">
								<div class="section-list-key">已选</div>
								<div class="section-list-val action-selected-spec" data-selected="1">普通商品;</div>
							</a>
						</div>
						<div class="shopex-table-view-cell">
							<a href="javascript:void(0);" class="shopex-navigate-right section-list-item">
								<div class="section-list-key">提示：</div>
								<div class="section-list-val">卖家承担运费</div>
							</a>
						</div>
					</div>
					</div>
				</section>
				<!--强势插入-->
				<a href="https://wd.hnmall.com/wap/item-detail.html?item_id=11965">
					<img class="img-b" src="static/picture/b1b3b2b9a7197a2de90521fc8af6eeafd4f73dba_1.jpg" />
				</a>
		</section>
		<!--end-->
		<!--为你推荐-->
		<div class="goods-row" id="swiper-title-1">
			<div class="row-name">为你推荐</div>
		</div>
		<div class="swiper-container" id="swiper-1">
			<div class="swiper-wrapper"></div>
		</div>
		<div class="goods-row" id="swiper-title-2">
			<div class="row-name">热销爆款</div>
		</div>
		<div class="swiper-container" id="swiper-2">
			<div class="swiper-wrapper"></div>
		</div>
		<!--end-->
		<!--是门店，执行特有，非，执行默认-->
		<section class="section-white">
			<div class="shop-goods-brand shopex-content-padded">
				<div class="shop-goods-brand-logo" style="width:150px;height:150px"> <img style="width:150px;height:150px" src="static/picture/076ec271495f7494427fad42f6c0d2443189019b_1.jpg"
					 alt=""></div>
				<div class="shop-goods-brand-name">友阿微店自营店</div>
				<div class="ya-shop-goods-brand-link">
					<a href="https://wd.hnmall.com/wap/shop-index.html?shop_id=1">进店逛逛</a>
				</div>
			</div>
		</section>
		<section>
			<style type="text/css">
				.slider {
					width: 100%;
					overflow: hidden;
					background-color: #fff;
				}

				.slider-control-item {
					float: left;
					height: 40px;
					line-height: 40px;
					width: 33.3333%;
					text-align: center;
					-webkit-box-sizing: border-box;
					box-sizing: border-box;
				}

				.slider-control-item.active {
					border-bottom: 2px solid #ea2329;
				}

				.slider-wrapper {
					position: relative;
					width: 100%;
					overflow: hidden;
					-webkit-user-select: none;
					-ms-user-select: none;
					user-select: none;
				}

				.slider-items {
					position: relative;
					width: 100%;
					height: 100%;
					clear: both;
				}

				.slider-item {
					float: left;
					text-align: center;
					cursor: pointer;
				}

				.slider-item img {
					display: block;
					width: 100%;

				}

				.slider-fixed {
					position: fixed;
					top: 0;
					left: 0;
					z-index: 20;
				}
			</style>
			<div id="slider-tab" class="slider">
				<span class="slider-control-item">图文详情</span>
				<span class="slider-control-item">详细参数</span>
				<span class="slider-control-item">备注信息</span>
			</div>
			<div id="oy-slider" class="slider-wrapper">
				<div class="slider-items">
					<div class="slider-item">
						<p><img src="static/picture/20170224155637_635.jpg" alt="" /><img src="static/picture/20170224155713_554.jpg" alt="" /><img
							 src="static/picture/20170105165704_893.jpg" alt="" /><img src="static/picture/20170105165705_463.jpg" alt="" /><img
							 src="static/picture/20170105165706_984.jpg" alt="" /><img src="static/picture/20170105165706_968.jpg" alt="" /><img
							 src="static/picture/20170105165707_571.jpg" alt="" /><img src="static/picture/20170105165707_762.jpg" alt="" /><img
							 src="static/picture/20170105165708_672.jpg" alt="" /><img src="static/picture/20170224155821_6.jpg" alt="" /></p>
					</div>
					<div class="slider-item">
						<section class="parameter-table-view">
							<section class="parameter-table-view-group">
								<div class="parameter-table-view-header">基本参数</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">品牌：</div>
									<div class="parameter-table-view-val">远大</div>
								</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">产地：</div>
									<div class="parameter-table-view-val">湖南</div>
								</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">生产日期：</div>
									<div class="parameter-table-view-val">2017年1月</div>
								</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">快递信息：</div>
									<div class="parameter-table-view-val">中通快递</div>
								</div>
							</section>
						</section>
					</div>
					<div class="slider-item">
						<section class="parameter-table-view">
							<section class="parameter-table-view-group">
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">品牌：</div>
									<div class="parameter-table-view-val">远大</div>
								</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">货号：</div>
									<div class="parameter-table-view-val">G5AE2C39E2CB0C</div>
								</div>
								<div class="parameter-table-view-cell">
									<div class="parameter-table-view-key">备注：</div>
									<div class="parameter-table-view-val">远大车载空气净化器FC3 H13级过滤网</div>
								</div>
							</section>
						</section>
					</div>
				</div>
			</div>
			<script>

				/** 滑动Tab页 @author 蛙哥 **/
                ;(function (window, noGlobal) {
                    "use strict";
                    var version = '1.0.0';
                    var defaults = {
                        speed: 400,
                        delay: 5000,
                        autoplay: false,
                        bounceRatio: 0.2,
                        pagination: false,
                        loop: false,
                        buttons: false,
                        paginationClass: 'slider-pagination',
                        bulletClass: 'slider-bullet',
                        bulletActiveClass: 'slider-bullet-active'
                    };

                    var isObject = function (obj) {
                        return Object.prototype.toString.call(obj) === "[object Object]";
                    }

                    var extend = function (target, source) {
                        if (!isObject(source)) {
                            source = {};
                        }
                        for (var i in target) {
                            if (source[i] === undefined) {
                                source[i] = target[i]
                            }
                        }
                        return source;
                    }
                    var Device = (function () {
                        var ua = navigator.userAgent;
                        var android = ua.match(/(Android);?[\s\/]+([\d.]+)?/);
                        var ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
                        var ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
                        var iphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/);
                        return {
                            ios: ipad || iphone || ipod,
                            android: android,
                            desktop: !(ipad || iphone || ipod || android)
                        };
                    })();

                    function getScrollTop() {
                        var scrollPos;
                        if (window.pageYOffset) {
                            scrollPos = window.pageYOffset;
                        }
                        else if (document.compatMode && document.compatMode != 'BackCompat') {
                            scrollPos = document.documentElement.scrollTop;
                        }
                        else if (document.body) {
                            scrollPos = document.body.scrollTop;
                        }
                        return scrollPos;
                    }

                    function translate3d(element, x, y) {
                        x = x === undefined ? 0 : x;
                        y = y === undefined ? 0 : x;
                        element.style['-webkit-transform'] = 'translate3d(-' + x + 'px,' + y + 'px,0px)';
                        element.style['transform'] = 'translate3d(-' + x + 'px,' + y + 'px,0px)';
                    }

                    function transition(element, time) {
                        element.style['-webkit-transition-duration'] = time + 'ms';
                        element.style['transition-duration'] = time + 'ms';
                    }

                    function Slider(selector, options) {
                        options = extend(defaults, options);
                        return new Slider.init(selector, options);
                    }

                    Slider.init = function (selector, params) {
                        var container = document.querySelector(selector);
                        var wrap = container.children[0];
                        var slides = wrap.children;
                        var sliderCount = slides.length;
                        if (sliderCount === 0) {
                            console.warn('Slider children require at least one');
                            return this;
                        }
                        this.container = container;
                        this.wrap = wrap;
                        this.slides = slides;
                        this.params = {};
                        extend(params, this.params);
                        this.sliderCount = sliderCount;
                        this.lastIndex = sliderCount - 1;
                        this.firstIndex = 0;
                        this.isAnimating = false;
                        this.axis = {x: 0, y: 0};
                        this.fixed = false;
                        this.initSlides();
                        this.bindEvents();
                    }

                    var fn = Slider.init.prototype;

                    fn.initSlides = function () {
                        var width = Math.floor(window.innerWidth);
                        this.slideWidth = width;
                        this.wrap.style.width = width * this.sliderCount + 'px';
                        this.bounceWidth = this.params.bounceRatio * width;
                        this.activeIndex = 0;
                        this.slideStack = [];
                        for (var i = 0; i < this.sliderCount; i++) {
                            this.slides[i].style.width = width + 'px';
                            this.slideStack.push(i);
                        }

                        if (this.params.pagination) {
                            this.createPagination();
                        }

                    }

                    fn.createPagination = function () {
                        var wrap = $('#slider-tab');
                        this.bullets = wrap.children();
                        this.bullets.each(function (i, item) {
                            $(item).data('index', i);
                        });
                        this.setActivePagination();
                        this.paginationWrap = wrap;
                        this.offsetTop = wrap.offset().top;
                    }


                    fn.setActivePagination = function () {
                        var prevIndex = this.activeBulletIndex;
                        var activeIndex = this.activeIndex;
                        activeIndex = this.slideStack[activeIndex];
                        if (prevIndex === activeIndex) {
                            return;
                        }
                        if (prevIndex !== undefined) {
                            this.bullets.eq(prevIndex).removeClass(this.params.bulletActiveClass);
                        }
                        this.bullets.eq(activeIndex).addClass(this.params.bulletActiveClass);
                        this.activeBulletIndex = activeIndex;
                    }

                    fn.next = function () {
                        if (this.activeIndex >= this.lastIndex) {
                            return;
                        }
                        var activeIndex = ++this.activeIndex;
                        this.isAnimating = true;
                        translate3d(this.wrap, activeIndex * this.slideWidth);
                        transition(this.wrap, this.params.speed);
                        this.setActivePagination();
                    }

                    fn.prev = function () {
                        if (this.activeIndex <= this.firstIndex) {
                            return;
                        }
                        var activeIndex = --this.activeIndex;
                        this.isAnimating = true;
                        translate3d(this.wrap, activeIndex * this.slideWidth);
                        transition(this.wrap, this.params.speed);
                        this.setActivePagination();
                    }

                    fn.goTop = function () {
                        return;
                        var scrollTop = this.offsetTop - 38;
                        document.body.scrollTop = scrollTop;
                    }

                    fn.slideTo = function (index) {
                        var activeIndex = parseInt(index) || 0;
                        if (activeIndex === this.activeIndex) {
                            return;
                        }
                        this.goTop();
                        this.activeIndex = activeIndex;
                        this.isAnimating = true;
                        translate3d(this.wrap, activeIndex * this.slideWidth);
                        transition(this.wrap, this.params.speed);
                        this.setActivePagination();
                    }

                    fn.bindEvents = function () {
                        var that = this;
                        var screenHeight = window.innerHeight;
                        var offsetTop = Math.round(this.offsetTop * 0.9);
                        var pagination = this.paginationWrap;
                        var header = $('.icons-header');
                        if (Device.desktop) {
                            this.container.addEventListener('mousedown', this, false);
                            this.container.addEventListener('mousemove', this, false);
                            document.addEventListener('mouseup', this, false);
                        } else {
                            //this.container.addEventListener('touchstart',this,false);
                            //this.container.addEventListener('touchmove',this,false);
                            //document.addEventListener('touchend',this,false);
                        }
                        this.container.addEventListener('transitionend', this, false);
                        //this.container.addEventListener('click',this,false);
                        this.paginationWrap.on('click', function (e) {
                            that.handleEvent(e);
                        });

                        window.addEventListener('scroll', function (e) {
                            return;
                            var scrollTop = getScrollTop();
                            if (scrollTop >= offsetTop) {
                                if (this.fixed) {
                                    return;
                                }
                                header.hide();
                                pagination.addClass('slider-fixed');
                                this.fixed = true;
                            } else {
                                if (this.fixed === false) {
                                    return;
                                }
                                header.show();
                                pagination.removeClass('slider-fixed');
                                this.fixed = false;
                            }
                        })
                    }

                    fn.transitionend = function () {
                        this.isAnimating = false;
                    }

                    fn.start = function (pageX, pageY) {
                        this.axis.x = parseInt(pageX);
                        this.axis.y = parseInt(pageY);
                        if (this.params.autoplay) {
                            this.params.autoplay = false;
                            this.timeId && clearTimeout(this.timeId);
                        }
                    }

                    fn.move = function (pageX, pageY) {
                        pageX = parseInt(pageX);
                        pageY = parseInt(pageY);
                        var distance = this.axis.x - pageX;
                        var y = Math.abs(this.axis.y - pageY);

                        if (y > 10 && Math.abs(distance) < this.bounceWidth) {
                            return;
                        }
                        if (this.isAnimating) return;
                        if (this.axis.x === 0) return;
                        if (pageX < 0 || pageX > this.slideWidth) return;
                        if (distance > 0 && this.activeIndex === this.lastIndex) {
                            return;
                        }
                        if (distance < 0 && this.activeIndex === this.firstIndex) {
                            return;
                        }
                        translate3d(this.wrap, distance + this.slideWidth * this.activeIndex);
                        transition(this.wrap, 0);
                        if (distance > 0) {
                            if (distance > this.bounceWidth) {
                                this.next();
                                this.axis.x = 0;
                                this.axis.y = 0;
                                this.goTop();
                            }
                        } else {
                            if (-distance > this.bounceWidth) {
                                this.prev();
                                this.axis.x = 0;
                                this.axis.y = 0;
                                this.goTop();
                            }
                        }
                    }

                    fn.stop = function () {
                        this.axis.x = 0;
                        this.axis.y = 0;
                        //if(this.isAnimating)return;
                        translate3d(this.wrap, this.slideWidth * this.activeIndex);
                        transition(this.wrap, this.params.speed);
                    }

                    fn.handleEvent = function (e) {
                        var type = e.type;
                        switch (type) {
                            case 'mousedown':
                                this.start(e.pageX, e.pageY);
                                break;
                            case 'mousemove':
                                this.move(e.pageX, e.pageY);
                                break;
                            case 'mouseup':
                                this.stop();
                                break;
                            case 'touchstart':
                                e = e.targetTouches[0];
                                this.start(e.pageX, e.pageY);
                                break;
                            case 'touchmove':
                                e = e.targetTouches[0];
                                this.move(e.pageX, e.pageY);
                                break;
                            case 'touchend':
                                this.stop();
                                break;
                            case 'transitionend':
                            case 'WebkitTransitionend':
                                this.transitionend();
                                break;
                            case 'click':
                                e.stopPropagation();
                                this.slideTo($(e.target).data('index'));
                                break;
                            default:
                                break;
                        }
                    }
                    Slider('#oy-slider', {
                        pagination: true,
                        bulletClass: 'slider-control-item',
                        bulletActiveClass: 'active'
                    });

                })(window);


</script>

		</section>
		</section>
		<div class="statement">
			<div class="state-title">价格说明：</div>
			<div class="state-content">
				<p><b>划线价、参考价：</b>商品展示的参考价（或划线价格），可能是品牌专柜标价、由品牌供应商提供的正品零售价（如厂商指导价、建议零售价、市场价等）或该商品在友阿微店平台或销售商门店曾经展示过的挂牌价，并非原价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价、销售商门店挂牌价等可能会与您购物时展示的不一致，该价格仅供您参考。</p>
				<p><b>促销价：</b>如无特殊说明，促销价指销售商在参考价或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价、销售商门店挂牌价）等某一价格基础上计算出的优惠价格；如有疑问，您可在购买前联系我们进行咨询。</p>
				<p><b>商品详情页：</b>含主图（商品二维码图）以图片或文字形式标注的一口价、促销价、优惠价等价格可能是在使用优惠券、满减或特定优惠活动和时段等情形下的价格，具体请以结算页面的标价、优惠条件或活动规则为准。 </p>
				<p><b>异常问题：</b>因可能存在系统缓存、页面更新延迟等不确定性情况，导致价格显示异常，商品的具体售价以订单结算页价格为准；如您发现活动商品售价有异常，请立即联系我们补正，以便您能顺利购物。</p>
			</div>
		</div>
		<section class="ya-pop">
			<div class="ya-popmain">
				<a href="javascript:;" class="ya-pop-close"><img src="static/picture/ya-pop-close_1.png"></a>
				<img src="static/picture/ya-code-pic_1.jpg" style="width: 100%; ">
				<div class="txt">长按图片保存到本地</div>
			</div>
		</section>
		<script>
			$(function () {
        $('.ya-goods-code').click(function () {
            var url = 'https://wd.hnmall.com/wap/item-code.html?item_id=10836';
            $.get(url, function (res) {
                res = $.parseJSON(res);
                if (res.status != 0) {
                    $(".ya-popmain").children("img").attr('src', res.img);
                    $('.ya-pop').show();
                }
            });
        });
        $('.ya-pop-close').click(function () {
            $('.ya-pop').hide();
        });
			})
		</script>
		<section class="action-bar-mini">
			<input type="hidden" name="item[sku_id]" class="action-update-item" value="12905">
			<div class="op-item goods-op-faverite"><a href="https://wd.hnmall.com/wap/passport-gologin.html?"><i class="bbc-icon bbc-icon-star-empty"></i><span>收藏</span></a></div>
			<div class="op-item goods-op-incart"><a href="https://wd.hnmall.com/wap/cart.html"><i class="bbc-icon bbc-icon-cart-empty"></i><span>购物车</span></a></div>
			<div class="op-item op-btn goods-op-cart"><a href="https://wd.hnmall.com/wap/cart-add.html" class="action-addtocart" rel="_request">加入购物车</a></div>
			<div class="op-item op-btn goods-op-buy"><a onclick="handleToBuy()" class="ljgm">立即购买</a></div>
		</section>
		<div id="sku" class="shopex-popover shopex-popover-action shopex-popover-bottom">
			<div class="bbc-popover-modal goods-sku-modal">
				<i class="bbc-icon bbc-icon-error btn-modal-close"></i>
				<div class="goods-modal-brief">
					<div class="goods-modal-brief-thumbnail"><a href="#"><img src="static/picture/1777638521985852309.jpg_t.jpg"></a></div>
					<div class="goods-modal-brief-caption">
						<div class="goods-modal-brief-price action-update-price">￥390.00</div>
						<div class="action-update-spec">普通商品;</div>
						<input type="hidden" class="action-update-quantity" value="">
					</div>
				</div>
				<div id="skuScroll" class="goods-sku-list shopex-off-canvas-wrap">
					<div class="shopex-scroll">
						<ul>
							<li>
								<div class="goods-sku-name">默认规格</div>
								<div class="goods-sku-options">
									<span data-spec-value-id="16909" class="checked">普通商品</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="goods-sku-op">
					<div class="goods-sku-op-item addcart-item-num">
						<div class="shopex-numbox" data-numbox-min="1">
							<button class="shopex-btn shopex-btn-numbox-minus action-decrease" type="button">-</button>
							<input id="test" name="item[quantity]" min="1" max="1000" class="shopex-input-numbox action-quantity-input" type="number"
							 value="1">
							<button class="shopex-btn shopex-btn-numbox-plus action-increase" type="button">+</button>
						</div>
					</div>
					<div class="goods-sku-op-item goods-op-buy">
						<div class="action-sure">确定</div>
						<div class="bbc-btn-disabled action-storeout" style="display: none;">已售罄</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<div id="minimenu" class="bbc-mini-menu shopex-popover">
			<div class="shopex-popover-arrow"></div>
			<div>
				<div class="shopex-content-padded">
					<a class="font-white" href="https://wd.hnmall.com/wap"><i class="bbc-icon bbc-icon-home-empty"></i> 首页</a>
				</div>
				<div class="shopex-content-padded">
					<a class="font-white" href="https://wd.hnmall.com/wap/category.html"><i class="bbc-icon bbc-icon-category-empty"></i>
						分类</a>
				</div>
				<div class="shopex-content-padded">
					<a class="font-white" href="https://wd.hnmall.com/wap/cart.html"><i class="bbc-icon bbc-icon-cart-empty"></i> 购物车</a>
				</div>
				<div class="shopex-content-padded">
					<a class="font-white" href="https://wd.hnmall.com/weidian/store-index.html"><i class="bbc-icon bbc-icon-store-empty"></i>
						店铺</a>
				</div>
				<div class="shopex-content-padded">
					<a class="font-white" href="https://wd.hnmall.com/wap/member.html"><i class="bbc-icon bbc-icon-user-empty"></i> 会员</a>
				</div>
			</div>
		</div>
		<script src="static/js/wxsdk_2.js"></script>
		<script>
			$(function() {
				// 先获得缓存里面的经纬度
				var local = $_ZYXX.getLocation();
				// 如果缓存里面得到经纬度

				if (local) {
					// 利用缓存里面的经纬度到后台去获得附近的店铺
					getNearStore(local);
				} else {
					/*// 如果缓存里面没有得到经纬度，那么去微信获取（先获得微信的授权信息）
					$_ZYXX.getWeixinBasicInfo('weixinCallBack1');
					// 如果没有获取到当前会员的授权信息，那么用浏览器获取
					$_ZYXX.navigatorGeolocation(CM_getLocation);*/

					/*        // ios10 以上系统不支持h5定位
					        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					            // 苹果端
					            // 如果缓存里面没有得到经纬度，那么去微信获取（先获得微信的授权信息）
					            $_ZYXX.getWeixinBasicInfo('weixinCallBack1');
					        } else if (/(Android)/i.test(navigator.userAgent)) {
					            // 安卓端
					            // 如果没有获取到当前会员的授权信息，那么用浏览器获取
					            $_ZYXX.navigatorGeolocation(CM_getLocation);
					        } else {
					            // pc端
					            // 如果没有获取到当前会员的授权信息，那么用浏览器获取
					            $_ZYXX.navigatorGeolocation(CM_getLocation);
					        };*/

					// h5定位误差太大,ios10不支持h5定位,先微信定位，后h5定位
					$_ZYXX.getWeixinBasicInfo('weixinCallBack1');
				}
			});

			// 先采用H5定位，在采用微信定位,做$_ZYXX.navigatorGeolocation的回调函数即可
			function pistionOption() {
				if (typeof position.coords.weixin != 'undefined' && position.coords.weixin == 1) {
					// 如果缓存里面没有得到经纬度，那么去微信获取（先获得微信的授权信息）
					$_ZYXX.getWeixinBasicInfo('weixinCallBack1');
				} else {
					// 如果获得了经纬度，那么就去缓存当前会员的经纬度
					if (!isNaN(position.coords.latitude) && !isNaN(position.coords.longitude)) {
						$_ZYXX.setLocation(position.coords.latitude, position.coords.longitude);
					}
					console.log(position.coords);
					// 利用会员当前的位置，去后台获得附近的店铺
					getNearStore({
						lat: position.coords.latitude,
						lng: position.coords.longitude
					});
				}
			}

			// 微信验证信息的回调函数（获得微信的授权信息后）
			function weixinCallBack1(resArr) {
				// 如果返回值为真，那么获得了当前会员的授权信息
				if (resArr) {
					// 利用微信的授权信息取获得当前会员的位置
					$_ZYXX.getLocationByWeixin(resArr, 'weixinCallBack2');
				} else {
					// 如果没有获取到当前会员的授权信息，那么用浏览器获取
					$_ZYXX.navigatorGeolocation(CM_getLocation);
				}
			}

			// 微信验证信息的回调函数（获得当前会员的位置后）
			function weixinCallBack2(resArr) {
				// 如果获得了当前会员的位置信息
				if (resArr) {
					// 缓存当前会员的经纬度
					$_ZYXX.setLocation(resArr.latitude, resArr.longitude);
					// 利用会员当前的位置，去后台获得附近的店铺
					getNearStore({
						lat: resArr.latitude,
						lng: resArr.longitude
					});
				} else {
					// 如果没有获取到当前会员的位置信息，那么还是用浏览器获取
					$_ZYXX.navigatorGeolocation(CM_getLocation);
				}
			}

			// 获得了当前会员的经纬度，就缓存该位置信息，然后去后台获得附近的店铺
			function CM_getLocation(position) {
				// 如果获得了经纬度，那么就去缓存当前会员的经纬度
				if (!isNaN(position.coords.latitude) && !isNaN(position.coords.longitude)) {
					$_ZYXX.setLocation(position.coords.latitude, position.coords.longitude);
				}
				console.log(position.coords);
				// 利用会员当前的位置，去后台获得附近的店铺
				getNearStore({
					lat: position.coords.latitude,
					lng: position.coords.longitude
				});
			}


			// 向后台请求数据
			function getNearStore(p) {
				// 设置要获取的店铺数量
				var num = 1;
				// 设置要获得的商品数量
				var len = 4;
				// 判断参数
				if (!p.lat) p.lat = 28.234589;
				if (!p.lng) p.lng = 112.913554;

				$.ajax({
					type: 'get',
					url: 'https://wd.hnmall.com/oto/store-apis.html',
					data: '?&method=shop.index.storeone&dimensions=' + p.lat + '&longitude=' + p.lng + '&storenum=' + num +
						'&length=' + len,
					dataType: 'json',
					success: function(r) {
						if (typeof r.success == 'undefined') return false;
						// 得到要展示的html代码 
						if (r.message[0].shop_id != '' && '') {
							nearStore(r.message, p.lat, p.lng);
						}

					}
				});
			}


			// 得到要展示的html代码
			function nearStore(d, lat1, lng1) {
				var shop_name = '';
				var n = $('#nearStore');
				var shop_ids = d[0].shop_id;
				var nmore = '';
				nmore += '<div class="box_1" >';
				nmore += '<div class="tan_1">';
				nmore += '<div class="tan_nei">';
				nmore += '<div style="font-size: 0.8rem;color: #666;margin: 10px 0;">您上次使用的地址</div>';
				nmore += '<div style="margin-top: 10px;">' + shop_name + '</div>';
				nmore +=
					'<div id="kkk" onclick="kkk()" style="line-height: 30px;background: #ffa100;color: #fff;margin: 10px 0;" >继续使用</div>';
				nmore += '<div style="font-size: 0.8rem;color: #666;margin: 10px 0;">距离您最近的店铺</div>';
				nmore += '<div style="margin-top: 10px;">' + d[0].shop_name + '</div>';
				nmore += '<a href="https://wd.hnmall.com/wap/item-detail.html?item_id=10836&shop_id=' + shop_ids +
					'"><div style="line-height: 30px;margin: 10px 0;border: 1px solid #ffa100;color: #ffa100;background: #fff;">使用此地址</div></a>';
				nmore += '</div>';
				nmore += '</div>';
				nmore += '</div>';
				n.html(nmore);
			}

			function kkk() {
				$('#nearStore').hide();
			}

			function presell() {
				var form = $('#form_items');
				// 如果立即购买被选中
				$.post($('#form_items').attr('action'), form.serialize(), function(rs) {
					if (rs.success == true) {
						sure_flag = true;
					}
					if (rs.error) {
						shopex.alert(rs.message, function() {
							sure_flag = true
						});
						return;
					}
					location.href = rs.redirect;
				});
			}
		</script>
		<script type="text/javascript">
			$(function() {
				var top = 0;
				var header = $('.icons-header');
				var appdonload = document.getElementById('J-call-app');
				var hasmarquee = document.getElementById('marquee');
				if (appdonload) {
					top += 50;
				}
				if (hasmarquee) {
					top += 40;
				}
				$('.icons-header').css('top', top + 'px');
			})
			function openSKU() {

				if ($('.action-update-item').val() == '') {
					//console.log(123);
					shopex('#sku').popover('show');
					return
				}

				//        var form = $('#form_items');
				//        $.post(form.attr('action'), form.serialize(), function (rs) {
				//            if (rs.success && rs.redirect) {
				//                location.href = rs.redirect;
				//            }
				//            if (rs.error) {
				//                shopex.alert(rs.message);
				//            }
				//        });


				/*        console.log(1122)
				        if($('.action-update-item').val() == ''){
				            shopex('#sku').popover('show');
				            return
				        }
				        else{
				            window.location.href = "https://wd.hnmall.com/wap/passport-gologin.html?";
				        }*/
			}
			//微信分享
			$(function() {
				//alert('http://image.hnmall.com/user_res/upload/temp/201701/05/1777638521985852309.jpg_s.jpg');
				var wxsdk = YA_WX_SDK({
					type: "item",
					title: '远大车载空气净化器FC3 H13级过滤网  消除雾霾PM2.5有效过滤 包邮',
					desc: '远大车载空气净化器FC3 消除雾霾 PM2.5有效过滤',
					link: 'https://wd.hnmall.com/wap/item-detail.html?item_id=10836',
					imgUrl: 'http://image.hnmall.com/user_res/upload/temp/201701/05/1777638521985852309.jpg_s.jpg'
				});
			});
			// 商品sku
			var specSkuJson =
				'{"16909":{"sku_id":12905,"item_id":10836,"price":"390.000","mkt_price":"390.000","store":1000,"valid":true}}';
			var specSku = JSON.parse(specSkuJson) || {};
			var spec_select = $('#skuScroll');
			var spec_size = spec_select.find('li').length;
			var shopId = "1";
			var item_id = "10836";
			// 货币符号和精度
			var sig = '￥';
			var decimals = '2';
			var gallery = shopex("#slider");
			if (Object.keys(specSku).length === 1) {
				//默认选中SKU
				$("input[name='item[sku_id]']").val(specSku[Object.keys(specSku)[0]].sku_id);
			}
			shopex.init({
				swipeBack: false //启用右滑关闭功能
			});
			shopex('body').on('shown', '.shopex-popover', function(e) {
				//console.log('shown', e.detail.id);//detail为当前popover元素
			});
			shopex('body').on('hidden', '.shopex-popover', function(e) {
				//console.log('hidden', e.detail.id);//detail为当前popover元素
			});
			shopex('#skuScroll').scroll();
			$('.goods-sku-list').on('tap', '.goods-sku-options span', function() {
				$(this).addClass('checked').siblings().removeClass('checked');
			})
			// 如果关闭按钮被触发，
			$('.btn-modal-close').on('tap', function() {
				$('.action-fastbuy').removeClass('selected-action');
				$('.action-addtocart').removeClass('selected-action');
				$('.action-fastbuy, .action-addtocart').show();
				shopex('#sku').popover('hide');
			})
			//商品规格选择
			spec_select.on('tap', '.goods-sku-options>span', function() {
				var selected = spec_select.find('.checked');

				if (selected.length == 1 && spec_size == 2) {
					//找到选择的规格
					var obj = $('.goods-sku-options > .checked');
					var chkspecval = obj.data('spec-value-id');
					//在找上级的兄弟姐妹的下面的规格
					obj.parent().parent().siblings('li').children('.goods-sku-options').children('span').each(function(i, item) {
						//console.log(item)
						var chksku1 = chkspecval + "_" + $(this).data('spec-value-id');
						var chksku2 = $(this).data('spec-value-id') + "_" + chkspecval;

						if (specSku[chksku1] == undefined && specSku[chksku2] == undefined) {
							$(this).hide();
						} else {
							$(this).show();
						}
					});
				}

				//判断商品规格
				if (selected.length == spec_size) {
					var sku = [];
					selected.each(function(index, el) {
						sku.push($(this).attr('data-spec-value-id'));
					});
					sku = sku.join('_');
					if (specSku[sku] == undefined) {
						alert('此规格未上架，请重新选择');
						return;
					}
				}

				var selectedSpec = [];
				selected.each(function(index, el) {
					selectedSpec.push($(this).html());
				});
				$('.action-update-spec').html(selectedSpec.join(';'));
				if (selected.length == spec_size) {
					var key = [];
					selected.each(function(index, el) {
						key.push($(this).attr('data-spec-value-id'));
						selectedSpec.push($(this).html());
					});
					key = key.join('_');
					var specinfo = specSku[key];
					precessSpec(specinfo);
				}
			});

			function precessSpec(rs) {
				if (rs.sku_id == '') {
					shopex('#sku').popover('show');
					return
				}
				$('.action-update-item').val(rs.sku_id);
				Currency.spec.sign = '￥';
				Currency.spec.decimals = '2';
				var activity_price = "";
				var price_mode = "price";
				if (activity_price && price_mode == 'activity_price') {
					$('.action-update-price').text(Currency.format(activity_price));
				} else {
					$('.action-update-price').text(Currency.format(rs.price));
				}
				$('.action-update-mkt-price').text(Currency.format(rs.mkt_price));
				$('.action-update-quantity').val(rs.store);
				var quantity = $('.action-quantity-input').attr('max', rs.store);
				if (quantity.val() > rs.store) {
					quantity.val(rs.store);
				}
				$('.action-fastbuy, .action-addtocart').hide();
				if (rs.valid && rs.store >>> 0) {
					quantity.val(quantity.attr('min'));
					$('.action-fastbuy, .action-addtocart').show();
				}
				var item_valid = "1";
				if (rs.store <= 0 || !item_valid) {
					$('.action-storeout').show();
					$('.action-sure').hide();
					$('.addcart-item-num').hide();
				} else {
					$('.action-storeout').hide();
					$('.action-sure').show();
					$('.addcart-item-num').show();
				}
			}
			bindQuantityEvent('.goods-sku-op', setQuantity);
			//为数量选择框绑定事件
			function bindQuantityEvent(elements, callback) {
				elements = $(elements);
				if (!elements && !!elements.length) return;
				var value = "";
				//数量按钮
				elements.on('tap', '.action-decrease,.action-increase', function() {
					var input = $(this).parent().find('.action-quantity-input');
					value = input.val();
					//input.val($(this).hasClass('action-decrease') ? value - 1 : value + 1);
					return callback && callback(input, value);
				}).on('focus', '.action-quantity-input', function(e) {
					value = +$(this).val();
				}).change('change', '.action-quantity-input', function(e) {
					return callback && callback($(this), value);

				});
			}
			//获取商品数量值
			function getQuantity() {
				return $('.action-update-quantity').val();
			}
			//设置商品数量
			function setQuantity(input, value) {
				return inputCheck(input, {
					min: input.attr('min'),
					max: input.attr('max'),
					'default': value,
					store: getQuantity(),
					callback: window.quantityCallback
				});
			}

			//商品数量输入框正确性检测
			function inputCheck(input, options) {
				if (!input && !input.length) return false;
				options = options || {};
				if (isNaN(options.min)) options.min = 1;
				if (isNaN(options.max)) options.max = 999999;
				options['default'] = options['default'] || options.min;

				var value = +input.val();
				var pre = '';
				var msg = '';
				if (options.store && options.store - value < 0) {
					pre = '库存有限';
				}
				if (value < options.min) {
					input.val(options.min);
					if (options.min != '1') {
						msg = "此商品最少购买" + options.min + "件";
					}
				} else if (value > options.max) {
					input.val(options.max);
					msg = "此商品最多购买" + options.max + "件";
				} else if (isNaN(value)) {
					input.val(options['default']);
					msg = '只允许输入数字';
				}
				if (msg != '') {
					shopex.toast(msg);
					return false;
				}
				if (options.callback) {
					options.callback(input, options['default']);
					return false;
				}
			}
			var sure_flag = true;
			$('.action-sure').on('tap', function() {
				if (sure_flag) {

					sure_flag = false;

					// 判断是否选择属性，sku_id有没有值，
					var askuid;
					askuid = $('.action-update-item').val();
					if (askuid == '') {
						shopex.alert('请选择商品属性!!');
						return;
					}

					if (spec_select.find('.checked').length < spec_size) {
						shopex.toast('请先选择完整规格');
						return false;
					}
					// 设置被选择的sku名称
					$('.action-selected-spec').html($('.action-update-spec').html());
					// 标注已选择了sku
					$('.action-selected-spec').attr('data-selected', '1');
					//
					var form = $('#form_items');
					// 如果立即购买被选中
					var has_fastbuy = $('.action-fastbuy').hasClass('selected-action');
					// 如果添加到购物车被选中
					var has_addcart = $('.action-addtocart').hasClass('selected-action');
					// 如果没有选中立即购买，并且没有选中加入购物车，那么隐藏sku选择框
					if (!has_fastbuy && !has_addcart) {
						shopex('#sku').popover('hide');
						return;
					}
					// 设置
					$('.action-selected-spec').attr('data-selected', '0');
					var href = has_fastbuy ? form.attr('action') : $('.action-addtocart').attr('href');

					$.post(href, form.serialize(), function(rs) {
						//console.log(rs)
						if (rs.success == true) {
							sure_flag = true;
						}

						//            console.log(href)
						//            if(rs.sku_id == '' || rs.sku_id == null || rs.sku_id == undefined){
						//                shopex('#sku').popover('show');
						//            }

						if (rs.error) {
							shopex.alert(rs.message, function() {
								sure_flag = true
								if (rs.message == '请填写收货地址') {
									location.href = rs.redirect;
								}
							});
							return;
						}
						if (has_fastbuy) {
							$('.action-fastbuy').removeClass('selected-action');
							location.href = rs.redirect;
						} else {
							$('.action-addtocart').removeClass('selected-action');
							shopex.toast(rs.message);
							shopex('#sku').popover('hide');
						}
					});
				}



			});
			//商品规格选择缺货
			$('.action-storeout').on('tap', function() {
				if (spec_select.find('.checked').length < spec_size) {
					shopex.toast('请先选择完整规格');
					return false;
				}

				url = "https://wd.hnmall.com/wap/notify-item.html";
				url = url + '?shop_id=' + shopId + '&item_id=' + item_id + '&sku_id=' + $('input[name="item[sku_id]"]').val();
				location.href = url
			});
			function ispcbuy() {
				//console.log('check')
				//PC端立即购买显示二维码
				if (!/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
					$(".action-fastbuy,.action-addtocart").unbind();
					$(".action-fastbuy,.action-addtocart").click(function() {
						var url = 'https://wd.hnmall.com/wap/item-code.html?item_id=10836';
						$.get(url, function(res) {
							res = $.parseJSON(res);
							if (res.status != 0) {
								$(".ya-popmain").children("img").attr('src', res.img);
								$('.ya-pop').show();
							}
						});
					});
					return false;
				} else if (window.__wxjs_environment === 'miniprogram') {
					//小程序
					miniProgram()
				} else {

					return true;
				}
			}
			$('.action-fastbuy').on('tap', function() {
				if (ispcbuy()) {
					if ($('.action-selected-spec').attr('data-selected') == '0') {
						$(this).addClass('selected-action');
						shopex('#sku').popover('show');
						return;
					}
					if ($('.action-update-item').val() == '') {
						//console.log(123);
						shopex('#sku').popover('show');
						return
					}
					var form = $('#form_items');
					$.post(form.attr('action'), form.serialize(), function(rs) {
						if (rs.success && rs.redirect) {
							location.href = rs.redirect;
						}
						if (rs.error) {
							shopex.alert(rs.message);
						}
					});
				}
			});
			$('.action-addtocart').on('tap', function(e) {
				if (ispcbuy()) {
					if ($('.action-selected-spec').attr('data-selected') == '0') {
						$(this).addClass('selected-action');
						shopex('#sku').popover('show');
						return;
					} else {
						// 强制在选择一次属性
						$(this).addClass('selected-action');
						shopex('#sku').popover('show');
						return;
					}
				}
			});
			$('.action-fastbuy').data('ajaxCallback', function(rs, target) {
				localStorage.setItem('_cart_params', 'mode=fastbuy');
				$('.action-selected-spec').attr('data-selected', '0');
			});
			// 已售罄
			$('.notify').on('click', function() {
				if ($('.action-selected-spec').attr('data-selected') == '0') {
					$(this).addClass('selected-action');
					shopex('#sku').popover('show');
					return;
				}
				var sku_id = $('input[name="item[sku_id]"]').val();
				var url = "https://wd.hnmall.com/wap/notify-item.html";
				url = url + '?shop_id=' + shopId + '&item_id=' + item_id + '&sku_id=' + sku_id;
				window.location.href = url;
			});
			//收藏店铺
			$('.collect-shop').on('tap', function(e) {
				var $this = $(this);
				if ($this.find('i').hasClass('bbc-icon-faverite')) return;
				$.post('https://wd.hnmall.com/wap/collect-shop.html', $(this).attr('data-ajax-data'), function(rs) {
					if (rs.success) {
						$this.find('i').removeClass('bbc-icon-star-empty').addClass('bbc-icon-faverite');
						$this.find('span').html("已收藏");
					} else {
						shopex.alert(rs.message);
					}
				});
			});
			//收藏商品
			$('.collect-goods').on('tap', function(e) {
				e.preventDefault();
				var $this = $(this);
				if ($this.find('i').hasClass('bbc-icon-faverite')) {
					$.post('https://wd.hnmall.com/wap/collect-item-del.html', $(this).attr('data-ajax-data'), function(rs) {
						if (rs.success) {
							$this.find('i').addClass('bbc-icon-star-empty').removeClass('bbc-icon-faverite');
							$this.find('span').html("收藏");
							$this.parent('.goods-op-faverite').removeClass('goods-faverited');
						} else {
							shopex.alert(rs.message);
						}
					});
				} else {
					$.post('https://wd.hnmall.com/wap/collect-item.html', $(this).attr('data-ajax-data'), function(rs) {
						if (rs.success) {
							$this.find('i').removeClass('bbc-icon-star-empty').addClass('bbc-icon-faverite');
							$this.find('span').html("已收藏");
							$this.parent('.goods-op-faverite').addClass('goods-faverited');
						} else {
							shopex.alert(rs.message);
						}
					});
				}
			});
			var geturl = 'https://wd.hnmall.com/index.php/topapi?format=json&v=v1&method=item.recommend&item_id=' + "10836";
			//console.log(geturl);
			var goods_id = "10836";
			var buylink = "https://wd.hnmall.com/wap/passport-gologin.html?";
			//小程序跳转
			function miniProgram() {
				wx.miniProgram.navigateTo({
					url: '/pages/goods/detail?id=' + goods_id
				});
			}
			if (!window.WeixinJSBridge || !WeixinJSBridge.invoke) {
				document.addEventListener('WeixinJSBridgeReady', miniProgram, false)
			} else {
				if (window.__wxjs_environment === 'miniprogram') {
					miniProgram()
				}
			}

			function handleToBuy() {
				//console.log(3333)
				if (window.__wxjs_environment === 'miniprogram') {
					miniProgram()
				} else {
					window.location.href = buylink;
				}
			}
			$(document).ready(function() {

				var swiper1 = new Swiper('#swiper-1', {
					slidesPerView: 3,
					autoplay: 4000
				});
				var swiper2 = new Swiper('#swiper-2', {
					slidesPerView: 3
				});
				var wrap1 = swiper1.wrapper;
				var wrap2 = swiper2.wrapper;
				$.ajax({
					url: geturl,
					success: function(res) {
						//console.log(res.list)
						if (res.code === 0) {
							let r = res.data;
							var html1 = render({
								list: r.item_list,
								more: r.link_more,
								off: r.is_off
							});
							var html2 = render({
								list: r.hot_item_list,
								more: r.hot_link_more,
								off: r.hot_is_off
							});
							html1 && wrap1.html(html1);
							html2 && wrap2.html(html2);
							if (!html2) {
								$('#swiper-2').hide();
								$('#swiper-title-2').hide();
							}
							if (!html1) {
								$('#swiper-1').hide();
								$('#swiper-title-1').hide();
							}
							setTimeout(function() {
								html1 && swiper1.update();
								html2 && swiper2.update();
							}, 100)
						}
					},
					dataType: 'json'
				});

				//setCornerSign(goods_id)

			});
			function render(data) {
				var html = '';
				var list = data.list,
					more = data.more,
					isOff = data.off;
				if (list.length > 0) {
					for (var i = 0; i < list.length; i++) {
						html += '<div class="swiper-slide">';
						html += '<a href="' + list[i].item_url + '" class="goods-img">';
						html += '<img src="' + list[i].image_default_id + '" alt="">';
						html += '<div class="name">' + list[i].title + '</div>';
						html += '<div class="price">￥' + list[i].price + '</div>';
						html += '</a>';
						html += '</div>'
					}
					if (!isOff) {
						html += '<div class="no-more swiper-slide">';
						html += '<a class="goods-img" href="' + more + '">';
						html += '<div class="one">更多推荐商品</div>';
						html += '</a>';
						html += '</div>'
					}
				}
				return html;
			}
			//为指定商品设置角标
			function setCornerSign(id) {
				id = parseInt(id);
				var arr = [{
						id: [24013, 23051, 22582, 22495, 23050, 22719, 22720, 22536, 22537, 22583, 22496],
						icon: '/activity/detail/b.png'
					},
					{
						id: [24355, 24354, 24353, 24352, 24351, 24350, 24347, 24345, 24344, 24342, 24340, 24337, 24335, 24334, 24332],
						icon: '/activity/detail/a.png'
					}
				];

				for (var i = 0; i < arr.length; i++) {
					if (~arr[i].id.indexOf(id)) {
						$('#slider').find('.absolute').css({
							'background': 'url('
							static / images / +arr[i] _1.icon + ') no-repeat bottom right',
							'backgroundSize': 'contain'
						});
						break;
					}
				}
			}
		</script>
	</body>
</html>
