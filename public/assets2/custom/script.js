$('.page-scroll').on('click',function(e){
    var tujuan = $(this).attr('href');
    var elementtujuan = $(tujuan);

    $('body').animate({
        scrollTop: elementtujuan.offset().top
    });
    e.preventDefault();
});