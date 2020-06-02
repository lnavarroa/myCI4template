

<section id="contacto" class="mb-4 bg-secondary text-white">
<div class="container">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contáctanos.</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Tienes dudas?. Por favor ponte en contacto con nosotros directamente. Nuestro equipo se comunicará contigo a la brevedad.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="<?=base_url('email/send');?>" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="mail" class="">Email</label>
                            <input type="text" id="mail" name="mail" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="celu" class="">Teléfono</label>
                            <input type="text" id="celu" name="celu" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Asunto</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Mensaje</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <!--<a class="btn btn-primary" onclick="validateForm();">-->
                <a class="btn btn-primary d-flex justify-content-center" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Chacabuco 2154, Valparaíso, Chile.</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+56 9 9893 8798</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>lnavarro@ylit.cl</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
</div>
</section>
<!--Section: Contact v.2-->



