
<aside class="col-md-4 blog-sidebar">
  <div class="p-4 mb-3 bg-light rounded">
    <h5 class="text-dark">
      <div class="spanishtext"><i class="fas fa-envelope"></i> Haga su consulta</div>
      <div class="englishtext "><i class="fas fa-envelope"></i> Ask your question</div>
    </h5>
    <br/>
    <form onsubmit="sendmail(event)" id="myForm" method="POST" >
      <div class="input-group mb-2">
        <div class="input-group-prepend">
         <div class="input-group-text">@</div>
        </div>
         <!-- EMAIL -->
         <input name="emailsp" type="email" class="form-control spanishtext animated fadeIn" placeholder="Ingrese su email">
         <input name="emailen" type="email" class="form-control englishtext animated fadeIn" placeholder="Type your email">
        </div>
        <div class="form-group">
        <!-- MESSAGE -->
        <textarea class="form-control" name="message" id="exampleFormControlTextarea3" rows="4"></textarea>
       <label class="text-muted font-italic spanishtext animated fadeIn" for="exampleFormControlTextarea3">Maximo 200 palabras</label>
       <label class="text-muted font-italic englishtext animated fadeIn" for="exampleFormControlTextarea3">Max 200 words</label>
      </div>
     <input type="submit" name="send" value="Envie su consulta" class="btn btn-block btn-dark spanishtext animated fadeIn">
     <input type="submit" name="send" value="Send message" class="btn btn-block btn-dark englishtext animated fadeIn">
     </form>

    <p id="sent" class="text-muted font-italic d-none spanishtext animated fadeIn">Gracias!, responderemos a la brevedad</p>
    <p id="sent" class="text-muted font-italic d-none englishtext animated fadeIn">Thank you!, we will response in some minutes</p>
   
   </div>
  <div class="p-4 center">
   <img src="../assets/img/lamaipu/aside1.png" alt="horses" >
  </div>
</aside>


<script>
  

  function sendmail(e){
    e.preventDefault();
    if(e.target.emailsp.value){ var email = e.target.emailsp.value; }
    if(e.target.emailen.value){ var email = e.target.emailen.value;}
    
    var message = e.target.message.value;
    
    if(email && message){
      jQuery.ajax({
      type: "POST",
      url: './services/sendmail.php',
      dataType: 'json',
      data: {email: email, message: message},

      success: function (obj, textstatus) {
                    if( !('error' in obj) ) {
                        console.log("OK")
                    }
                    else {
                        console.log("ERROR");
                    }
              },
      error: function(err){
        console.log(err)
      }
});
  } else {
    console.log("Insert email and message")
  }

}

</script>

<?php 


  function sendMail($to, $msg)
    {
    
    }


?>
