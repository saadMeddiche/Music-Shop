$(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');  
    });
      
    
    $(document).on('click','.pass_show .ptxt', function(){ 
    
    $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
    
    $(this).parent().find(".form-control").attr('type', function(index, attr){
        
        return attr == 'password' ? 'text' : 'password'; }); 
    
});  