@extends('layouts.main')
@section('content')
    @php
        $setting = DB::table('settings')->first();
    @endphp
    <div id=sliders-container class=fusion-slider-visibility>
    </div>
    <main id=main class="clearfix width-100">
        <div class=fusion-row style="max-width:100%;">
            <section id=content class=full-width>
                <div id=post-52 class="post-52 page type-page status-publish hentry">
                    <span class="entry-title rich-snippet-hidden">Home</span><span class="vcard rich-snippet-hidden"><span
                            class=fn><a href="author/admin/" title="Posts by admin" rel=author>admin</a></span></span><span
                        class="updated rich-snippet-hidden">2024-01-03T11:29:02+00:00</span>
                    <div class=post-content>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-right:0px;--awb-padding-left:0px;--awb-margin-top:-50px;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-flex-align-self-stretch"
                                    style="--awb-padding-right:0px;--awb-padding-left:0px;--awb-bg-image:url(&#039;{{ asset('front/1591856938458-1.jpg') }}&#039;);--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-evenly fusion-content-layout-column fusion-column-has-bg-image"
                                        data-bg-url="{{ asset('front/1591856938458-1.jpg') }}">
                                        <div class="fusion-separator fusion-full-width-sep"
                                            style="align-self: center;margin-left: auto;margin-right: auto;margin-top:300px;margin-bottom:300px;width:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-flex-container he-top-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-bottom:0px;--awb-margin-bottom:0px;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion-flex-column fusion-flex-align-self-flex-start he-top-header"
                                    style="--awb-padding-top:15px;--awb-padding-right:40px;--awb-padding-bottom:15px;--awb-padding-left:40px;--awb-padding-right-small:20px;--awb-padding-left-small:20px;--awb-bg-color:#1d1b24;--awb-bg-color-hover:#1d1b24;--awb-bg-size:cover;--awb-width-large:43.96%;--awb-margin-top-large:-280px;--awb-spacing-right-large:4.3676069153776%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:4.3676069153776%;--awb-width-medium:43.96%;--awb-order-medium:0;--awb-spacing-right-medium:4.3676069153776%;--awb-spacing-left-medium:4.3676069153776%;--awb-width-small:100%;--awb-order-small:1;--awb-margin-top-small:-300px;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-title title fusion-title-1 fusion-title-text fusion-title-size-one"
                                            style="--awb-text-color:#ffffff;">
                                            <div
                                                class="title-sep-container title-sep-container-left fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div><span
                                                class="awb-title-spacer fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility"></span>
                                            <h1 class="fusion-title-heading title-heading-left fusion-responsive-typography-calculated"
                                                style="margin:0;--fontSize:41;line-height:1.15;">BUSINESS CLASS
                                                AIRPORT TRANSFER AND CHAUFFEUR SERVICES</h1><span
                                                class=awb-title-spacer></span>
                                            <div class="title-sep-container title-sep-container-right">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="fusion-text fusion-text-1 fusion-no-medium-visibility fusion-no-large-visibility">
                                            <p><span style="color: #b6795a; font-size: 16px;">Call: <a
                                                        style="color: #b6795a;"
                                                        href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></span>
                                            </p>
                                        </div>
                                        <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                            style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-0 fusion-flex-column"
                                                style="--awb-bg-size:cover;--awb-width-large:40%;--awb-margin-top-large:0px;--awb-spacing-right-large:4.8%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:4.8%;--awb-width-medium:40%;--awb-order-medium:0;--awb-spacing-right-medium:4.8%;--awb-spacing-left-medium:4.8%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                                <div
                                                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                    <div><a class="fusion-button button-flat button-large button-default fusion-button-default button-1 fusion-button-span-yes fusion-button-default-type"
                                                            style="--button_text_transform:uppercase;--button_typography-font-family:&quot;Open Sans&quot;;--button_typography-font-style:normal;--button_typography-font-weight:600;"
                                                            target=_blank href="https://wa.me/{{ $setting->phone }}"><span
                                                                class=fusion-button-text>Get A Price</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-right-medium:0px;--awb-padding-left-medium:0px;--awb-padding-right-small:0px;--awb-padding-left-small:0px;--awb-margin-top:60px;--awb-margin-bottom:200px;--awb-margin-top-medium:0px;--awb-margin-top-small:0px;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion-flex-column fusion-flex-align-self-stretch"
                                    style="--awb-bg-size:cover;--awb-width-large:6%;--awb-margin-top-large:0px;--awb-spacing-right-large:32%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:32%;--awb-width-medium:6%;--awb-order-medium:0;--awb-spacing-right-medium:32%;--awb-spacing-left-medium:32%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-evenly fusion-content-layout-column">
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-5 fusion-flex-column fusion-flex-align-self-stretch"
                                    style="--awb-padding-right:120px;--awb-padding-right-medium:0px;--awb-padding-right-small:20px;--awb-padding-left-small:20px;--awb-bg-size:cover;--awb-width-large:44%;--awb-margin-top-large:0px;--awb-spacing-right-large:4.3636363636364%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:4.3636363636364%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-evenly fusion-content-layout-column">
                                        <div
                                            class="fusion-title title fusion-title-2 fusion-title-text fusion-title-size-four">
                                            <div
                                                class="title-sep-container title-sep-container-left fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div><span
                                                class="awb-title-spacer fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility"></span>
                                            <h4 class="fusion-title-heading title-heading-left fusion-responsive-typography-calculated"
                                                style="margin:0;--fontSize:36;line-height:1.36;"><span
                                                    class=section-title>EXCELLENT SERVICE AT
                                                    AFFORDABLE
                                                    PRICES</span></h4><span class=awb-title-spacer></span>
                                            <div class="title-sep-container title-sep-container-right">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fusion-text fusion-text-2">
                                            <p class=lead>We are a specialist airport transfer and chauffeur
                                                service company with the single aim to provide premium ground
                                                transportation services to business and leisure passengers.</p>
                                            <p>For those who require a more luxurious experience, we offer a
                                                chauffeur service like no other. Our chauffeurs are highly
                                                trained and offer a discreet and professional service. We have a
                                                range of luxury vehicles available to choose from.<br />
                                                Our success and growth have been built on delivering reliable,
                                                professional and trusted service levels to a growing list of
                                                regular, individual and corporate clients.</p>
                                            <p>Providing airport transfers to and from all airports including
                                                Heathrow, Gatwick, Luton, Stansted and London City &#8211; we
                                                are more than just a mini-cab service!</p>
                                        </div>
                                        <div><a class="fusion-button button-flat button-large button-custom fusion-button-default button-3 fusion-button-default-span fusion-button-default-type"
                                                style="--button_accent_color:#ffffff;--button_accent_hover_color:#b6795a;--button_border_hover_color:#ffffff;--button_gradient_top_color:#1d1b24;--button_gradient_bottom_color:#1d1b24;--button_gradient_top_color_hover:#1d1b24;--button_gradient_bottom_color_hover:#1d1b24;--button_text_transform:uppercase;--button_typography-font-family:&quot;Open Sans&quot;;--button_typography-font-style:normal;--button_typography-font-weight:600;"
                                                target=_blank href="https://wa.me/{{ $setting->phone }}"><span
                                                    class=fusion-button-text>GET
                                                    A PRICE</span></a></div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-6 fusion-flex-column fusion-flex-align-self-stretch fusion-no-small-visibility fusion-no-medium-visibility"
                                    style="--awb-bg-image:url(&#039;{{ asset('front/1556021728814-scaled.jpg') }}&#039;);--awb-bg-position:center center;--awb-bg-size:cover;--awb-width-large:30%;--awb-margin-top-large:0px;--awb-spacing-right-large:10px;--awb-margin-bottom-large:20px;--awb-spacing-left-large:0px;--awb-width-medium:30%;--awb-order-medium:0;--awb-spacing-right-medium:10px;--awb-spacing-left-medium:0px;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-evenly fusion-content-layout-column fusion-empty-column-bg-image fusion-column-has-bg-image"
                                        data-bg-url="{{ asset('front/1556021728814-scaled.jpg') }}">
                                        {{-- <img decoding=async class=fusion-empty-dims-img-placeholder
                    src="{{asset('front/1556021728814-scaled.jpg')}}"> --}}
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-7 fusion_builder_column_1_5 1_5 fusion-flex-column fusion-flex-align-self-stretch fusion-no-small-visibility fusion-no-medium-visibility"
                                    style="--awb-bg-image:url(&#039;{{ asset('front/1556021752785.jpg') }}&#039;);--awb-bg-position:center center;--awb-bg-size:cover;--awb-width-large:20%;--awb-margin-top-large:0px;--awb-spacing-right-large:0px;--awb-margin-bottom-large:20px;--awb-spacing-left-large:0px;--awb-width-medium:20%;--awb-order-medium:0;--awb-spacing-right-medium:0px;--awb-spacing-left-medium:0px;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-evenly fusion-content-layout-column fusion-empty-column-bg-image fusion-column-has-bg-image"
                                        data-bg-url="{{ asset('front/1556021752785.jpg') }}">
                                        {{-- <img decoding=async class=fusion-empty-dims-img-placeholder
                    src="{{asset('front/1556021752785.jpg')}}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-5 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-custom-z-index fusion-absolute-container fusion-absolute-position-small fusion-absolute-position-medium fusion-absolute-position-large"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-z-index:60;--awb-padding-top-medium:0px;--awb-padding-right-medium:0px;--awb-padding-bottom-medium:0px;--awb-padding-left-medium:0px;--awb-padding-top-small:0px;--awb-padding-bottom-small:500px;--awb-margin-top:-80px;--awb-margin-top-medium:-80px;--awb-margin-bottom-medium:0px;--awb-margin-top-small:-160px;--awb-margin-bottom-small:0px;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-8 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                    style="--awb-padding-right:50px;--awb-padding-bottom:50px;--awb-padding-left:15%;--awb-padding-left-medium:100px;--awb-padding-bottom-small:150px;--awb-padding-left-small:100px;--awb-bg-color:#1d1b24;--awb-bg-color-hover:#1d1b24;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:0;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:0;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:0;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-column">
                                        <div class="fusion-separator fusion-full-width-sep"
                                            style="align-self: center;margin-left: auto;margin-right: auto;margin-top:100px;margin-bottom:150px;width:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-6 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:140px;--awb-padding-right:20%;--awb-padding-bottom:150px;--awb-padding-left:20%;--awb-padding-top-small:160px;--awb-padding-right-small:30px;--awb-padding-bottom-small:170px;--awb-padding-left-small:30px;--awb-background-color:#f0eae7;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-9 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                    style="--awb-padding-top:60px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-padding-top-small:60px;--awb-padding-right-small:0px;--awb-padding-bottom-small:0px;--awb-padding-left-small:0px;--awb-bg-color:#1d1b24;--awb-bg-color-hover:#1d1b24;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:-220px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:3.84%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-margin-top-small:-320px;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-3 sm-text-align-center"
                                            style="--awb-font-size:20px;--awb-text-color:#ffffff;">
                                            <h4 class="section-title text-white"><span
                                                    style="color: #ffffff;">HERTFORDSHIRE&#8217;S LARGEST
                                                    EXECUTIVE CAR SERVICE COMPANY</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-10 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-no-small-visibility fusion-no-medium-visibility"
                                    style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-11 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch he-features "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:0;--awb-spacing-left-small:0;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:30px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-2 hover-type-none"><img
                                                    decoding=async width=121 height=129 title=1556021863561
                                                    src="{{ asset('front/1556021863561.png') }}" alt
                                                    class="img-responsive wp-image-290"
                                                    srcset="{{ asset('front/1556021863561.png') }}.pagespeed.ce.1qPCj22LH9.png 1.5x" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-4">
                                            <h6 class=brand-secondary>Online or app</h6>
                                            <div>Book travel, pay instantly, track your driver and make changes
                                                with ease using our website or app.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-12 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:30px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-3 hover-type-none"><img
                                                    decoding=async width=125 height=125 title=1556021911896
                                                    src="{{ asset('front/1556021911896.png') }}" alt
                                                    class="img-responsive wp-image-291"
                                                    srcset="{{ asset('front/1556021911896.png') }} 66w, {{ asset('front/1556021911896.png') }} 125w"
                                                    sizes="(max-width: 125px) 100vw, 125px" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-5">
                                            <h6 class=brand-secondary>Free 45-Minute Wait Time</h6>
                                            <div>Unexpected delays happen. We stay at Arrivals to begin your
                                                journey when you’re ready.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-13 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:41px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-4 hover-type-none"><img
                                                    decoding=async width=171 height=129 title=1556021951085
                                                    src="{{ asset('front/1556021951085.png') }}" alt
                                                    class="img-responsive wp-image-292" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-6">
                                            <h6 class=brand-secondary>Professional Chauffeurs</h6>
                                            <div>Smartly dressed and always reliable, our drivers are trained to
                                                deliver an exceptional service.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-14 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:41px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-5 hover-type-none"><img
                                                    decoding=async width=171 height=129 title=1556021994731
                                                    src="{{ asset('front/1556021994731.png') }}" alt
                                                    class="img-responsive wp-image-293" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-7">
                                            <h6 class=brand-secondary>Flight Monitoring</h6>
                                            <div>We monitor flight arrivals to make your journey with us
                                                seamless.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-15 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:41px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-6 hover-type-none"><img
                                                    decoding=async width=171 height=129 title=1556022034056
                                                    src="{{ asset('front/1556022034056.png') }}" alt
                                                    class="img-responsive wp-image-294" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-8">
                                            <h6 class=brand-secondary>Stay Connected</h6>
                                            <div>All company vehicles offer free on-board WiFi.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-16 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch "
                                    style="--awb-padding-top:32px;--awb-padding-right:32px;--awb-padding-bottom:32px;--awb-padding-left:32px;--awb-overflow:hidden;--awb-bg-color:#ffffff;--awb-bg-color-hover:#ffffff;--awb-bg-size:cover;--awb-border-radius:4px 4px 4px 4px;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                                    data-animationType=slideInUp data-animationDuration=1.0
                                    data-animationOffset=top-into-view>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="--awb-max-width:41px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-7 hover-type-none"><img
                                                    decoding=async width=171 height=129 title=1556022077667
                                                    src="{{ asset('front/1556022077667.png') }}" alt
                                                    class="img-responsive wp-image-295" /></span>
                                        </div>
                                        <div class="fusion-text fusion-text-9">
                                            <h6 class=brand-secondary>Executive Fleet</h6>
                                            <div>Our fleet of discreet Mercedes vehicles come with a
                                                complementary bottle of water and an umbrella for rainy days!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-7 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-margin-bottom:-150px;--awb-background-color:#1d1b24;--awb-flex-wrap:wrap; margin-bottom: 0px; !important">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-17 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-flex-align-self-center"
                                    style="--awb-padding-top-small:60px;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-10" style="--awb-text-color:#ffffff;">
                                            <h4 class=section-title><span style="color: #ffffff;">DOWNLOAD THE
                                                    APP</span></h4>
                                            <div class=mb48>
                                                <p class=mb48>This is the easiest, quickest way to book. Confirm
                                                    and pay for your journey in an instant, with the option of
                                                    storing various payment methods. When the time comes for you
                                                    to travel, you can track your driver as they proceed to the
                                                    pick-up. If there are any changes to dates and times
                                                    beforehand, you can do that on our app too.</p>
                                            </div>
                                        </div>
                                        <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                            style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-2 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
                                                style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                                <div
                                                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                    <div class="fusion-image-element "
                                                        style="text-align:center;--awb-max-width:173px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                        <span
                                                            class=" fusion-imageframe imageframe-none imageframe-8 hover-type-none"><a
                                                                class=fusion-no-lightbox
                                                                href="https://apps.apple.com/us/app/herts-exec/id1448864046?ls=1"
                                                                target=_blank aria-label=1557395896937
                                                                rel="noopener noreferrer"><img decoding=async width=268
                                                                    height=80 src="{{ asset('front/1557395896937.png') }}"
                                                                    alt class="img-responsive wp-image-311"
                                                                    srcset="{{ asset('front/1557395896937.png') }} 200w, {{ asset('front/1557395896937.png') }} 268w"
                                                                    sizes="(max-width: 850px) 100vw, 268px" /></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-3 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
                                                style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                                <div
                                                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                    <div class="fusion-image-element "
                                                        style="text-align:center;--awb-max-width:173px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                        <span
                                                            class=" fusion-imageframe imageframe-none imageframe-9 hover-type-none"><a
                                                                class=fusion-no-lightbox
                                                                href="https://play.google.com/store/apps/details?id=com.hertsexecutive.android.customerApp"
                                                                target=_blank aria-label=1557396046444
                                                                rel="noopener noreferrer"><img decoding=async width=268
                                                                    height=80 src="{{ asset('front/1557396046444.png') }}"
                                                                    alt class="img-responsive wp-image-312"
                                                                    srcset="{{ asset('front/1557396046444.png') }} 200w, {{ asset('front/1557396046444.png') }} 268w"
                                                                    sizes="(max-width: 850px) 100vw, 268px" /></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-18 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-flex-align-self-flex-end"
                                    style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:100px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:-100px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%; margin-bottom: 0px;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-column">
                                        <div class=fusion-menu-anchor id=download-the-app></div>
                                        <div class="fusion-image-element md-text-align-center sm-text-align-center"
                                            style="text-align:right;--awb-max-width:333px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span class="hover-type-none"><img decoding=async width=333 height=665
                                                    title=1573464101986 src="{{ asset('front/1573464101986.png') }}" alt
                                                    class="img-responsive wp-image-316"
                                                    srcset="{{ asset('front/1573464101986.png') }} 200w, {{ asset('front/1573464101986.png') }} 400w, {{ asset('front/1573464101986.png') }} 432w"
                                                    sizes="(max-width: 850px) 100vw, 432px" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-10 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:60px;--awb-padding-bottom:60px;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-center fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-21 fusion_builder_column_1_1 1_1 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-14" style="--awb-content-alignment:center;">
                                            <h4 class=section-title>VEHICLES IN OUR FLEET</h4>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($vehicle as $item)
                                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-22 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-flex-align-self-stretch"
                                        style="--awb-padding-bottom-small:100px;--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                        <div
                                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-between fusion-content-layout-column">
                                            <div class="fusion-image-element "
                                                style="text-align:center;--awb-max-width:296px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                <span
                                                    class=" fusion-imageframe imageframe-none imageframe-11 hover-type-none"><img
                                                        decoding=async width=400 height=175 title=eclass
                                                        src="{{ asset($item->image) }}" alt
                                                        class="img-responsive wp-image-73290"
                                                        srcset="{{ asset($item->image) }} 200w, {{ asset($item->image) }} 400w"
                                                        sizes="(max-width: 850px) 100vw, 400px" /></span>
                                            </div>
                                            <div class="fusion-text fusion-text-15"
                                                style="--awb-content-alignment:center;--awb-font-size:14px;">
                                                <p>{{ $item->model }}</p>
                                            </div>
                                            <div class="fusion-image-element "
                                                style="text-align:center;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                <span
                                                    class=" fusion-imageframe imageframe-none imageframe-12 hover-type-none"><img
                                                        decoding=async width=84 height=32 title=3by3
                                                        src="{{ asset($item->icon) }}" alt
                                                        class="img-responsive wp-image-425" /></span>
                                            </div>
                                            <div class="fusion-text fusion-text-16" style="--awb-margin-top:10px;">
                                                <div class=table-2>
                                                    <table width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td align=left>Hourly rate within M25</td>
                                                                <td align=left>£{{ $item->hourly_rate }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=left>4 hours (minimum hire)</td>
                                                                <td align=left>£{{ $item->minimum_rate }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=left>Day rate (8 hours)</td>
                                                                <td align=left>£{{ $item->daily_rate }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=left>Hourly rate outside M25</td>
                                                                <td align=left>£{{ $item->hourly_outside_rate }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div style="text-align:center;"><a
                                                    class="fusion-button button-flat button-large button-custom fusion-button-default button-4 fusion-button-span-yes fusion-button-default-type"
                                                    style="--button_accent_color:#ffffff;--button_accent_hover_color:#b6795a;--button_border_hover_color:#ffffff;--button_gradient_top_color:#1d1b24;--button_gradient_bottom_color:#1d1b24;--button_gradient_top_color_hover:#1d1b24;--button_gradient_bottom_color_hover:#1d1b24;--button_text_transform:uppercase;--button_margin-top:20PX;"
                                                    target=_blank href="https://wa.me/{{ $setting->phone }}"><span
                                                        class=fusion-button-text>GET
                                                        A PRICE</span></a></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-11 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:70px;--awb-padding-bottom:70px;--awb-background-color:#f0eae7;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-center fusion-flex-justify-content-center fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-28 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-27">
                                            <h4 class=section-title>COVERAGE</h4>
                                            <div class=mb48>
                                                <p class=mb48>Our executive fleet operates across the South East
                                                    of England. We regularly transport our clients to and from
                                                    destinations within the Home Counties including
                                                    Hertfordshire, Essex, Surrey, Hampshire, Sussex,
                                                    Buckinghamshire and Berkshire. We provide extensive coverage
                                                    within London as well as Bedfordshire, Oxfordshire and
                                                    Cambridgeshire.</p>
                                                <p>We provide airport transfers for business and leisure
                                                    passengers to Gatwick Airport, Heathrow Airport, Luton
                                                    Airport, Stansted Airport, London City Airport. We also
                                                    support transport to the major seaports including
                                                    Southampton, Portsmouth, and Dover.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-29 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element "
                                            style="text-align:center;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class=" fusion-imageframe imageframe-none imageframe-23 hover-type-none"><img
                                                    decoding=async width=380 height=780 title=1556096405803
                                                    src="{{ asset('front/1556096405803.png') }}" alt
                                                    class="img-responsive wp-image-439"
                                                    srcset="{{ asset('front/1556096405803-200x411.png') }} 200w, {{ asset('front/1556096405803.png') }} 380w"
                                                    sizes="(max-width: 850px) 100vw, 380px" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-12 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-no-small-visibility"
                            style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:100px;--awb-padding-bottom:100px;--awb-background-color:#ffffff;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-30 fusion_builder_column_1_1 1_1 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-title title fusion-title-3 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
                                            style="--awb-font-size:36px;">
                                            <h2 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:36;line-height:1.2;">
                                                CHAUFFEUR DRIVEN BUSINESS TRAVEL SERVICES</h2>
                                        </div>
                                        <div class="fusion-title title fusion-title-4 fusion-title-center fusion-title-text fusion-title-size-three"
                                            style="--awb-font-size:20px;">
                                            <div class="title-sep-container title-sep-container-left">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div><span class=awb-title-spacer></span>
                                            <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:20;line-height:2.4;">
                                                <h4>BUSINESS CLASS TRAVEL SERVICES FOR AIRPORT TRANSFERS,
                                                    BUSINESS MEETINGS, CONFERENCES, PERSONAL TRAVEL &amp;
                                                    SPORTING EVENTS</h4>
                                            </h3><span class=awb-title-spacer></span>
                                            <div class="title-sep-container title-sep-container-right">
                                                <div class="title-sep sep-double sep-solid" style="border-color:#e2e2e2;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-31 fusion_builder_column_1_4 1_4 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:0px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <i class="fb-icon-element fontawesome-icon fa-user-friends fas circle-yes"
                                            style="--awb-circlecolor:#b6795a;--awb-circlebordercolor:#b6795a;--awb-circlebordersize:1px;--awb-font-size:28.16px;--awb-width:56.32px;--awb-height:56.32px;--awb-line-height:54.32px;--awb-margin-top:0;--awb-margin-right:0;--awb-margin-bottom:0;--awb-margin-left:0;--awb-align-self:center;"></i>
                                        <div class="fusion-title title fusion-title-5 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                            style="--awb-font-size:25px;">
                                            <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:25;line-height:1;">
                                                <p>GUEST<br />
                                                    BOOKING</p>
                                            </h3>
                                        </div>
                                        <div class="fusion-text fusion-text-28" style="--awb-content-alignment:center;">
                                            <p>If you are making a reservation on behalf of another individual,
                                                we offer the option to register you as the designated booker. By
                                                doing so, you will receive comprehensive information pertaining
                                                to their upcoming trip.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-32 fusion_builder_column_1_4 1_4 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:0px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <i class="fb-icon-element-2 fb-icon-element fontawesome-icon fa-user-tie fas circle-yes"
                                            style="--awb-circlecolor:#b6795a;--awb-circlebordercolor:#b6795a;--awb-circlebordersize:1px;--awb-font-size:28.16px;--awb-width:56.32px;--awb-height:56.32px;--awb-line-height:54.32px;--awb-margin-top:0;--awb-margin-right:0;--awb-margin-bottom:0;--awb-margin-left:0;--awb-align-self:center;"></i>
                                        <div class="fusion-title title fusion-title-6 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                            style="--awb-font-size:25px;">
                                            <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:25;line-height:1;">
                                                <p>ACCOUNT<br />
                                                    MANAGER</p>
                                            </h3>
                                        </div>
                                        <div class="fusion-text fusion-text-29" style="--awb-content-alignment:center;">
                                            <p>Ride-hailing applications provide convenience; however, they lack
                                                direct communication options. With our services, you will have
                                                the privilege of communicating with a dedicated account manager
                                                through email or phone at any given time.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-33 fusion_builder_column_1_4 1_4 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:0px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <i class="fb-icon-element-3 fb-icon-element fontawesome-icon fa-money-bill-alt fas circle-yes"
                                            style="--awb-circlecolor:#b6795a;--awb-circlebordercolor:#b6795a;--awb-circlebordersize:1px;--awb-font-size:28.16px;--awb-width:56.32px;--awb-height:56.32px;--awb-line-height:54.32px;--awb-margin-top:0;--awb-margin-right:0;--awb-margin-bottom:0;--awb-margin-left:0;--awb-align-self:center;"></i>
                                        <div class="fusion-title title fusion-title-7 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                            style="--awb-font-size:25px;">
                                            <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:25;line-height:1;">
                                                <p>SIMPLE<br />
                                                    BILLING</p>
                                            </h3>
                                        </div>
                                        <div class="fusion-text fusion-text-30" style="--awb-content-alignment:center;">
                                            <p>Corporate card or account based billing: Liberate your employees
                                                from the burden of monthly expense reports. With our service, a
                                                secure monthly invoice, linked to your credit card, can be
                                                effortlessly generated and tailored to accommodate individual
                                                employees or entire departments.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-34 fusion_builder_column_1_4 1_4 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:0px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <i class="fb-icon-element-4 fb-icon-element fontawesome-icon fa-user-edit fas circle-yes"
                                            style="--awb-circlecolor:#b6795a;--awb-circlebordercolor:#b6795a;--awb-circlebordersize:1px;--awb-font-size:28.16px;--awb-width:56.32px;--awb-height:56.32px;--awb-line-height:54.32px;--awb-margin-top:0;--awb-margin-right:0;--awb-margin-bottom:0;--awb-margin-left:0;--awb-align-self:center;"></i>
                                        <div class="fusion-title title fusion-title-8 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                            style="--awb-font-size:25px;">
                                            <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                style="margin:0;font-size:1em;--fontSize:25;line-height:1;">
                                                <p>BOOKING<br />
                                                    PORTAL</p>
                                            </h3>
                                        </div>
                                        <div class="fusion-text fusion-text-31" style="--awb-content-alignment:center;">
                                            <p>Take control of your travel amendments at your convenience.
                                                Whether it’s updating flight details or handling cancellations,
                                                you have the flexibility to make changes according to your
                                                schedule. Access can be given to you or your PA.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fusion-fullwidth fullwidth-box fusion-builder-row-13 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                            style="--link_hover_color: #b6795a;--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:60px;--awb-background-color:#f0eae7;--awb-flex-wrap:wrap;">
                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-35 fusion_builder_column_1_1 1_1 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-32" style="--awb-content-alignment:center;">
                                            <h4 class=section-title>LATEST NEWS</h4>
                                        </div>
                                        <div
                                            class="fusion-blog-shortcode fusion-blog-shortcode-1 fusion-blog-archive fusion-blog-layout-grid-wrapper fusion-blog-no fusion-blog-layout-center">
                                            <style>
                                                .fusion-blog-shortcode-1 .fusion-blog-layout-grid .fusion-post-grid {
                                                    padding: 20px;
                                                }

                                                .fusion-blog-shortcode-1 .fusion-posts-container {
                                                    margin-left: -20px !important;
                                                    margin-right: -20px !important;
                                                }
                                            </style>
                                            <div class="fusion-posts-container fusion-posts-container-no fusion-blog-rollover fusion-blog-layout-grid fusion-blog-layout-grid-3 isotope fusion-blog-equal-heights"
                                                data-pages=6 data-grid-col-space=40
                                                style="margin: -20px -20px 0;min-height:500px;">
                                                <article id=blog-1-post-128832
                                                    class="fusion-post-grid post-128832 post type-post status-publish format-standard has-post-thumbnail hentry category-latest-news">
                                                    <div class=fusion-post-wrapper
                                                        style="background-color:rgba(255,255,255,0);border:1px solid #f2f3f5;border-bottom-width:3px;">
                                                        <div class="fusion-flexslider flexslider fusion-flexslider-loading fusion-post-slideshow"
                                                            style="border-color:#f2f3f5;">
                                                            <ul class=slides>
                                                                <li>
                                                                    <div class=fusion-image-wrapper aria-haspopup=true>
                                                                        <img decoding=async width=800 height=533
                                                                            src="{{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="{{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }} 200w, {{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }} 400w, {{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }} 600w, {{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }} 800w"
                                                                            sizes="(min-width: 2200px) 100vw, (min-width: 784px) 373px, (min-width: 712px) 560px, (min-width: 640px) 712px, " />
                                                                        <div class=fusion-rollover>
                                                                            <div class=fusion-rollover-content>
                                                                                <a class=fusion-rollover-link
                                                                                    href="2024/01/10/what-is-the-cost-of-hiring-a-chauffeur-in-the-uk/">What
                                                                                    is the Cost of Hiring a
                                                                                    Chauffeur in the UK?</a>
                                                                                <div class=fusion-rollover-sep>
                                                                                </div>
                                                                                <a class=fusion-rollover-gallery
                                                                                    href="{{ asset('front/What-is-the-Cost-of-Hiring-a-Chauffeur-in-the-UK.jpg') }}"
                                                                                    data-id=128832
                                                                                    data-rel="iLightbox[gallery]"
                                                                                    data-title="What is the Cost of Hiring a Chauffeur in the UK"
                                                                                    data-caption="">
                                                                                    Gallery </a>
                                                                                <h4 class=fusion-rollover-title
                                                                                    style="font-size: 23px;">
                                                                                    <a class=fusion-rollover-title-link
                                                                                        href="2024/01/10/what-is-the-cost-of-hiring-a-chauffeur-in-the-uk/">
                                                                                        What is the Cost of
                                                                                        Hiring a Chauffeur in
                                                                                        the UK? </a>
                                                                                </h4>
                                                                                <div class=fusion-rollover-categories>
                                                                                    <a href="category/latest-news/"
                                                                                        rel=tag>Latest News</a>
                                                                                </div>
                                                                                <a class=fusion-link-wrapper
                                                                                    href="2024/01/10/what-is-the-cost-of-hiring-a-chauffeur-in-the-uk/"
                                                                                    aria-label="What is the Cost of Hiring a Chauffeur in the UK?"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=fusion-post-content-wrapper
                                                            style="padding:30px 25px 25px 25px;">
                                                            <div class="fusion-post-content post-content">
                                                                <h2 class="blog-shortcode-post-title entry-title">
                                                                    <a
                                                                        href="2024/01/10/what-is-the-cost-of-hiring-a-chauffeur-in-the-uk/">What
                                                                        is the Cost of Hiring a Chauffeur in the
                                                                        UK?</a>
                                                                </h2>
                                                                <p class=fusion-single-line-meta><span class=vcard
                                                                        style="display: none;"><span class=fn><a
                                                                                href="author/admin/"
                                                                                title="Posts by admin"
                                                                                rel=author>admin</a></span></span><span
                                                                        class=updated
                                                                        style="display:none;">2024-01-10T12:45:34+00:00</span><span>10
                                                                        January 2024</span><span
                                                                        class=fusion-inline-sep>|</span></p>
                                                            </div>
                                                        </div>
                                                        <div class=fusion-clearfix></div>
                                                    </div>
                                                </article>
                                                <article id=blog-1-post-128829
                                                    class="fusion-post-grid post-128829 post type-post status-publish format-standard has-post-thumbnail hentry category-latest-news">
                                                    <div class=fusion-post-wrapper
                                                        style="background-color:rgba(255,255,255,0);border:1px solid #f2f3f5;border-bottom-width:3px;">
                                                        <div class="fusion-flexslider flexslider fusion-flexslider-loading fusion-post-slideshow"
                                                            style="border-color:#f2f3f5;">
                                                            <ul class=slides>
                                                                <li>
                                                                    <div class=fusion-image-wrapper aria-haspopup=true>
                                                                        <img decoding=async width=800 height=533
                                                                            src="{{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="{{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }} 200w, {{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }} 400w, {{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }} 600w, {{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }} 800w"
                                                                            sizes="(min-width: 2200px) 100vw, (min-width: 784px) 373px, (min-width: 712px) 560px, (min-width: 640px) 712px, " />
                                                                        <div class=fusion-rollover>
                                                                            <div class=fusion-rollover-content>
                                                                                <a class=fusion-rollover-link
                                                                                    href="2024/01/10/chauffeur-vs-driver-which-to-choose/">Chauffeur
                                                                                    vs. Driver: Which to
                                                                                    choose?</a>
                                                                                <div class=fusion-rollover-sep>
                                                                                </div>
                                                                                <a class=fusion-rollover-gallery
                                                                                    href="{{ asset('front/Chauffeur-vs.-Driver-Which-to-choose.jpg') }}"
                                                                                    data-id=128829
                                                                                    data-rel="iLightbox[gallery]"
                                                                                    data-title="Chauffeur vs. Driver Which to choose"
                                                                                    data-caption="">
                                                                                    Gallery </a>
                                                                                <h4 class=fusion-rollover-title>
                                                                                    <a class=fusion-rollover-title-link
                                                                                        href="2024/01/10/chauffeur-vs-driver-which-to-choose/"
                                                                                        style="font-size: 23px;">
                                                                                        Chauffeur vs. Driver:
                                                                                        Which to choose? </a>
                                                                                </h4>
                                                                                <div class=fusion-rollover-categories>
                                                                                    <a href="category/latest-news/"
                                                                                        rel=tag>Latest News</a>
                                                                                </div>
                                                                                <a class=fusion-link-wrapper
                                                                                    href="2024/01/10/chauffeur-vs-driver-which-to-choose/"
                                                                                    aria-label="Chauffeur vs. Driver: Which to choose?"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=fusion-post-content-wrapper
                                                            style="padding:30px 25px 25px 25px;">
                                                            <div class="fusion-post-content post-content">
                                                                <h2 class="blog-shortcode-post-title entry-title">
                                                                    <a
                                                                        href="2024/01/10/chauffeur-vs-driver-which-to-choose/">Chauffeur
                                                                        vs. Driver: Which to choose?</a>
                                                                </h2>
                                                                <p class=fusion-single-line-meta><span class=vcard
                                                                        style="display: none;"><span class=fn><a
                                                                                href="author/admin/"
                                                                                title="Posts by admin"
                                                                                rel=author>admin</a></span></span><span
                                                                        class=updated
                                                                        style="display:none;">2024-01-10T12:38:12+00:00</span><span>10
                                                                        January 2024</span><span
                                                                        class=fusion-inline-sep>|</span></p>
                                                            </div>
                                                        </div>
                                                        <div class=fusion-clearfix></div>
                                                    </div>
                                                </article>
                                                <article id=blog-1-post-128826
                                                    class="fusion-post-grid post-128826 post type-post status-publish format-standard has-post-thumbnail hentry category-latest-news">
                                                    <div class=fusion-post-wrapper
                                                        style="background-color:rgba(255,255,255,0);border:1px solid #f2f3f5;border-bottom-width:3px;">
                                                        <div class="fusion-flexslider flexslider fusion-flexslider-loading fusion-post-slideshow"
                                                            style="border-color:#f2f3f5;">
                                                            <ul class=slides>
                                                                <li>
                                                                    <div class=fusion-image-wrapper aria-haspopup=true>
                                                                        <img decoding=async width=800
                                                                            src="{{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }}"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="{{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }} 200w, {{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }} 400w, {{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }} 600w, {{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }} 800w"
                                                                            sizes="(min-width: 2200px) 100vw, (min-width: 784px) 373px, (min-width: 712px) 560px, (min-width: 640px) 712px, " />
                                                                        <div class=fusion-rollover>
                                                                            <div class=fusion-rollover-content>
                                                                                <a class=fusion-rollover-link
                                                                                    href="2024/01/10/do-chauffeurs-require-licences-in-the-uk/">Do
                                                                                    Chauffeurs Require Licences
                                                                                    in the UK?</a>
                                                                                <div class=fusion-rollover-sep>
                                                                                </div>
                                                                                <a class=fusion-rollover-gallery
                                                                                    href="{{ asset('front/Do-Chauffeurs-Require-Licences-in-the-UK.jpg') }}"
                                                                                    data-id=128826
                                                                                    data-rel="iLightbox[gallery]"
                                                                                    data-title="Do Chauffeurs Require Licences in the UK"
                                                                                    data-caption="">
                                                                                    Gallery </a>
                                                                                <h4 class=fusion-rollover-title
                                                                                    style="font-size: 23px;">
                                                                                    <a class=fusion-rollover-title-link
                                                                                        href="2024/01/10/do-chauffeurs-require-licences-in-the-uk/">
                                                                                        Do Chauffeurs Require
                                                                                        Licences in the UK? </a>
                                                                                </h4>
                                                                                <div class=fusion-rollover-categories>
                                                                                    <a href="category/latest-news/"
                                                                                        rel=tag>Latest News</a>
                                                                                </div>
                                                                                <a class=fusion-link-wrapper
                                                                                    href="2024/01/10/do-chauffeurs-require-licences-in-the-uk/"
                                                                                    aria-label="Do Chauffeurs Require Licences in the UK?"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=fusion-post-content-wrapper
                                                            style="padding:30px 25px 25px 25px;">
                                                            <div class="fusion-post-content post-content">
                                                                <h2 class="blog-shortcode-post-title entry-title">
                                                                    <a
                                                                        href="2024/01/10/do-chauffeurs-require-licences-in-the-uk/">Do
                                                                        Chauffeurs Require Licences in the
                                                                        UK?</a>
                                                                </h2>
                                                                <p class=fusion-single-line-meta><span class=vcard
                                                                        style="display: none;"><span class=fn><a
                                                                                href="author/admin/"
                                                                                title="Posts by admin"
                                                                                rel=author>admin</a></span></span><span
                                                                        class=updated
                                                                        style="display:none;">2024-01-10T12:27:46+00:00</span><span>10
                                                                        January 2024</span><span
                                                                        class=fusion-inline-sep>|</span></p>
                                                            </div>
                                                        </div>
                                                        <div class=fusion-clearfix></div>
                                                    </div>
                                                </article>
                                                <div class=fusion-clearfix></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
