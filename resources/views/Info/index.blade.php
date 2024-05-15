@extends('layouts.layout')

@section('title', 'FUSA | Información')

@section('styles')
    <style>
        .accordion-button:not(.collapsed) {
            color: black;
            background-color: rgba(238, 135, 17, 0.637);
            box-shadow: inset 0 var(--bs-accordion-border-color);
        }
        .list-group-item{
            border: transparent;
        }
    </style>
@endsection

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Información</h2>
                    <ol>
                        <li><a href="../index.php">Inicio</a></li>
                        <li>Información</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Información Legal</h2>
                    <p>Todos los agentes ecónomicos (no personas naturales sin licencia) pueden contratar con nosotros
                        siempre que tengan personalidad jurídica para hacerlo, dígase CCS, CNA, Mipymes, TCP, PDL (proyectos
                        de desarrollo local), asociaciones y representaciones religiosas, empresas estatales y sucursales
                        extranjeras. A continuación se listan los requicitos legales necesarios para dicha contratación.</p>
                </div>

                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Documentos a presentar por las MIPYMES
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Escritura Pública de constitución</li>
                                    <li class="list-group-item list-group-item-action">Registro Mercantil</li>
                                    <li class="list-group-item list-group-item-action">Certifico del Banco o contrato de las cuentas</li>
                                    <li class="list-group-item list-group-item-action">Carnet de la ONAT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Documentos a presentar por TCP
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Carnet de identidad</li>
                                    <li class="list-group-item list-group-item-action">Carnet de cuentapropia o proyecto</li>
                                    <li class="list-group-item list-group-item-action">Carnet de la ONAT</li>
                                    <li class="list-group-item list-group-item-action">Último pago a la ONAT</li>
                                    <li class="list-group-item list-group-item-action">Tener tarjeta MLC 9226</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Documentos a presentar por CNA
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Escritura de Constitución </li>
                                    <li class="list-group-item list-group-item-action">Registro Mercantil</li>
                                    <li class="list-group-item list-group-item-action">Certificado de la ONEI</li>
                                    <li class="list-group-item list-group-item-action">Certificado de la ONAT</li>
                                    <li class="list-group-item list-group-item-action">Tarjeta magnética MLC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Documentos a presentar por Representaciones religiosas
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Certificado del MINJUS</li>
                                    <li class="list-group-item list-group-item-action">Documento que faculta a firmar contratos a su representante</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Documentos a presentar por Cooperativas Agropecuarias
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Acta de Constitución</li>
                                    <li class="list-group-item list-group-item-action">Certificación de Acuerdo del presidente de la cooperativa</li>
                                    <li class="list-group-item list-group-item-action">Cuenta bancaria en MLC</li>
                                    <li class="list-group-item list-group-item-action">Código REEUP</li>
                                    <li class="list-group-item list-group-item-action">Código NIT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Documentos a presentar por Sucursales Extranjeras en Cuba
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Escritura Pública </li>
                                    <li class="list-group-item list-group-item-action">Registro Mercantil</li>
                                    <li class="list-group-item list-group-item-action">Licencia de la Cámara de Comercio</li>
                                    <li class="list-group-item list-group-item-action">Resolución del MINCEX</li>
                                    <li class="list-group-item list-group-item-action">Tarjeta magnética en MLC o cuenta en MLC</li>
                                    <li class="list-group-item list-group-item-action">Carnet del representante en Cuba
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->
@endsection
