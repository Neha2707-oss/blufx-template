<?php
include("header.php");
?>
                                   

    <!-- Body glow start -->
    <div class="glow__area">
        <div class="body__color-glow"></div>
        <div class="body__color-glow glow-2"></div>
    </div>
    <!-- Body glow end -->

    <!-- Body main wrapper start -->
    <main>

        <!-- Breadcrumb area start  -->
        <div class="breadcrumb__area breadcrumb-space theme-bg-1 valign p-relative z-index-11 fix">
            <div class="breadcrumb__glow">
                <div class="glow-1"></div>
                <div class="glow-2"></div>
            </div>
            <div class="round__shape">
                <img src="assets/imgs/shapes/cercle.png" alt="image not found">
            </div>
            <div class="container">
                <div class="row gy-5 align-items-center justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__menu mb-10">
                                <nav>
                                    <ul>
                                        <li><span><a href="index-2.html">Home</a></span></li>
                                        <li><span>Contact</span></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="breadcrumb__title-wraper">
                                <h2 class="breadcrumb__title">We’d: <span class="gradient-text-3">love to Contact </span>With
                                    Client.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="breadcrumb__description">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                hendrerit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area start  -->

        <!-- Contact area start -->
        <section class="contact__area section-space">
            <div class="container">
                <div class="row gy-50 align-items-center wow fadeIn" data-wow-delay=".3s">
                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                        <div class="contact__wrapper">
                            <div class="contact__form">
                                <form id="contact-form" action="https://html.bdevs.net/blufx-prev/assets/mail.php" method="POST">
                                    <div class="contact__input-wrapper">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="name">first name<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="name" id="name" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="lname">Last name<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="lastname" id="lname" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="email">business email<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="email" id="email" type="email" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="pnumber">phone number<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="phonenumber" id="pnumber" type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="cname">company name<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="companyname" id="cname" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-15 mb-20">
                                                    <div class="contact__input-title">
                                                        <label>Number of employees<span>*</span></label>
                                                    </div>
                                                    <div class="contact__select">
                                                        <select>
                                                            <option>Self-employed</option>
                                                            <option>1-10 employees</option>
                                                            <option>11-50 employees</option>
                                                            <option>51-200 employees</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-25">
                                                    <div class="contact__input-title">
                                                        <label for="cuname">Country (optional)<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input name="countryname" id="cuname" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact__btn">
                                        <button class="bd-gradient-btn w-100" type="submit">Send Message</button>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-5">
                        <div class="contact__content">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle-7 mb-20">contact us</span>
                                <h2 class="section__title mb-20">Get in Touch!</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.</p>
                            <div class="contact__info-wrapper">
                                <ul>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                       <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M24.7188 2.625H3.28125C1.47197 2.625 0 4.09697 0 5.90625V8.61301L12.0417 17.5698C12.6273 18.0054 13.3137 18.2232 14 18.2232C14.6863 18.2232 15.3727 18.0054 15.9583 17.5698L28 8.61301V5.90625C28 4.09697 26.528 2.625 24.7188 2.625ZM25.8125 7.51384L14.6528 15.8145C14.2623 16.105 13.7377 16.105 13.3472 15.8145L2.1875 7.51384V5.90625C2.1875 5.30316 2.67816 4.8125 3.28125 4.8125H24.7188C25.3218 4.8125 25.8125 5.30316 25.8125 5.90625V7.51384ZM25.8125 12.9664L28 11.3393V22.0938C28 23.903 26.528 25.375 24.7188 25.375H3.28125C1.47197 25.375 0 23.903 0 22.0938V11.3393L2.1875 12.9664V22.0938C2.1875 22.6968 2.67816 23.1875 3.28125 23.1875H24.7188C25.3218 23.1875 25.8125 22.6968 25.8125 22.0938V12.9664Z"
                                             fill="#089EFF" />
                                       </svg>
                                    </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <h6>E-mail address</h6>
                                                <span><a href="https://html.bdevs.net/cdn-cgi/l/email-protection#fb889a979ebb9d92958c92889ed5989496"><span class="__cf_email__" data-cfemail="7704161b1237111e19001e04125914181a">[email&#160;protected]</span></a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                       <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_1135_1181)">
                                             <path
                                                d="M17.8638 27.9998C17.7945 27.9998 17.7249 27.9996 17.6548 27.9989C15.4971 27.9798 13.2839 27.3373 11.0769 26.0892C9.34389 25.1092 7.60188 23.749 5.89936 22.0464C2.01986 18.167 0.0353827 14.2302 0.00109492 10.3456C-0.0206699 7.8838 0.259101 4.30223 2.92808 1.6332C3.97099 0.590289 5.27206 0.0104589 6.59157 0.000560785L6.62668 0.000396729H6.63581C8.23284 0.000396729 9.71575 0.874216 10.5068 2.28259L11.3986 3.87027L11.4138 3.90193C11.8672 4.84635 12.0891 5.57175 12.1334 6.25401C12.1968 7.22998 11.8817 8.07454 11.1969 8.7644L8.71872 11.3331C9.08709 12.352 10.0297 14.5489 11.8209 16.344C13.5941 18.1133 15.7319 19.0159 16.7445 19.371L19.2288 16.7927C19.9249 16.0979 20.7507 15.7663 21.6822 15.8068C22.3979 15.838 23.1524 16.0775 24.1284 16.5834L24.1609 16.6009L25.7179 17.4755C27.1289 18.2681 28.0034 19.7551 28.0001 21.3563L27.9998 21.3948C27.99 22.7102 27.4102 24.0113 26.3673 25.0542C25.2081 26.2133 23.7465 27.0388 22.0229 27.5077C20.8069 27.8385 19.4443 27.9998 17.8638 27.9998ZM6.63504 2.18782C6.63351 2.18782 6.63204 2.18782 6.63051 2.18782L6.60754 2.18792C5.8666 2.1935 5.10899 2.54579 4.47486 3.17992C2.3873 5.26748 2.17014 8.25829 2.1884 10.3263C2.2175 13.6172 3.98641 17.04 7.44603 20.4996C10.9416 23.9953 14.3829 25.7825 17.6741 25.8116C19.7347 25.8298 22.7172 25.6106 24.8205 23.5073C25.4547 22.8732 25.8069 22.1156 25.8125 21.3742L25.8126 21.3478C25.8143 20.5421 25.3675 19.7875 24.6466 19.3826L23.106 18.5172C21.587 17.7332 21.1506 17.9674 20.781 18.3339L17.4113 21.8316L16.7971 21.6777C16.6483 21.6404 13.1208 20.7318 10.275 17.8915L10.2735 17.89C7.43985 15.0508 6.45885 11.4811 6.41844 11.3305L6.25826 10.7331L9.64143 7.22648C9.96112 6.90613 10.2097 6.46061 9.4567 4.87954L8.59973 3.35382C8.19544 2.63432 7.44297 2.18782 6.63504 2.18782ZM24.1559 3.84451C21.677 1.36562 18.3812 0.000451414 14.8755 0.000451414V2.18787C20.9062 2.18787 25.8126 7.09425 25.8126 13.125H28C28 9.61924 26.6348 6.32335 24.1559 3.84451ZM14.8755 8.75007V10.9375C16.0816 10.9375 17.0629 11.9188 17.0629 13.1249H19.2503C19.2503 10.7126 17.2878 8.75007 14.8755 8.75007ZM14.8755 4.37523V6.56265C18.4939 6.56265 21.4377 9.50648 21.4377 13.1249H23.6252C23.6252 8.30034 19.7001 4.37523 14.8755 4.37523Z"
                                                fill="#FB5141" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_1135_1181">
                                                <rect width="28" height="28" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <h6>E-mail address</h6>
                                                <span><a href="tel:+13322078097">+13322078097</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                       <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_1135_1183)">
                                             <path
                                                d="M25.6066 4.39336C22.7735 1.56029 19.0066 0 15 0C10.9934 0 7.22654 1.56029 4.39336 4.39336C1.56029 7.22654 0 10.9934 0 15C0 19.0066 1.56029 22.7735 4.39336 25.6066C7.22654 28.4397 10.9934 30 15 30C19.0066 30 22.7735 28.4397 25.6066 25.6066C28.4397 22.7735 30 19.0066 30 15C30 10.9934 28.4397 7.22654 25.6066 4.39336ZM2.34375 15C2.34375 8.02131 8.02131 2.34375 15 2.34375C18.4802 2.34375 21.6366 3.75592 23.9268 6.03703L11.9114 11.9114L6.03703 23.9268C3.75592 21.6366 2.34375 18.4802 2.34375 15ZM14.7767 13.1194L18.8931 11.1069L16.8806 15.2233L14.7767 13.1194ZM15.2234 16.8807C14.0975 17.4312 12.5062 18.2091 11.1069 18.8932L13.1194 14.7767L15.2234 16.8807ZM15 27.6562C11.5198 27.6562 8.36338 26.2441 6.07307 23.9629L18.032 18.132L23.963 6.07318C26.2441 8.36344 27.6562 11.5198 27.6562 15C27.6562 21.9787 21.9787 27.6562 15 27.6562Z"
                                                fill="#674AD9" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_1135_1183">
                                                <rect width="30" height="30" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <h6>Bank Location</h6>
                                                <span><a target="_blank" href="https://www.google.com/maps">Ave,Oakland,
                                          California-94609, USA</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                       <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_1135_1185)">
                                             <path
                                                d="M26.3113 3.68874C23.9325 1.31002 20.7698 0 17.4059 0C14.0419 0 10.8792 1.31002 8.50046 3.68874C6.12175 6.06745 4.81172 9.2301 4.81172 12.5941C4.81172 15.5645 5.83372 18.3775 7.71031 20.6328L0 28.3431L1.65686 29.9999L9.36711 22.2897C11.6225 24.1663 14.4355 25.1883 17.4059 25.1883C20.7699 25.1883 23.9326 23.8783 26.3113 21.4995C28.6899 19.1208 30 15.9581 30 12.5941C30 9.23016 28.6899 6.06745 26.3113 3.68874ZM17.4059 22.8452C11.7534 22.8452 7.15482 18.2466 7.15482 12.5941C7.15482 6.94171 11.7534 2.3431 17.4059 2.3431C23.0583 2.3431 27.6569 6.94171 27.6569 12.5941C27.6569 18.2466 23.0583 22.8452 17.4059 22.8452ZM21.5649 8.37657H20.9205V8.0251C20.9205 6.08713 19.3438 4.51046 17.4059 4.51046C15.4679 4.51046 13.8912 6.08713 13.8912 8.0251V8.37657H13.2469C11.6319 8.37657 10.318 9.69046 10.318 11.3054V15.7573C10.318 17.3723 11.6319 18.6862 13.2469 18.6862H21.5649C23.1798 18.6862 24.4937 17.3723 24.4937 15.7573V11.3054C24.4937 9.69046 23.1798 8.37657 21.5649 8.37657ZM16.2343 8.0251C16.2343 7.37911 16.7599 6.85355 17.4059 6.85355C18.0519 6.85355 18.5774 7.37911 18.5774 8.0251V8.37657H16.2343V8.0251ZM22.1506 15.7573C22.1506 16.0803 21.8879 16.3431 21.5649 16.3431H13.2469C12.9239 16.3431 12.6611 16.0803 12.6611 15.7573V11.3054C12.6611 10.9824 12.9239 10.7197 13.2469 10.7197H16.2343V13.1172H18.5774V10.7197H21.5649C21.8879 10.7197 22.1506 10.9824 22.1506 11.3054V15.7573Z"
                                                fill="#E540A3" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_1135_1185">
                                                <rect width="30" height="30" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <h6>Find Job!</h6>
                                                <span><a href="https://html.bdevs.net/cdn-cgi/l/email-protection#1b687a777e5b7d72756c72687e35787476"><span class="__cf_email__" data-cfemail="5b383a293e3e291b3d32352c32283e75383436">[email&#160;protected]</span></a></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end -->

        <!-- FAQ area start -->
        <section class="faq__area section-space-bottom p-relative fix">
            <div class="container">
                <div class="row section__title-space justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="section__title-wrapper text-center">
                            <span class="section__subtitle-7 mb-20">READ FAQ</span>
                            <h2 class="section__title">General Questions.</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
                    <div class="col-xxl-8 col-xl-8 col-lg-10">
                        <div class="fap__style-2">
                            <div class="bd__faq">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span>Q.</span> What makes blufx different?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                                    hendt urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                                    ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
                                                    Vestibulum auctor ornare leo, non suscipit magna interdum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span>Q.</span> How does blufx make money?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                                    consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet
                                                    augue.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span>Q.</span> Why should I trust blufx?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                                    consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet
                                                    augue.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <span>Q.</span> How does blufx work?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                                    consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet
                                                    augue.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ area end -->

        <!-- Brand area start -->
        <div class="brand__area-6 theme-bg-1 section-rounded-60 section-space">
            <div class="container">
                <div class="swiper brnad__active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-01.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-02.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-03.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-04.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-05.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-06.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="assets/imgs/brand/brand-02.png" alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->

    </main>
    <!-- Body main wrapper end -->
<?php
include("footer.php");
?>