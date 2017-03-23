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
    
    $(".conservative").text("conservative");
    $(".liberal").text("liberal");
    $(".green").text("green");
    $(".new-democratic").text("new democratic");
    
    //

});