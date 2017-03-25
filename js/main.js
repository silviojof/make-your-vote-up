$(document).ready(function(){

    //dropdown menu

    $("#site-menu").click(function(){

        if ($(".site-menu").hasClass("dropdown")){
            $(".site-menu").removeClass("dropdown");
            $(".site-menu").addClass("hide-for-small-only");

        }
        else {
            $(".site-menu").removeClass("hide-for-small-only");
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
    }


    $(".conservative").eq(0).html('<a href="party.php?name=conservative">conservative</a>');
    $(".liberal").eq(0).html('<a href="liberal.php">liberal</a>');
    $(".green").eq(0).html('<a href="green.php">green</a>');
    $(".new-democratic").eq(0).html('<a href="new-democratic.php">new democratic</a>');

    //


});
