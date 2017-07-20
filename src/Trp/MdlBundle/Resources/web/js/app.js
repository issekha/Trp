jQuery(document).ready(function ($) {

	$('.report').click(function (e) {

		e.preventDefault();

		var $this = $(this);
		var $com_id = $this.data('id');
		var $hot_com = $('content');

		$("#comment-"+$com_id).css({ opacity: 0.1 });
		$("#childComment-"+$com_id).css({ opacity: 0.1 });
		$("#subChildComment-"+$com_id).css({ opacity: 0.1 });
		$("#lastChildComment-"+$com_id).css({ opacity: 0.1 });

		
		$.ajax({
			url: '/admin/report/'+$com_id,
			type: 'GET',
					
		});

	});
	
	$('.reply').click(function (e) {

		e.preventDefault();
		var $form = $('#form-comment');
		var $this = $(this);
		var $com_id = $this.data('id');
		var $comment = $('#comment-'+ $com_id)
		
		$comment.after($form);
		$("#comment-"+$com_id).css({ opacity: 0.1 });
		
		

});

})