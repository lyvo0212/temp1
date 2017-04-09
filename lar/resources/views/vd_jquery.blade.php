<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.list-1{
			background: red;

		}
		img{
			left: 10px;
		}
		.vd {
		    margin: 3px;
		    width: 40px;
		    height: 40px;
		    position: absolute;
		    left: 0px;
		    top: 680px;
		    background: green;
		    display: none;
		}
div.newcolor {
    background: blue;
}
	</style>
	<script src="{{asset('js/layout_index/js/jquery-1.11.1.min.js')}}"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.test').nextAll().addBack().css('color','red');

			$('li').addClass(function(index){
				return 'list-'+index;
			});
			var i=$('li').index($('.test'));
			$('span').text(i);
			$('li.test').before(function(){
				return '<p> before cua test la</p>';
			});
			$('li').after(function(){
				return '<p>'+this.className+'</p>';
			});
			$('li.a').find('a').andSelf().css('color','yellow');
			
			
		});

		$(function(){
			$('.focus').click(function(){
				$('input').focus().css('background','gray');
				$('input').val('');
			});
			$('input').change(function(){
					$('.tb').text('trường đã thay đổi');
				});
			$('.blur').click(function(){
				$('input').blur().css('background','none');
				$('input').val('');
			});
		});
		$(function(){
			$('hinh').click(function() {
				$('img').animate({
					width: 'toggle',
				     height: 'toggle'
				}, {
				     duration: 5000,
				     specialEasing: {
				          width: 'linear',
				          height: 'linear'
				     },
				     complete: function() {
				          $('button').text("Animation Complete");
				     }
			});
				var t=$('img').attr('src');
				$('.tieude').html(t);
		 });
		});
		$(function(){
				var h=$('li').innerHeight();
				//$('span').text('chieu cao cua li bang'+h);
				
			});
		$(function(){
			$('li').bind('mouseover',function(event){
					$('span').text('con trỏ chuột dag o vị trí'+event.pageX+','+event.pageY);
				});
		});

		$(function(){
			$('.start').click(function(){
				var d=$('div.vd');
				d.show('slow');
				d.animate({left:'+=200'},5000);
				d.queue(function(){
					var o=$(this);
					o.addClass('.newcolor');
					o.dequeue();
				});
				d.animate({
					left:'-=200'},1500);
				
				d.queue(function(){
					var k=$(this);
					k.remove('newcolor');
					k.dequeue();
				});
				d.slideup();
			});
			$('.stop').click(function(){
				var e=$('div.vd');
				e.clearQueue();
				e.stop();
			});
		});
		$(function(){
			$('li').click(function(){
				if($(this).is(':first-child')){
					$(this).css('color','blue');
				}
			});

		});

		$(function(){
			var t=	$.fn.jquery;
			$('.tb').text(t);
			$('input').keydown(function(){
				$(this).css('background','yellow');
			});
			i=0;
			$('input').keydown(function(){
				$(this).val(i+=1);
			});
			$('input').keyup(function(){
				$(this).css('background','red'); 
			});
			$('input').nextAll().css('background','green');

			var x=0;
			$('p').on('click',function(event){
				$(this).animate({fontSize:"+=3px"});
				x++;
				if(x>=3)
				{
					$(this).off(event);
				}
			});

			var t=$('li').ourterWidth();
			$('span.vd').text(t);
	});
		$(function(){
			$(window).resize(function(){
				$('span.size').html($(window)).width();
			});
			
			$('div.scrollLeft').scrollLeft(600);
		});
		$(function(){
			function showValues(){
				var str = $("form").serialize();
       			 $("#result").text(str);
			}
			 $("input[type='radio']").on("click",showValues);
    		showValues();
		});
	</script>

</head>
<body>
	<ul>
		<li>li 0</li>
		<li>li 1</li>
		<li class="test">li 2</li>
		<li class="a"><a>li 3</a></li>
		<li>li 4</li>
		<li>li 5</li>
		vị trí <span></span>
	</ul>
	<span class="vd"></span>
	<button class="hinh">Click</button>
	<img src="images/about.jpg" width="120px" height="120px">
	Bạn đang xem hình<p class="tieude"></p>
	<input type="ten" name="">
	<button class="focus">Focus</button>
	<button class="blur">Blur</button>
	<span class="tb"></span>
	<button class="start">Start</button>
	<button class="stop">Stop</button>
	<div class="vd"></div>
	<p>zoom 3 lan</p>
	<span class="size"></span>
	<div class="scrollLeft" style="width:200px;height: 100px; border:1px solid blue;overflow:auto;">
		<p style="height:500px;
	width:1000px;">thành phần p</p>
	</div>

	<form>
		<input type="radio" name="radio" value="Male" checked="checked" id="male" />
		<label for="male">Male:</label>
		<input type="radio" name="radio" value="Female" id="female" />
		<label for="female">Female:</label>
	</form>
	<p id="result"></p>
</body>
</html>