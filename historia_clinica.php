<?php include('header.php'); ?>
    <div >
        <header>
            <!--Aqui va un carrusel-->
            <div class="row">
                <div class="text-center" >
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/rheumatology.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/rheumatology.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

        </header>
        <section>
            <header class="container text-center">
                <h1 class="display-3">Historia Clinica</h1>
                <p class="lead">
                    Ingrese los datos segun sea requerido
                </p>
            </header>

            <div class="container text-left">
                <div class="row">
                <div class="col">
                    <form action="">
                        
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" name="nombre" placeholder="Captura tu nombre" value="" class="form-control" id="nombre" /> 
                            </div>
                            
                            <div class="mb-3">
                                <label for="primer_apellido" class="form-label">Primer Apellido:</label>
                                <input type="text" name="primer_apellido" placeholder="Captura tu primer apellido" value="" class="form-control" id="primer_apellido" /> 
                            </div>

                            <div class="mb-3">
                                <label for="segundo_apellido" class="form-label">Segundo Apellido:</label>
                                <input type="text" name="segundo_apellido" placeholder="Captura tu segundo apellido" value="" class="form-control" id="segundo_apellido" />  
                            </div>

                            <div class="mb-3">
                                <label for="nacimiento" class="form-label">Fecha de nacimiento:</label>
                                <input type="date" name="nacimiento" placeholder="Nacimiento" value="" class="form-control" id="nacimiento" /> 
                            </div>

                            <!---->
                            <div class="row">
                                <label for="fracturas" class="form-label">Ha tenido fracturas?</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, describa cual</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- TEXT AREA
                            <div class="mb-3">
                                <label for="fracturas" class="form-label">Si contestó si, describa cual:</label>
                                <textarea name="descripcion_fractura" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            -->
                            <div class="row">
                                <label for="fracturas" class="form-label">Ha tenido alguna otra lesión grave?</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, describa cual</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>



                            <h4>Le han hecho las pruebas de: </h4>
                            <!--HEPATITIS-->
                            <div class="row">
                                <label for="fracturas" class="form-label">Hepatitis B</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, escriba sus resultados</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="fracturas" class="form-label">Hepatitis C</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, escriba sus resultados</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="fracturas" class="form-label">VIH</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, escriba sus resultados</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                
                            <div class="row">
                                <label for="fracturas" class="form-label">Ha tenido cirugias</label>
                                                
                                <div class="col col-lg-1">
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Si contestó que si, escribalas</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <h4>Historia Social </h4>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <label for="fracturas" class="form-label">¿Usted Fuma?</label>      
                                        <div class="col col-lg-2">
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                                <label for="" class="form-check">Si</label>
                                            </div>      
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                                <label for="" class="form-check">No</label>
                                            </div>
                                        </div>
        
                                        <div class="col">
                                            <input type="text" name="nombre" placeholder="Numero de paquetes al día" value="" class="form-control" id="nombre" /> 
                                            <input type="text" name="nombre" placeholder="¿Por cuantos años?" value="" class="form-control" id="nombre" /> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <label for="fracturas" class="form-label">¿Toma bebidas acoholicas?</label>      
                                        <div class="col col-lg-2">
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                                <label for="" class="form-check">Si</label>
                                            </div>      
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                                <label for="" class="form-check">No</label>
                                            </div>
                                        </div>
        
                                        <div class="col">
                                            <input type="text" name="nombre" placeholder="¿Con que frecuencia?" value="" class="form-control" id="nombre" /> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <label for="fracturas" class="form-label">¿Utiliza algún tipo de drogas?</label>      
                                        <div class="col col-lg-2">
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                                <label for="" class="form-check">Si</label>
                                            </div>      
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                                <label for="" class="form-check">No</label>
                                            </div>
                                        </div>
        
                                        <div class="col">
                                            <input type="text" name="nombre" placeholder="Enumere cuales" value="" class="form-control" id="nombre" /> 
                                            <input type="text" name="nombre" placeholder="¿Con que frecuencia?" value="" class="form-control" id="nombre" /> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <label for="fracturas" class="form-label">¿Usted trabaja?</label>      
                                        <div class="col col-lg-2">
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                                <label for="" class="form-check">Si</label>
                                            </div>      
                                            <div class="form-check">
                                                <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                                <label for="" class="form-check">No</label>
                                            </div>
                                        </div>
        
                                        <div class="col">
                                            <input type="text" name="nombre" placeholder="Ocupación" value="" class="form-control" id="nombre" /> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="fracturas" class="form-label">¿Recibe compensación por invalidez?</label>      
                                <div class="col col-lg-1">
                                    
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="1" class="form-check-input" id="fracturasSi" /> 
                                        <label for="" class="form-check">Si</label>
                                    </div>      
                                    <div class="form-check">
                                        <input type="radio" name="fracturas" placeholder="fracturas" value="0" class="form-check-input" id="fracturasNo" /> 
                                        <label for="" class="form-check">No</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <input type="text" name="nombre" placeholder="Cual es la razon" value="" class="form-control" id="nombre" />                                </div>
                            </div>
                                        
                            <!--INTERROGATORIO-->
                            <h3>Interrogatorio de sistemas</h3>

                            <div class="row">
                                <div class="col">
                                    <h4>Constitucional</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Fiebre recurrente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Perdida de peso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Cansancio todo el tiempo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Debilidad todo el tiempo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Intolerancia al frio/calor
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Endocrino</h4>
                                    <label for="Endocrino" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Enfermedad de la tiroides
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Cambio de la talla de sombrero
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Ojos</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Frecuente enrojecimiento de los ojos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Frecuente dolor en los ojos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Resequedad crónica en los ojos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Cambios recientes de la vision
                                        </label>
                                    </div>

                                </div>

                                <div class="col">
                                    <h4>Oídos/Nariz/Garganta</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Resequedad crónica en la boca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Frecuentes úlceras
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Ronquera crónica
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Pérdida de la audición
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h4>Respiratorio</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolor en el pecho al respirar profundo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Siente que le falta la respiración
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tos frecuente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Sibilancia frecuente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Ronquidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Pulmonía recurrente
                                        </label>    
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Asma
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Cardiovascular</h4>
                                    <label for="Endocrino" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolor en el pecho cuando se esfuerza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Esforzarse levemente resulta en una falta de aíre
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Desmayos recientes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Inflamación frecuente de los tobillos
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Gastrointestinal</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Acidez
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Náusea frecuente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Enfermedad de Crohn/Colitis ulcerativa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Síndrome del instestino irritable
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Sangre en las heces o heces negras
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Urinario</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolor al orinar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Sangre en la orina
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Cálculos en los riñones
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Infecciones frecientes de la vejiga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Úlceras genitales frecientes
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h4>Musculoesqueletal</h4>
                                    <label for="Musculoesqueletal" class="form-label">Marque las casillas correspondientes</label>
                                                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolor por todo el cuerpo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolor en articulaciones
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dolores musculares
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Rigidez corporal al despertarse
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Inflamacion en articulaciones
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Inflamacion extremidades (dedos de pies o manos)</label>
                                    </div>

                                </div>

                                <div class="col">
                                    <h4>Piel</h4>
                                    <label for="Constitucional" class="form-label">Marque las casillas correspondientes</label>
                                                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Cambios de pigmentación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Soriasis</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Erupciones cutaneas recurrentes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Picazón frecuente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Breve exposición al sol causa erupciones cutáneas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Cambios en uñas de manos y pies</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Picazón frecuente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Los puntos de los dedos pierden el color cuando hace frío</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Pérdida significativa de cabello</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <h4>Hematológico</h4>
                                    <label for="Hematológico" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Inflamación frecuente de los ganglios</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Ha recibido tratamiento para coágulos de sangre</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Sangrado en exceso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Frecuente sangrado nasal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Moretones en exceso</label>
                                    </div>

                                </div>

                                <div class="col">
                                    <h4>Neurológico</h4>
                                    <label for="Neurológico" class="form-label">Marque las casillas correspondientes</label>
                                                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Dolores de cabeza</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Convulsiones</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Entumencimiento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Adormecimiento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Sensación de hormigueo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Debilidad reciente en alguna parte del cuerpo</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <h4>Psiquíatrico</h4>
                                    <label for="Neurológico" class="form-label">Marque las casillas correspondientes</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Depresion</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Transtornos de sueño</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Problemas para dormir</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Ansiedad</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="constitucional">
                                        <label class="form-check-label" for="flexCheckDefault">Confusión</label>
                                    </div>
                                </div>
                            </div>

                            <!--PREGUNTAS DE EMBARAZO-->
                            <div class="row">
                                <div class="col">
                                    <label for="nombre" class="form-label">Numero de veces que ha estado embarazada:</label>
                                    <input type="text" name="nombre" placeholder="Captura la cantidad" value="" class="form-control" id="nombre" />                   
                                </div>
                                <div class="col">
                                    <label for="nombre" class="form-label">Número de hijos nacidos vivos:</label>
                                    <input type="text" name="nombre" placeholder="Captura la cantidad" value="" class="form-control" id="nombre" />                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="nombre" class="form-label">Número de pérdidas:</label>
                                    <input type="text" name="nombre" placeholder="Captura la cantidad" value="" class="form-control" id="nombre" />                   
                                </div>
                                <div class="col">
                                    <label for="nombre" class="form-label">Número de abortos:</label>
                                    <input type="text" name="nombre" placeholder="Captura la cantidad" value="" class="form-control" id="nombre" />                   
                                </div>
                            </div>
                            <div class="row">

                            </div>

                            
                            <div class="mb-3">
                                <label for="primer_apellido" class="form-label">Método anticonceptivo:</label>
                                <input type="text" name="primer_apellido" placeholder="Captura los metodos" value="" class="form-control" id="primer_apellido" /> 
                            </div>

                        <input type="submit" name="enviar" value="Guardar" class="btn btn-success"/>
                
                    </form>
                </div>
                </div>
            </div>
            
        </section>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php include('footer.php');  ?>