<template>
<div>
    <div class="hidden-xs" id="top-bar">
        <div class="container">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <ul class="top-bar-info">
                    <div class="block">
                        <div class="animation">
                            <div class="first">
                                <li v-bind:style="dynamicColorR">ABC.A 22.500,00</li>
                            </div>
                            <div>
                                <li>BNC 332,50</li>
                            </div>
                            <div>
                                <li>BOU 7,00</li>
                            </div>
                            <div>
                                <li>BPV 88.500</li>
                            </div>
                            <div>
                            <li>BVCC 7.230,00</li>
                            </div>
                            <div>
                            <li v-bind:style="dynamicColorG">BVL 900,00</li>
                            </div>
                            <div>
                                <li>CCR 105.000,00</li>
                            </div>
                            <div>
                                <li>CGQ 12.500,00</li>
                            </div>
                            <div>
                                <li>CIE 515,00</li>
                            </div>
                            <div>
                                <li>CRM.A 22.750,00</li>
                            </div>
                            <div>
                                <li>DOM 13.300,00</li>
                            </div>
                            <div>
                                <li v-bind:style="dynamicColorR">EFE 1.350,00</li>
                            </div>

                            <div>
                                <li>ENV 7.000,00</li>
                            </div>
                            <div>
                                <li>FNC 10.259,50</li>
                            </div>
                            <div>
                                <li>FBV 0,25</li>
                            </div>
                            <!-- cut -->
                        </div>
                    </div>
                </ul>
            </div>
        </div>

    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            dynamicColorR: {
                color: 'red'
            },
            dynamicColorG: {
                color: '#16bb05'
            }
        }
    },
    mounted() {
    }
}

/* Carousel effect */

$(window).on('load', function () {
            // Please run it with window.onload, not with document.ready
            initSmoothScrolling('.block', 'smoothscroll');
        });

        function initSmoothScrolling(container, animation) {
            /*
             * @param {String} container Class or ID of the animation container
             * @param {String} animation Name of the animation, e.g. smoothscroll
             */
            var sliderWidth = 0;
            var animationWidth = 0;
            var sliderHeight = $('>div>div:first-of-type', container).outerHeight(false);

            $('>div>div', container).each(function () {
                animationWidth += $(this).outerWidth(false);
            });

            // detect number of visible slides
            var slidesVisible = $(container).width() / $('>div>div:first-of-type', container).outerWidth(false);
            slidesVisible = Math.ceil(slidesVisible);

            // count slides to determine animation speed
            var slidesNumber = $('>div>div', container).length;
            var speed = slidesNumber * 4;

            // append the tail		            
            $('>div>div', container).slice(0, slidesVisible).clone().appendTo($('>div', container));
            $('>div>div', container).slice(0, slidesVisible).clone().appendTo($('>div', container));

            // Detect the slider width with appended tail
            $('>div>div', container).each(function () {
                sliderWidth += $(this).outerWidth(false);
            });

            // set slider dimensions
            $('>div', container).css({
                'width': sliderWidth,
                'height': sliderHeight
            });

            // Insert styles to html
            $("<style type='text/css'>@keyframes " + animation + " { 0% { margin-left: 0px; } 100% { margin-left: -" + animationWidth + "px; } } " + $('>div>div:first-of-type', container).selector + " { -webkit-animation: " + animation + " " + speed + "s linear infinite; -moz-animation: " + animation + " " + speed + "s linear infinite; -ms-animation: " + animation + " " + speed + "s linear infinite; -o-animation: " + animation + " " + speed + "s linear infinite; animation: " + animation + " " + speed + "s linear infinite; }</style>").appendTo("head");

            // restart the animation (e.g. for safari & ie)		            
            var cl = $(container).attr("class");
            $(container).removeClass(cl).animate({
                'nothing': null
            }, 1, function () {
                $(this).addClass(cl);
            });
        }
</script>


<style>
/* idk what is this, do not change */
.animation {
  width: auto;
  height: 100px;
  font-size: 0px;
}
.animation div {
  display: inline-block;
  width: auto;
  float: none;
  padding: 0 10px;
}
</style>
