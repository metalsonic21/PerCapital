<template>
<div>
    <div class=hidden-xs id=top-bar>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-md-9">
                    <ul class=top-bar-info>
                        <li><i class="fa fa-phone"></i> Teléfono: +1-23-456789</li>
                        <li><i class="fa fa-envelope-o"></i>Email: example@email.com</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-3">
                    <ul class="hidden-sm social-icons">
                        <li><a href=#><i class="fa fa-facebook"></i></a></li>
                        <li><a href=#><i class="fa fa-twitter"></i></a></li>
                        <li><a href=#><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header>

        <b-container>
            <b-navbar toggleable="lg">
                <b-navbar-brand href="#">
                    <b-img thumbnail src="/img/logo/Simbolo-Per-Capital-azul.png" width="80" height="30"></b-img>
                </b-navbar-brand>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>

                    <b-navbar-nav class="ml-auto">
                        <b-nav-item right href="#">Inicio</b-nav-item>
                        <b-nav-item right href="#one">Características</b-nav-item>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </b-container>

    </header>
</div>
</template>

<script>
export default {

}
</script>
