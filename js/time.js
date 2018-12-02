// JavaScript Document
$(document).ready(function(){
function gettime(){
var time=new Date('2019-1-1 20:00:00');
var now=new Date();	
var total= (time-now)/1000;
var day = parseInt(total / (24*60*60));//计算整数天数
var afterDay = total - day*24*60*60;//取得算出天数后剩余的秒数
var hour = parseInt(afterDay/(60*60));//计算整数小时数
var afterHour = total - day*24*60*60 - hour*60*60;//取得算出小时数后剩余的秒数
var min = parseInt(afterHour/60);//计算整数分
var afterMin = parseInt(total - day*24*60*60 - hour*60*60 - min*60);
$(".time").eq(0).text(hour);
$(".time").eq(1).text(min);
$(".time").eq(2).text(afterMin);
}
setInterval(gettime,'1000');
});

