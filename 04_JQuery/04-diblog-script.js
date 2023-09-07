$(function(){
    $("h1").click(function(){
        $("p").fadeOut();
    });
});


$(function(){
  $(".total").click(function(){
    $("p1").text("20");
  });
});

$(function(){
    $("p2").hover(
    function(){
        $("img").fadeIn();
    },
    function(){
        $("img").fadeOut();
    });
});

$(function(){
    $("img").hover(
        function(){
            $(this).animate({width:"220px"});
        },
        function(){
            $(this).animate({width:"200px"});
        });
});

$(function(){
    $("p").click(function(){
        $(this).css("color","red");
    });
});