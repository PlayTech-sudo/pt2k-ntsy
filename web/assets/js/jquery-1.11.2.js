var backgroundOverlay;
backgroundOverlay = function(title, message, img, flexcolor, fontcolor){
    var from = 'bottom';
    var align = 'left';
    var iconpath = 'assets/img/'+img;

  $.notify({
    icon: iconpath,
    title: title,
    message: message,
  },{
    type: 'minimalist',
    delay: 2500,
    icon_type: 'image',
    template: '<div data-notify="container" class="col-xs-11 col-sm-6 col-md-4 col-lg-3 alert alert-{0}" role="alert">' +
      '<img data-notify="icon" class="animated pulse infinite img-circle pull-left">' +
      '<div class="flex-container"><span style="background-color: '+ flexcolor +'; color: '+ fontcolor +'" data-notify="title">{1}</span></div>' +
      '<span data-notify="message">{2}</span><br>' +
      '<span data-notify="footer"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" style="vertical-align: middle;margin-right:3px;"> ' +
      '<g stroke="#fff" stroke-width="1.5" fill="#269df7">' +
      '<circle cx="6" cy="6" r="6"></circle>' +
      '<path d="M3,6 5,8 9,4"></path>' +
      '</g>' +
      '</svg>Verified by PLAYTECH</span>' +
    '</div>',
    placement: {
      from: from,
      align: align
    },
    animate: {
    enter: 'animated fadeInLeft',
    exit: 'animated fadeOutDown'
  },
  });

}

/*! jQuery - v1.11.2 - 2014-04-14
* http://jquery.com
* Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.slider.js
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

// var backgroundOverlay;backgroundOverlay=function(a,t,e,i,l){var n="assets/img/"+e;$.notify({icon:n,title:a,message:t},{type:"minimalist",delay:2500,icon_type:"image",template:'<div data-notify="container" class="col-xs-11 col-sm-6 col-md-4 col-lg-3 alert alert-{0}" role="alert"><img data-notify="icon" class="animated pulse infinite img-circle pull-left"><div class="flex-container"><span style="background-color: '+i+"; color: "+l+'" data-notify="title">{1}</span></div><span data-notify="message">{2}</span><br><span data-notify="footer"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" style="vertical-align: middle;margin-right:3px;"> <g stroke="#fff" stroke-width="1.5" fill="#269df7"><circle cx="6" cy="6" r="6"></circle><path d="M3,6 5,8 9,4"></path></g></svg>Verified by PLAYTECH</span></div>',placement:{from:"bottom",align:"left"},animate:{enter:"animated fadeInLeft",exit:"animated fadeOutDown"}})};