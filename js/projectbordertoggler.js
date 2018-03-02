$(function () {
    const collaboIds = ['#collaboration1', "#collaboration2", "#collaboration3"];

    inView.offset(200);
    inView(collaboIds[0])
    // .once('enter', function () {
    //     // $(collaboIds[0]).animateCss('slideInRight')
    // })
        .on('enter', function () {
            $('.project-sidebar').find('.border-orange').removeClass('border-orange');
            const target = $(collaboIds[0]).data('target');
            $(target).find('img').addClass('border-orange');
        });
    inView(collaboIds[1])
    // .once('enter', function () {
    //     $(collaboIds[1]).animateCss('slideInUp')
    // })
        .on('enter', function () {
            $('.project-sidebar').find('.border-orange').removeClass('border-orange');
            const target = $(collaboIds[1]).data('target');
            $(target).find('img').addClass('border-orange');
        });
    inView(collaboIds[2])
    // .once('enter', function () {
    //     $(collaboIds[2]).animateCss('slideInRight')
    // })
        .on('enter', function () {
            $('.project-sidebar').find('.border-orange').removeClass('border-orange');
            const target = $(collaboIds[2]).data('target');
            $(target).find('img').addClass('border-orange');
        });
});