<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!--↑↑模板中请务必使用HTML5的标准head结构↑↑-->
  <meta name="author" content="shopex UED Team" />
  <link rel="icon" href="https://wd.hnmall.com/app/topwap/statics/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="https://wd.hnmall.com/app/topwap/statics/favicon.ico" type="image/x-icon" />
  <title>测试环境，请勿进行真实业务行为_六星微店</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- <link type='image/x-icon' href='/images/a2/12/48/d180da5fd7665600b83ad0ec74a64272f42377e0.png' rel='apple-touch-icon-precomposed'> -->
  <link href="{{URL::asset('css/shopex.picker.css')}}" rel="stylesheet" media="screen, projection" />
  <link href="{{URL::asset('css/shopex.picker.min.css')}}" rel="stylesheet" media="screen, projection" />
  <link href="{{URL::asset('css/shopex.poppicker.css')}}" rel="stylesheet" media="screen, projection" />
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" media="screen, projection" />
  <link href="{{URL::asset('css/widgets.css')}}" rel="stylesheet" media="screen, projection" />
{{--  <script src="{{URL::asset('js/jquery-3.2.js')}}" charset="utf-8"></script>--}}
  <script src="{{URL::asset('js/zepto.js')}}"></script>
  <script src="{{URL::asset('js/shopex.js')}}"></script>
  <script src="{{URL::asset('js/shopex.picker.js')}}"></script>
  <script src="{{URL::asset('js/shopex.poppicker.js')}}"></script>
  <script src="{{URL::asset('js/shopex.zoom.js')}}"></script>
  <script src="{{URL::asset('js/shopex.previewimage.js')}}"></script>
  <script src="{{URL::asset('js/common.js')}}"></script>
  <script src="{{URL::asset('js/validate.js')}}"></script>
  <style>
    .shopex-row.shopex-fullscreen>[class*="shopex-col-"] {
      height: 100%;
    }
    .shopex-col-xs-3,
    .shopex-control-content {
      overflow-y: auto;
      height: 100%;
    }
    .shopex-segmented-control .shopex-control-item {
      line-height: 3rem;
      width: 100%;
    }
    .shopex-segmented-control.shopex-segmented-control-inverted .shopex-control-item.shopex-active {
        background-color: #fff;
    }
  </style>
</head>

<body>
  <header class="home-header ya-header">
    <div class="main">
      <form action="https://wd.hnmall.com/wap/item-list.html" method="post" id="goods_search">
        <div class="shopex-input-row header-search-form">
          <i class="bbc-icon bbc-icon-search"></i>
          <input type="search" name="search_keywords" class="header-search shopex-input-clear" placeholder="请输入搜索商品">
        </div>
      </form>
    </div>
  </header>
  <section class="container shopex-row shopex-fullscreen category-nav has-footer">
    <div class="shopex-col-xs-3">
      <div id="segmentedControls" class="shopex-segmented-control shopex-segmented-control-inverted shopex-segmented-control-vertical">
        @foreach ($categorys as $key => $category)
          <a class="shopex-control-item" href="#content{{ $category['id'] }}">{{ $category['name'] }}</a>
        @endforeach
      </div>
    </div>
    <div id="segmentedControlContents" class="shopex-col-xs-9 category-nav-content">
      @foreach ($categorys as $key => $category_roote)
      <div id="content{{ $category_roote['id'] }}" class="shopex-control-content shopex-active">
        @foreach ($category_roote['children'] as $key => $category_second)
        <div class="category-nav-group">
          <div class="category-nav-header">{{ $category_roote['name'] }}</div>
          <div class="category-nav-list">
            @foreach ($category_second['children'] as $key => $category_three)
            <a class="category-nav-item" href="item-list.html">
              <img style="width:62px;height:62px;" src="{{URL::asset('')}}/uploads/{{ $category_three['image'] }}">
              <span style="display: block;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;">{{ $category_three['name'] }}</span>
            </a>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
    </div>
  </section>

  <script>
    shopex.init({
      swipeBack: true //启用右滑关闭功能
    });
    var controls = document.getElementById("segmentedControls");
    var contents = document.getElementById("segmentedControlContents");
    controls.querySelector('.shopex-control-item').classList.add('shopex-active');
    contents.querySelector('.shopex-control-content').classList.add('shopex-active');
  </script>
  <footer class="navigation">
    <ul class="nav-group">
      <li><a href="https://wd.hnmall.com/wap"><i class="bbc-icon bbc-icon-home-empty"></i><span>首页</span></a></li>
      <li class="active"><a href="https://wd.hnmall.com/wap/category.html"><i class="bbc-icon bbc-icon-category"></i><span>分类</span></a></li>
      <li><a href="https://wd.hnmall.com/wap/cart.html"><i class="bbc-icon bbc-icon-cart-empty"></i><span>购物车</span></a></li>
      <li><a href="https://wd.hnmall.com/weidian/store-index.html"><i class="bbc-icon bbc-icon-store-empty"></i><span>店铺</span></a></li>
      <li><a href="https://wd.hnmall.com/wap/member.html"><i class="bbc-icon bbc-icon-user-empty"></i><span>会员</span></a></li>
    </ul>
  </footer>
</body>

</html>
