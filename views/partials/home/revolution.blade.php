@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)
<!-- start revolution slider 5.0 -->
<section class="rev_slider_wrapper">
    <div class="rev_slider materialize-slider">
        <ul>
            @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
            <!-- slide 1 start -->
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ $slider->present()->firstImage(100, 100, 'fit', 75) }}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ $slider->present()->firstImage(1280, 600, 'fit', 75) }}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>

                @if(!empty($slider->sub_title))
                <!-- LAYER NR. 1 -->
                <div class="tp-caption rev-heading text-extrabold white-text tp-resizeme"
                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-50','-50']"
                     data-fontsize="['60','60','50','55']"
                     data-lineheight="['70','70','60','60']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap;">{!! $slider->sub_title !!}
                </div>
                @endif

                @if(!empty($slider->sub_title))
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text"
                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','10']"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"

                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1200"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap;">{!! $slider->content !!}
                </div>
                @endif

                @if($slider->link_type != 'none')
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme rev-btn  rs-parallaxlevel-0"
                     data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-style_hover="cursor:default;"

                     data-transform_in="y:50px;opacity:0;s:900;e:Power4.easeInOut;"
                     data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1400"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style="z-index: 8; white-space: nowrap;">
                    <a target="{{ $slider->link->target }}" href="{{ $slider->link->url }}" class="btn btn-lg  waves-effect waves-light">{{ $slider->link->title }}</a>
                </div>
                @endif

            </li>
            <!-- slide 1 end -->
            @endforeach
        </ul>
    </div><!-- end revolution slider -->
</section>
@push('styles')
<!-- RS5.0 Main Stylesheet -->
{!! Theme::style('vendor/revolution/css/settings.css') !!}
<!-- RS5.0 Layers and Navigation Styles -->
{!! Theme::style('vendor/revolution/css/layers.css') !!}
{!! Theme::style('vendor/revolution/css/navigation.css') !!}
@endpush
@push('scripts')
<!-- RS5.0 Core JS Files -->
{!! Theme::script('vendor/revolution/js/jquery.themepunch.tools.min.js') !!}
{!! Theme::script('vendor/revolution/js/jquery.themepunch.revolution.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.video.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.actions.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.navigation.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.migration.min.js') !!}
{!! Theme::script('vendor/revolution/js/extensions/revolution.extension.parallax.min.js') !!}
@endpush
@push('js_inline')

<!-- RS5.0 Init  -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".materialize-slider").revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            delay:9000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels:[1240,1024,768,480],
            gridwidth:[1170,1024,768,480],
            gridheight:[600,500,400,400],
            disableProgressBar:"on",
            parallax: {
                type:"mouse",
                origo:"slidercenter",
                speed:2000,
                levels:[2,3,4,5,6,7,12,16,10,50],
            }
        });
    });
</script>
@endpush
<!-- end of slider wrapper -->

    @endif
@endif