$(function() {
	var $comment = $("#msg");
	$(":input:not(select)").focus(function() {
		$(this).addClass('focus');
	}).blur(function() {
		$(this).removeClass('focus');
	});
	$(".bigger").click(function() {
		if (!$comment.is(":animated")) {
			if ($comment.height() < 200) {
				$comment.animate({
					height: '+=50'
				}, 400);
			} else {
				alert("你已经放大到最大长度了！")
			}
		}
	});
	$(".smaller").click(function() {
		if (!$comment.is(":animated")) {
			if ($comment.height() > 50) {
				$comment.animate({
					height: '-=50'
				}, 400);
			} else {
				alert("长度太短，你无法缩放了！")
			}
		}
	});
	$("#CheckedALL").click(function() {
		$('[name=items]:checkbox').each(function() {
			this.checked = true;
		});
	});
	$("#CheckedNo").click(function() {
		$('[name=items]:checkbox').each(function() {
			this.checked = false;
		});
	});
	$("#CheckedRed").click(function() {
		$('[name=items]:checkbox').each(function() {
			this.checked = !this.checked;
		});
	});

	$("#send").click(function() {
		var $parent = $(this).parents(".u3");
		$parent.find('.str').remove();
		var str = "你选中的是：\r\n";
		$('[name=items]:checkbox:checked').each(function() {
			str += $(this).val() + "\r\n";
		});
		var content = "<p class='str' style='font-size:12px'>" + str + "</p>";
		$parent.append(content);
	});
	/*			$("#CheckedSel").click(function(){
						var flag=true;
						$('[name=items]:checkbox').each(function(){
							if(!this.checked){
								flag=false;
							}
						});
						$("#CheckedSel").attr('checked',flag);
					});
					*/

	$("#add").click(function() {
		var $options = $('#select1 option:selected');
		$options.appendTo('#select2');
	});
	$("#add_all").click(function() {
		var $options = $('#select1 option');
		$options.appendTo('#select2');
	});
	$('#select1').dblclick(function() {
		var $options = $("option:selected", this);
		$options.appendTo("#select2");
	});
	$("#remove").click(function() {
		var $options = $('#select2 option:selected');
		$options.appendTo('#select1');
	});
	$("#remove_all").click(function() {
		var $options = $('#select2 option');
		$options.appendTo('#select1');
	});
	$('#select2').dblclick(function() {
		var $options = $("option:selected", this);
		$options.appendTo("#select1");
	});
	$(":input.required").each(function() {
		var $required = $("<strong class='high'>*</strong>");
		$(this).parent().append($required);
	});
	$("form :input[type=text],form :input[type=password]").blur(function() {
		var $parent = $(this).parent();
		$parent.find('.formtips').remove();
		if ($(this).is('#usn')) {
			if (this.value == "" || this.value.length < 4) {
				var errorMsg = '请输入正确的用户名！';
				$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
			} else {
				var okMsg = '输入正确！';
				$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
			}
		}
		if ($(this).is('#email')) {
			if (this.value == "" || (this.value != "" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))) {
				var errorMsg = '请输入正确的邮箱地址！';
				$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
			} else {
				var okMsg = '输入正确！';
				$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
			}
		}
		if($(this).is('#psd')){
			if(this.value==""){
				var errorMsg = '密码不能为空！';
				$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
			}else{
				var okMsg = '输入正确！';
				$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
			}
		}
		if ($(this).is('#ucomfirm')) {
			var num = $('#psd').val();
			if (this.value == num &&this.value!="") {
				var okMsg = '密码正确！';
				$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
			}else {
				var errorMsg = '两次输入密码不同！';
				$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
			}
		}
	}).keyup(function() {
		$(this).triggerHandler('blur');
	}).focus(function() {
		$(this).triggerHandler('blur');
	});
	$("#send_u1").click(function() {
		$(".required:input").trigger('blur');
		var numError = $('form .onError').length;
		if (numError) {
			return false;
		}
		alert('注册成功！');
	});
});