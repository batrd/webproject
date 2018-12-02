// JavaScript Document
$.ajax({
	url:'php/get_p.php',
	type:'POST',
	data:{
		pname:"phone"
	},
	success:function(result){
		$("#phone .row.flex-wrap").html(result);
	},
	error:function(){
		console.log('错误');
	}
});
$.ajax({
	url:'php/get_p.php',
	type:'POST',
	data:{
		pname:"jiadian"
	},
	success:function(result){
		$("#jiadian .zz").before(result);
	},
	error:function(){
		console.log('错误');
	}
});
$.ajax({
	url:'php/get_p.php',
	type:'POST',
	data:{
		pname:"zhineng"
	},
	success:function(result){
		$("#zhineng .zz").before(result);
	},
	error:function(){
		console.log('错误');
	}
});
$.ajax({
	url:'php/get_p.php',
	type:'POST',
	data:{
		pname:"peijian"
	},
	success:function(result){
		$("#peijian .zz").before(result);
	},
	error:function(){
		console.log('错误');
	}
});
$.ajax({
	url:'php/get_p.php',
	type:'POST',
	data:{
		pname:"zhoubian"
	},
	success:function(result){
		$("#zhoubian .zz").before(result);
	},
	error:function(){
		console.log('错误');
	}
});
