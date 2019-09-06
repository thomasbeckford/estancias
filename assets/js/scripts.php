<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">


</script>



<script>




 $(document).ready(function(){

if(window.localStorage.getItem("lang") === null){
  window.localStorage.setItem('lang', 'spa');
} 

var url = window.location.href.split('/')
var location = url[url.length-1]
$('a[href$="' + location + '"]').addClass('active')


let lang = window.localStorage.getItem('lang');

  console.log(lang)
  
  $(".spanish").css("display", "none");

   if(window.localStorage.getItem("lang") == "spa"){
    $(".spanish").css("display", "none");
    $(".english").css("display", "block");
    $(".englishtext").css("display", "none")
    $(".spanishtext").css("display", "block") 	
   }
   if(window.localStorage.getItem("lang") == "eng"){
	$(".english").css("display", "none");   	
	$(".spanish").css("display", "block");
    $(".englishtext").css("display", "block")
    $(".spanishtext").css("display", "none")
   }
  

  $(".english").click(function(){
     
	
  window.localStorage.setItem('lang', 'eng');

    $(".english").css("display", "none");
    $(".spanish").css("display", "block");
    $(".englishtext").css("display", "block")
    $(".spanishtext").css("display", "none")
  });
  
  $(".spanish").click(function(){
  	
    window.localStorage.setItem('lang', 'spa');

    $(".spanish").css("display", "none");
    $(".english").css("display", "block");

    $(".englishtext").css("display", "none")
    $(".spanishtext").css("display", "block")

  });

});

</script>
