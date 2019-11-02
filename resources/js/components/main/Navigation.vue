<template>
<div>   
    <header>

        <b-navbar toggleable="lg" fixed sticky class="mx-5">
            <b-navbar-brand href="#" class="ml-5">
                <b-img src="/img/logo/PastedGraphic-1-3.jpeg" width="220" height="110"></b-img>
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>

                <b-navbar-nav class="ml-auto">
                    <b-nav-item :to="{name: 'home'}">Inicio</b-nav-item>
                    <b-nav-item href="#empresa">La empresa</b-nav-item>
                    <b-nav-item href="#fondos">Fondos</b-nav-item>
                    <b-nav-item :to="{name: 'Services'}">Servicios</b-nav-item>
                    <b-nav-item href="#">Reportes y noticias</b-nav-item>
                    <b-nav-item href="#">Contacto</b-nav-item>
                    <b-nav-item-dropdown text="Idioma" right>
                        <b-dropdown-item href="#">Español</b-dropdown-item>
                        <b-dropdown-item href="#">Inglés</b-dropdown-item>
                    </b-nav-item-dropdown>

                    <b-nav-item-dropdown text="Inversionista" right>
                        <b-dropdown-item href="#">Institucional</b-dropdown-item>
                        <b-dropdown-item href="#">Privado</b-dropdown-item>
                    </b-nav-item-dropdown>

                    <b-nav-item right :to="{name: 'Login'}">Login</b-nav-item>
                    <b-nav-item right :to="{name: 'Register'}">Registro</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <br>

    </header>
</div>
</template>

<script>
export default {
    data() {
        return {
            dynamicColorR: {
                color: 'red'
            },
            dynamicColorG: {
                color: '#16bb05'
            }
        }
    }

    
}
</script>
