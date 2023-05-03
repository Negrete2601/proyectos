<div class="nv">
<div class="contentnv">
<h1 class="page-header">Nuevo Usuario
</h1>
<ol class="breadcrumb">
  <li><a href="?c=Usuario">Usuario</a></li>
  <li class="active">Nuevo Usuario</li>
</ol>
<form id="validation-form" method="get"> 
<!---Nombre--->   
    <div class="form-group">
        <label for="nombre">Nombre</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="nombre" id="nombre"/>
    </div>
      </div>
<!---Correo--->     
    <div class="form-group">
        <label for="email">Email</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <div class="clearfix">
        <input type="email" name="email" id="email"/>
        </div>
    </div>
    </div>
<!---Contraseña--->    
    <div class="form-group">
        <label for="password">Contraseña</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-light fa-lock"></i></span>
        <input type="password" name="password" id="password" />
    </div>
    </div>
<!---Confirmar Contraseña--->
    <div class="form-group">
        <label for="password2">Confirmar Contraseña</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-light fa-lock"></i></span>
        <input type="password" name="password2" id="password2" />
    </div>
    </div>
<div class="checkbox">
<label><input type="checkbox">Remember me</label>
</div>
<!---Fecha de nacimiento--->
<div class="form-group">
        <label for="birthday">Fecha de Nacimiento</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-light fa-calendar"></i></span>
        <input id="birthday" type="text" name="birthday" value="" class="calendario form-control" placeholder="Ingrese su fecha de nacimiento" />
    </div>
</div>
<!---Edad--->
<div class="form-group">
        <label for="edad">Edad</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="fa-solid fa-champagne-glasses"></i></span>
        <input input id="spinner" name="value" title="Preguntamos tu edad con fines estadisticos."/>
    </div>
</div>
<!---Rango fechas--->
<div class="form-group">
        <label>En que rango de fechas requiere nuestros servicios</label>

        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-light fa-calendar"></i></span>
        <input id="from" type="text" name="password" value="" class="calendario form-control" placeholder="desde" data-validacion-tipo="requerido|date" />
    <span class="input-group-addon"><i class="fa fa-light fa-calendar"></i></span>
        <input id="to" type="text" name="password" value="" class="calendario form-control" placeholder="Hasta" data-validacion-tipo="requerido|date" />
        
    </div>
</div>
<!---Presupuesto--->
<div class="form-group">
        <label for="amount">Presupuesto para realizar el proyecto</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="fa-sharp fa-solid fa-money-bill-1-wave fa-beat"></i></span>
        <input type="text" id="amount"  style="border:0; color:#f6931f; font-weight:bold;" title="Preguntamos tu edad con fines estadisticos." class="form-control"/>

    </div>
            <div class="ui-slider-range ui-widget-header ui-corner-all slider-range-min"></div>
<!---Pais--->
<div class="form-group">
        <label for="form-field-select-1">País</label>
        <div class="input-group">
        <span class="input-group-addon"><i class="fa-solid fa-location-dot"></i></span>
        <select class="form-control" id="form-field-select-1">
                                                                <option value=""></option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="ME">Mexico</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WA">Washington</option>
                                                                <option value="WV">West Virginia</option>
                                                                <option value="WI">Wisconsin</option>
                                                                <option value="WY">Wyoming</option>
                                                            </select>
    </div>
</div>
<!---mask telefono--->
<div>
    <label for="phone">Phone <small class="text-warning">(999) 999-9999</small></label>
       <div class="input-group">
           <span class="input-group-addon">
           <i class="ace-icon fa fa-phone"></i></span>
           <input class="form-control input-mask-phone" type="text" id="phone" name="phone">
       </div>
</div>
<br>
<br>
<!---Inicia caja de list box y radio botones--->
<div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box">
                                                <div class="widget-header">
                                                    <h4 class="widget-title">Suscripción</h4>

                                                    <div class="widget-toolbar">
                                                    <a href="#" data-action="collapse">
                                                    <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>


                                                        <a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                    <br>
                                            <div class="control-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                                        <span class="lbl"> Recibir correos</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                                        <span class="lbl"> choice 2</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                        <span class="lbl"> choice 3</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                                    </div>
                                                    </div>
                                                </div>
                                        
                                        </div><!-- cierre col -->

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box">
                                                <div class="widget-header">
                                                    <h4 class="widget-title">Genero</h4>

                                                    <span class="widget-toolbar">
                                                        <a href="#" data-action="settings">
                                                            <i class="ace-icon fa fa-cog"></i>
                                                        </a>

                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>

                                                        <a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
                                                    </span>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                            <div class="control-group">
                                                <br>
                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="ace">
                                                        <span class="lbl"> Femenino</span>
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="ace">
                                                        <span class="lbl"> Masculino</span>
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="ace">
                                                        <span class="lbl"> Otro</span>
                                                    </label>
                                                </div>
                                                <br>
                                            </div>
                                                </div>
                                            </div>
                                        </div><!-- /.span -->
                                    </div>
                                </div>
    
    <div class="text-right">
        <button class="btn btn-success" id="finish" type="submit">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
    </div>
</form>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.input-mask-phone').mask('(999) 999-9999');
});
</script>
<!---validaciones--->
<script>
 jQuery(function($) {
    $('#validation-form').validate({

    rules:{
     nombre:{required:true, minlength: 5},
     email:{required:true, email:true},
     password: {required: true, minlength: 5},
     password2: {required: true, minlength: 5,equalTo: "#password"},
     birthday:{required: true , date:true},
     phone:{required: true, minlength: 10},
    },
    messages:
    {
    nombre:{required:'El campo es requerido', minlength:'El minimo permitido son 5 caracteres'},
    email:{required:'El campo es requerido', email:'El formato email es incorrecto'},
    password: { required: "Ingrese una contraseña.", minlength: "Contraseña Insegura."},
    password2: { required: "Ingrese una contraseña.", minlength: "Contraseña Insegura."},
    birthday:{required: "Ingrese fecha", date:"formato fecha incorrecto"},
    phone:{required:'El campo es requerido', minlength:'El minimo permitido son 10 caracteres'},
    },

                    highlight: function (e) {
                        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                    },
            
                    success: function (e) {
                        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                        $(e).remove();
                    },
            
                    errorPlacement: function (error, element) {
                        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                            var controls = element.closest('div[class*="col-"]');
                            if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                            else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                        }
                        else if(element.is('.select2')) {
                            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                        }
                        else if(element.is('.chosen-select')) {
                            error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                        }
                        else error.insertAfter(element.parent());
                    },
            
                    submitHandler: function (form) {
                    },
                    invalidHandler: function (form) {
                    }
    });
});  
</script>
