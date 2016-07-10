$(function() {
				var page = 1;
				$("span.next").click(function() {
					var $parent = $(this).parents("div.pic");
					var $v_show = $parent.find("div.picList");
					var $v_content = $parent.find("div.picContent");
					var v_width = $v_content.width();
					var len = $v_show.find("li").length;
					var page_count = len;
					if (!$v_show.is(":animated")) {
						if (page == page_count) {
							$v_show.animate({
								left: '0px'
							}, "slow");
							page = 1;
						} else {
							$v_show.animate({
								left: '-=' + v_width
							}, "slow");
							page++;
						}
						
					}
				});
				$("span.prev").click(function() {					
					var $parent = $(this).parents("div.pic");
					var $v_show = $parent.find("div.picList");
					var $v_content = $parent.find("div.picContent");
					var v_width = $v_content.width();
					var len = $v_show.find("li").length;
					var page_count =len;
					if (!$v_show.is(":animated")) {
						if (page == 1) {
							$v_show.animate({
								left: '-=' + v_width * (page_count - 1)
							}, "slow");
							page = page_count;
						} else {
							$v_show.animate({
								left: '+=' + v_width
							}, "slow");
							page--;
						}
			
					}
				});				
				$(".title>span").mouseover(function(){
					$(".mask").css('display','block');
					$(this).css('opacity',1);
				});
				$(".title>span").mouseout(function(){
					$(".mask").css('display','none');
						$(this).css('opacity',0.8);
				});		
			setInterval(show,2000);
			
			
			
			//好友二级列表
			
			$(".liP").click(function(){
				$(this).next('ul').show().addClass('current').parent().siblings().children("ul").hide().removeClass("current");
			});
			
			
			
$('.navImg').click(function(){
	$(".black").show();	
});
$(".exit").click(function(){ 
	$(".black").hide();
});


});
function show(){
		$(".title>span.next").trigger('click');
}


