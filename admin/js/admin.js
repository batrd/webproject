// JavaScript Document
$(document).ready(function () {
	$(".sidebar-menu li").click(function () {
		var id = $(this).attr('class');
		$("#" + id).slideToggle();
		$(this).find('.fa.fa-angle-right').toggleClass('fa-rotate-90');
	});

	function time() {
		var Now = new Date();
		$("#date").text(Now.toLocaleDateString() + " " + Now.toLocaleTimeString());
	}
	setInterval(time, '1000');
	var w = $(window).width();

	$("#toogle-sidebar").click(function () {
		if (w < 768) {
			$("#sidebar").animate({
				left: '-300px'
			}, 500);
			$("#page-main").animate({
				left: '0px'
			}, 500);
		} else {
			$("#sidebar").animate({
				left: '-300px'
			}, 500);
			$("#page-main .container-fluid").animate({
				paddingLeft: '0px'
			}, 500);
			$("#nav").slideUp();
		}
	});
	$("#toogle-s").click(function () {
		if (w < 768) {
			$("#sidebar").animate({
				left: '0px'
			}, 500);
			$("#page-main").animate({
				left: '300px'
			}, 500);
		} else {
			$("#sidebar").animate({
				left: '0px'
			}, 500);
			$("#page-main .container-fluid").animate({
				paddingLeft: '250px'
			}, 500);
			$("#nav").slideDown();
		}
	});
	var pf = echarts.init(document.getElementById('phone-info'), 'light');
	var option = {
		textStyle: {
			color: '#fff'
		},
		title: {
			text: '手机类热销产品近7天销售情况',
			x: 'center',
			textStyle: {
				color: '#fff',
				fontSize: '15'
			}
		},
		tooltip: {},
		legend: {
			x: 'right',
			data: ['销量'],
			textStyle: {
				color: '#fff'
			}
		},
		xAxis: {
			data: ["小米8青春版", "小米6x", "小米Max3", "小米Mix3", "小米Mix2s", "小米8SE", "红米6Pro"]
		},
		yAxis: {},
		series: [{
			name: '销量',
			type: 'bar',
			data: [755, 300, 330, 254, 166, 561, 364],
			textStyle: {
				color: '#fff'
			}
		}]
	};
	pf.setOption(option);
	var pf2 = echarts.init(document.getElementById('phone-info2'), 'light');
	var option2 = {
		title: {
			text: '访问来源',
			x: 'center',
			textStyle: {
				color: '#fff',
				fontSize: '15'
			}
		},
		series: [{
			name: '访问来源',
			type: 'pie',
			radius: '65%',
			roseType: 'angle',
			data: [{
				value: 235,
				name: '视频广告'
			}, {
				value: 274,
				name: '联盟广告'
			}, {
				value: 310,
				name: '邮件营销'
			}, {
				value: 335,
				name: '直接访问'
			}, {
				value: 400,
				name: '搜索引擎'
			}]
		}]
	};
	pf2.setOption(option2);
	var pf3 = echarts.init(document.getElementById('phone-info3'));
	var option3 = {
		title:{
			text:'当月销售指标',
			x:'center',
			y:'bottom',
			textStyle:{color:'#fff'}
		},
		tooltip: {
			formatter: "56%"
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		series: [{
			radius: '80%',
			name: '业务指标',
			type: 'gauge',
			detail: {
				formatter: '56'
			},
			data: [{
				value: 56,
				
			}],
          
		}]
	};
	pf3.setOption(option3);
	var option4 = {
		title:{
			text:'近七天手机销售数量',
			x:'center',
			y:'bottom',
			textStyle:{color:'#fff'}
		},
		textStyle:{color:'#fff'},
    xAxis: {
        type: 'category',
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    },
    yAxis: {
        type: 'value',
    },
    series: [{
        data: [820, 932, 901, 934, 1290, 1330, 1320],
        type: 'line',
		
    }]
};
	var pf4 = echarts.init(document.getElementById('phone-info4'),'light');
	pf4.setOption(option4);
});
