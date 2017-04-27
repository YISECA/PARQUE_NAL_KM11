@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1">Caminata  PARQUE NACIONAL - KM 11  el 30 de ABRIL de 2017</div>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 

                                        <div class="wrap"><img src="public/Img/parque.jpg"  height="400">

                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/parque1.jpg"  height="400">

                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/parque3.jpg"  height="400">

                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>

                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <h2>Ubicación</h2>

                        <p><font size="3">El parque Nacional Enrique Olaya Herrera está ubicado en la localidad de Santa Fe, cuenta con tres sectores: Sector cultural, Sector deportivo y recreativo y la parte alta de montaña donde se encuentran varios senderos como el que nos conduce a la Vía de   Choachí. 
                        A la altura del Km 11 de esta Vía que es límite de la ciudad pero aún es localidad de Santa Fe encontramos un ecosistema de sub páramo e inicio del páramo en la zona rural y veredal de El Verjón. Un lugar increíble para observar la ciudad y disfrutar de las montañas que nos rodean.</font></p>

                        <h2>Descripción del recorrido </h2>

                        <p><font size="3">El recorrido da inicio en la torre del reloj del parque Nacional, donde el Guía de caminatas hace un calentamiento previo y socializa las indicaciones para el recorrido. Continúa por la parte alta del parque y finaliza en la vía que conduce al municipio de Choachí. Pasando por excelentes miradores y disfrutando de toda una reserva de vida de nuestra ciudad.</font></p>

                        <!--<h2>Durante el recorrido se visitaran los siguientes atractivos:</h2>
                        <ul class="ul_inicio">
                            <font size="3">
                            <li>Históricos</li>
                            <li>Culturales</li>
                            <li>Arquitectónicos</li>
                            <li>Hídricos</li>
                            <li>Ecosistema de niebla y sub- páramo</li>
                            </font>
                        </ul>-->
                        <br>

                        <font size="4"><center><table width="1000">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Punto de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Torre del Reloj parque Nacional</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Fecha</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Domingo 30 de Abril 2017</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hora de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>8:00 a.m</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Cupo Máximo</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>40 Personsa</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Rango de Edad</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>12 - 60 años</p>

                                        </td>

                                    </tr>



                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Altitud</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hasta 3.200  m.s.n.m</td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Temperatura</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>14°</p>

                                        </td>

                                    </tr>
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Nivel</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Muy Alto</p>

                                        </td>

                                    </tr>
                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Tiempo de recorrido</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>6 horas</p>

                                        </td>

                                    </tr>
                                      <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Acceso</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Por la Cra. 7° y Cra. 5 con calles 39 y 36.</p>

                                        </td>

                                    </tr>
                                       <tr valign="top">

                                        <td colspan="2" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>AL FINALIZAR:</p>
<p>Es importante tener en cuenta que se finaliza en la  Vía Choachí, Solo hay una ruta de SITP (Bicentenario – El Verjón) o en servicio  intermunicipal. </p>

                                        </td>

                                    </tr>
                                     

                        </table></center></font>

                        <h2>Recomendaciones</h2>

                        <ul class="ul_inicio">

                            <font size="3">

                                <li>Llevar ropa cómoda</li>
                            
                                <li>Llevar bloqueador solar</li>

                                <li>Hidratación</li>

                                <li>Calzado cómodo</li>

                                <li>Llevar fotocopia carné de la eps</li>

                                <li>Refrigerio</li>

                                <li>Medicamentos personales </li>

                                <li>No se permiten mascotas </li>

                                <li>Abstenerse de participar: mujeres en estado de embarazo, personas que tengan problemas de salud complejos, Mayores de 60 años y menores de 12 años. </li>

                                <li><ins>Abstenerse de asistir si no se encuentra inscrito</ins></li>
                            </font>

                            <br>

                        </ul> <a class="btn btn-info" href="registro">Registrarse</a> </div>

                </div>

            </div>

        </div>

</section>

@stop