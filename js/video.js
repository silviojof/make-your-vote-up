$(document).ready(function(){

    var vidArray = ["canada_day_bw.mp4","canada_nature_bw.mp4","hockey_bw.mp4","parliament_bw.mp4"];
    var video = document.getElementById("video");
    var baseSrc = $("#video source").attr('src');
    
    var randomVid = Math.floor(Math.random() * vidArray.length);
    $("#video source").attr('src', baseSrc + vidArray[randomVid]);
    
    video.load();
    video.play();
    
    video.onended = function() {
        
        var currVid = randomVid;
        randomVid = Math.floor(Math.random() * vidArray.length);
        
        while (randomVid === currVid) {
            randomVid = Math.floor(Math.random() * vidArray.length);
        }
        
        
        
        $("#video source").attr('src', baseSrc + vidArray[randomVid]);
        video.load();
        video.play();
    };
    
});