<div class="contact-form pt-20 pb-24">
    <div class="container mx-auto px-4 md:px-0">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 mx-auto">
                <form action="<?php bloginfo('template_url'); ?>/inc/branditon-mailer.php">
                    <div class="flex flex-wrap contact-form__subject mb-16">
                        <label class="w-full md:w-3/12 tracking-widest mb-6 md:mb-0">
                            <span>¡DI HOLA!</span>
                            <input type="radio" name="subject" value="di hola" checked="checked">
                            <span class="radio"></span>
                        </label>
                        <label class="w-full md:w-3/12 tracking-widest mb-6 md:mb-0">
                            <span>¿DUDAS?</span>
                            <input type="radio" name="subject" value="dudas">
                            <span class="radio"></span>
                        </label>
                        <label class="w-full md:w-3/12 tracking-widest mb-6 md:mb-0">
                            <span>MEDIOS</span>
                            <input type="radio" name="subject" value="medios">
                            <span class="radio"></span>
                        </label>
                        <label class="w-full md:w-3/12 tracking-widest mb-6 md:mb-0">
                            <span>COLABORACIONES</span>
                            <input type="radio" name="subject" value="colaboraciones">
                            <span class="radio"></span>
                        </label>
                    </div>
                    <input type="text" placeholder="Nombre" name="name">
                    <input type="tel" placeholder="Teléfono" name="phone">
                    <input type="email" placeholder="Correo" name="email">
                    <textarea placeholder="Mensaje" name="message"></textarea>
                    <input type="text" name="service">
                    <div class="text-center mt-8">
                        <button type="submit" class="px-4 tracking-widest">ENVIAR</button>
                    </div>
                    <div class="contact-form__message text-center pt-4 opacity-0"><span>form message</span></div>
                </form>
            </div>
        </div>
    </div>
</div>