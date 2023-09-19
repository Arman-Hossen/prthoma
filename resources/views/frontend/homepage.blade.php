<!DOCTYPE html>
<html lang="bn">
<meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <meta name="msapplication-tap-highlight" content="no" />
    <meta
      name="description"
      content="Prothoma.com is the best online book shop in Bangladesh. Buy novel, history, politics, programming, children, Islamic, west Bengal, fiction & non-fiction books & Gift cards at lowest price. Shop Now!"
    />
    <meta name="author" content="" />
    <title>Prothoma - Home</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link href="{{ asset('frontend') }}/css/frontend/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/owl.carousel.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/slick.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/chosen.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/venobox.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/style.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/prothoma7839.css?v=1.2" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/frontend/cart.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"
    />
    <style type="text/css">
      .swal2-popup {
        font-size: 1.1rem !important;
      }
      [v-cloak] {
        display: none;
      }
    </style>
    <meta property="og:url" content="https://www.prothoma.com" />
    <meta property="og:title" content="Prothoma" />
    <meta
      property="og:description"
      content="Prothoma.com is the best online book shop by Prothom Alo in Bangladesh"
    />
    <meta
      property="og:image"
      content="https://image.prothoma.com/contactImages/2021/02/6017e1d7151ad_1612177879.jpg"
    />
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="253464549682602" />
    <meta
      name="google-site-verification"
      content="Q0myybu-kxd_9-ogxhnOm6P0vrJlW3DAVHTXN7vVd_g"
    />
    <style>
      .category_tittle_sc {
        display: none;
      }

      .payment-left ul li.active a:after {
        content: "\2713";
        font-size: 30px;
      }
    </style>

   
 



    <script type="text/javascript">
      window.GUMLET_CONFIG = {
        hosts: [
          {
            current: "image.prothoma.com",
            gumlet: "prothoma.gumlet.io",
          },
        ],
        lazy_load: true,
      };
      (function () {
        d = document;
        s = d.createElement("script");
        s.src = "../cdn.gumlet.com/gumlet.js/2.1/gumlet.min.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
      })();
    </script>

  </head>
  <body>
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WTHBJZ7"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>

    <div id="appMain mt-4">
      <div class="wrapper">
        <div class="header">
          <div class="header-bottom header_mid">
            <div class="container">
              <div class="row sc_gap_row">
                <div class="col-xs-6 col-sm-2 col-md-2">
                  <div class="logo">
                    <a href="index.html"
                      ><img class="" src="{{ asset('frontend') }}/images/frontend/logo.png" alt="Logo"
                    /></a>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-10 col-md-10">
                  <div class="header_search_section">
                    <div class="search_block hidden-xs">
                      <form
                        method="GET"
                        action="https://www.prothoma.com/book/search"
                        accept-charset="UTF-8"
                      >
                        <input
                          autocomplete="off"
                          type="text"
                          id="product_search"
                          class="form-control product-search-autocomplete"
                          name="search"
                          value=""
                          placeholder="বইয়ের নাম, লেখক বা বই নিয়ে যে কোনো শব্দ বাংলা বা ইংরেজিতে লিখে খুঁজুন"
                          data-tracking-category="Field"
                          data-tracking-action="Click"
                          data-tracking-label="সার্চ ফিল্ড"
                        />
                        <input
                          type="submit"
                          class="submit_select2"
                          value=""
                          data-tracking-category="Button"
                          data-tracking-action="Click"
                          data-tracking-label="সার্চ বাটন"
                        />
                      </form>
                      <ul class="suggesstion-box"></ul>
                    </div>
                    <div class="cart_rt">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown mc_ac">
                          <a
                            href="#"
                            class="dropdown-toggle"
                            data-toggle="dropdown"
                            ><img
                              src="{{ asset('frontend') }}/images/frontend/user_photo.png"
                              alt=""
                            /><strong>সাইন ইন</strong></a
                          >
                          <ul class="dropdown-menu">
                            <li><a href="login.html">সাইন ইন</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="login.html"
                            ><img
                              src="{{ asset('frontend') }}/images/frontend/wishlist_bg.png"
                              alt=""
                            /><span class="wish-info" id="wishListCountAjax"
                              >০</span
                            ></a
                          >
                        </li>


                        <li class="dropdown shopping-bag layoutcart">
                            <a href="#" class="dropdown-toggle"><img src="{{ asset('frontend') }}/images/frontend/cart_bag.png" alt="" loading="lazy" class="gm-observing gm-observing-cb"><span class="bag-info" id="cartCount">৪</span></a>
                            <ul class="dropdown-menu with-item" style="display: none;">
                               <li>
                                  <div class="bag-item">
                                     <div class="item-list">
                                        <span class="item-thumb"><img width="100%" data-src="https://image.prothoma.com/bulkUpload/img/9882/978240f478277f078a4f5b33869533a7562f08c1c2a6a5001e5f190e828925733b3b_250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail gm-loaded gm-observing gm-observing-cb" alt="" loading="lazy" src="https://prothoma.gumlet.io/bulkUpload/img/9882/978240f478277f078a4f5b33869533a7562f08c1c2a6a5001e5f190e828925733b3b_250.jpg?w=70&amp;dpr=1.0"></span>
                                        <span class="item-info">
                                           <h3>ছোটদের অর্থনীতি</h3>
                                           <p><span>পরিমাণ:</span> ১</p>
                                           <a href="javascript:void(0);" onclick="removeCart('c53129b21e6f710f690f337b8b415de8');" class="remove-icon" title="Remove this item">বাদ দিন</a>
                                        </span>
                                        <span class="item-right">
                                        <span class="sale-price"><span class="woocommerce-Price-amount amount">৭৪.৭০ টাকা</span></span>
                                        <span class="regular-price"><span class="woocommerce-Price-amount amount">৯০.০০ টাকা</span></span>
                                        <span class="offer">১৭% ছাড়</span>
                                        </span>
                                     </div>
                                     <div class="item-list">
                                        <span class="item-thumb"><img width="100%" data-src="https://image.prothoma.com/productThumbs/2023/07/64a9382ded7ae_1688811565.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail gm-loaded gm-observing gm-observing-cb" alt="" loading="lazy" src="https://prothoma.gumlet.io/productThumbs/2023/07/64a9382ded7ae_1688811565.jpg?w=70&amp;dpr=1.0"></span>
                                        <span class="item-info">
                                           <h3>কিশোর আলো জুলাই ২০২৩</h3>
                                           <p><span>পরিমাণ:</span> ১</p>
                                           <a href="javascript:void(0);" onclick="removeCart('9158bb32310430785a6f95b04d3626a0');" class="remove-icon" title="Remove this item">বাদ দিন</a>
                                        </span>
                                        <span class="item-right">
                                        <span class="sale-price"><span class="woocommerce-Price-amount amount">৫০.০০ টাকা</span></span>
                                        </span>
                                     </div>
                                     <div class="item-list">
                                        <span class="item-thumb"><img width="100%" data-src="https://image.prothoma.com/productThumbs/2023/08/64e34cb10dda5_1692617905.jpeg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail gm-loaded gm-observing gm-observing-cb" alt="" loading="lazy" src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34cb10dda5_1692617905.jpeg?w=70&amp;dpr=1.0"></span>
                                        <span class="item-info">
                                           <h3>কিশোর আলো: ৬ মাসের সাবস্ক্রিপশন (প্রিন্ট ভার্সন)</h3>
                                           <p><span>পরিমাণ:</span> ২</p>
                                           <a href="javascript:void(0);" onclick="removeCart('51f0214e69d0be4e15270e5e2ae75c53');" class="remove-icon" title="Remove this item">বাদ দিন</a>
                                        </span>
                                        <span class="item-right">
                                        <span class="sale-price"><span class="woocommerce-Price-amount amount">৩০০.০০ টাকা</span></span>
                                        <span class="regular-price"><span class="woocommerce-Price-amount amount">৩০০.০০ টাকা</span></span>
                                        <span class="offer">০% ছাড়</span>
                                        </span>
                                     </div>
                                     <div class="item-list">
                                        <span class="item-thumb"><img width="100%" data-src="https://image.prothoma.com/bulkUpload/img/9829/97296f233b0771c128821740d5113757d70ca61d6152fb10d75c23cb0417f917f1b6_250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail gm-loaded gm-observing gm-observing-cb" alt="" loading="lazy" src="https://prothoma.gumlet.io/bulkUpload/img/9829/97296f233b0771c128821740d5113757d70ca61d6152fb10d75c23cb0417f917f1b6_250.jpg?w=70&amp;dpr=1.0"></span>
                                        <span class="item-info">
                                           <h3>ছোটদের রাজনীতি</h3>
                                           <p><span>পরিমাণ:</span> ১</p>
                                           <a href="javascript:void(0);" onclick="removeCart('2836f765ac551a2946ff7a13e5eb5a85');" class="remove-icon" title="Remove this item">বাদ দিন</a>
                                        </span>
                                        <span class="item-right">
                                        <span class="sale-price"><span class="woocommerce-Price-amount amount">১৪৫.২৫ টাকা</span></span>
                                        <span class="regular-price"><span class="woocommerce-Price-amount amount">১৭৫.০০ টাকা</span></span>
                                        <span class="offer">১৭% ছাড়</span>
                                        </span>
                                     </div>
                                  </div>
                                  <div class="bag-bottom">
                                     <h1>মোট দাম (৪ টি পণ্য): <span><span class="woocommerce-Price-amount amount">৮৬৯.৯৫ টাকা</span></span></h1>
                                     <a href="https://www.prothoma.com/carts" class="btn btn-primary bag">কার্ট দেখুন</a>
                                  </div>
                               </li>
                            </ul>
                         </li>
                         


                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row hidden-lg hidden-sm hidden-md">
                <div class="col-xs-12">
                  <div class="search_block sc_gap">
                    <form
                      method="GET"
                      action="https://www.prothoma.com/book/search"
                      accept-charset="UTF-8"
                    >
                      <input
                        type="text"
                        id="product_search_mobile"
                        class="form-control product-search-autocomplete"
                        name="search"
                        value=""
                        placeholder="বইয়ের নাম, লেখক বা বই নিয়ে যে কোনো শব্দ বাংলা বা ইংরেজিতে লিখে খুঁজুন"
                      />
                      <input type="submit" class="submit_select2" value="" />
                    </form>
                    <ul class="suggesstion-box"></ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="mobile_menu hidden-lg hidden-md hidden-sm">
              <a
                href="#"
                data-toggle="modal"
                data-target="#side_menu_block"
              ></a>
            </div>
          </div>
          <div class="header-bottom header_desktop_menu">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="header-inner">
                    <div class="navbar navbar-default navbar-static-top">
                      <div class="navbar-header"></div>
                      <div id="navbar" class="navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                          <li id="nav_menu_60">
                            <a
                              href="publisher/prothoma.html"
                              class="no-icon-sidebar"
                              >প্রথমা প্রকাশন</a
                            >
                          </li>
                          <li class="dropdown" id="writer">
                            <a href="author.html" class="">লেখক</a>
                          </li>
                          <li class="dropdown" id="publisher">
                            <a href="publisher.html" class="">প্রকাশক</a>
                          </li>
                          <li class="dropdown" id="category">
                            <a href="category.html" class="">বিষয়</a>
                          </li>
                          <li id="nav_menu_70">
                            <a href="index.html" class="no-icon-sidebar"
                              >মুক্তিযুদ্ধ</a
                            >
                          </li>
                          <li id="nav_menu_74">
                            <a
                              href="category/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf.html"
                              class="no-icon-sidebar"
                              >রাজনীতি</a
                            >
                          </li>
                          <li id="nav_menu_86">
                            <a
                              href="category/economy.html"
                              class="no-icon-sidebar"
                              >অর্থনীতি</a
                            >
                          </li>
                          <li id="nav_menu_81">
                            <a
                              href="category/dhorrmo.html"
                              class="no-icon-sidebar"
                              >ধর্ম</a
                            >
                          </li>
                          <li id="nav_menu_66">
                            <a
                              href="category/%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%97%e0%a6%be%e0%a6%9c%e0%a6%bf%e0%a6%a8.html"
                              class="no-icon-sidebar"
                              >ম্যাগাজিন</a
                            >
                          </li>
                          <li id="nav_menu_95">
                            <a
                              href="category/boimela-2023.html"
                              class="no-icon-sidebar"
                              >বইমেলা ২০২৩</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown_container">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <ul
                      class="dropdown-menu"
                      id="menu_writer"
                      style="display: none"
                    >
                      <li>
                        <ul>
                          <li>
                            <a href="author/akbar-ali-khan.html" class=""
                              >আকবর আলি খান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%86%e0%a6%a8%e0%a6%bf%e0%a6%b8%e0%a7%81%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a8.html"
                              class=""
                              >আনিসুজ্জামান</a
                            >
                          </li>
                          <li>
                            <a href="author/anisul-haque.html" class=""
                              >আনিসুল হক</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%86%e0%a6%ac%e0%a7%81%e0%a6%b2-%e0%a6%ae%e0%a6%a8%e0%a6%b8%e0%a7%81%e0%a6%b0-%e0%a6%86%e0%a6%b9%e0%a6%ae%e0%a6%a6.html"
                              class=""
                              >আবুল মনসুর আহমদ</a
                            >
                          </li>
                          <li>
                            <a href="author/ali-riaz-1.html" class=""
                              >আলী রীয়াজ</a
                            >
                          </li>
                          <li>
                            <a href="author/asif-nazrul.html" class=""
                              >আসিফ নজরুল</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%97%e0%a7%8b%e0%a6%b2%e0%a6%be%e0%a6%ae-%e0%a6%ae%e0%a7%81%e0%a6%b0%e0%a6%b6%e0%a6%bf%e0%a6%a6.html"
                              class=""
                              >গোলাম মুরশিদ</a
                            >
                          </li>
                          <li>
                            <a href="author/matiur-rahman.html" class=""
                              >মতিউর রহমান</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a href="author/mohiuddin-ahmmod.html" class=""
                              >মহিউদ্দিন আহমদ</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ae%e0%a6%be%e0%a6%b2%e0%a7%87%e0%a6%95%e0%a6%be-%e0%a6%ac%e0%a7%87%e0%a6%97%e0%a6%ae.html"
                              class=""
                              >মালেকা বেগম</a
                            >
                          </li>
                          <li>
                            <a href="author/mizanur-rahman-khan.html" class=""
                              >মিজানুর রহমান খান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ae%e0%a7%81%e0%a6%b9%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%ae%e0%a6%a6-%e0%a6%b9%e0%a6%be%e0%a6%ac%e0%a6%bf%e0%a6%ac%e0%a7%81%e0%a6%b0-%e0%a6%b0%e0%a6%b9%e0%a6%ae%e0%a6%be%e0%a6%a8.html"
                              class=""
                              >মুহাম্মদ হাবিবুর রহমান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b0%e0%a7%87%e0%a6%b9%e0%a6%ae%e0%a6%be%e0%a6%a8-%e0%a6%b8%e0%a7%8b%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%a8.html"
                              class=""
                              >রেহমান সোবহান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b6%e0%a6%be%e0%a6%b9%e0%a6%be%e0%a6%a6%e0%a7%81%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a8.html"
                              class=""
                              >শাহাদুজ্জামান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b8%e0%a7%88%e0%a6%af%e0%a6%bc%e0%a6%a6-%e0%a6%b6%e0%a6%be%e0%a6%ae%e0%a6%b8%e0%a7%81%e0%a6%b2-%e0%a6%b9%e0%a6%95.html"
                              class=""
                              >সৈয়দ শামসুল হক</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b9%e0%a7%81%e0%a6%ae%e0%a6%be%e0%a6%af%e0%a6%bc%e0%a7%82%e0%a6%a8-%e0%a6%86%e0%a6%b9%e0%a6%ae%e0%a7%87%e0%a6%a6.html"
                              class=""
                              >হুমায়ূন আহমেদ</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a href="author/abul-bashar.html" class=""
                              >আবুল বাসার</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%86%e0%a6%b2%e0%a6%a4%e0%a6%be%e0%a6%ab-%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a6%ad%e0%a7%87%e0%a6%9c.html"
                              class=""
                              >আলতাফ পারভেজ</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%9c%e0%a6%be%e0%a6%ad%e0%a7%87%e0%a6%a6-%e0%a6%b9%e0%a7%81%e0%a6%b8%e0%a7%87%e0%a6%a8.html"
                              class=""
                              >জাভেদ হুসেন</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%aa%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a6%be%e0%a6%b8-%e0%a6%ae%e0%a6%9c%e0%a6%bf%e0%a6%a6.html"
                              class=""
                              >পিয়াস মজিদ</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ae%e0%a7%81%e0%a6%a8%e0%a6%9c%e0%a7%87%e0%a6%b0%e0%a6%bf%e0%a6%a8-%e0%a6%b6%e0%a6%b9%e0%a7%80%e0%a6%a6.html"
                              class=""
                              >মুনজেরিন শহীদ</a
                            >
                          </li>
                          <li>
                            <a href="author/munir-hasan.html" class=""
                              >মুনির হাসান</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ae%e0%a7%8b%e0%a6%b9%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%ae%e0%a6%a6-%e0%a6%a8%e0%a6%be%e0%a6%9c%e0%a6%bf%e0%a6%ae-%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%a6%e0%a6%bf%e0%a6%a8.html"
                              class=""
                              >মোহাম্মদ নাজিম উদ্দিন</a
                            >
                          </li>
                          <li>
                            <a href="author/sadat-hossain.html" class=""
                              >সাদাত হোসাইন</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="author/%e0%a6%86%e0%a6%96%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a7%81%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a8-%e0%a6%87%e0%a6%b2%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a6%be%e0%a6%b8.html"
                              class=""
                              >আখতারুজ্জামান ইলিয়াস</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%82%e0%a6%a4%e0%a6%bf%e0%a6%ad%e0%a7%82%e0%a6%b7%e0%a6%a3-%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >বিভূতিভূষণ বন্দ্যোপাধ্যায়</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a6%bf%e0%a6%95-%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >মানিক বন্দ্যোপাধ্যায়</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b6%e0%a7%80%e0%a6%b0%e0%a7%8d%e0%a6%b7%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%81-%e0%a6%ae%e0%a7%81%e0%a6%96%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >শীর্ষেন্দু মুখোপাধ্যায়</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b8%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%9c%e0%a6%bf%e0%a7%8e-%e0%a6%b0%e0%a6%be%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >সত্যজিৎ রায়</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b8%e0%a6%ae%e0%a6%b0%e0%a7%87%e0%a6%b6-%e0%a6%ae%e0%a6%9c%e0%a7%81%e0%a6%ae%e0%a6%a6%e0%a6%be%e0%a6%b0.html"
                              class=""
                              >সমরেশ মজুমদার</a
                            >
                          </li>
                          <li>
                            <a
                              href="author/%e0%a6%b8%e0%a7%81%e0%a6%a8%e0%a7%80%e0%a6%b2-%e0%a6%97%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >সুনীল গঙ্গোপাধ্যায়</a
                            >
                          </li>
                          <li>
                            <a href="author.html" class="s_more">আরো দেখুন</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul
                      class="dropdown-menu"
                      id="menu_category"
                      style="display: none"
                    >
                      <li>
                        <ul>
                          <li>
                            <a href="category/newbooks.html" class=""
                              >নতুন বই</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%89%e0%a6%aa%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b8-%e0%a6%9b%e0%a7%8b%e0%a6%9f%e0%a6%97%e0%a6%b2%e0%a7%8d%e0%a6%aa.html"
                              class=""
                              >কথাসাহিত্য</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8-%e0%a6%93-%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a7%8d%e0%a6%af.html"
                              class=""
                              >ইতিহাস ও ঐতিহ্য</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7-%e0%a6%97%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%a3%e0%a6%be-%e0%a6%93-%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%af.html"
                              class=""
                              >প্রবন্ধ, গবেষণা ও অন্যান্য</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%9c%e0%a7%80%e0%a6%ac%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >জীবনী/আত্মকথা/স্মৃতিকথা</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b8%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a7%8e%e0%a6%95%e0%a6%be%e0%a6%b0.html"
                              class=""
                              >সাক্ষাৎকার</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%86%e0%a6%a4%e0%a7%8d%e0%a6%ae-%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%a8%e0%a6%af%e0%a6%bc%e0%a6%a8.html"
                              class=""
                              >আত্মোন্নয়ন</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%aa%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a7%87%e0%a6%9c.html"
                              class=""
                              >প্যাকেজ</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="category/%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%be%e0%a6%a8-%e0%a6%97%e0%a6%a3%e0%a6%bf%e0%a6%a4.html"
                              class=""
                              >গণিত, বিজ্ঞান ও প্রযুক্তি</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%be%e0%a6%a8-%e0%a6%95%e0%a6%b2%e0%a7%8d%e0%a6%aa%e0%a6%95%e0%a6%be%e0%a6%b9%e0%a6%bf%e0%a6%a8%e0%a6%bf.html"
                              class=""
                              >বিজ্ঞান কল্পকাহিনি</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a7%80%e0%a6%af%e0%a6%bc.html"
                              class=""
                              >ভারতীয় বই</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%85%e0%a6%a8%e0%a7%81%e0%a6%ac%e0%a6%be%e0%a6%a6.html"
                              class=""
                              >অনুবাদ</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%ae%e0%a6%a3%e0%a6%97%e0%a6%b2%e0%a7%8d%e0%a6%aa.html"
                              class=""
                              >ভ্রমণ ও প্রবাস</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b8%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a7%8d%e0%a6%af.html"
                              class=""
                              >স্বাস্থ্য, পরিচর্যা ও চিকিৎসা</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b6%e0%a6%bf%e0%a6%b6%e0%a7%81-%e0%a6%95%e0%a6%bf%e0%a6%b6%e0%a7%8b%e0%a6%b0-%e0%a6%b8%e0%a6%be%e0%a6%b9%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%af.html"
                              class=""
                              >শিশু-কিশোর সাহিত্য</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%96%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%a7%e0%a7%81%e0%a6%b2%e0%a6%be.html"
                              class=""
                              >খেলাধুলা</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="category/%e0%a6%b0%e0%a6%b9%e0%a6%b8%e0%a7%8d%e0%a6%af%e2%80%93%e0%a6%b0%e0%a7%8b%e0%a6%ae%e0%a6%be%e0%a6%9e%e0%a7%8d%e0%a6%9a-%e0%a6%97%e0%a7%8b%e0%a6%af%e0%a6%bc%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a6%be-%e0%a6%93-%e0%a6%ad%e0%a7%8c%e0%a6%a4%e0%a6%bf%e0%a6%95.html"
                              class=""
                              >রহস্য–রোমাঞ্চ, গোয়েন্দা ও ভৌতিক</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%b2%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%82-%e0%a6%93-%e0%a6%86%e0%a6%89%e0%a6%9f%e0%a6%b8%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%82.html"
                              class=""
                              >ফ্রিল্যান্সিং ও আউটসোর্সিং</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%87%e0%a6%82%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf-%e0%a6%ac%e0%a6%87.html"
                              class=""
                              >ইংরেজি বই</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%95%e0%a6%ae%e0%a6%bf%e0%a6%95%e0%a6%b8-%e0%a6%93-%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%ab%e0%a6%bf%e0%a6%95-%e0%a6%a8%e0%a6%ad%e0%a7%87%e0%a6%b2.html"
                              class=""
                              >কমিকস ও গ্রাফিক নভেল</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%93-%e0%a6%b6%e0%a6%bf%e0%a6%b6%e0%a7%81.html"
                              class=""
                              >পরিবার ও শিশু</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%86%e0%a6%87%e0%a6%a8-%e0%a6%93-%e0%a6%ac%e0%a6%bf%e0%a6%9a%e0%a6%be%e0%a6%b0.html"
                              class=""
                              >আইন ও বিচার</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b8%e0%a6%ae%e0%a6%be%e0%a6%9c-%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8-%e0%a6%93-%e0%a6%b8%e0%a6%82%e0%a6%b8%e0%a7%8d%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf.html"
                              class=""
                              >সমাজ, ইতিহাস ও সংস্কৃতি</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%aa%e0%a6%a1%e0%a6%bc%e0%a6%be%e0%a6%b6%e0%a7%8b%e0%a6%a8%e0%a6%be-1.html"
                              class=""
                              >পড়াশোনা</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a href="category/bangabandhu.html" class=""
                              >বঙ্গবন্ধু</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8b%e0%a6%b2%e0%a6%a8.html"
                              class=""
                              >ভাষা আন্দোলন</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b8%e0%a6%be-%e0%a6%93-%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a7%8b%e0%a6%97.html"
                              class=""
                              >ব্যবসা ও বিনিয়োগ</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a8%e0%a6%be%e0%a6%ac%e0%a6%bf%e0%a6%b7%e0%a6%af%e0%a6%bc%e0%a6%95.html"
                              class=""
                              >রান্না, খাদ্য ও পুষ্টি</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                              class=""
                              >দর্শন</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%b0%e0%a6%9a%e0%a6%a8%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a7%80.html"
                              class=""
                              >রচনাবলী</a
                            >
                          </li>
                          <li>
                            <a
                              href="category/%e0%a6%ac%e0%a6%bf%e0%a6%a6%e0%a7%87%e0%a6%b6%e0%a7%80-%e0%a6%ac%e0%a6%87.html"
                              class=""
                              >বিদেশী বই</a
                            >
                          </li>
                          <li>
                            <a href="category.html" class="s_more">আরো দেখুন</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul
                      class="dropdown-menu"
                      id="menu_publisher"
                      style="display: none"
                    >
                      <li>
                        <ul>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >অনন্যা</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a6%bf%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                              class=""
                              >অনিন্দ্য প্রকাশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%81%e0%a6%aa%e0%a6%ae-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >অনুপম প্রকাশনী</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8.html"
                              class=""
                              >অন্বেষা প্রকাশন</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%a7%e0%a6%be%e0%a6%b0%e0%a6%be.html"
                              class=""
                              >অন্যধারা</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                              class=""
                              >অন্যপ্রকাশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a6%ac%e0%a6%b8%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8.html"
                              class=""
                              >অবসর-প্রকাশন</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%86%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%a6-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%b6%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8-(%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4).html"
                              class=""
                              >আনন্দ পাবলিশার্স (ভারত)</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="publisher/%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a1%e0%a6%b0%e0%a7%8d%e0%a6%a8-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a7%87%e0%a6%b6%e0%a6%a8.html"
                              class=""
                              >অ্যাডর্ন পাবলিকেশন</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%86%e0%a6%97%e0%a6%be%e0%a6%ae%e0%a7%80-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >আগামী প্রকাশনী</a
                            >
                          </li>
                          <li>
                            <a href="publisher/adarsha.html" class="">আদর্শ</a>
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%87%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a6%e0%a6%bf-%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%a8%e0%a7%8d%e0%a6%a5-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                              class=""
                              >ইত্যাদি গ্রন্থ প্রকাশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a7%8d%e0%a6%af.html"
                              class=""
                              >ঐতিহ্য</a
                            >
                          </li>
                          <li>
                            <a href="publisher/kathaprokash.html" class=""
                              >কথাপ্রকাশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%95%e0%a6%be%e0%a6%95%e0%a6%b2%e0%a7%80-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >কাকলী প্রকাশনী</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%96%e0%a6%be%e0%a6%a8-%e0%a6%ac%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a6%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8-%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1-%e0%a6%95%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%be%e0%a6%a8%e0%a6%bf.html"
                              class=""
                              >খান ব্রাদার্স অ্যান্ড কোম্পানি</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="publisher/%e0%a6%9c%e0%a6%be%e0%a6%97%e0%a7%83%e0%a6%a4%e0%a6%bf-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                              class=""
                              >জাগৃতি প্রকাশনী</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%a4%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%b0%e0%a6%b2%e0%a6%bf%e0%a6%aa%e0%a6%bf.html"
                              class=""
                              >তাম্রলিপি</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%a6%e0%a6%bf-%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a6%bf%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%9f%e0%a6%bf-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%b8-%e0%a6%b2%e0%a6%bf%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a7%87%e0%a6%a1.html"
                              class=""
                              >দি ইউনিভার্সিটি প্রেস লিমিটেড(ইউ পি এল)</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%a6%e0%a6%bf%e0%a6%ac%e0%a7%8d%e0%a6%af-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                              class=""
                              >দিব্য প্রকাশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%a6%e0%a7%87%e2%80%99%e0%a6%9c-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%b6%e0%a6%bf%e0%a6%82-(%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4).html"
                              class=""
                              >দে’জ পাবলিশিং (ভারত)</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%aa%e0%a6%be%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87%e0%a6%b0%e0%a7%80-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a7%87%e0%a6%b6%e0%a6%a8%e0%a7%8d%e0%a6%b8.html"
                              class=""
                              >পাঞ্জেরী পাবলিকেশন্স</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%aa%e0%a6%be%e0%a6%a0%e0%a6%95-%e0%a6%b8%e0%a6%ae%e0%a6%be%e0%a6%ac%e0%a7%87%e0%a6%b6.html"
                              class=""
                              >পাঠক সমাবেশ</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b2-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%b6%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8.html"
                              class=""
                              >পার্ল পাবলিকেশন্স</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>
                            <a
                              href="publisher/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a7%80%e0%a6%95-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a6%be.html"
                              class=""
                              >প্রতীক প্রকাশনা</a
                            >
                          </li>
                          <li>
                            <a href="publisher/prothoma.html" class=""
                              >প্রথমা প্রকাশন</a
                            >
                          </li>
                          <li>
                            <a href="publisher/baatighar-1.html" class=""
                              >বাতিঘর</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%ac%e0%a6%bf%e0%a6%b6%e0%a7%8d%e0%a6%ac%e0%a6%b8%e0%a6%be%e0%a6%b9%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%af-%e0%a6%95%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%b0.html"
                              class=""
                              >বিশ্বসাহিত্য কেন্দ্র</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%ae%e0%a6%be%e0%a6%93%e0%a6%b2%e0%a6%be-%e0%a6%ac%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a6%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8.html"
                              class=""
                              >মাওলা ব্রাদার্স</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%ac%e0%a7%87%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%b2-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a7%87%e0%a6%b6%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b8.html"
                              class=""
                              >বেঙ্গল পাবলিকেশন্‌স</a
                            >
                          </li>
                          <li>
                            <a
                              href="publisher/%e0%a6%b8%e0%a6%ae%e0%a6%af%e0%a6%bc-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8.html"
                              class=""
                              >সময় প্রকাশন</a
                            >
                          </li>
                          <li>
                            <a href="publisher.html" class="s_more"
                              >আরো দেখুন</a
                            >
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home_slider hidden-xs">
          <div id="banner-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="https://image.prothoma.com/sliderImages/2023/08/64c893d1cee30_1690866641.jpg" alt="">
              </div>
          
              <div class="item">
                
                <img src="https://image.prothoma.com/sliderImages/2023/09/64f2c831a211b_1693632561.jpeg" alt="">
              </div>
            
              <div class="item">
               <img src="https://image.prothoma.com/sliderImages/2022/08/62ea6c41cb35d_1659530305.jpg" alt="">
              </div>
            </div>
            <ol class="carousel-indicators">
              <li
                data-target="#banner-carousel"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#banner-carousel" data-slide-to="1"></li>
              <li data-target="#banner-carousel" data-slide-to="2"></li>
              
            </ol>
          </div>
        </div>
        <div
          class="home_slider home_slider_mobile hidden-sm hidden-md hidden-lg"
        >
          <div id="banner-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="https://image.prothoma.com/sliderImages/2023/08/64c893d1cee30_1690866641.jpg" alt="">
              </div>
              <div class="item">
                <img src="https://image.prothoma.com/sliderImages/2022/08/62ea6c41cb35d_1659530305.jpg" alt="">
              </div>
              <div class="item">
                <img src="https://image.prothoma.com/sliderImages/2022/08/62ea6c41cb35d_1659530305.jpg" alt="">
              </div>
              
            </div>
            <ol class="carousel-indicators">
              <li
                data-target="#banner-carousel"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#banner-carousel" data-slide-to="1"></li>
              <li data-target="#banner-carousel" data-slide-to="2"></li>
              
            </ol>
          </div>
        </div>
        <div class="content home gap_1">
          <div class="container">
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">সদ্য বিক্রীত বই</div>
                        <div class="view_all_block">
                          <a href="last-sold-books/58.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">বঙ্গবন্ধু ও মুক্তিযুদ্ধ</div>
                        <div class="view_all_block">
                          <a href="offer/bongobondhu-o-muktizuddho.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">বইমেলা ২০২৩</div>
                        <div class="view_all_block">
                          <a href="category/boimela-2023.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">ধর্ম</div>
                        <div class="view_all_block">
                          <a href="category/dhorrmo.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">নতুন বই</div>
                        <div class="view_all_block">
                          <a href="category/newbooks.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">মুক্তিযুদ্ধ</div>
                        <div class="view_all_block">
                          <a href="category/liberation-war.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">রাজনীতি</div>
                        <div class="view_all_block">
                          <a
                            href="category/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">বঙ্গবন্ধু</div>
                        <div class="view_all_block">
                          <a href="category/bangabandhu.html">সব বই দেখুন</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">ইতিহাস ও ঐতিহ্য</div>
                        <div class="view_all_block">
                          <a
                            href="category/%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8-%e0%a6%93-%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a7%8d%e0%a6%af.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">প্যাকেজ</div>
                        <div class="view_all_block">
                          <a
                            href="category/%e0%a6%aa%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a7%87%e0%a6%9c.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom"></div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">ভারতীয় বই</div>
                        <div class="view_all_block">
                          <a
                            href="category/%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a7%80%e0%a6%af%e0%a6%bc.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap_bottom">
              <div class="col-xs-12 book_single_section">
                <div class="book_container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="tittle_row">
                        <div class="tittle_sc">জীবনী/আত্মকথা/স্মৃতিকথা</div>
                        <div class="view_all_block">
                          <a
                            href="category/%e0%a6%9c%e0%a7%80%e0%a6%ac%e0%a6%a8%e0%a7%80.html"
                            >সব বই দেখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="section section_full">
                        <div class="owl-carousel">
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                   <img src="https://prothoma.gumlet.io/productThumbs/2023/02/63f5cc5d13af3_1677053021.jpg?w=300&dpr=1.3" alt="" srcset="">
                              </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                  >
                                    <h2>ভাষা দর্শন</h2>
                                  </a>
                                  <h3>ড. মো: আব্দুল মোহিত</h3>
                                  <h4>
                                    <span class="price_1">১৮০.০০ টাকা</span>
                                    <span class="price_2">২২৫.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="4350"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/4350/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be-%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/29423/83399c04.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223d2672b04_1612856614.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/29423/83399c04.html">
                                    <h2>দর্শন</h2>
                                  </a>
                                  <h3>আহমেদ লিপু</h3>
                                  <h4>
                                    <span class="price_1">৮০.০০ টাকা</span>
                                    <span class="price_2">১০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="29423"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/29423/83399c04.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/34966/e3a1ffff.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/6022394aeb7d5_1612855626.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/34966/e3a1ffff.html">
                                    <h2>সুখ</h2>
                                  </a>
                                  <h3>বার্ট্রান্ড রাসেল</h3>
                                  <h4>
                                    <span class="price_1">২৪০.০০ টাকা</span>
                                    <span class="price_2">৩০০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="34966"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/34966/e3a1ffff.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/32497/e39634a0.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2021/02/60223938a7cbd_1612855608.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/32497/e39634a0.html">
                                    <h2>আল্লামা শেখ সাদীর আত্মদর্শন</h2>
                                  </a>
                                  <h3>মোস্তাক আহমাদ</h3>
                                  <h4>
                                    <span class="price_1">৩৬০.০০ টাকা</span>
                                    <span class="price_2">৪৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="32497"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/32497/e39634a0.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a href="product/33284/e3987b30.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/04/625111609fa9b_1649480032.png?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a href="product/33284/e3987b30.html">
                                    <h2>দর্শন গবেষণা পদ্ধতি</h2>
                                  </a>
                                  <h3>Dr. N. H. M. Abu Bakar</h3>
                                  <h4>
                                    <span class="price_1">১১২.০০ টাকা</span>
                                    <span class="price_2">১৪০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="33284"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a href="product/33284/e3987b30.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                  <img src="https://prothoma.gumlet.io/productThumbs/2021/11/6195f91f0a43c_1637218591.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>২০% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                  >
                                    <h2>
                                      Sons of The Sea (Translated by Quazi
                                      Mostain Billah)
                                    </h2>
                                  </a>
                                  <h3>হরিশংকর জলদাস</h3>
                                  <h4>
                                    <span class="price_1">২৮০.০০ টাকা</span>
                                    <span class="price_2">৩৫০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="12146"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/12146/sons-of-the-sea-(translated-by-quazi-mostain-billah).html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/05/645648fd19a9a_1683376381.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info">
                                  <span>২৩.৯১% ছাড়</span>
                                </div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                  >
                                    <h2>মৃত্যুটা ভীষণ প্রয়োজন</h2>
                                  </a>
                                  <h3>ইফতেখার আহমেদ শামীম</h3>
                                  <h4>
                                    <span class="price_1">১৭৫.০০ টাকা</span>
                                    <span class="price_2">২৩০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="35236"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/35236/mrittuta-vison-proyojon.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2022/12/63884f40449f1_1669877568.jpg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                  >
                                    <h2>দ্য ম্যান হু লাফস - ভিক্টর হুগো</h2>
                                  </a>
                                  <h3>ভিক্টর হুগো</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="1154"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/1154/%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b9%e0%a7%81-%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b8---%e0%a6%ad%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%9f%e0%a6%b0-%e0%a6%b9%e0%a7%81%e0%a6%97%e0%a7%8b.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="product_single">
                              <div class="product_thumb">
                                <a
                                  href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                <img src="https://prothoma.gumlet.io/productThumbs/2023/08/64e34c63aa474_1692617827.jpeg?w=300&dpr=1.3" alt="">
                                </a>
                                <div class="ds_info"><span>১৮% ছাড়</span></div>
                                <div class="overlay_block hidden-xs">
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="product_info">
                                <div
                                  class="product_content_same_height_last_sold"
                                >
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                  >
                                    <h2>পুড্‌ন্‌হেড উইলসন</h2>
                                  </a>
                                  <h3>মার্ক টোয়েন</h3>
                                  <h4>
                                    <span class="price_1">১৮০.৪০ টাকা</span>
                                    <span class="price_2">২২০.০০ টাকা</span>
                                  </h4>
                                </div>
                                <div
                                  class="pr_options hidden-lg hidden-sm hidden-md"
                                >
                                  <div class="overlay_inner_block">
                                    <ul>
                                      <li class="cart_block">
                                        <a
                                          href="#"
                                          id="hoverBuyURL"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="quick_block">
                                        <a
                                          href="#"
                                          class="quick-view"
                                          data-toggle="modal"
                                          data-target="#quick-view"
                                          data-id="189"
                                        ></a>
                                      </li>
                                      <li class="wish_block">
                                        <a
                                          href="login.html"
                                          class="addToWishListButton"
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="buy_btn">
                                  <a
                                    href="product/189/%e0%a6%aa%e0%a7%81%e0%a6%a1%e0%a7%8d%e2%80%8c%e0%a6%a8%e0%a7%8d%e2%80%8c%e0%a6%b9%e0%a7%87%e0%a6%a1-%e0%a6%89%e0%a6%87%e0%a6%b2%e0%a6%b8%e0%a6%a8.html"
                                    >বিস্তারিত</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <div class="footer_top">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="newlater_wrapper">
                    <div class="ns_content">
                      <div class="ns_tittle"><h2>নিউজলেটার সাইন আপ</h2></div>
                      <div class="ns_single">
                        <div class="subscribe">
                          <form id="subscription-form">
                            <div class="form-group">
                              <div class="input-group">
                                <input
                                  type="email"
                                  class="form-control subscription-field"
                                  placeholder="আপনার ই-মেইল আইডি লিখুন"
                                  name="email"
                                  id="newsLetterEmail"
                                />
                                <input
                                  type="submit"
                                  name="submit"
                                  class="btn btn-primary subscribe"
                                  value="সাবস্ক্রাইব করুন"
                                />
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_mid">
            <div class="container">
              <div class="row quick-link">
                <div class="col-xs-12 col-sm-4 ftr_about">
                  <h3>প্রথমা ডট কম</h3>
                  <p>
                    অনলাইন বইয়ের বাজার prothoma.com মিডিয়াস্টার লিমিটেডের
                    (প্রথম আলো) একটি অঙ্গপ্রতিষ্ঠান। নানা রুচি ও স্বাদের পাঠকের
                    বইয়ের চাহিদা সহজে ও পরিপূর্ণভাবে মেটানোই আমাদের লক্ষ্য।
                    পাঠকের আকাঙ্ক্ষিত যেকোনো বই এখান থেকে সুলভ মূল্যে সরবরাহ করা
                    হয়। দেশের যেকোনো প্রান্তের পাঠকের কাছে সে বই পৌঁছে দেওয়া হয়
                    দ্রুততম সময়ে। আমাদের উদ্দেশ্য বইয়ের প্রতি পাঠকের আবেগ ও
                    ভালোবাসাকে সর্বোচ্চ গুরুত্ব দেওয়া। তাই পাঠকদের জন্য রয়েছে
                    বিশেষ অফার ও ছাড়সহ নানা সুবিধা। আপনাকে স্বাগতম।
                  </p>
                  <div class="ftr_single">
                    <ul class="social-media">
                      <li>
                        <a
                          href="https://www.facebook.com/ProthomaOnline"
                          data-bg="../image.prothoma.com/socialImages/2021/02/601af75667f66_1612379990.jpg"
                          >Facebook</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://www.twitter.com/"
                          data-bg="../image.prothoma.com/socialImages/2021/02/601af76049878_1612380000.jpg"
                          >Twitter</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://www.youtube.com/"
                          data-bg="../image.prothoma.com/socialImages/2021/02/601af76915e96_1612380009.jpg"
                          >YouTube</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                  <h3>জরুরি লিংক</h3>
                  <ul class="help-list">
                    <li><a href="category.html">বিষয়</a></li>
                    <li><a href="author.html">লেখক</a></li>
                    <li><a href="publisher.html">প্রকাশক</a></li>
                    <li><a href="login.html">আমার অ্যাকাউন্ট</a></li>
                    <li>
                      <a
                        href="page/%e0%a6%86%e0%a6%ae%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%b8%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%b0%e0%a7%8d%e0%a6%95%e0%a7%87.html"
                        >আমাদের সম্পর্কে</a
                      >
                    </li>
                    <li><a href="contact-us.html">যোগাযোগ করুন</a></li>
                  </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                  <h3>যেকোনো সাহায্যে</h3>
                  <ul class="help-list">
                    <li>
                      <a
                        href="page/%e0%a6%95%e0%a7%80%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%95%e0%a6%bf%e0%a6%a8%e0%a6%ac.html"
                        >কীভাবে কিনব</a
                      >
                    </li>
                    <li>
                      <a
                        href="page/%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0%e0%a7%87%e0%a6%b0-%e0%a6%b6%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf.html"
                        >ব্যবহারের শর্তাবলি</a
                      >
                    </li>
                    <li>
                      <a
                        href="page/%e0%a6%9c%e0%a6%b0%e0%a7%81%e0%a6%b0%e0%a6%bf-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a7%8d%e0%a6%a8%e0%a7%8b%e0%a6%a4%e0%a7%8d%e0%a6%a4%e0%a6%b0.html"
                        >জরুরি প্রশ্নোত্তর</a
                      >
                    </li>
                    <li>
                      <a
                        href="page/%e0%a6%97%e0%a7%8b%e0%a6%aa%e0%a6%a8%e0%a7%80%e0%a7%9f%e0%a6%a4%e0%a6%be-%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf.html"
                        >গোপনীয়তা নীতি</a
                      >
                    </li>
                    <li>
                      <a
                        href="page/%e0%a6%ac%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%9f%e0%a7%87%e0%a6%b0-%e0%a6%b6%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf.html"
                        >বিক্রয়ের শর্তাবলি</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                  <h3>যোগাযোগ</h3>
                  <div class="ftr_address">
                    <p>
                      প্রগতি ইনস্যুরেন্স ভবন, ২০–২১ কারওয়ান বাজার, ঢাকা–১২১৫
                    </p>
                  </div>
                  <div class="top-left">
                    <p>
                      <a href="mailto:info@prothoma.com">info@prothoma.com</a>
                    </p>
                  </div>
                  <div class="top-right">
                    <p>
                      <a href="tel:01730000619, 01988337733"
                        >01730000619, 01988337733</a
                      >
                    </p>
                  </div>
                  <h3>পরিশোধের অনলাইন মাধ্যম</h3>
                  <div class="pay_card">
                    <img src="{{ asset('frontend') }}/images/frontend/payment_bg.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_bottom">
            <div class="container">
              <div class="col-xs-12">
                <div class="ftr_single_btm">
                  <p>স্বত্ব: prothoma.com। সব স্বত্ব সংরক্ষিত</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-vcenter" id="quick-view" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="detail-slider" id="productSlider"></div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="one-four-block">
                    <div class="product-title">
                      <h1 id="productTitle"></h1>
                      <p style="display: none" id="productID"></p>
                      <p></p>
                      <h3 id="productWriter"></h3>
                      <h4 id="productCategory"></h4>
                      <div class="rating_top_bar">
                        <i class="fa fa-star star5"></i
                        ><span id="productRating"></span>
                      </div>
                    </div>
                    <div class="product-price" id="priceSection"></div>
                    <div class="right-bottom">
                      <div class="short_desc">
                        <h2>বইয়ের সম্পর্কে:</h2>
                        <p id="productAbout"></p>
                        <h2>ফিচার:</h2>
                        <div id="featureSection"></div>
                      </div>
                      <div class="add-cart">
                        <span class="item-amount">
                          <input type="button" name="minus" class="minus" />
                          <input
                            type="text"
                            name="quantity"
                            id="modalCartQuantity"
                            value="1"
                            min="1"
                            class="form-control"
                            placeholder="1"
                          />
                          <input type="button" name="plus" class="plus" />
                        </span>
                        <a href="#" class="btn btn-primary" id="modalBuyURL"
                          >কার্টে যোগ করুন</a
                        >
                      </div>
                      <div class="modalPaddingBottom">
                        <span class="pull-left stock" id="productStock"></span>
                        <div id="modalWishListBlock">
                          <a
                            href="#"
                            class="pull-right wishlist"
                            id="modalWishListURL"
                            >পছন্দের তালিকায় রাখুন</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="side_menu_block" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"></span>
            </button>
            <div class="modal-body">
              <div class="side_bar_mneu">
                <ul>
                  <li id="nav_menu_60">
                    <a href="publisher/prothoma.html" class="no-icon-sidebar"
                      >প্রথমা প্রকাশন</a
                    >
                  </li>
                  <li class="dropdown">
                    <a
                      href="author.html"
                      class="dropdown-toggle"
                      data-toggle="dropdown"
                      >লেখক</a
                    >
                    <ul class="dropdown-menu">
                      <li>
                        <a href="author/akbar-ali-khan.html" class=""
                          >আকবর আলি খান</a
                        >
                      </li>
                      <li>
                        <a
                          href="author/%e0%a6%86%e0%a6%a8%e0%a6%bf%e0%a6%b8%e0%a7%81%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a8.html"
                          class=""
                          >আনিসুজ্জামান</a
                        >
                      </li>
                      <li>
                        <a href="author/anisul-haque.html" class=""
                          >আনিসুল হক</a
                        >
                      </li>
                      <li>
                        <a
                          href="author/%e0%a6%86%e0%a6%ac%e0%a7%81%e0%a6%b2-%e0%a6%ae%e0%a6%a8%e0%a6%b8%e0%a7%81%e0%a6%b0-%e0%a6%86%e0%a6%b9%e0%a6%ae%e0%a6%a6.html"
                          class=""
                          >আবুল মনসুর আহমদ</a
                        >
                      </li>
                      <li>
                        <a href="author/ali-riaz-1.html" class="">আলী রীয়াজ</a>
                      </li>
                      <li>
                        <a href="author/asif-nazrul.html" class=""
                          >আসিফ নজরুল</a
                        >
                      </li>
                      <li>
                        <a
                          href="author/%e0%a6%97%e0%a7%8b%e0%a6%b2%e0%a6%be%e0%a6%ae-%e0%a6%ae%e0%a7%81%e0%a6%b0%e0%a6%b6%e0%a6%bf%e0%a6%a6.html"
                          class=""
                          >গোলাম মুরশিদ</a
                        >
                      </li>
                      <li>
                        <a href="author/matiur-rahman.html" class=""
                          >মতিউর রহমান</a
                        >
                      </li>
                      <li>
                        <a href="author/mohiuddin-ahmmod.html" class=""
                          >মহিউদ্দিন আহমদ</a
                        >
                      </li>
                      <li>
                        <a href="author.html" class="s_more">আরো দেখুন</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a
                      href="publisher.html"
                      class="dropdown-toggle"
                      data-toggle="dropdown"
                      >প্রকাশক</a
                    >
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                          class=""
                          >অনন্যা</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a6%bf%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                          class=""
                          >অনিন্দ্য প্রকাশ</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%81%e0%a6%aa%e0%a6%ae-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8%e0%a7%80.html"
                          class=""
                          >অনুপম প্রকাশনী</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8.html"
                          class=""
                          >অন্বেষা প্রকাশন</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%a7%e0%a6%be%e0%a6%b0%e0%a6%be.html"
                          class=""
                          >অন্যধারা</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6.html"
                          class=""
                          >অন্যপ্রকাশ</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a6%ac%e0%a6%b8%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%a8.html"
                          class=""
                          >অবসর-প্রকাশন</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%86%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%a6-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%b6%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b8-(%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4).html"
                          class=""
                          >আনন্দ পাবলিশার্স (ভারত)</a
                        >
                      </li>
                      <li>
                        <a
                          href="publisher/%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a1%e0%a6%b0%e0%a7%8d%e0%a6%a8-%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a7%87%e0%a6%b6%e0%a6%a8.html"
                          class=""
                          >অ্যাডর্ন পাবলিকেশন</a
                        >
                      </li>
                      <li>
                        <a href="publisher.html" class="s_more">আরো দেখুন</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a
                      href="category.html"
                      class="dropdown-toggle"
                      data-toggle="dropdown"
                      >বিষয়</a
                    >
                    <ul class="dropdown-menu">
                      <li>
                        <a href="category/newbooks.html" class="">নতুন বই</a>
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%89%e0%a6%aa%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b8-%e0%a6%9b%e0%a7%8b%e0%a6%9f%e0%a6%97%e0%a6%b2%e0%a7%8d%e0%a6%aa.html"
                          class=""
                          >কথাসাহিত্য</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8-%e0%a6%93-%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a7%8d%e0%a6%af.html"
                          class=""
                          >ইতিহাস ও ঐতিহ্য</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7-%e0%a6%97%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%a3%e0%a6%be-%e0%a6%93-%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%af.html"
                          class=""
                          >প্রবন্ধ, গবেষণা ও অন্যান্য</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%9c%e0%a7%80%e0%a6%ac%e0%a6%a8%e0%a7%80.html"
                          class=""
                          >জীবনী/আত্মকথা/স্মৃতিকথা</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%b8%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a7%8e%e0%a6%95%e0%a6%be%e0%a6%b0.html"
                          class=""
                          >সাক্ষাৎকার</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%86%e0%a6%a4%e0%a7%8d%e0%a6%ae-%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%a8%e0%a6%af%e0%a6%bc%e0%a6%a8.html"
                          class=""
                          >আত্মোন্নয়ন</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%aa%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a7%87%e0%a6%9c.html"
                          class=""
                          >প্যাকেজ</a
                        >
                      </li>
                      <li>
                        <a
                          href="category/%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%be%e0%a6%a8-%e0%a6%97%e0%a6%a3%e0%a6%bf%e0%a6%a4.html"
                          class=""
                          >গণিত, বিজ্ঞান ও প্রযুক্তি</a
                        >
                      </li>
                      <li>
                        <a href="category.html" class="s_more">আরো দেখুন</a>
                      </li>
                    </ul>
                  </li>
                  <li id="nav_menu_70">
                    <a href="index.html" class="no-icon-sidebar">মুক্তিযুদ্ধ</a>
                  </li>
                  <li id="nav_menu_74">
                    <a
                      href="category/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf.html"
                      class="no-icon-sidebar"
                      >রাজনীতি</a
                    >
                  </li>
                  <li id="nav_menu_86">
                    <a href="category/economy.html" class="no-icon-sidebar"
                      >অর্থনীতি</a
                    >
                  </li>
                  <li id="nav_menu_81">
                    <a href="category/dhorrmo.html" class="no-icon-sidebar"
                      >ধর্ম</a
                    >
                  </li>
                  <li id="nav_menu_66">
                    <a
                      href="category/%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%97%e0%a6%be%e0%a6%9c%e0%a6%bf%e0%a6%a8.html"
                      class="no-icon-sidebar"
                      >ম্যাগাজিন</a
                    >
                  </li>
                  <li id="nav_menu_95">
                    <a href="category/boimela-2023.html" class="no-icon-sidebar"
                      >বইমেলা ২০২৩</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('frontend') }}/js/frontend/jquery.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/bootstrap.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/jquery.menu-aim.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/owl.carousel.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/masonry.pkgd.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/jquery.selectbox-0.1.3.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/icheck.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/slick.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/grids.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/jquery.zoom.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/venobox.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/bootstrap-datepicker.min.js"></script>
      <script src="{{ asset('frontend') }}/js/frontend/jquery.mCustomScrollbar.concat.min.js"></script>
      <script
        type="text/javascript"
        src="{{ asset('frontend') }}/js/frontend/chosen.jquery.js"
      ></script>
      <script src="{{ asset('frontend') }}/js/frontend/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="../code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
      <script
        type="text/javascript"
        src="{{ asset('frontend') }}/js/frontend/ResizeSensor.min.js"
      ></script>
      <script
        type="text/javascript"
        src="{{ asset('frontend') }}/js/frontend/theia-sticky-sidebar.js"
      ></script>
    
  </body>
</html>
