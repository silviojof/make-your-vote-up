$(document).ready(function(){
    
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
    
    $('.window-h').css("height", $(document).height());
    
});