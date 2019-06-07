 <html>
 <head>
  <title>Anuncio</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">Cadastro de Anúncios</h1>
   <br />
   <div align="right">
    <button type="button" id="modal_button" class="btn btn-info">Adicionar</button>
    <!-- It will show Modal for Create new Records !-->
   </div>
   <br />
   <div id="result" class="table-responsive"> <!-- Data will load under this tag!-->
   </div>
  </div>
  











<!-- This is Customer Modal. -->
<div id="customerModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Inserir</h4>
   </div>
   <div class="modal-body">
    <label>Titulo</label>
    <input type="text" name="TITULO" id="TITULO" class="form-control" />
    <br />
      <label>Descrição</label>
    <input type="text" name="DESCRICAO" id="DESCRICAO" class="form-control" />
    <br />
	
	  <label>Valor</label>
    <input type="text" name="PRECO" id="PRECO" class="form-control" />
    <br />
	
	  <label>localização</label>
   <textarea class="form-control" rows="5" id="LOCALIZACAO"></textarea>
    <br />
	
	
	<label>Foto</label>
    <input type="file" name="IMAGEM" id="IMAGEM" class="form-control" />
    <br />
	
	
	
	
	
   </div>
   <div class="modal-footer">
    <input type="hidden" name="customer_id" id="customer_id" />
    <input type="submit" name="action" id="action" class="btn btn-success" />
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	   </div>
	  </div>
	 </div>
	</div>

 </body>
</html>





<script>


$(document).ready(function(){
 fetchUser(); //This function will load all data on web page when page load
 function fetchUser() // This function will fetch data from table and display under <div id="result">
 {
  var action = "Load";
  $.ajax({
   url : "anucioDAO.php", //Request send to "action.php page"
   method:"POST", //Using of Post method for send data
   data:{action:action}, //action variable data has been send to server
   success:function(data){
    $('#result').html(data); //It will display data under div tag with id result
   }
  });
 }

 //This JQuery code will Reset value of Modal item when modal will load for create new records
 $('#modal_button').click(function(){
  $('#customerModal').modal('show');
  $('#TITULO').val(''); 
  $('#DESCRICAO').val(''); 
  $('#IMAGEM').val(''); 
  $('#PRECO').val(''); 
  $('#LOCALIZACAO').val(''); 
  $('.modal-title').text("Adicionar Anúncio"); 
  $('#action').val('Salvar'); 
 });

 
 $('#action').click(function(){
  var TITULO = $('#TITULO').val(); 
  var DESCRICAO = $('#DESCRICAO').val(); 
  var PRECO = $('#PRECO').val();
  var LOCALIZACAO = $('#LOCALIZACAO').val(); 
  
  var ID = $('#ID').val();  //Get the value of hidden field customer id
  var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
  
  
  if(TITULO != '' && DESCRICAO != '') 
  {
   $.ajax({
    url : "anucioDAO.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{
		TITULO:TITULO, 
		DESCRICAO:DESCRICAO, 
		PRECO:PRECO, 
		LOCALIZACAO:LOCALIZACAO, 
		
		ID:ID, 
		action:'create'
	},
	//Send data to server
    success:function(data){
     alert(data);    //It will pop up which data it was received from server side
     $('#customerModal').modal('hide'); 
     fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
    }
   });
  }
  else
  {
   alert("Both Fields are Required"); //If both or any one of the variable has no value them it will display this message
  }
 });

 ///This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
 $(document).on('click', '.update', function(){
  var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
  var action = "Select";   //We have define action variable value is equal to select
  $.ajax({
   url:"anucioDAO.php",   //Request send to "action.php page"
   method:"POST",    //Using of Post method for send data
   data:{id:id, action:action},//Send data to server
   dataType:"json",   //Here we have define json data type, so server will send data in json format.
   success:function(data){
    $('#customerModal').modal('show');   //It will display modal on webpage
    $('.modal-title').text("Update Records"); //This code will change this class text to Update records
    $('#action').val("Update");     //This code will change Button value to Update
    $('#ID').val(ID);     //It will define value of id variable to this customer id hidden field
    $('#TITULO').val(data.TITULO);  //It will assign value to modal first name texbox
    $('#DESCRICAO').val(data.DESCRICAO);  //It will assign value of modal last name textbox
	$('#PRECO').val(data.PRECO);  //It will assign value of modal last name textbox
	$('#LOCALIZACAO').val(data.LOCALIZACAO);  //It will assign value of modal last name textbox
   }
  });
 });

 //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
 $(document).on('click', '.delete', function(){
  var ID = $(this).attr("ID"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
  if(confirm("Deseja realmente excluir?")) //Confim Box if OK then
  {
   var action = "Delete"; //Define action variable value Delete
   $.ajax({
    url:"anucioDAO.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{ID:ID, action:action}, //Data send to server from ajax method
    success:function(data)
    {
     fetchUser();    // fetchUser() function has been called and it will load data under divison tag with id result
     alert(data);    //It will pop up which data it was received from server side
    }
   })
  }
  else  //Confim Box if cancel then 
  {
   return false; //No action will perform
  }
 });
});



</script>