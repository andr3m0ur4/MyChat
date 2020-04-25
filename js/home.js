$(document).ready(function() {
	$('#scrolling_to_bottom').animate({
		scrollTop: $('#scrolling_to_bottom').get(0).scrollHeight
	}, 1000)

	let height = $(window).height()
	$('.left-chat').css('height', (height - 92) + 'px')
	$('.right-header-content-chat').css('height', (height - 163) + 'px')

	setInterval(function() {
		// Atualiza após 1500ms
		$("#ChatMessages").load("include/display_messages.php?user_name=<?php echo $username; ?>")
	},1500)

	$("#ChatMessages").load("include/display_messages.php$user_name=<?php echo $username; ?>")
})
