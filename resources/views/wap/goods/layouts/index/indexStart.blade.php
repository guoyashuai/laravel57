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
