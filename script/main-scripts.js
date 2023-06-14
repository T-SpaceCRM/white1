$(document).ready(function() {

    $(".fan").fancybox();

    $('.fan').each(function() {
        $(this).attr('href', $(this).parents('.content_relArtices-items').children('.relArtices-items__imgBlock').children('img').attr('src'));
    });

    let imgHeadHeig = $('.main_picture').prop('naturalHeight');
    let imgHeadW = $('.main_picture').prop('naturalWidth');
    let mainContainerWidth = $('.main-container').width();
    let darkColor = $('.dark_color').css('background-color');


    function bgColor(){
        let bgColor = $('body').css('background-color');
        let speColor = $('.spec_title span').css('background-color');
        let contentColor = $('.main-container').css('background-color');

        if(tinycolor(bgColor).isLight()){
            $('.container').css({'background-color': darkColor, 'color':'#fff', 'box-shadow':'0px 0px 14px #b7b7b7'});
            $('.relArtices-items__content h4 a').css({'color':'#fff'});

            if(mainContainerWidth<=1100){
                $('.my_sidebar').hide();
                $('.my_content').css({'width':'100%'});
            }
        }else{
            $('.container').css({'background-color': '#fff'});
            if(mainContainerWidth<=1200){
                $('.my_sidebar').hide();
                $('.my_content').css({'width':'100%'});
            }

        }
        if(tinycolor(speColor).isLight()){
            $('.spec_title span').css({'color':'#222'});
        }else{
            $('.spec_title span').css({'color':'#fff'})
        }

        if(tinycolor(bgColor).isLight()){
            $('.content_tags-box span').css({'background':'rgba(255,255,255,.1)'});
        }else{
            $('.content_tags-box span').css({'background':'rgba(0,0,0,.1)'});
        }

    }


    bgColor();

    if(imgHeadHeig >= imgHeadW){
        $('.main_picture').css({'object-fit':'contain'});
    }

    if($(".spec_title_v1").css('display') == 'none'){
        $(".spec_title_v2").show();
    }
    if($(".auth_v1").css('display') == 'none'){
        $(".auth_v2").show();
    }
    if($(".shareon a").css('display') == 'none'){
        $(".shareon button").css({'display':'inline-block'});
    }

    if($('.topContentBlock').hasClass('flex-column')){
        $('.topContentBlock > div').css({'width':'100%'});
        $('.article_info_list').css({'display':'flex','column-gap':'25px', 'margin':'10px 0px', 'padding':'10px 0px'});
        $('.top_ver_first-images img').css({'height':'450px', 'margin-top':'20px'});
    }
    if($('.topContentBlock').hasClass('flex-column-reverse')){
        $('.topContentBlock > div').css({'width':'100%'});
        $('.top_ver_first-text h2').css({'margin-top':'20px'});
        $('.article_info_list').css({'display':'flex','column-gap':'25px'});
        $('.top_ver_first-images img').css({'height':'450px'});
        $('.article_info_list').css({'display':'flex','column-gap':'25px', 'margin':'5px 0px', 'padding':'10px 0px'});
    }

    if($('.newslatter_display').css('display')== 'none'){
       $('.side_contact_display').show();
    }
    if($('.top_category_display').css('display')== 'none'){
        $('.top_article_display').show();
    }
    // $('.my_sidebar').hide();
    if($('.my_sidebar').css('display') == 'none'){
        $('.content_tags').show();
        $('.content_popularBox').show();
        $('.content_relArtices').show();
        $('.content_topCategory').show();
    }
    if($('.my_sidebar').hasClass('flex-column')){
        $('.my_sidebar').css({'justify-content':'flex-start'});
    }else{
        $('.my_sidebar').css({'justify-content':'flex-end'});
    }


    if($('.top_article_display').css('display')=='none'){
        $('.content_relArtices').show();
    }
    if($('.top_category_display').css('display')=='none'){
        $('.content_topCategory').show();
    }

    if($('.relArtices-items__imgBlock img').css('display')=='none'){
        $('.relArtices-items__imgBlock i').show();
    }

    if($('.commentsMain_item img').css('border-radius')=='50%'){
        $('.commentsMain_item').css({'border-radius':'45px', 'padding':'25px'});
    }

    if($('.not_comments').css('display')=='none'){
        $('.more_comments').show();
    }

    $('.forms button').click(function(){
        if($('.textarea_comm').val() != '' && $('.comm_input').val() != ''){
            $('.forms').hide();
            $('.already_add_comm').fadeIn(200);
        }
        if($('.textarea_comm').val() == ''){
            $('.massAlert').fadeIn(200);
        }
        if($('.comm_input').val() == ''){
            $('.nameAlert').fadeIn(200);
        }
    });


    if($('.my_sidebar').css('display') == 'none' || $('.side_contact_display').css('display') == 'none'){
        $('footer').css({'display':'flex'});
    }


    let dayCount = $('#dateClass').attr('class');

    function clock() {
        var d = new Date();
        var day = d.getDate();
        var hrs = d.getHours();
        var min = d.getMinutes();
        var sec = d.getSeconds();

        var mnt = new Array("01", "02", "03", "04", "05",
        "06", "07", "08", "09", "10", "11", "12");

        if (day <= 9) day="0" + day;
        if (hrs <= 9) hrs="0" + hrs;
        if (min <=9 ) min="0" + min;
        if (sec <= 9) sec="0" + sec;

        $(".artDate").html(day + "-" + mnt[d.getMonth()] + "-" + d.getFullYear());

        $(".newsDate1").html(day-dayCount + "-" + mnt[d.getMonth()] + "-" + d.getFullYear());
        $(".newsDate2").html(day-1 + "-" + mnt[d.getMonth()] + "-" + d.getFullYear());
        $(".newsDate3").html(day-2 + "-" + mnt[d.getMonth()] + "-" + d.getFullYear());
        }

        clock();



});
