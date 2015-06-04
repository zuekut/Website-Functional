// Back-to-top
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
});
//Back-to-top scroll to top
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

/*Alerts*/



window.setTimeout(function() {
    $("#alert-notickets").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 10000);

function validate()
{
    if( document.onedayform.formamount.value == "" )
    { $("#alert-notickets").show();
    }
}

/*scroll to div*/
$(document).ready(function(){
    
    
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        
	    });
	});
    
});

/*Stop youtube playback in lineup.php*/

///*Requires jQuery*/
// $('.modal').bind('hide', function () {
//	var iframe = $(this).children('div.modal-body').find('iframe'); 
//	var src = iframe.attr('src');
//	iframe.attr('src', '');
//	iframe.attr('src', src);
//});


/*countdown*/
$(function(){
	
	var note = $('#note'),
		ts = new Date(2015, 6, 24),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " min" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " sec" + ( seconds==1 ? '':'s' ) + " <br />";
			
			if(newYear){
				message += "left until Wood Festival!";
			}
			else {
				message += "left until Wood Festival!";
			}
			
			note.html(message); 
		}
	});
	
});


