$(document).ready(function(){
    $("#mangapage").attr("height", screen.height-200).click(function() {
        page++;
        $("#mangapage").attr("src", "https://339530.selcdn.ru/Animeghost/manga/"+manga+"/"+chapter+"/"+page+".jpg")
    });
});