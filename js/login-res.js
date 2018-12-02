// JavaScript Document
$(document).ready(function () {
	$("#main .row.justify-content-end").click(function () {
		$(this).children('div').removeClass('col-6').addClass('col-7 active');
		$(this).siblings('div').children('div').removeClass('col-7 active').addClass('col-6');
		if ($(this).is("#z")) {
			$("#r").show().addClass('animated bounceInLeft');
			$("#l").hide();
		}
		if ($(this).is("#d")) {
			$("#l").show().addClass('animated bounceInLeft');
			$("#r").hide();
		}
	});
    $(".mo").find('.col-6').eq(0).click(function(){
		$(this).addClass('active').siblings('.col-6').removeClass('active');
		$("#r").show();
		$("#l").hide();
		});
		 $(".mo").find('.col-6').eq(1).click(function(){
		$(this).addClass('active').siblings('.col-6').removeClass('active');
		$("#r").hide();
		$("#l").show();
		});
	function searchname(name) {
		$.ajax({
			url: "php/search_name.php",
			type: "POST",
			data: {
				name: name
			},
			success: function (result) {
				$("#sn").html(result);
			},
			error: function () {
				alert("查找用户名失败");
			}
		})
	}
	$("#re .form-control").blur(function () {
		$(this).removeClass('border border-danger animated shake');
		if ($(this).is("#res-name")) {
			var name = $(this).val();
			searchname(name);
			if ($(this).val() == "") {
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 请输入用户名").css('visibility', 'visible');
				$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				return false;
			} else {
				if ($(this).val().length < 2 || $(this).val().length > 6) {
					$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 请输入2-6位用户名").css('visibility', 'visible');
					$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
					return false;
				} else if ($("#sn").html() == "用户名已存在") {
					$("#error2 p").html("<span class='fa fa-exclamation-circle'></span> 用户名已存在").css('visibility', 'visible');
					$("#res-name").siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				} else {
					$("#error2 p").eq(1).html("error").css('visibility', 'hidden');
					$(this).siblings('span').removeClass('fa-close').addClass('fa-check-circle-o').show();

				}
			}
		}
		if ($(this).is("#res-number")) {
			var reg = new RegExp("(^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$)|(.+@.+\.[a-zA-Z]{2,4}$)");
			if ($(this).val() == "") {
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 请输入手机号或邮箱").css('visibility', 'visible');
				$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				return false;
			} else if (!reg.test(this.value)) {
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 请输入正确的手机号和邮箱").css('visibility', 'visible');
				$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				return false;
			} else {
				$("#error2 p").eq(1).html("error").css('visibility', 'hidden');
				$(this).siblings('span').removeClass('fa-close').addClass('fa-check-circle-o').show();

			}
		}
		if ($(this).is("#res-pwd")) {
			if ($(this).val() == "") {
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 请输入6位密码").css('visibility', 'visible');
				$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				return false;
			} else if ($(this).val().length < 6) {
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span> 密码不能少于6位").css('visibility', 'visible');
				$(this).siblings('span').removeClass('fa-check-circle-o').addClass('fa-close').show();
				return false;
			} else {
				$("#error2 p").eq(1).html("error").css('visibility', 'hidden');
				$(this).siblings('span').removeClass('fa-close').addClass('fa-check-circle-o').show();

			}
		}
	}).keyup(function () {
		$(this).triggerHandler('blur');
	}).focus(function () {
		$(this).triggerHandler('blur');
	});
	$("#log .form-control").focus(function () {
		$(this).removeClass('animated shake border border-danger');
		$("#log .form-group").eq(0).html('<i class="fa fa-exclamation-circle p-1"></i>请输入用户名密码').removeClass('animated shake');
	});
});

function register() {
	$("#re").ajaxSubmit({
		dataType: 'json',
		beforeSubmit: function () {
			var x1 = $("#re").find("span").eq(0).attr('class');
			var x2 = $("#re").find("span").eq(1).attr('class');
			var x3 = $("#re").find("span").eq(2).attr('class');
			var x4 = $("#re").find("span").eq(3).attr('class');
			var fa = "fa-close";
			var cc = $("#cb1").prop("checked");
			if ($("#res-name").val() == "" || x1.indexOf(fa) != -1) {
				$("#res-name").addClass('animated shake border border-danger');
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span>请输入2-6位用户名").css('visibility', 'visible');
				return false;
			} else if ($("#res-number").val() == "" || x2.indexOf(fa) != -1) {
				$("#res-number").addClass('animated shake border border-danger');
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span>请输入正确的手机号或邮箱").css('visibility', 'visible');
				return false;
			} else if ($("#res-pwd").val() == "" || x3.indexOf(fa) != -1) {
				$("#res-pwd").addClass('animated shake border border-danger');
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span>请输入6位密码").css('visibility', 'visible');
				return false;
			} else if ($("#yz").val() == "" || x4.indexOf(fa) != -1) {
				$("#yz").addClass('animated shake border border-danger');
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span>请输入正确的验证码").css('visibility', 'visible');
				return false;
			}else if(!cc){
				$("#error2 p").eq(1).html("<span class='fa fa-exclamation-circle'></span>请勾选同意用户协议").css('visibility', 'visible');
				return false;
			}
		},
		success: function (json) {
			if (json.success == 1) {
				$("#msg .modal-header").addClass('bg-success');
				$("#msg .modal-title").text("Success");
				$("#msg .modal-body").html('<p class="text-center text-info"><span>' + json.msg + '</span></p><p class="text-center">点击确定跳转登录页面...</p>');
				$("#msg").modal('show');
				$("#re .form-control").val("");
				$('#msg').on('hidden.bs.modal', function () {
					$("#d").children('div').removeClass('col-7').addClass('col-8 active');
					$("#z").children('div').removeClass('col-8 active').addClass('col-7');
					$(".rr").hide();
					$("#l").show();
					$("#r").hide();
				});
			} else {
				$("#msg .modal-header").addClass('bg-danger');
				$("#msg .modal-title").text("Error");
				$("#msg .modal-body").html('<p class="text-center">' + json.msg + '</p>');
				$("#msg").modal('show');
			}
		}
	});
	return false;
}

function ajaxlogin() {
	$("#log").ajaxSubmit({
		dataType:'json',
		beforeSubmit: function () {
			if ($("#log-name").val() == "") {
				$("#log-name").addClass('animated shake border border-danger');
				return false;
			} else if ($("#log-pwd").val() == "") {
				$("#log-pwd").addClass('animated shake border border-danger');
				return false;
			}
			
		},
		success:function(json){
			if(json.success==1){
			$("#msg .modal-header").addClass('bg-success');
				$("#msg .modal-title").text("Success");
				$("#msg .modal-body").html('<p class="text-center text-info"><span>' + json.msg + '</span></p><p class="text-center">欢迎用户'+json.user+'</p><p class="text-center">点击确定跳转主页...</p>');
				$("#msg").modal('show');
				$('#msg').on('hidden.bs.modal', function () {
				window.location.href="Home.php";
				});
			}else{
				$("#log .form-group").eq(0).html('<i class="fa fa-exclamation-circle p-1"></i>用户名或密码错误').addClass('animated shake');
				
			}
		},
		error:function(json){
			alert(json.msg);
		}
	});
	return false;
}
