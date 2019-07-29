<script>
  function ajaxGetShopId(itemid, oldshopid) {
    //获取域,路径
    var hurl = 'https://sixstar/wap/item-detail.html';
    hurl += '?item_id=' + itemid + '&shop_id=';
    //获取缓存经纬度
    var pos = $_ZYXX.getLocation();
    var lat = pos.lat;
    var lng = pos.lng;
    //若没有缓存，直接跳转旧路径
    if (typeof(lat) == 'undefined' || typeof(lng) == 'undefined') {
      window.location.href = hurl + oldshopid;
      return;
    } else {
      $.ajax({
        url: '/wap/item-shop-ajax.html',
        //data: {'item_id': itemsId, 'lat': lat, 'lng': lng},
        data: 'item_id=' + itemid + '&lat=' + lat + '&lng=' + lng,
        type: 'get',
        dataType: 'json',
        success: function(rs) {
          if (rs.error) {
            //成功跳转新路径
            if (rs.shop_id) {
              window.location.href = hurl + rs.shop_id;

            } else {

              window.location.href = hurl + oldshopid;
            }
            return;
          } else {
            //失败跳转旧路径
            window.location.href = hurl + oldshopid;
            return;
          }
        },
        error: function(rs) {
          //失败跳转旧路径
          window.location.href = hurl + oldshopid;
          return;
        }
      });
    }
  }

  shopex.init({
    swipeBack: false,
  });
  //侧滑容器父节点
  var offCanvasWrapper = shopex('#offCanvasWrapper');
  //主界面容器
  var offCanvasInner = offCanvasWrapper[0].querySelector('.shopex-inner-wrap');
  //菜单容器
  var offCanvasSide = document.getElementById("offCanvasSide");
  //移动效果是否为整体移动
  var moveTogether = false;
  //侧滑容器的class列表，增加.shopex-slide-in即可实现菜单移动、主界面不动的效果；
  var classList = offCanvasWrapper[0].classList;
  //变换侧滑动画移动效果；
  shopex('.shopex-input-group').on('change', 'input', function() {
    if (this.checked) {
      offCanvasSide.classList.remove('shopex-transitioning');
      offCanvasSide.setAttribute('style', '');
      classList.remove('shopex-slide-in');
      classList.remove('shopex-scalable');
      switch (this.value) {
        case 'main-move':
          if (moveTogether) {
            //仅主内容滑动时，侧滑菜单在off-canvas-wrap内，和主界面并列
            offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
            moveTogether = false;
          }
          break;
        case 'main-move-scalable':
          if (moveTogether) {
            //仅主内容滑动时，侧滑菜单在off-canvas-wrap内，和主界面并列
            offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
          }
          classList.add('shopex-scalable');
          break;
        case 'menu-move':
          classList.add('shopex-slide-in');
          break;
        case 'all-move':
          moveTogether = true;
          //整体滑动时，侧滑菜单在inner-wrap内
          offCanvasInner.insertBefore(offCanvasSide, offCanvasInner.firstElementChild);
          break;
      }
      offCanvasWrapper.offCanvas().refresh();
    }
  });

  var hasnodata = false;
  document.getElementById('offCanvasHide').addEventListener('tap', function() {
    offCanvasWrapper.offCanvas('close');

    count = 1;
    var reqdata = activeFilter;
    reqdata['pages'] = count;

    $('.filters-options span').each(function() {
      var checkedFiltersOptions = $(this).hasClass('checked');
      var name = $(this).data('name');
      if (checkedFiltersOptions) {
        var value = $(this).data('value');
        reqdata[name] = value;
      } else {
        delete reqdata[name];
      }
    });

    getList(reqdata, function(rs) {
      hasnodata = $('#offCanvasContentScroll').find('.nodata-wrapper').length > 0 ? true : false;
      if (rs.indexOf('nodata-wrapper') > 0) {
        if (!hasnodata) {
          listwrapper.html('');
          $('#offCanvasContentScroll').append(rs);
        }
      } else {
        if (hasnodata) {
          $('.nodata-wrapper').remove();
        }
        listwrapper.html(rs);
      }
      shopex('#offCanvasContentScroll').pullRefresh().scrollTo(0, 0);
      shopex('#offCanvasContentScroll').pullRefresh().enablePullupToRefresh();
    });
  });

  $('.reset-filters-options').on('tap', function() {
    $('.filters-options span').removeClass('checked');
  });

  //主界面和侧滑菜单界面均支持区域滚动；
  shopex('#offCanvasSideScroll').scroll();
  //实现ios平台的侧滑关闭页面；
  if (shopex.os.plus && shopex.os.ios) {
    offCanvasWrapper[0].addEventListener('shown', function(e) { //菜单显示完成事件
      plus.webview.currentWebview().setStyle({
        'popGesture': 'none'
      });
    });
    offCanvasWrapper[0].addEventListener('hidden', function(e) { //菜单关闭完成事件
      plus.webview.currentWebview().setStyle({
        'popGesture': 'close'
      });
    });
  }
  console.log('repeat used page')
  var flag = localStorage.getItem('list_type');
  flag = ''; //不缓存用户操作

  //针对热销爆品单行显示
  (function() {
    var type = window.location.search;
    if (type.indexOf('type=hot') !== -1) {
      $('#show_style').find('.bbc-icon').removeClass('bbc-icon-thumb').addClass('bbc-icon-gallery');
      $('.goods-list').addClass('pro-list-normal').removeClass('pro-list-grid');
      shopex('#pullrefresh').pullRefresh().scrollTo(0, 0);
      //console.log(type,'test')
    }

  })()

  if (flag && flag == 'gallery') {
    $('#show_style .bbc-icon').addClass('bbc-icon-thumb').removeClass('bbc-icon-gallery');
    $('.goods-list').addClass('pro-list-grid').removeClass('pro-list-normal');
  } else if (flag && flag == 'thumb') {
    $('#show_style .bbc-icon').addClass('bbc-icon-gallery').removeClass('bbc-icon-thumb');
    $('.goods-list').addClass('pro-list-normal').removeClass('pro-list-grid');
  }

  $('#show_style').on('tap', function() {
    if ($(this).find('.bbc-icon').hasClass('bbc-icon-gallery')) {
      $(this).find('.bbc-icon').removeClass('bbc-icon-gallery').addClass('bbc-icon-thumb');
      $('.goods-list').addClass('pro-list-grid').removeClass('pro-list-normal');
      shopex('#offCanvasContentScroll').pullRefresh().scrollTo(0, 0);
      localStorage.setItem('list_type', 'gallery');
    } else if ($(this).find('.bbc-icon').hasClass('bbc-icon-thumb')) {
      $(this).find('.bbc-icon').removeClass('bbc-icon-thumb').addClass('bbc-icon-gallery');
      $('.goods-list').addClass('pro-list-normal').removeClass('pro-list-grid');
      shopex('#offCanvasContentScroll').pullRefresh().scrollTo(0, 0);
      localStorage.setItem('list_type', 'thumb');
    }
  });

  var count = 1;
  var totalpage = "2";
  var listwrapper = $('.goods-list');
  var order;

  $('.goods-filters-item').on('tap', function() {
    $(this).addClass('active').siblings().removeClass('active');
    order = $(this).data('order');
    var filterItem = $(this).find('.goods-filters-order')
    if (filterItem && $(this).hasClass('active') && filterItem.hasClass('order-desc')) {
      filterItem.removeClass('order-desc').addClass('order-asc');
      order = order ? order + ' ' + 'desc' : '';
    } else if (filterItem && $(this).hasClass('active') && filterItem.hasClass('order-asc')) {
      filterItem.removeClass('order-asc').addClass('order-desc');
      order = order ? order + ' ' + 'asc' : '';
    }

    count = 1;
    var param = {
      'pages': count,
      'orderBy': order
    }
    var reqdata = $.extend(activeFilter, param);
    getList(reqdata, function(rs) {
      listwrapper.html(rs);
      shopex('#offCanvasContentScroll').pullRefresh().scrollTo(0, 0);
      shopex('#offCanvasContentScroll').pullRefresh().enablePullupToRefresh();
    });
  });

  $('.filters-options ').on('tap', 'span', function() {
    $(this).toggleClass('checked');
  })

  shopex.init({
    swipeBack: false,
    pullRefresh: {
      container: '#offCanvasContentScroll',
      down: {
        callback: pulldownRefresh
      },
      up: {
        contentrefresh: '正在加载...',
        callback: pullupRefresh
      }
    },
    swipe: true,
    dobluetap: true,
    longtap: true
  });

  var activeFilter = JSON.parse('{"cat_id":"269"}');
  /**
   * 下拉刷新具体业务实现
   */
  function pulldownRefresh() {
    setTimeout(function() {
      count = 1;
      var param = {
        'pages': count,
        'orderBy': order
      }
      var reqdata = $.extend(activeFilter, param);
      getList(reqdata, function(rs) {
        if (rs.indexOf('nodata-wrapper') > 0) {
          if (!hasnodata) {
            listwrapper.html('');
            $('#offCanvasContentScroll').append(rs);
          }
        } else {
          listwrapper.html(rs);
        }
        shopex('#offCanvasContentScroll').pullRefresh().endPulldownToRefresh()
        shopex('#offCanvasContentScroll').pullRefresh().enablePullupToRefresh(); //refresh completed
      });
    }, 1000);
  }
  /**
   * 上拉加载具体业务实现
   */
  function pullupRefresh() {
    setTimeout(function() {
      shopex('#offCanvasContentScroll').pullRefresh().endPullupToRefresh((++count > totalpage)); //参数为true代表没有更多数据了。
      var param = {
        'pages': count,
        'orderBy': order
      }
      var reqdata = $.extend(activeFilter, param);
      getList(reqdata, function(rs) {
        rs = listHtml(rs);
        if (rs.indexOf('nodata-wrapper') > 0) {
          if (!hasnodata) {
            console.log(11);
            listwrapper.html('');
            $('#offCanvasContentScroll').append(rs);
          }
        } else {
          listwrapper.append(rs);
        }
      });
    }, 1000);
  }

  function getList(param, callback) {
    hasnodata = $('#offCanvasContentScroll').find('.nodata-wrapper').length > 0 ? true : false;
    $.ajax({
      url: '{{route('wap.goods.index')}}',
      type: 'get',
      dataType: 'json',
      data: param,
      success: callback
    });
  };

  $('.shopex-table-view').on('tap', 'li', function() {
    var link = $(this).data('link');
    location.href = link;
  });

  $("#offCanvasContentScroll").on('swipeup', function() {
    $('.shopex-inner-wrap').addClass('inhide');

  }).on('swipedown', function() {
    $('.shopex-inner-wrap').removeClass('inhide');
  });

  let listHtml = function (datas) {
    let data = datas['data'];
    let html = '';

    for (var i = 0; i < data.length; i++) {
      html += `<li data-link="{{route('wap.goods.show', ['id' => `+data[i]['id'] +` ])}}">`;

      html +=  `<div class="thumbnail">
                      <div class="thumb-img">
                        <a href="#">
                          <img src="{{URL::asset('public')}}/uploads/${data[i]['skus'][0]['prcture']['url']}" alt="">
                        </a>
                      </div>
                      <div class="caption">
                        <h1 class="goods-title">
                          ${data[i]['title']} ${data[i]['skus'][0]['attr_name']}
                        </h1>
                        <div class="price">
                          <div class="amount">￥${data[i]['skus'][0]['price']} <span class="font-gray-40 font08rem">
                              <em class="original-price action-update-mkt-price">￥${data[i]['skus'][0]['price']} </em>
                            </span>
                          </div>
                        </div>
                        <a href="https://sixstar/wap/item-detail.html?item_id=${data[i]['id']}" class="link-buy">马上抢</a>
                      </div>
                    </div>
                  </li>`;
    }

    return html;
  }
</script>
