<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">
    <head>
        <link rel="shortcut icon" href="http://hstatic.net/969/1000003969/1000161857/favicon.png?v=8910" type="image/png" />
        <title>
            JUNO - Thanh toán đơn hàng
        </title>
        <meta name="description" content="JUNO - Thanh to&#225;n đơn h&#224;ng" />
        <link href='http://hstatic.net/0/0/global/checkouts.css?v=1.1' rel='stylesheet' type='text/css'  media='all'  />
        <link href='http://hstatic.net/969/1000003969/1000161857/check_out.css?v=8910' rel='stylesheet' type='text/css'  media='all'  />
        <script src='http://hstatic.net/0/0/global/jquery.min.js' type='text/javascript'></script>
        <script src='http://hstatic.net/0/0/global/jquery.validate.js' type='text/javascript'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">

    </head>
    <body>
        <input id="reloadValue" type="hidden" name="reloadValue" value="" />
        <div class="banner">
            <div class="wrap">
                <a href="https://juno.vn" class="logo">
                    <h1 class="logo-text">JUNO</h1>
                </a>
            </div>
        </div>
        <button class="order-summary-toggle order-summary-toggle-hide">
            <div class="wrap">
                <div class="order-summary-toggle-inner">
                    <div class="order-summary-toggle-icon-wrapper">
                        <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon">
                            <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path>
                        </svg>
                    </div>
                    <div class="order-summary-toggle-text order-summary-toggle-text-show">
                        <span>Hiển thị thông tin đơn hàng</span>
                        <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                            <path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path>
                        </svg>
                    </div>
                    <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                        <span>Ẩn thông tin đơn hàng</span>
                        <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                            <path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path>
                        </svg>
                    </div>
                    <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="78000000">
                        <span class="total-recap-final-price">780,000₫</span>
                    </div>
                </div>
            </div>
        </button>
        <div class="content content-second">
            <div class="wrap">
                <div class="sidebar sidebar-second">
                    <div class="sidebar-content">
                        <div class="order-summary">
                            <div class="order-summary-sections">
                                <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                    <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                        <input name="utf8" type="hidden" value="✓">
                                        <div class="fieldset">
                                            <div class="field  ">
                                                <div class="field-input-btn-wrapper">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                        <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" />
                                                    </div>
                                                    <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                    </button>
                                                </div>
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
        <div class="content">
            <div class="wrap">
                <div class="sidebar">
                    <div class="sidebar-content">
                        <div class="order-summary order-summary-is-collapsed">
                            <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                            <div class="order-summary-sections">
                                <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                    <table class="product-table">
                                        <thead>
                                            <tr>
                                                <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                                <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                                <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                                <th scope="col"><span class="visually-hidden">Giá</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="product" data-product-id="1003567607" data-variant-id="1009258334">
                                                <td class="product-image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail-wrapper">
                                                            <img class="product-thumbnail-image" alt="Chunky Heels Cheer up SD05009" src="//product.hstatic.net/1000003969/product/xanh-la_20_108__small.jpg" />
                                                        </div>
                                                        <span class="product-thumbnail-quantity" aria-hidden="true">2</span>
                                                    </div>
                                                </td>
                                                <td class="product-description">
                                                    <span class="product-description-name order-summary-emphasis">Chunky Heels Cheer up SD05009</span>
                                                    <span class="product-description-variant order-summary-small-text">
                                                    34 / Xanh lá
                                                    </span>
                                                </td>
                                                <td class="product-quantity visually-hidden">2</td>
                                                <td class="product-price">
                                                    <span class="order-summary-emphasis">780,000₫</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                    <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                        <input name="utf8" type="hidden" value="✓">
                                        <div class="fieldset">
                                            <div class="field  ">
                                                <div class="field-input-btn-wrapper">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                        <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" />
                                                    </div>
                                                    <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="order-summary-section order-summary-section-total-lines" data-order-summary-section="payment-lines">
                                    <table class="total-line-table">
                                        <thead>
                                            <tr>
                                                <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                                <th scope="col"><span class="visually-hidden">Giá</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="total-line total-line-subtotal">
                                                <td class="total-line-name">Tạm tính</td>
                                                <td class="total-line-price">
                                                    <span class="order-summary-emphasis" data-checkout-subtotal-price-target="78000000">
                                                    780,000₫
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="total-line total-line-shipping">
                                                <td class="total-line-name">Phí vận chuyển</td>
                                                <td class="total-line-price">
                                                    <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">
                                                    —
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="total-line-table-footer">
                                            <tr class="total-line">
                                                <td class="total-line-name payment-due-label">
                                                    <span class="payment-due-label-total">Tổng cộng</span>
                                                </td>
                                                <td class="total-line-name payment-due">
                                                    <span class="payment-due-currency">VND</span>
                                                    <span class="payment-due-price" data-checkout-payment-due-target="78000000">
                                                    780,000₫
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <div class="main-header">
                        <a href="https://juno.vn" class="logo">
                            <h1 class="logo-text">JUNO</h1>
                        </a>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="https://juno.vn/cart">Giỏ hàng</a>
                            </li>
                            <li class="breadcrumb-item breadcrumb-item-current">
                                Thông tin giao hàng
                            </li>
                        </ul>
                    </div>
                    <div class="main-content">
                        <div class="step">
                            <div class="step-sections steps-onepage" step="1">
                                <script>console.log('abc');</script>
                                <!-- Google Code for Successful checkout Page -->
                                <script>
                                    if(typeof ga != 'undefined') {
                                    ga('require', 'ecommerce');

                                        ga('ecommerce:addItem', {
                                            'id': '1003567607', // Transaction ID. Required.
                                            'name': 'Chunky Heels Cheer up SD05009', // Product name. Required.
                                            'sku': '1101000001230', // SKU/code.
                                            'category': 'Top 10 đôi giày đẹp 8/3', // Category or variation.
                                            'price': '780000', // Unit price.
                                            'quantity': '2' // Quantity.
                                        });


                                    ga('ecommerce:addTransaction', {
                                      'id': '',
                                      'affiliation': '',
                                      'revenue': '780000',
                                      'shipping': '0',
                                      'tax': '',
                                      'currency': 'VND'  // local currency code.
                                    });
                                    ga('ecommerce:send');
                                    }
                                </script>
                                <!-- Facebook Pixel Code -->
                                <script>
                                    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;                                                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;                                                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,                                                                                                                                                                                         document,'script','//connect.facebook.net/en_US/fbevents.js');
                                    fbq('init', '1566159606933153');
                                    fbq('track', 'Purchase', { content_ids: ['1003567607'],content_type: 'product',value: 780000, currency: 'VND'});
                                </script>
                                <!-- End Facebook Pixel Code -->
                                <!-- Ants convertion script -->
                                <script type="text/javascript">
                                    /* <![CDATA[ */
                                    var google_conversion_id = 874352237;
                                    var google_conversion_language = "en";
                                    var google_conversion_format = "3";
                                    var google_conversion_color = "ffffff";
                                    var google_conversion_label = "tr17CM-9h2oQ7Zz2oAM";
                                    var google_conversion_value = 0.00;
                                    var google_conversion_currency = "VND";
                                    var google_remarketing_only = false;
                                    /* ]]> */
                                </script>
                                <noscript>
                                    <div style="display:inline;">
                                        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/874352237/?value=0.00&amp;currency_code=VND&amp;label=tr17CM-9h2oQ7Zz2oAM&amp;guid=ON&amp;script=0"/>
                                    </div>
                                </noscript>
                                <!-- Google Code for Checkout Conversion Page -->
                                <script type="text/javascript">
                                    /* <![CDATA[ */
                                    var google_conversion_id = 956357071;
                                    var google_conversion_language = "en";
                                    var google_conversion_format = "3";
                                    var google_conversion_color = "ffffff";
                                    var google_conversion_label = "N1UDCNatu14Qz7ODyAM";
                                    var google_remarketing_only = false;
                                    /* ]]> */
                                </script>
                                <script async="true" type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
                                <noscript>
                                    <div style="display:inline;">
                                        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/956357071/?label=N1UDCNatu14Qz7ODyAM&amp;guid=ON&amp;script=0"/>
                                    </div>
                                </noscript>
                                <script>
                                    <!-- Ematics Solution -->
                                    setTimeout(function(){

                                    (function(i,s,o,g,r,a,m){
                                                i['EmaticsObject']=r;i[r]=i[r]||function(){
                                                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                            })(window,document,'script','//api.ematicsolutions.com/v1/ematic.min.js','ematics');
                                            var ematicApikey = "ee302947687111e68df40242ac110002-sg2";

                                    var products = [

                                        {
                                            id: "1003567607",
                                            price: "780,000₫",
                                            quantity: 2,
                                            name: "Chunky Heels Cheer up SD05009",
                                            brandName: "Juno",
                                    misc1: "",
                                            imageUrl: "http://product.hstatic.net/1000003969/product/xanh-la_20_108_.jpg",
                                            link: "https://juno.vn/products/giay-xang-dan-quai-ngang-cao-5cm-cheer-up-sd05009"

                                        }


                                    ];

                                    var email = '';
                                    if ( $('.step-sections[step=1]').length > 0 ) {
                                    email = '';
                                    var opt = {
                                                email: email,
                                            country_iso: "<current country iso code>",
                                            currency_iso: "<current currency iso code>",
                                            language_iso: "<current language iso code>"
                                        };
                                    //initialize
                                        ematics("create", ematicApikey, opt);
                                    ematics("log", "product", "checkout", products);
                                    }
                                    if ( window.location.pathname.indexOf('thank_you') != -1 ) {
                                    email = JSON.parse(Haravan.checkout).email;
                                    var opt = {
                                                email: email,
                                            country_iso: "<current country iso code>",
                                            currency_iso: "<current currency iso code>",
                                            language_iso: "<current language iso code>"
                                        };
                                    //initialize
                                        ematics("create", ematicApikey, opt);
                                    ematics("log", "product", "convert", products);
                                    }
                                    },500);
                                </script>
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title">Thông tin giao hàng</h2>
                                    </div>
                                    <div class="section-content section-customer-information no-mb">
                                        <p class="section-content-text">
                                            Bạn đã có tài khoản?
                                            <a href="https://juno.vn/account/login?urlredirect=https%3a%2f%2fjuno.vn%2fcheckouts%2f48d9070e513540ccad28256650f19e2a%3fstep%3d1">Đăng nhập</a>
                                        </p>
                                        <div class="fieldset">
                                            <div class="field field-required  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                    <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="billing_address[full_name]" value="" />
                                                </div>
                                            </div>
                                            <div class="field  field-two-thirds  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="checkout_user_email">Email</label>
                                                    <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="checkout_user[email]" value="" />
                                                </div>
                                            </div>
                                            <div class="field field-required field-third  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                    <input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel" id="billing_address_phone" name="billing_address[phone]" value="" />
                                                </div>
                                            </div>
                                            <div class="field   ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                                    <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="billing_address[address1]" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-content">
                                        <div class="fieldset">
                                            <form id="form_update_location" class="clearfix" accept-charset="UTF-8" method="post">
                                                <input name="utf8" type="hidden" value="✓">
                                                <div class="field  field-half  ">
                                                    <div class="field-input-wrapper field-input-wrapper-select">
                                                        <label class="field-label" for="customer_shipping_province">Tỉnh / thành</label>
                                                        <select class="field-input" id="customer_shipping_province" name="customer_shipping_province">
                                                            <option data-code="null" value="null" selected>Chọn tỉnh / thành</option>
                                                            <option data-code="HC" value="50" >Hồ Chí Minh</option>
                                                            <option data-code="HI" value="1" >Hà Nội</option>
                                                            <option data-code="DA" value="32" >Đà Nẵng</option>
                                                            <option data-code="AG" value="57" >An Giang</option>
                                                            <option data-code="BV" value="49" >Bà Rịa - Vũng Tàu</option>
                                                            <option data-code="BL" value="62" >Bạc Liêu</option>
                                                            <option data-code="BG" value="15" >Bắc Giang</option>
                                                            <option data-code="BK" value="4" >Bắc Kạn</option>
                                                            <option data-code="BN" value="18" >Bắc Ninh</option>
                                                            <option data-code="BT" value="53" >Bến Tre</option>
                                                            <option data-code="BI" value="47" >Bình Dương</option>
                                                            <option data-code="BD" value="35" >Bình Định</option>
                                                            <option data-code="BP" value="45" >Bình Phước</option>
                                                            <option data-code="BU" value="39" >Bình Thuận</option>
                                                            <option data-code="CM" value="63" >Cà Mau</option>
                                                            <option data-code="CB" value="3" >Cao Bằng</option>
                                                            <option data-code="CN" value="59" >Cần Thơ</option>
                                                            <option data-code="DC" value="42" >Đắk Lắk</option>
                                                            <option data-code="DO" value="43" >Đắk Nông</option>
                                                            <option data-code="DB" value="7" >Điện Biên</option>
                                                            <option data-code="DN" value="48" >Đồng Nai</option>
                                                            <option data-code="DT" value="56" >Đồng Tháp</option>
                                                            <option data-code="GL" value="41" >Gia Lai</option>
                                                            <option data-code="HG" value="2" >Hà Giang</option>
                                                            <option data-code="HM" value="23" >Hà Nam</option>
                                                            <option data-code="HT" value="28" >Hà Tĩnh</option>
                                                            <option data-code="HD" value="19" >Hải Dương</option>
                                                            <option data-code="HP" value="20" >Hải Phòng</option>
                                                            <option data-code="HU" value="60" >Hậu Giang</option>
                                                            <option data-code="HO" value="11" >Hòa Bình</option>
                                                            <option data-code="HY" value="21" >Hưng Yên</option>
                                                            <option data-code="KG" value="58" >Kiên Giang</option>
                                                            <option data-code="KT" value="40" >Kon Tum</option>
                                                            <option data-code="KH" value="37" >Khánh Hòa</option>
                                                            <option data-code="LI" value="8" >Lai Châu</option>
                                                            <option data-code="LS" value="13" >Lạng Sơn</option>
                                                            <option data-code="LO" value="6" >Lào Cai</option>
                                                            <option data-code="LD" value="44" >Lâm Đồng</option>
                                                            <option data-code="LA" value="51" >Long An</option>
                                                            <option data-code="ND" value="24" >Nam Định</option>
                                                            <option data-code="NB" value="25" >Ninh Bình</option>
                                                            <option data-code="NT" value="38" >Ninh Thuận</option>
                                                            <option data-code="NA" value="27" >Nghệ An</option>
                                                            <option data-code="PT" value="16" >Phú Thọ</option>
                                                            <option data-code="PY" value="36" >Phú Yên</option>
                                                            <option data-code="QB" value="29" >Quảng Bình</option>
                                                            <option data-code="QM" value="33" >Quảng Nam</option>
                                                            <option data-code="QN" value="14" >Quảng Ninh</option>
                                                            <option data-code="QG" value="34" >Quảng Ngãi</option>
                                                            <option data-code="QT" value="30" >Quảng Trị</option>
                                                            <option data-code="ST" value="61" >Sóc Trăng</option>
                                                            <option data-code="SL" value="9" >Sơn La</option>
                                                            <option data-code="TN" value="46" >Tây Ninh</option>
                                                            <option data-code="TG" value="52" >Tiền Giang</option>
                                                            <option data-code="TQ" value="5" >Tuyên Quang</option>
                                                            <option data-code="TB" value="22" >Thái Bình</option>
                                                            <option data-code="TY" value="12" >Thái Nguyên</option>
                                                            <option data-code="TH" value="26" >Thanh Hóa</option>
                                                            <option data-code="TT" value="31" >Thừa Thiên Huế</option>
                                                            <option data-code="TV" value="54" >Trà Vinh</option>
                                                            <option data-code="VL" value="55" >Vĩnh Long</option>
                                                            <option data-code="VT" value="17" >Vĩnh Phúc</option>
                                                            <option data-code="YB" value="10" >Yên Bái</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="field  field-half  ">
                                                    <div class="field-input-wrapper field-input-wrapper-select">
                                                        <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                                                        <select class="field-input" id="customer_shipping_district" name="customer_shipping_district">
                                                            <option data-code="null" value="null" selected>Chọn quận / huyện</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="change_pick_location_or_shipping">
                                        <div id="section-shipping-rate">
                                            <div class="section-header">
                                                <h2 class="section-title">Phương thức vận chuyển</h2>
                                            </div>
                                            <div class="section-content">
                                                <div class="content-box  blank-slate">
                                                    <i class="blank-slate-icon icon icon-closed-box "></i>
                                                    <p>Vui lòng chọn tỉnh / thành để có danh sách phương thức vận chuyển.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="section-payment-method" class="section">
                                            <div class="section-header">
                                                <h2 class="section-title">Phương thức thanh toán</h2>
                                            </div>
                                            <div class="section-content">
                                                <div class="content-box">
                                                    <div class="radio-wrapper content-box-row">
                                                        <label class="radio-label" for="payment_method_id_6381">
                                                            <div class="radio-input">
                                                                <input id="payment_method_id_6381" class="input-radio" name="payment_method_id" type="radio" value="6381" checked />
                                                            </div>
                                                            <span class="radio-label-primary">Thanh toán khi nhận hàng (COD)</span>
                                                        </label>
                                                    </div>
                                                    <div class="radio-wrapper content-box-row">
                                                        <label class="radio-label" for="payment_method_id_121018">
                                                            <div class="radio-input">
                                                                <input id="payment_method_id_121018" class="input-radio" name="payment_method_id" type="radio" value="121018"  />
                                                            </div>
                                                            <span class="radio-label-primary">Thanh toán bằng thẻ ATM nội địa (SmartLink)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-footer">
                                <form id="form_next_step" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <button type="submit" class="step-footer-continue-btn btn">
                                    <span class="btn-content">Hoàn tất đơn hàng</span>
                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                    </button>
                                </form>
                                <a class="step-footer-previous-link" href="https://juno.vn/cart">
                                    <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
                                        <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
                                    </svg>
                                    Giỏ hàng
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>