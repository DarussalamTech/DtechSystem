!function(o){o(function(){o(".jcarousel").jcarousel({}),o(".jcarousel-control-prev").on("jcarouselcontrol:active",function(){o(this).removeClass("inactive")}).on("jcarouselcontrol:inactive",function(){o(this).addClass("inactive")}).jcarouselControl({target:"-=1"}),o(".jcarousel-control-next").on("jcarouselcontrol:active",function(){o(this).removeClass("inactive")}).on("jcarouselcontrol:inactive",function(){o(this).addClass("inactive")}).jcarouselControl({target:"+=1"}),o(".jcarousel-pagination").on("jcarouselpagination:active","a",function(){o(this).addClass("active")}).on("jcarouselpagination:inactive","a",function(){o(this).removeClass("active")}).jcarouselPagination({})})}(jQuery);