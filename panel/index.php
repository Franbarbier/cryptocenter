
<!DOCTYPE html>

<html lang="es" style="overflow-x: hidden;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cryptocenter</title>
    <meta name="keywords" content="">
    <meta name="author" content="Cryptocenter">
	<meta name="description" content="">
	<meta name="robots" content="noindex,nofollow"/>
    <meta name="googlebot" content="noindex,nofollow"/>
	<!-- Fav Icon -->
	<link rel="icon" href="" type="image/x-icon"/>
	<link rel="shortcut icon" href="" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">



<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<style>
    /* naranja viejo f5911b */
/*naranja: #da8105*/
::selection{ background: #da8105; color: #131313 }
*{ margin: 0; padding: 0; }
a{ text-decoration: none; }
li{ list-style: none; }
body{ font-family: 'Montserrat'; overflow-x: hidden; background-image: linear-gradient(to bottom left, #0e0e0e , #121318); color: white;}
button, input{ font-family: 'Montserrat'; }

@media only screen and (min-width: 800px) {
body{
    width: 100%;
    height: 100vh;
}
body>div{
    padding: 10%;
}
#great-cont{
    align-items: flex-start;
    display: flex;
    justify-content: space-between;
}
#divisas-cont{
    width:50%;
}
#divisas-menu{
    display:flex;
    margin-bottom: 1%;
    width: 50%;
}
#divisas-menu li{
    margin-right: 3%;
    font-weight: 700;
    font-size: 1.5em;
    cursor: pointer;
    color: #545454;
}
li.active{
    /* background: linear-gradient( to top, #da8105 57%, #b36a05 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; */
    color: #da8105!important;
    /* text-shadow: 0px 0px 3px rgba(218, 129, 5, 0.5); */

}
#divisas-cont>div{
    box-shadow: 0px 0px 8px 0px rgba(0,0,0,1);
    padding: 6%;
    background: rgba(255,255,255,0.01);
    border-radius: 5px;
}
#divisas-cont table #dolar-cont table{
    /* border-collapse:separate;  */
    /* border-spacing:0 15px;  */
}
#divisas-cont table td{
    padding-bottom: 4%;
    font-size: 1.2em;
    /* display: block; */
}

.tags{
    font-weight: 600;
    color: #e4e4e4;
    width: 77%;
}
.editables{
    font-weight: 800;
    background: linear-gradient( to top, #da8105 57%, #b36a05 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

#dolar-cont{
    box-shadow: 0px 0px 8px 0px rgba(0,0,0,1);
    padding: 3%;
    background: rgba(255,255,255,0.01);
    border-radius: 5px;
    min-width: 40%;
}
#dolar-cont .tags{
    width:90%!important;
    
}

#dolar-cont td{
    padding-bottom: 5%;
    font-size: 1.2em;
    /* display: block; */
}

button{
    color: #da8105;
    padding: 5px 13px;
    border-radius: 5px;
    border: 1.5px dashed #da8105;
    font-weight: 500;
    font-size:.7em;
    background: none;
    text-transform: uppercase;
    cursor: pointer;
}
#dolar-cont button{
    margin-top: 5%
}
#toggle-cont{
    height: 1em;
    width: 3em;
    cursor: pointer;
    border-radius: 55px;
    /* border: 1px solid #3e3e3e; */
    box-shadow: inset 2px 2px 3px 0px rgba(0,0,0,0.8), inset -2px -2px 3px 0px rgba(255,255,255,.1);
    background-color: rgba(0,0,0,0.1);
    display: inline-block;
}
#toggle-slide{
    width: 50%;
    height: 100%;
    transition: .3s;
    transition-timing-function: ease-out;
    background: #101113;
    border-radius: 55px;
    box-shadow: 2px 2px 3px 0px rgba(0,0,0,0.7), -2px -2px 3px 0px rgba(255,255,255,0.1);
}
#toggle-cont ~ p{
    display: inline-block;
    font-size: .6em;
    font-weight: 600;
    padding-left: 5%;
    cursor: pointer;
    color: #545454;
}
#toggle-cont.active{
    background-color: rgba(218, 129, 7, .7);
}
#toggle-cont ~ p.active, #toggle-cont ~ span.active{
    color: #da8105;
    
}
#toggle-cont.active #toggle-slide{
    transform: translateX(100%);
}
#cronista-cont{
    display: flex;
    align-items: center;
    width: 50%;
}
.status{
    transform: translateY(22%);
}
.status span{
    background: linear-gradient( to top, #545454 57%, #545454 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
    cursor: pointer;
}
.status span.active{
    background: linear-gradient( to top, #da8105 57%, #b36a05 82%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}


}
</style>
</head>
<body>
<div>


    <ul id="divisas-menu">
        <li class="active">BTC</li>
        <li>ETH</li>
        <li>LTC</li>
        <li>DAI</li>
    </ul>
<div id="great-cont">
    <div id="divisas-cont">
        <div>
            
            <table>
                <tr>
                    <td class="tags">COMISION VENTA:</td>
                    <td class="editables">5%</td>
                </tr>
                <tr>
                    <td class="tags">COMISION COMPRA:</td>
                    <td class="editables">3%</td>
                </tr>
                <tr>
                    <td class="tags">COTIZACION ARS:</td>
                    <td class="editables">1.120.000</td>
                </tr>
                <tr>
                    <td class="tags">COTIZACION USD:</td>
                    <td class="editables">10.000</td>
                </tr>
                <tr>
                    <td class="tags">ESTADO:</td>
                    <td class="status">
                    <div id="toggle-cont">
                        <div id="toggle-slide">
                        </div>
                    </div>    
                    <span>ACTIVA</span></td>
                </tr>
            </table>
            <div>
                <button>Editar</button>
            </div>
        </div>
    </div>
    <div id='dolar-cont'>
        <table>
            <tr>
                <td class="tags">COTIZACION DOLAR:</td>
                <td class="editables">124</td>
            </tr>
        </table>
        <div id="cronista-cont">
            <div id="toggle-cont">
                <div id="toggle-slide">
                    
                </div>
            </div>
            <p>SINCRONIZAR CON EL CRONISTA</p>
        </div>
        <div>
            <button>Editar</button>
        </div>
    </div>
</div>


</div>
</body>
<script>
$( document ).ready(function() {

$( '#dolar-cont' ).delegate( "#cronista-cont", "click", function() {
   
    $(this).find('#toggle-cont').toggleClass('active')
    $(this).find('#toggle-cont ~ p').toggleClass('active')
});

$( '#divisas-cont' ).delegate( ".status", "click", function() {
   
   $(this).find('#toggle-cont').toggleClass('active')
   $(this).find('#toggle-cont ~ span').toggleClass('active')
});

});
</script>
</html>