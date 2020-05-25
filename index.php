<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template de memorização</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
</head>
<body>
  <?php
     if(isset($_POST["submit"]))
        echo "<h1>Enviar foi colocado</h1>";
    ?>
   <div class="container">
     <h2 class="title">LEI Nº 5.172, DE 25 DE OUTUBRO DE 1966</h2><br><br>
      <form action="" method="POST">
       
           <p>Art. 175. Excluem o crédito tributário:<br> I - a i<input class=field name="p1" type="text" >;<br> II - a a<input class=field name="p1" type="text" ></p>
           <hr>
           <p>Art. 91. Do Fundo de Participação dos Municípios a que se refere o art. 86, serão atribuídos:   (Redação dada pelo Ato Complementar nº 35, de 1967)
<br>
I - <input class=field name="p5" type="text"> aos Municípios das Capitais dos Estados; 
<br>
II - <input class=field name="p5" type="text"> aos demais Municípios do País.</p>
          <hr>
    <p>Art. 103. Salvo disposição em contrário, entram em vigor:<br>

        I - os <input class=field name="p3" type="text"> a que se refere o inciso I do artigo 100, na data da sua publicação;<br>

        II - as decisões a que se refere o inciso II do artigo 100, quanto a seus efeitos normativos, <input class=field name="p3" type="text"> após a data da sua publicação;<br>

        III - os convênios a que se refere o inciso IV do artigo 100, na <input class=field name="p3" type="text">.</p>
     <hr>
   
           
       <input type="submit" value="Enviar!" name="submit">
       </form>
   </div>
    

</body>
</html>





