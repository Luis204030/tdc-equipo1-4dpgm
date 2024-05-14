<HTML>
    <HEAD>
    <TITLE>JavaScript Index</TITLE>
    
    <script Language= "JavaScript">
    
    function goback(){
        alert("Good bye!");
        history.go(-1);
    }
    
    function gettheDate(){
        Todays = new Date();
        TheDate = "" + (Todays.getMonth()+1) +" / "+ Todays.getDate() + " / " +
        (Todays.getYear() + 1900)
        document.clock.thedate.value = 
        TheDate;
    }
    
    var timeID = null;
    var timerRunning = false;
    
    function stopclock (){
        if(timerRunning)
        clearTimeout(timerID);
        timerRunning = false;
    }
    
    function startclock (){
        stopclock();
        gettheDate();
        showtime();
    }
    
    function showtime (){
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()
        var timeValue = "" + ((hours > 12)? hours -12 :hours)
        timeValue += ((minutes < 10)? ":0" : ":") + minutes
        timeValue += ((seconds < 10)? ":0" : ":") + seconds
        timeValue += (hours >= 12)? "P.M." : "A.M."
        Document.clock.face.value = timeValue;
    
        timerID = 
        setTimeout("showtime()",1000);
        timerRunning = true;
        }
        </script>
        </HEAD>
    
        <BODY bgcolor="#00FFFF" onLoad="startclock()">
        <CENTER>
        <h2>Esto es un reloj hecho con JavaScript</h2>
        <table border>
        <tr>
        <td><form name="clock" onSubmit="0"></td>
        </tr>
    
        <tr>
        <td colspan=2>Hoy es: <input type= "text" name="thedate" size=12 value= ""></td>
        <td colspan=2>La hora es: <input type= "text" name="face" size=12 value= ""></td></form>
        </tr>
        </table>
        </CENTER>
    
        <hr>
        <center>
        <h3>
        [<a href="javascr.htm">Volver</a>]
        </h3>
        </center>
    
        </BODY>
        </HTML>

//PRIMER CODIGO
<html>
    <head>
        <meta charset = "utf-8">
        <title>Mi primer codigo</title>
    </head>
<body>
    <script type="text/javaScript">
        //programa que mostrara en pantalla "hola mundo"
        //Por medio de una variable

    var texto= "hola mundo"; //guardamos  en la variable texto"hola mundo"
        alert (texto); //imprimamos en pantalla la variable texto
    
        </script>
    </body>
</html>

//SEGUNDO CODIGO
<html>
    <body>
        <h2>javaScript Variables</h2>
        
        <p>pagina que muestra los datos del alumno</p>
        <p id="demo"></p>

        <script>
            var nombre = "Ivette";
            var apellido = "Torres";
            var direccion = "La presa";
            var edad = 17;
        
document.getElementById("demo").innerHTML = 
nombre + "<br>" + apellido + "<br>" + direccion + "<br>" + edad;

        </script>
    </body>
</html>

//TERCER CODIGO
<html>
    <title> Sumas </title>
    <script Language = "JavaScript">
    alert(4+4);
</script>
    </html>

//CUARTO CODIGO
<html>
    <title> Sumas </title>
    <script Language = "JavaScript">
    alert(5+2);
</script>
    </html>

//QUINTO CODIGO
<html>
    <head>
        <meta charset="utf-8">
        <title>Sumas</title>
    <input type="text" placeholder="dame valor" id="numero1"><br><br>
    <input type="text" placeholder="dame valor" id="numero2"><br><br>
    <input type="text" placeholder="dame valor" id="numero3"><br><br>
    <input type="text" placeholder="dame valor" id="numero4"><br><br>
    <input type="button" name="name" value="presioname" onclick="sumas();">
    </head>
</html>
<script type="text/javaScript">
    function Sumas()
    {
        var valor1=parselnt(document.getElementById('numero1').value);
        var valor2=parselnt(document.getElementById('numero2').value);
        var valor3=parselnt(document.getElementById('numero3').value);
        var valor4=parselnt(document.getElementById('numero4').value);
   var resultado;
   resultado=valor1+valor2+valor3+valor4;
   alert("el valor de las suma es:"+resultado)
    }
    </script>
    </body>
    </html>

//QUINTO CODIGO CON COMENTARIOS

<html>
    <head>
        <meta charset="utf-8">
        <title>Sumas</title>
    
<!--sirve para darle un valor a la variable de el lado de la pagina visible para el cliente-->
    <input type="text" placeholder="dame valor" id="numero1"><br><br>
    <input type="text" placeholder="dame valor" id="numero2"><br><br>
    <input type="text" placeholder="dame valor" id="numero3"><br><br>
    <input type="text" placeholder="dame valor" id="numero4"><br><br>
    <input type="button" name="name" value="presioname" onclick="sumas();">
    </head>
</html>
<script type="text/javaScript">
    function Sumas()
    {
        var valor1=parselnt(document.getElementById('numero1').value);
        var valor2=parselnt(document.getElementById('numero2').value);
        var valor3=parselnt(document.getElementById('numero3').value);
        var valor4=parselnt(document.getElementById('numero4').value);
<!-- el valor que resivieron las variables van aqui--> 
  var resultado;
   resultado=valor1+valor2+valor3+valor4;
   alert("el valor de las suma es:"+resultado)
    }
<!--la suma de las variables iran el la variable RESULTADO-->    

    </script>
    </body>
    </html>

//codigo de arreglos

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <TITLE>Arreglos</TITLE>
</head>
</html>

<p id="dato1">Tiempo seleccionado </p>

<p id="dato2">meses seleccionado </p>

<p id="dato3">colores seleccionado </p>

<p id="dato4">materiales seleccionado </p>

<p id="dato5">marcas seleccionado </p>

<script type="text/javascript">

var tiempo=["segundos","minutos","horas","dias","semanas","meses","años","lustros","sexion","decada"];

var meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre"];

var colores=["azul","rojo","verde","naranja","amarillo","blanco","negro","morado","cafe","gris"];

var materiales=["matematicas","ingles","fisica","español","biologia","historia","geografia","educacion fisica","quimica","geometria"];

var marcas=["nike","newbalance","vans","DC","supreme","gucci","lives","converse","skecher","lui buton"];

var dato1=tiempo [9];
var dato2= meses [8];
var dato3= colores [9];
var dato4=materiales [5];
var dato5=marcas [3];

document.getElementById("dato1").textContent += dato1
document.getElementById("dato2").textContent += dato2
document.getElementById("dato3").textContent += dato3
document.getElementById("dato4").textContent += dato4
document.getElementById("dato5").textContent += dato5


</script>
