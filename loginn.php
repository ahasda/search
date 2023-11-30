





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<!-- <style>
		body{
            background: url("jr.jpg") ;
			 background-size: 100%; 
		}
		div{
			
			width: 50%;	
			margin: 100px 15px 15px 15px;
			backdrop-filter: blur(200px);
			box-shadow: 0px 0px 20px #393E46 ;
			opacity: 0.7;
		}
		
	</style> -->
	
</head>
<body>

	<!-- <div>
		<input type="text" id="inp1">
	    <input type="text" id="inp2">
	</div>

<div id="box"></div>
<button id="btn">load</button> -->

<center>
	<br><br>
	<div>
		<form action="get.php" method="post" id="myform">
			<label>LOGIN HERE</label><br><br>
	        <input type="text" name="name" placeholder="username" required><br><br>
	        <input type="password" name="pass" placeholder="password" required><br><br>
	        <input id="submit" type="submit" value="submit">Submit</input>
		</form>
	</div>
	<!-- <div id="box"></div> -->
</center>
<br>


<script>

$(document).ready(function() {
	$('#submit').click(function(){
		let form = $('form');

		let ask=confirm('IS THIS YOUR CORRECT USERNAME AND PASSWORD ?');

		if (ask) {
			alert('THANK YOU FOR CONFIRMING');
		}
		else{
			alert('TRY AGAIN PLEASE');
			return false;
		}
		$.ajax({
			url: form.attr('action'),
			type: 'POST',
			data:$('myform input').serialize(),
            success: function(data){
            	// $('#box').html(data);
            	alert(data);
            },
		}); 
	});
	
});

</script>



 <!-- $(document).ready(function() {
	 	$('#btn').click(function(){
	 		$("#box").load('get.php')
	 	});
	 });

	 $('#btn').click(function() {
	 	let name=$('#inp1').val()
	 	let pass=$('#inp2').val() 
     
      //sending the post request to the server using jquery '$.post()' method.. 
		//It sends the values of "name" and "pass" as data to the PHP file called "get.php." After the server processes the data, it will send a response back to the client.

		$.post('get.php',{n:name,p:pass},function(data,status,xhr){  

          //This is a callback function that will be executed once the server responds to the POST request. It receives three parameters: "data" (the response from the server), "status" (the status of the request, like 'success' or 'error'), and "xhr" (the XMLHttpRequest object, which can provide additional information about the request).

			$('#box').html(data);
           
           //This line takes the "data" received from the server and updates the content of the HTML element with the ID "box" with that data. In other words, it displays the server's response inside the element with ID "box."

			console.log(status);
    
             // This line logs the "status" of the POST request to the browser's console. It helps you see whether the request was successful or encountered an error.

			console.log(xhr);

			//This line logs the XMLHttpRequest object to the console. It can provide more details about the request and response, useful for debugging purposes.

		});
	});


	//In summary, this code sets up a click event handler for a button. When the button is clicked, it takes the values from two input fields, sends them to the server using a POST request, and updates the content of an element with the response received from the server. It also logs the status of the request and the XMLHttpRequest object to the browser console for debugging purposes.
 --> 
 
</body>
</html>