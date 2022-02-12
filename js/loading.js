function loadingGif(){
    this.handler = $('#loading');
 this.init = function() {
      console.log('hide()');
 this.handler.hide();
  };
  this.show = function() {
       console.log('show()');
 this.handler.show();
  };
  
    this.hide = function() {
 this.handler.hide();
  };
   this.setCetner = function(idElement) {
       var w = $(idElement).width()/2-100;
        var h = $( idElement ).height()/2+100;
       console.log('w='+w+" h="+h);
         this.handler.css('left',w);
          this.handler.css('top',h);
  };
   // this.init();
}


var loadinggif = new loadingGif();

loadinggif.setCetner('#content');


