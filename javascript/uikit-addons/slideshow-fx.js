/*! UIkit 2.16.2 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(i){var t;jQuery&&UIkit&&(t=i(jQuery,UIkit)),"function"==typeof define&&define.amd&&define("uikit-slideshow-fx",["uikit"],function(){return t||i(jQuery,UIkit)})}(function(i,t){"use strict";var e=t.slideshow.animations;i.extend(t.slideshow.animations,{slice:function(s,n,o,r){if(!s.data("cover"))return e.fade.apply(this,arguments);for(var a,c=i.Deferred(),h=Math.ceil(this.element.width()/this.options.slices),p=n.data("cover").css("background-image"),d=i("<li></li>").css({top:0,left:0,width:this.container.width(),height:this.container.height(),opacity:1,zIndex:15}),l=d.width(),u=d.height(),f="slice-up"==r?u:"0",m=0;m<this.options.slices;m++){"slice-up-down"==r&&(f=(m%2+2)%2==0?"0":u);var v,x=m==this.options.slices-1?h:h,g="rect(0px, "+x*(m+1)+"px, "+u+"px, "+h*m+"px)";v="rect(0px, "+x*(m+1)+"px, 0px, "+h*m+"px)",("slice-up"==r||"slice-up-down"==r&&(m%2+2)%2==0)&&(v="rect("+u+"px, "+x*(m+1)+"px, "+u+"px, "+h*m+"px)"),a=t.$('<div class="@-cover-background"></div>').css({position:"absolute",top:0,left:0,width:l,height:u,"background-image":p,clip:v,opacity:0,transition:"all "+this.options.duration+"ms ease-in-out "+60*m+"ms","-webkit-transition":"all "+this.options.duration+"ms ease-in-out "+60*m+"ms"}).data("clip",g),d.append(a)}return this.container.append(d),d.children().last().on(t.support.transition.end,function(){d.remove(),c.resolve()}),d.width(),d.children().each(function(){var t=i(this);t.css({clip:t.data("clip"),opacity:1})}),c.promise()},"slice-up":function(i,t,s){return e.slice.apply(this,[i,t,s,"slice-up"])},"slice-down":function(i,t,s){return e.slice.apply(this,[i,t,s,"slice-down"])},"slice-up-down":function(i,t,s){return e.slice.apply(this,[i,t,s,"slice-up-down"])},fold:function(s,n){if(!n.data("cover"))return e.fade.apply(this,arguments);for(var o,r=i.Deferred(),a=Math.ceil(this.element.width()/this.options.slices),c=n.data("cover").css("background-image"),h=i("<li></li>").css({width:n.width(),height:n.height(),opacity:1,zIndex:15}),p=n.width(),d=n.height(),l=0;l<this.options.slices;l++){{l==this.options.slices-1?p-a*l:a}o=t.$('<div class="@-cover-background"></div>').css({position:"absolute",top:0,left:0,width:p,height:d,"background-image":c,"transform-origin":a*l+"px 0 0",clip:"rect(0px, "+a*(l+1)+"px, "+d+"px, "+a*l+"px)",opacity:0,transform:"scaleX(0.000001)",transition:"all "+this.options.duration+"ms ease-in-out "+(100+60*l)+"ms","-webkit-transition":"all "+this.options.duration+"ms ease-in-out "+(100+60*l)+"ms"}),h.prepend(o)}return this.container.append(h),h.width(),h.children().first().on(t.support.transition.end,function(){h.remove(),r.resolve()}).end().css({transform:"scaleX(1)",opacity:1}),r.promise()},puzzle:function(n,o){if(!o.data("cover"))return e.fade.apply(this,arguments);for(var r,a,c,h=i.Deferred(),p=this,d=Math.round(this.options.slices/2),l=Math.round(o.width()/d),u=Math.round(o.height()/l),f=Math.round(o.height()/u)+1,m=o.data("cover").css("background-image"),v=t.$("<li></li>").css({width:this.container.width(),height:this.container.height(),opacity:1,zIndex:15}),x=this.container.width(),g=this.container.height(),w=0;u>w;w++)for(var b=0;d>b;b++)c=b==d-1?l+2:l,a=[f*w+"px",c*(b+1)+"px",f*(w+1)+"px",l*b+"px"],r=t.$('<div class="@-cover-background"></div>').css({position:"absolute",top:0,left:0,opacity:0,width:x,height:g,"background-image":m,clip:"rect("+a.join(",")+")","-webkit-transform":"translateZ(0)",transform:"translateZ(0)"}),v.append(r);this.container.append(v);var y=s(v.children());return y.each(function(i){t.$(this).css({transition:"all "+p.options.duration+"ms ease-in-out "+(50+25*i)+"ms","-webkit-transition":"all "+p.options.duration+"ms ease-in-out "+(50+25*i)+"ms"})}).last().on(t.support.transition.end,function(){v.remove(),h.resolve()}),v.width(),y.css({opacity:1}),h.promise()},boxes:function(s,n,o,r){if(!n.data("cover"))return e.fade.apply(this,arguments);for(var a,c,h,p=i.Deferred(),d=Math.round(this.options.slices/2),l=Math.round(n.width()/d),u=Math.round(n.height()/l),f=Math.round(n.height()/u)+1,m=n.data("cover").css("background-image"),v=i("<li></li>").css({width:n.width(),height:n.height(),opacity:1,zIndex:15}),x=n.width(),g=n.height(),w=0;u>w;w++)for(var b=0;d>b;b++)h=b==d-1?l+2:l,c=[f*w+"px",h*(b+1)+"px",f*(w+1)+"px",l*b+"px"],a=t.$('<div class="@-cover-background"></div>').css({position:"absolute",top:0,left:0,opacity:1,width:x,height:g,"background-image":m,"transform-origin":c[3]+" "+c[0]+" 0",clip:"rect("+c.join(",")+")","-webkit-transform":"scale(0.0000000000000001)",transform:"scale(0.0000000000000001)"}),v.append(a);this.container.append(v);var y=0,k=0,I=0,M=[[]],z=v.children();"boxes-reverse"==r&&(z=[].reverse.apply(z)),z.each(function(){M[y][k]=i(this),k++,k==d&&(y++,k=0,M[y]=[])});for(var b=0,$=0;d*u>b;b++){$=b;for(var j=0;u>j;j++)$>=0&&d>$&&M[j][$].css({transition:"all "+this.options.duration+"ms linear "+(50+I)+"ms","-webkit-transition":"all "+this.options.duration+"ms linear "+(50+I)+"ms"}),$--;I+=100}return z.last().on(t.support.transition.end,function(){v.remove(),p.resolve()}),v.width(),z.css({"-webkit-transform":"scale(1)",transform:"scale(1)"}),p.promise()},"boxes-reverse":function(i,t,s){return e.boxes.apply(this,[i,t,s,"boxes-reverse"])},"random-fx":function(){var i=["slice-up","fold","puzzle","slice-down","boxes","slice-up-down","boxes-reverse"];return this.fxIndex=(void 0===this.fxIndex?-1:this.fxIndex)+1,i[this.fxIndex]||(this.fxIndex=0),e[i[this.fxIndex]].apply(this,arguments)}});var s=function(i){for(var t,e,s=i.length;s;t=parseInt(Math.random()*s),e=i[--s],i[s]=i[t],i[t]=e);return i};return t.slideshow.animations});