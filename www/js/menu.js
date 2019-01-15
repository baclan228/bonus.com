$(document).ready(function(){
	$('#panel').click(function(){
		if( $(this).attr('class') == 'close' ){
			$('content').css('display','block');
			$('#men').css('transform', 'rotate(360deg)');
			$('#men').css('transition', '2.5s');
			$(this).attr('class','open');
		}else{
			$('content').css('display','none');
			$('#men').css('transform', 'rotate(-360deg)');
			$(this).attr('class','close');
		}		
	});
});

function timer(){
 
    var hour = document.getElementById('hour').innerHTML;
    var minute = document.getElementById('minute').innerHTML;
    var second = document.getElementById('second').innerHTML;
    var end = false;
     
    if( second > 0 ) second--;
    else{
        second = 60;
         
        if( minute > 0 ) minute--;
        else{
            second = 60;
             
            if( hour > 0 ) hour--;
            else end = true;
        }
    }
 
    if(end){
        clearInterval(intervalID);
		$('#pol').slideDown('#pol').css('display', 'block');
		$('.reklama').slideDown('.reklama').css('display', 'block');
    }else{
        document.getElementById('hour').innerHTML = hour;
        document.getElementById('minute').innerHTML = minute;
        document.getElementById('second').innerHTML = second;
    }
}
window.intervalID = setInterval(timer, 1000);