$.fn.writeText = function(content) {
    var contentArray = content.split(""),
        current = 0,
        elem = this;
    setInterval(function() {
        if(current < contentArray.length) {
            elem.text(elem.text() + contentArray[current++]);
        }
    }, 100);
};

function panelReset(){
    //all panel reset
    $(".panel-group").css({"opacity":0});
    $(".panel-group").css({"left": "100%"});

    //home reset
    $("#panel-group-1 .panel").css({"left":"100%"});

    //about me reset
    $("#panel-group-2 .sq-panel").removeClass("flip");
}

function homePanel(){
    panelReset();
    $("#panel-group-1").css({"opacity":1});
    $("#panel-group-1").css({"left":0});
    $.each($('#panel-group-1 .panel'), function(i, el){

        setTimeout(function(){
           $(el).css({'left':0});
        },500 + ( i * 500 ));

    });

    setTimeout(function(){
        $(".loader").hide();
        $("#hero").css({"background":"#012A49"});
        $(".panel").css({"background":"transparent"});
        $("#anim-logo p").writeText("01010100011010000110010100100000010001000110010101101100011010010111011001100101011100100110000101110100011011110111001000100000011000100110010101101100011011110110111001100111011100110010000001110100011011110010000001100001011011100010000001100101011011000110100101110100011001010010000001101111011100100110010001100101011100100010110000100000011000010010000001101000011000010110110001101100011011110111011101100101011001000010000001110011011101010110001001100011011000010111010001100101011001110110111101110010011110010010111000100000010010000110010100100111011100110010000001100111011011110111010000100000011001010111001101110000011100100110100101110100001000000111010101110000001000000111010001101111001000000110100001100101011100100110010100101110");
    },3000);
}

function aboutPanel(){
    panelReset();
    $("#panel-group-2").css({"opacity":1});
    $("#panel-group-2").css({"left":0});
    $("#panel-group-2 .panel").css({"left":0});
    $.each($("#panel-group-2 .sq-panel"), function(i,el){
        if(i%5 > 1){
            setTimeout(function(){
                $(el).addClass("flip");
            },100 + (i *100));   
        }
    });
}


$.fn.isOnScreen = function(){

    var win = $(window);

    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};


$( document ).ready(function() {
    console.log( "document loaded" );
    setTimeout(function(){
		homePanel();
	},500);

    setTimeout(function(){
        $("#contact-bar").css({"opacity":1});
    },1000);


    $(window).scroll(function(){
        if ($('#skill-list').isOnScreen()) {
            setTimeout(function() {
              $('#about-me #skill-list ul li').css('opacity','1');
            }, 300);
        } else {
            // The element is NOT visible, do something else
        }
    });

    if(window.location.href.indexOf("?mail=success") > -1) {
       var c_msg = lity("#contact-success");
       c_msg();
    }else if(window.location.href.indexOf("?mail=error") > -1) {
        var c_msg = lity("#contact-error");
        c_msg();
    }
    


});
$('a[href^="#"]').click(function(e) {
    e.preventDefault();
    var target = $(this).attr('href');
    var stop = $(target).offset().top - 45;
    var delay = 500;
    if(target != "#contact-form"){
        $('html').animate({scrollTop: stop + 'px'}, delay);   
    }
});
