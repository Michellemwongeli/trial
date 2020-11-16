// let form = document.getElementById("form")

// form.addEventListener("submit", validate)

// function validate(event){
// 	event.preventDefault()
// 	let p1 = document.getElementById(password).value
// 	let p2 = document.getElementById(confirm).value
// 	if(p1!=p2){
// 		alert("Sorry, the two passwords do not match")
// 	}
// 	else{
// 		alert("signed up successfully")
// 	}
// }


 $("#signup-form").submit( function(event){
        
        event.preventDefault();
        
        if ( $("#password").val() != $("#confirm").val() ){
            alert("Sorry, the two passwords do not match!")
            
            return false;
        }
         
        data = new FormData(this);
        data.append("signup", true);





		$.ajax({
		  url: 'server.php',
		  data: data,
		  processData: false,
		  contentType: false,
		  type: 'POST',
		  success: function(response){
		    console.log(response);
		  }
		});
     
     
      
}); 