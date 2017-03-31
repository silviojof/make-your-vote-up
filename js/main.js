$(document).ready(function(){

    //dropdown menu

    $("#site-menu").click(function(){

        if ($(".site-menu").hasClass("dropdown")){
            $(".site-menu").removeClass("dropdown");
            $(".site-menu").addClass("hide-for-small-only");
            $(".parties-nav").addClass("show-for-medium");
        }
        else {
            $(".site-menu").removeClass("hide-for-small-only");
            $(".parties-nav").removeClass("show-for-medium");
            $(".site-menu").addClass("dropdown");
        }
    });

    //

    //randomnize

    var classes = ["conservative", "liberal", "green", "new-democratic"];

    for (var i = 0; i < classes.length; i += 1) {

        var randomNumber = Math.floor(Math.random()*classes.length);

        while ($(".party").hasClass(classes[randomNumber])) {
            var randomNumber = Math.floor(Math.random()*classes.length);
        }

        $(".party").filter(':eq('+i+'), :eq('+(i+4)+')').addClass(classes[randomNumber]);
        $(".party").eq(i+4).attr('data-party', classes[randomNumber]);
        $(".party>p").eq(i).addClass($(".party>p").eq(i).parent().attr('data-party'));
    }


    $(".conservative").eq(0).html('<a href="party.php?party=conservative">conservative</a>');
    $(".liberal").eq(0).html('<a href="party.php?party=liberal">liberal</a>');
    $(".green").eq(0).html('<a href="party.php?party=green">green</a>');
    $(".new-democratic").eq(0).html('<a href="party.php?party=newdemocratic">new democratic</a>');

    //


    $(".p-img").hover(function(){
        $(this).animate({opacity:0.9})
    }, function(){
        $(this).animate({opacity:1})
    });
});
