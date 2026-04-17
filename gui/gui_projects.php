<?php global $site; $theme_url = get_template_directory_uri(); ?>
<section class="projects-section bg-black" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <p class="section-kicker">Experiencias insignia</p>
            <h2 class="contact-title">Una mesa con estatus</h2>
            <p class="contact-subtitle">Creamos un prototipo para un restaurante que inspire confianza inmediata, deseo y percepcion de alto valor.</p>
        </div>
        <section class="catalogo">
            <div class="grid">
                <div class="item" onclick="abrirModal('modal1')">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Plato gourmet de Casa Aurelia" loading="lazy">
                    <div class="overlay"><span>+</span></div>
                    <h3 class="contact-subtitle"><?php echo $site['project_one_title']; ?></h3>
                </div>
                <div class="item" onclick="abrirModal('modal2')">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Interior elegante de restaurante" loading="lazy">
                    <div class="overlay"><span>+</span></div>
                    <h3 class="contact-subtitle"><?php echo $site['project_two_title']; ?></h3>
                </div>
                <div class="item" onclick="abrirModal('modal3')">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Plato premium con maridaje" loading="lazy">
                    <div class="overlay"><span>+</span></div>
                    <h3 class="contact-subtitle"><?php echo $site['project_three_title']; ?></h3>
                </div>
            </div>
        </section>
        <div class="text-center mt-5">
            <p class="contact-subtitle">Todo el lenguaje visual apunta a lo mismo: exclusividad serena, confianza y deseo de reservar.</p>
        </div>
        <div class="modal" id="modal1"><div class="modal-content"><span class="close" onclick="cerrarModal('modal1')">&times;</span><h2><?php echo $site['project_one_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Menu degustacion" loading="lazy"><p><?php echo $site['project_one_text']; ?></p></div></div>
        <div class="modal" id="modal2"><div class="modal-content"><span class="close" onclick="cerrarModal('modal2')">&times;</span><h2><?php echo $site['project_two_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Salon privado" loading="lazy"><p><?php echo $site['project_two_text']; ?></p></div></div>
        <div class="modal" id="modal3"><div class="modal-content"><span class="close" onclick="cerrarModal('modal3')">&times;</span><h2><?php echo $site['project_three_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Maridaje de autor" loading="lazy"><p><?php echo $site['project_three_text']; ?></p></div></div>
    </div>
</section>
