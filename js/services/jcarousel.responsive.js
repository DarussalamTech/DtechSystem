!function(a){a(function(){var o=a(".jcarousel");o.on("jcarousel:reload jcarousel:create",function(){var a=o.innerWidth();a>=600?a/=3:a>=350&&(a/=2),o.jcarousel("items").css("width",a+"px")}).jcarousel({wrap:"circular"}),a(".jcarousel-control-prev").jcarouselControl({target:"-=1"}),a(".jcarousel-control-next").jcarouselControl({target:"+=1"}),a(".jcarousel-pagination").on("jcarouselpagination:active","a",function(){a(this).addClass("active")}).on("jcarouselpagination:inactive","a",function(){a(this).removeClass("active")}).on("click",function(a){a.preventDefault()}).jcarouselPagination({perPage:1,item:function(a){return'<a href="#'+a+'">'+a+"</a>"}})})}(jQuery);