$.fn.extend({
    animateCss: function (animationName, callback) {
        var animationEnd = (function (el) {
            var animations = {
                animation: 'animationend',
                OAnimation: 'oAnimationEnd',
                MozAnimation: 'mozAnimationEnd',
                WebkitAnimation: 'webkitAnimationEnd'
            };

            for (var t in animations) {
                if (el.style[t] !== undefined) {
                    return animations[t];
                }
            }
        })(document.createElement('div'));

        this.addClass('animated ' + animationName).one(animationEnd, function () {
            $(this).removeClass('animated ' + animationName);

            if (typeof callback === 'function') callback();
        });

        return this;
    }
});
$(document).ready(function () {
    inView.offset(10);
    inView('#overlaid-text1')
        .once('enter', function () {
            $('#overlaid-text1').animateCss('slideInUp', function () {
            });
        });
    inView('#overlaid-text2')
        .once('enter', function () {
            $('#overlaid-text2').animateCss('slideInUp', function () {
            });
        });
    inView('#overlaid-text3')
        .once('enter', function () {
            $('#overlaid-text3').animateCss('slideInUp', function () {
            });
        });

    inView('#service1')
        .once('enter', function () {
            $('#service1').animateCss('slideInRight')
        });
    inView('#service2')
        .once('enter', function () {
            $('#service2').animateCss('slideInRight')
        });
    inView('#service3')
        .once('enter', function () {
            $('#service3').animateCss('slideInRight')
        });
    inView('#service4')
        .once('enter', function () {
            $('#service4').animateCss('slideInRight')
        });
    inView('#service5')
        .once('enter', function () {
            $('#service5').animateCss('slideInRight')
        });
    inView('#service6')
        .once('enter', function () {
            $('#service6').animateCss('slideInRight')
        });
    inView('#service7')
        .once('enter', function () {
            $('#service7').animateCss('slideInRight')
        });
    inView('#service8')
        .once('enter', function () {
            $('#service8').animateCss('slideInRight')
        });
});
