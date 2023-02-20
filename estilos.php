<style>
	/*arquivos salvos como css vão pro cache em algum lugar e qualquer mudança neles
	não surte efeito, considere isso como um 'pulo do gato'*/

    *{
    margin:0;
    box-sizing:border-box;
    font-family: 'Open Sans', sans-serif;
  }

  .db-display{
    min-width: 40%;
    max-width: 90%;
    border: 1px solid lightgray; 
    border-radius: 5px;
	position: relative;
	left: 50%;
	transform: translate(-50%, 0);
	text-align: center;
  }
  
  .column-head{
	font-weight: bold;
	background-color: lightblue;
  }
  
  .window{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
  }
  
  .button{
	padding: 5px;
	margin: 5px;
	font-size: 9pt;
	background-color: white;
	border: 1px solid rgba(0, 0, 0, 0);
	border-radius:10px;
	box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
  }
  
  .button:hover{
	background-color: ghostwhite;
	border: 1px solid rgba(0, 0, 0, 0);
	box-shadow: rgba(0, 0, 0, 0.2) 2.4px 2.4px 10px;
  }
  
  .button:active{
	background-color: white;
	border: 1px solid lightblue;
	box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
  }
  
  .container{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
  }
  .box{
    background: white;
    min-width: 20%;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
    padding:20px;
    border-radius:25px;
  }
  #inputField{
    display:block;
    width:100%;
    border:none;
    outline:none;
    border-bottom: 2px solid rgb(0 0 0 / 15%);
    padding:10px 30px;
    font-size:18px;
    box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
    border-radius:100vw;
  }
</style>