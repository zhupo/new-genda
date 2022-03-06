/**
 * Created by Administrator on 2017/8/2 0002.
 */
$(function(){
    //数字滚动
    $(function(){
    var options = {
        useEasing : true,
        useGrouping : true,
        separator : ',',
        decimal : '.',
        prefix : '',
        suffix : ''
    };
        var demo = new CountUp("myTargetElement", 0, 10, 0, 2.5, options);
        var demo2 = new CountUp("myTargetElement2", 0, 200, 0, 2.5, options);
        var demo3 = new CountUp("myTargetElement3", 0, 50, 0, 2.5, options);
    $(window).scroll(function(){
        if($(window).scrollTop()>=800){
            demo.start();
            demo2.start();
            demo3.start();
        }
    })

    });

    $('.i_h3cl li:nth-child(3n)').css({"margin-right":"0"});
    //首页轮播
    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
    //首页选项卡
    $(function(){
        $("#tab_t li").click(function(){
            $(this).addClass("on").siblings().removeClass("on");
            var index=$(this).index();
            $("#tab_c > div").eq(index).show().siblings().hide();
        });
    });


    window.onscroll = function(){
        //Firefox只能通过document.documentElement.scrollTop获取滚动顶部距离
        var top=document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
        if(top>300){
            $(".ycfc").css("display","block");
        }else{
            $(".ycfc").css("display","none");
        }
    };
    //右侧浮动窗
    var lxbtn=$(".ycfc li");
    lxbtn.each(function(){
        var index=$(this).index();
        //alert(index);
        if( index==1){
            $(this).hover(function(){
                $(this).stop().animate({marginLeft:"-150px",width:"205px" },300)
            },function(){
                $(this).stop().animate({marginLeft:"0px",width:"55px"},300)
            });
        }

        if( index==0){
            $(this).hover(function(){
                $(this).stop().animate({marginLeft:"-155px",width:"210px"},300)
            },function(){
                $(this).stop().animate({marginLeft:"0px",width:"55px"},300)
            });
        }

    });

    $('.shang').click(function () {
        $('html,body').animate({scrollTop: '0px'},1000);
    });




    $(window).scroll(function (e) {
        var t = $(window).scrollTop();
        winh = $(window).height();
        //公共动画
        $(".animatebox").each(function () {
            if (t + winh > $(this).offset().top) {
                if (!$(this).hasClass("animate")) {
                    $(this).addClass("animate");
                }
            }
            else {
                $(this).removeClass("animate");
            }
        });

    })
});