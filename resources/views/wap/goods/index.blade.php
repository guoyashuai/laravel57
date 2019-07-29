<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
  <style>
    .inhide .search-shop {
        -webkit-transform: translateY(-11rem);
    }

    .inhide .top-position {
        -webkit-transform: translateY(0);
    }
    .search-shop {
        height: 11rem;
        margin: .5rem;
        padding: .5rem;
        overflow: hidden;
        border: 1px solid #ccc;
        -webkit-transform: translateY(0);
        -webkit-transition: all 0.5s ease;
    }

    .search-shop .search-shop-info {
        display: -webkit-box;
    }

    .search-shop .search-shop-logo {
        display: -webkit-box;
        -webkit-box-align: center;
        -webkit-box-pack: center;
        width: 12%;
        background: #fff;
    }

    .search-shop .search-shop-logo:after {
        display: block;
        content: "";
        padding-top: 100%;
    }

    .search-shop .search-shop-logo img {
        display: block;
        width: 100%;
    }

    .search-shop .search-shop-name {
        -webkit-box-flex: 1;
        padding-left: .5rem;
        padding-top: .4rem;
    }

    .search-shop .search-shop-name a {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        vertical-align: middle;
        font-size: .9rem;
        max-width: 90%;
    }

    .search-shop .search-shop-img {
        height: 7.5rem;
        overflow: hidden;
        margin-top: 1rem;
    }

    .search-shop .search-shop-img img {
        width: 100%;
        /*max-height: 100%;*/
    }

    .top-position {
        -webkit-transform: translateY(12rem);
        -webkit-transition: all 0.5s ease;
    }
    /*自提图标*/
    .shoppick-tip {
    	 position: absolute;
        top: 0;
        left: 0;
        width: 2.4rem;
        height: 3.2rem;
        color: #fff;
    		background: url(images/selfpick.png) no-repeat;
    		background-size:100% ;
    }

    .link-buy {
        float: right;
        padding: 2px 10px;
        border-radius: 4px;
        border: 1px solid #ff0031;
        color: #ff0031;
        font-size: 12px;
    }

    .shopex-inner-wrap .container {
        padding-top: 0;
    }
    .bbc-pullrefresh-top {
        top: 6rem;
    }
  </style>
  <script src="js/public.js"></script>
  <div id="offCanvasWrapper" class="shopex-off-canvas-wrap shopex-draggable shopex-slide-in">
    <!--菜单部分-->
    <aside id="offCanvasSide" class="shopex-off-canvas-right filters">
      <div id="offCanvasSideScroll" class="shopex-scroll-wrapper">
        <div class="section-white section-container filters-header">
          <div class="filters-op reset-filters-options">重置</div>
          <div class="section-init">筛选</div>
          <div id="offCanvasHide" class="filters-op">确定</div>
        </div>
        <div class="shopex-scroll">
          <div class="filters-options shopex-content-padded clearfix">
            <span data-name="sf" data-value="1" class="">自营</span>
          </div>
        </div>
      </div>
    </aside>
    <div class="shopex-inner-wrap">
      <section class="container">
        <div class="shopex-bar shopex-bar-nav-n">
          <header class="home-header">
            <i class="icon-func bbc-icon bbc-icon-back shopex-action-back"></i>
            <div class="main">
              <form action="https://sixstar/wap/item-list.html" method="post" id="goods_search">
                <div class="shopex-input-row header-search-form">
                  <input type="search" name="search_keywords" class="header-search shopex-input-clear" value="" placeholder="寻找感兴趣的商品">
                </div>
              </form>
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="txt-func">
              筛选
            </a>
          </header>
        </div>
        <div class="section-white goods-filters ">
          <div class="goods-filters-item active" data-order="">
            综合
          </div>
          <div class="goods-filters-item" data-order="sold_quantity">
            销量
          </div>
          <div class="goods-filters-item" data-order="price">
            价格
            <i class="goods-filters-order order-asc"></i></div>
          <div class="goods-filters-item" data-order="modified_time">
            最新
          </div>
          <div id="show_style" class="goods-show-style"><i class="bbc-icon bbc-icon-thumb"></i></div>
        </div>
        <div id="offCanvasContentScroll" class="shopex-content shopex-scroll-wrapper bbc-pullrefresh-top ">
          <div class="shopex-scroll">
            <ul class="shopex-table-view pro-list-grid goods-list">
              @foreach ($goods as $key => $good)
              <li data-link="{{route('wap.goods.show', ['id' => $good['id'] ])}}">
                <div class="thumbnail">
                  <div class="thumb-img">
                    <a href="#">
                      <img src="{URL::asset('public')}}/uploads/images/{{$good['skus'][0]['prcture']['url']}}" alt="">
                    </a>
                  </div>
                  <div class="caption">
                    <h1 class="goods-title">
                      {{$good['skus'][0]['category']['full_name']}} {{$good['skus'][0]['attr_name']}}
                    </h1>
                    <div class="price">
                      <div class="amount">￥{{$good['skus'][0]['price']}} <span class="font-gray-40 font08rem">
                          <em class="original-price action-update-mkt-price">￥{{$good['skus'][0]['price']}}</em>
                        </span>
                      </div>
                    </div>
                    <a href="https://sixstar/wap/item-detail.html?item_id={{$good['id']}}" class="link-buy">马上抢</a>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </section>
      <!-- off-canvas backdrop -->
      <div class="shopex-off-canvas-backdrop"></div>
    </div>
  </div>

  @include('wap.goods.layouts.index.indexJs')
  <script src="js/jweixin-1.0.0.js"></script>
  <script src="js/wxsdk.js"></script>
  <script type="text/javascript">
    //微信分享
    $(function() {
      var wxsdk = YA_WX_SDK({
        type: "itemlist",
        title: "的友阿微店",
        desc: '的友阿微店',
        link: "",
        imgUrl: ""
      });
    }); < /body> < /
    html >
