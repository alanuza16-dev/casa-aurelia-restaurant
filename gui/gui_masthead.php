<?php global $site; ?>
<header class="masthead p-0" id="page-top">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide slide-1 d-flex align-items-center justify-content-center text-center">
                    <div class="hero-content">
                        <p class="hero-eyebrow">Fine dining</p>
                        <h1 class="text-uppercase hero-title"><?php echo $site['hero_title'] ?? 'Casa Aurelia'; ?></h1>
                        <h2 class="hero-subtitle text-white-50 mt-3 mb-5"><?php echo $site['hero_subtitle'] ?? ''; ?></h2>
                        <a class="btn btn-primary" href="#contact">Reservar mesa</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide slide-2 d-flex align-items-center justify-content-center text-center">
                    <div class="hero-content">
                        <p class="hero-eyebrow">Cocina contemporanea</p>
                        <h1 class="text-uppercase hero-title">Platos que dejan huella</h1>
                        <h2 class="hero-subtitle text-white-50 mt-3 mb-5">Ingredientes nobles, tecnica precisa y una presentacion que habla de exclusividad.</h2>
                        <a class="btn btn-primary" href="#projects">Ver experiencia</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide slide-3 d-flex align-items-center justify-content-center text-center">
                    <div class="hero-content">
                        <p class="hero-eyebrow">Hospitalidad premium</p>
                        <h1 class="text-uppercase hero-title">Veladas memorables</h1>
                        <h2 class="hero-subtitle text-white-50 mt-3 mb-5">Un ambiente intimo, servicio atento y el tipo de lugar que eleva cualquier ocasion.</h2>
                        <a class="btn btn-primary" href="#about">Conocer la casa</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Anterior"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Siguiente"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
    </div>
</header>
