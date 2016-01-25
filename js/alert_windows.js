$(function(){
    if($.cookie("isClose") != 'yes'){
        var winWid = $(window).width()/2 - $('.alert_windows').width()/2;
        var winHig = $(window).height()/2 - $('.alert_windows').height()/2;
        $(".alert_windows").css({"left":winWid,"top":-winHig*2});    //自上而下
        $(".alert_windows").show();
        $(".alert_windows").animate({"left":winWid,"top":winHig},1000);
        $(".alert_windows span").click(function(){
            $(this).parent().fadeOut(500);
            //$.cookie("isClose",'yes',{ expires:1/8640});    //十秒
            $.cookie("isClose",'yes',{ expires:1});        //一天
        });
    }
});
