$("#xemkq").click(function(event) {
	/* Act on the event */
	$("#kq").empty();
	$(".error").empty();
	var diemToan 	= $("#toan").val();
	var diemLy 		= $("#ly").val();
	var diemHoa 	= $("#hoa").val();

	if (diemToan == "" || diemLy == "" || diemHoa == "") {
		$(".error").html("Vui lòng nhập đầy đủ điếm");
		return;
	}

	if (diemToan > 10 || diemToan < 0 || 
		diemLy > 10 || diemLy < 0 ||
		diemHoa > 10 || diemHoa < 0) {
		$(".error").html("Vui lòng nhập điềm từ 0 - 10");
		return;
	}

	$.ajax({
		url: 'calc.php',
		data: {Toan: diemToan, Ly: diemLy, Hoa: diemHoa},
		// Toan là pr : diemToan là giá trị
	})
	.done(function(data) {
		$("#kq").html(data);
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});