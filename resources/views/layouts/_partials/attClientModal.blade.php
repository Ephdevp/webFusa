                    <!--Modal-->
                    <div class="modal fade text-dark" id="form" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="{{route('message')}}" method="post">
                                        @csrf
                                        <div class="cf-cover">
                                            <div class="session-title row text-center">
                                                <h2>Contáctenos</h2>
                                                <p>Rellene el siguiente formulario y haganos llegar sus inquietudes.
                                                    Todos los campos marcados son obligatorios</p>
                                            </div>
                                            <div class="form-row row mr-4">
                                                <div class="col-md-6 mb-2">
                                                    <label for=""><i class="bi bi-record-circle-fill" style="color:#EE9734"></i><b> Nombre de cliente</b></label>
                                                    <input type="text" placeholder="nombre"
                                                        class="form-control" name="remitente" required>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                        <label for=""><i class="bi bi-record-circle-fill" style="color:#EE9734"></i><b> Número de telefono</b></label>
                                                        <input type="text" placeholder="número de teléfono"
                                                            class="form-control" name="telefono" pattern="[0-9]{8,15}" required>
                                                    </div>
                                            </div>
                                            <div class="form-row row">
                                                <div class="col-md-12 mb-2">
                                                    <label for=""><b>E_mail</b></label>
                                                    <input type="email" placeholder="Escriba un email válido"
                                                        name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row row mb-3">
                                                <div class="col-md-12 mb-2">
                                                    <label for=""><i class="bi bi-record-circle-fill" style="color:#EE9734"></i><b> Mensaje</b></label>
                                                    <textarea placeholder="Escriba su mensaje, no más de 255 caracteres" rows="3" class="form-control" name="mensaje" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row row agre">
                                                <div class="col-md-12 mb-2">
                                                    <p><input type="checkbox" name="check" value="1" required> _Acepto que mis
                                                        contactos se utilicen para enviarme información promocional</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 mb-2"><i
                                                            class="bi bi-send"></i> Enviar</button>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-dark w-100"
                                                        data-bs-dismiss="modal"><i class="bi bi-x-lg"></i>
                                                        Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End client Form-->
