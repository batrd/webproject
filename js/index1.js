// JavaScript Document
$(document).ready(function () {
	$("input[type='radio']").attr('disabled','ture');
	$("#banben .row .col-5").click(function () {
		$(this).addClass('active').siblings('.col-5').removeClass('active').parent('.row').siblings('.row').children('.col-5').removeClass('active');
		price();
		var bb = $(this).children('span').text().substring(0, 6);
		var color = $("#color").find('.text-price').text();
		var pr = $(this).children('a').text().substring(0, 4);
		var pp = $("#number").find('input').val();

		$("#msg").children('.row').eq(0).children('span').eq(0).text("小米8青春版 " + bb + " " + color + " x" + pp);
		$("#msg").children('.row').eq(0).children('span').eq(1).text(pr * pp + "元");
		/*var tp=$("#msg").children('.row').eq(0).children('span').eq(1).text().substring(0,4);
				alert(tp);*/
		/*var price=$(this).children('a').text();
		$("b[class='text-price']").text(price);*/
	});

	function price() {
		var pp = $("#number").find('input').val();
		var pr = $("#banben .row .col-5.active a").text().substring(0, 4);
		$("b[class='text-price']").text(pp * pr + "元");
		var bp = $("#baoxian .row.p-4.border.active").find('span.text-secondary').text().substring(0, 2);
		if (typeof (bp) == "undefined") {
			bp = "0";
		}
		var mp = $("#moreb .row.p-4.border.active").find('span.text-secondary').text().substring(0, 3);
		if (typeof (mp) == "undefined") {
			mp = "0";
		}

		var tp = Number(pp * pr) + Number(bp) + Number(mp);
		$("#msg .text-price").text("总计:" + tp + "元");
	}
	$("#number button").click(function () {
		var i = $("#number").find('input').val();
		if ($(this).is("#decrease")) {
			if (i > 1) {
				i--;
			}
		}
		if ($(this).is("#add")) {
			i++;
		}
		$("#number").find('input').val(i);
		price();
		$("#banben .row .col-5").triggerHandler('click');
	});
	$("#number input").blur(function () {
		price();
	});
/*	$("input[type='radio']").click(function () {
		if ($(this).attr('checked') == "ture") {
			
			
		} else {
			
			$(this).attr('checked','false');
			alert("xx");
		}
		var $radio = $(this);
    if ($radio.data('waschecked') == true){
      $radio.prop('checked', false);
      $radio.data('waschecked', false);
	$(this).parents('.row.p-4.border').removeClass('active');
    } else {
      $radio.prop('checked', true);
      $radio.data('waschecked', true);
		$(this).parents('.row.p-4.border').addClass('active');
    }
	})*/
	$("#baoxian .row.p-4.border").click(function () {
		var name = $(this).find('small').eq(0).text();
		var pp = $(this).find('span.text-secondary').text();

		var xs = "<div class='row justify-content-between mb-2' id='bb'><span>" + name + "</span><span>" + pp + "</span></div>";

		if ($(this).find("input[type='radio']").prop('checked')) {
			$(this).removeClass('active').find('input[type="radio"]').removeAttr('checked');
			$("#bb").remove();
		} else {
			$(this).addClass('active').find('input[type="radio"]').attr('checked', 'checked');
			$(this).siblings('#baoxian .row.p-4.border').removeClass('active').find('input[type="radio"]').removeAttr('checked');
			$("#bb").remove();
			$("#msg").find('.row.justify-content-between.mb-2:last').after(xs);
		}
		price();
	});
	$("#moreb .row.p-4.border").click(function () {
		var name = $(this).find('small').eq(0).text();
		var pp = $(this).find('span.text-secondary').text();
		var xs = "<div class='row justify-content-between mb-2' id='mb'><span>" + name + "</span><span>" + pp + "</span></div>";

		if ($(this).find("input[type='radio']").prop('checked')) {
			$(this).removeClass('active').find('input[type="radio"]').removeAttr('checked');
			$("#mb").remove();
		} else {
			$(this).addClass('active').find('input[type="radio"]').attr('checked', 'checked');
			$("#msg").find('.row.justify-content-between.mb-2:last').after(xs);
		}
		price();
	});

})
