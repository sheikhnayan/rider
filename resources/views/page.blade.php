@extends('layouts.main')
@section('content')
    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling"
        style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:25px;--awb-padding-right:30px;--awb-padding-left:75px;--awb-padding-right-small:0px;--awb-padding-left-small:0px;--awb-background-color:#1d1b24;--awb-flex-wrap:wrap;">
        <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
            style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_2 1_2 fusion-flex-column"
                style="--awb-padding-top:85px;--awb-padding-right:80px;--awb-padding-bottom:150px;--awb-padding-right-small:25px;--awb-padding-bottom-small:0px;--awb-padding-left-small:25px;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:100px;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:100px;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                <div
                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                    <div class="fusion-text fusion-text-1" style="--awb-content-alignment:left;">
                        <h4 class="section-title text-white fusion-responsive-typography-calculated"
                            style="--fontSize: 36; line-height: 1.36;" data-fontsize="36" data-lineheight="48.9667px"><span
                                style="color: #ffffff;">{{ $data->title }}</span></h4>
                    </div>
                </div>
            </div>
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-flex-align-self-flex-end"
                style="--awb-padding-right-small:0px;--awb-padding-left-small:0px;--awb-bg-image:url('{{ asset($data->image) }}');--awb-bg-position:center top;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:-70px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-margin-bottom-small:0;--awb-spacing-left-small:1.92%;">
                <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column fusion-empty-column-bg-image fusion-column-has-bg-image"
                    data-bg-url="{{ asset($data->image) }}"><img decoding="async"
                        class="fusion-empty-dims-img-placeholder"
                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%272396%27%20height%3D%271676%27%20viewBox%3D%270%200%202396%201676%27%3E%3Crect%20width%3D%272396%27%20height%3D%271676%27%20fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
                        id="pagespeed_img_9ZC1IK1bTu2"></div>
            </div>
        </div>
    </div>
    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
        style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
        <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
            style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_1 1_1 fusion-flex-column"
                style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                <div
                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                    <div class="fusion-menu-anchor" id="our-story"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container hundred-percent-fullwidth non-hundred-percent-height-scrolling"
        style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:150px;--awb-padding-right:75px;--awb-padding-bottom:50px;--awb-padding-left:75px;--awb-padding-top-small:90px;--awb-padding-right-small:25px;--awb-padding-left-small:25px;--awb-flex-wrap:wrap;">
        <div class="fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
            style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            {!! $data->content !!}

        </div>
    </div>
@endsection
