
$(".comment").click(function() {
  
   // var str =(".Write-her").val();
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes();
    var dateTime = date+' '+time;

    $( ".All-comment" ).append( ' <div class="be-img-comment">	<a href="blog-detail-2.html"> </a>'+
'</div>'+
'<div class="be-comment-content">'+
    '<span class="be-comment-name">'+
        '<a >Default</a>'+
    '</span> <span class="be-comment-time">'+
        '<i class="fa fa-clock-o"></i> '+dateTime+'</span>'+
    '<p class="be-comment-text">'+
      ' '+$(".Write-her").val()+' '+
      '</p>'+
'</div>');

$('.Write-her').attr('placeholder' ,'writ...');

  });
////////////////
