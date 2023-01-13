var firstLoop = 0;

$(document).ready(function () {
	getData(LOGGED_USER.id)
});

function getData(member_id) {
	$.ajax({
		type: 'POST',
		url: API_URL + 'network/placement',
		data: {
			access_token: TOKEN,
			member_id: member_id,
			language: LANGUAGE,
		},
		success: function (data) {
			var result = JSON.parse(data);
			var tree_data = '';
			if (result.response == 'success') {
				var downline = result.data.downlines;
				var member = result.data.member;
				var sponsor = member.sponsorid;

				var lastExpandLink = '';
				var lastLink = '';

				if (downline.length > 0) {
					lastExpandLink = ' lastExpandable-hitarea';
				}
				if (downline.length > 0) {
					lastLink = ' lastExpandable';
				}

				tree_data += '<li class="expandable ' + lastLink + '">' +
					'<div class="hitarea expandable-hitarea ' + lastExpandLink + '"></div>' +
					member.f_name + ", " + member.l_name + ", " + downline.length +
					'<ul class="sponsored" id="tree_' + member_id + '" style="display: none;">';
				tree_data += '</ul></li>';
				if (downline.length > 0) {
					create_downline(downline);
				}
				document.getElementById("tree_" + sponsor).innerHTML += tree_data;
				$("#tree_" + sponsor).treeview({
					collapsed: false,
					animated: "medium",
					control: "#sidetreecontrol",
					prerendered: true,
					persist: "location"
				});
			} else {
				alert(result.data.error_msg);
			}
		}
	});
}

function create_downline(downlines) {
	var total = downlines.length;
	for (i = 0; i < downlines.length; i++) {
		getData(downlines[i].id)
	}
}
