/**
 * Xử lý load font size khi resize window
 */

// Xử lý thông số resize
function processResize(){
	let _this = $(window);

	console.log( _this.width());

	$.ajax({
		url: 'ajax/resizeClient.php',
		type: 'POST',
		data: {
			width: _this.width(),
			height: _this.height(),
		},
		success: function (res) {
			let res_json = JSON.parse(res);
			if (res_json && res_json.data) {
				let data = res_json.data;
				let root = document.querySelector(':root');
				for (const d in data) {
					root.style.setProperty(d, data[d]);
				}
			}
		}

	});
}

// Nghe sự kiện
// $(window).resize(function () {
// 	processResize();
// });

// Lần đầu
processResize();