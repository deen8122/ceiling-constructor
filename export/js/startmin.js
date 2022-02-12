var num = 0;
var constdata = {num:0,values:[]};
function openPageInPopup(id) {
    //log(id);
    $.fancybox.open(id);

}
function sendData() {

}
function setElement(i, j) {
      constdata.values[i]=j;
    // log(j);
    var obj = data[num].elements[i].value[j];
   // log(obj);
    $('.img-group-' + i).hide();
    $('#img-' + i + '-' + j).show();
    $('.nav-' + i).find('.menu-icon').removeClass('active');
    $('#a-' + i + '-' + j).addClass('active');
    var style = $('#a-' + i + '-' + j).find('.image').attr('style');
    $('.selected-item-'+i).attr('style',style);

}

function setHome(n) {
    num = n;
    constdata.num = num;
    $('.selhome').removeClass('active');
    $('#selhome-' + n).addClass('active');
    
	  var style = $('#selhome-' + n).find('.image').attr('style');
    $('.selected-item-h').attr('style',style);
	
     setMenu();
     setImages();
   
}
function setMenu() {
    $.ajax({
        url: 'index.php?home=' + num,
        success: function (msg) {
            var menu = $(msg).find('#side-menu');
            $('#side-menu').replaceWith(menu);
            $('#side-menu').metisMenu();
            $('#side-menu li:first-child>a').click()
        }
    });

}
function test(){
        log(constdata)
         var cd = JSON.stringify(constdata);
         log(cd);
}
function checkImageLoad() {
    log('checkImageLoad');
    // loadinggif.hide();

}
function setImages() {
    // log(data[num]);
    //loadinggif.setCetner('.draw-container');
    loadinggif.show();

$('.draw-container').addClass('effect-blur ');
    var cont = '';
    var img = new Image();
    img.onload = function () {
      
        var cont2 = '<img  style="z-index:1" src="' +this.src + '" >';
        $('.draw-container').append(cont2);
        $('.draw-container').removeClass('effect-blur ');
        loadinggif.hide();
    }
    img.src = data[num].images_folder + data[num].image;

 //cont+= '<img  style="z-index:1" src="' + data[num].images_folder + data[num].image + '" >';
    for (var i = 0; i < data[num].elements.length; i++) {
        var obj = data[num].elements[i];
        for (var j = 0; j < obj.value.length; j++) {
            cont += '<img style="z-index:2"  src="' + data[num].images_folder + obj.value[j].image + '" id="img-' + i + '-' + j + '"  class="image-sets img-group-' + i + '">';
        }

    }
    $('.draw-container').html(cont);


}
$(function () {

    $('#side-menu').metisMenu();
    $('#side-menu-home').metisMenu();
    $('#side-menu li:first-child>a').click();
    $('.draw-container').css('height',$(window).height()-20)
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1)
            height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });
    /*
     var url = window.location;
     var element = $('ul.nav a').filter(function() {
     return this.href == url || url.href.indexOf(this.href) == 0;
     }).addClass('active').parent().parent().addClass('in').parent();
     if (element.is('li')) {
     element.addClass('active');
     }
     */
	 setHome(0);
   // setImages();
    $('.ajaxform').submit(function () {
        var data = $(this).serialize();
        var formsuccess = $(this).data('success');
        var cd = JSON.stringify(constdata);
         log(cd);
         log(constdata);
        $.ajax({
            type: "POST",
            url: 'sendform.php?data='+cd,
            data: data,
            success: function (msg) {
               log(msg);
               $.fancybox.open(formsuccess);
            }
        });

        return false;
    });
});


function log(j) {

    console.log(j)
}