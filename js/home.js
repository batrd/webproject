// JavaScript Document
$(document).ready(function () {
	 $('[data-toggle="tooltip"]').tooltip();
	$(document).scroll(function () {
		var top = $(document).scrollTop();
		if (top > 56) {
			$('.navbar-search').css('display', 'block');
			$("#nav").css('opacity','0.85');
		} else {
			$('.navbar-search').css('display', 'none');
			$("#nav").css('opacity','1');
		}
	})
	var width = $("#sc").width();
	$(".control-span a[href='#right']").click(function () {
		var y = $("#sc").scrollLeft();
		$("#sc").stop().animate({
			scrollLeft: y + width + 30
		}, 1000);
		if (y > 2500) {
			$("#sc").stop().animate({
				scrollLeft: 0
			}, 1000);
		}
	});
	$(".control-span a[href='#left']").click(function () {
		var y = $("#sc").scrollLeft();
		$("#sc").stop().animate({
			scrollLeft: y - (width + 30)
		}, 1000);
	});
	$("#phone .col-md-3 .box").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');

	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
	});
	$("#jiadian .col-md-3 .box").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');
		$(this).children('.col-12.mm').slideDown('fast');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
		$(this).children('.col-12.mm').slideUp('fast');
	});
	$("#zhineng .col-md-3 .box").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');
		$(this).children('.col-12.mm').slideDown('fast');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
		$(this).children('.col-12.mm').slideUp('fast');
	});
	$("#peijian .col-md-3 .box").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');
		$(this).children('.col-12.mm').slideDown('fast');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
		$(this).children('.col-12.mm').slideUp('fast');
	});
	$("#zhoubian .col-md-3 .box").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');
		$(this).children('.col-12.mm').slideDown('fast');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
		$(this).children('.col-12.mm').slideUp('fast');
	});
	$(".boxs").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #ddd');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
	})
	$(".img-left").mouseover(function () {
		$(this).stop().animate({
			top: '-5px'
		}, "fast").css('box-shadow', '0 4px 10px #999');
	}).mouseleave(function () {
		$(this).stop().animate({
			top: '0px'
		}, "fast").css('box-shadow', 'none');
	});
	$("#nav_1").find('a:eq(1),a:eq(2),a:eq(3),a:eq(4),a:eq(5)').mouseover(function () {
		var id = $(this).attr('href');
		$(id).stop().slideDown('slow').siblings('.nn').hide();
		$(id).on('mouseleave', function () {
			$(this).slideUp('fast');
		});
	});
	$(".tabs a").mouseover(function () {
		$(this).addClass('active').siblings('a').removeClass('active');
	});


	/*var imgsrc=[];
	var imgname=[];
	var imgbadg=[];
	var imgalt=[];
	for(var i=0;i<8;i++){
	imgsrc.push($("#phone .col-md-3.col-6").eq(i).find('img').attr('src'));
	imgalt.push($("#phone .col-md-3.col-6").eq(i).find('img').attr('alt'));
	imgname.push($("#phone .col-md-3.col-6").eq(i).find("p").eq('1').text());
	imgbadg.push($("#phone .col-md-3.col-6").eq(i).find("p").eq('0').text());
	}*/
	/*	$.ajax({
			url:"./arry.php",
			type:"POST",
			data:{xx:json},
			dataType:'json',
			success:function(result){
				alert(result);
			},
			error:function(){
				window.location.href="arry.php";
			}
		})*/
	/*	console.log(imgbadg);
		console.log(imgsrc);
		console.log(imgname);
		console.log(imgalt);
		var json=JSON.stringify(imgalt);
		console.log(json);
		$.getJSON("./img.json",function(result){
			$.each(result, function(i, field){
	                alert(field + " ");
	            });
		})*/
	/*	var aModel={
		imgsrc:$("#phone img").eq(i).attr('src'),
		alt:$("#phone img").eq(i).attr('alt')
	}*/
	/*var json=JSON.stringify(aModel);
	console.log(json) ;*/
// Add smooth scrolling to all links in navbar + footer link
  $(".navbar-nav a,footer a[href='#mypage']").on('click', function(event) {
  // Prevent default anchor click behavior
  event.preventDefault();
  // Store hash
  var hash = this.hash;
  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 700, function(){
    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
      $(".row.flex-wrap").find(".badge:not(:contains('新品'))").removeClass('badge-success').addClass('badge-danger');	
  

});

function sendEamil() {
	$("#msg").ajaxSubmit( {
		beforeSubmit:function(){
			var name=$("#msg input[name='sname']").val();
			var email=$("#msg input[name='email']").val();
			var con=$("#msg textarea").val();
			if(name==""||email==""||con==""){
				alert("请输入完整的信息");
				return false;
			}else{
			return true;}
		},
		success:function(message){
			alert(message);
		},
		clearForm:true,
	});
	return false;
}
function login(){
	var username=$("#login-form").find('#name').val();
	$("#login-form").ajaxSubmit({
		dataType:'json',
		beforeSubmit:function(){
			var name=$("#login-form").find('#name').val();
			var pwd=$("#login-form").find('#pwd').val();
			if(name==""){
				$("#login-form").find("label[for='name']").children('.text-danger').show();
				return false;
			}else if(pwd==""){
				$("#login-form").find("label[for='pwd']").children('.text-danger').show();
				return false;
			}else{
				$("#login-form").find("span[class='text-danger']").hide();
				return true;
			}
		},
		success:function(json){
			if(json.success==1){
				window.location.reload();
				$("#login").modal('hide');	
			}else{
				$("#login-form").find("label[for='name']").children('.text-danger').text(json.msg).show();
			}
		},
	});
	return false;
}
function loginout(){
	$.ajax({
		type:"psot",
		url:"php/loginout.php",
		success:function(){
			window.location.reload();
		}
	})
}
