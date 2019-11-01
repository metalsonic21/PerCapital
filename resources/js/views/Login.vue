<template>
<div>
    <b-container>
        <div class="wrapper wrapper-content animated fadeInDown">
            <b-row>

    <!-- Wrong credentials -->
    <div class="alert alert-danger" v-if="error">
        <p>There was an error, unable to sign in with those credentials.</p>
    </div>

                <b-col cols="6" md="6" sm="6" lg="6">
                    <h2>Inicio de sesión</h2>

                    <p class="text-justify">
En cualquier economia es importante tomar acciones para proteger el patrimonio, preservar el capital y aprovechar las oportunidades que brinda el mercado.

                    </p>

                    <p class="text-justify">
PER CAPITAL pone a tu disposicion herramientas para lograr estos objetivos.
                    </p>
                </b-col>

                <b-col col="5" md="5" sm="5" lg="5">
                    <b-form class="m-t" autocomplete="off" @submit.prevent="login" method="post">
                        <b-form-group>
                            <b-form-input placeholder="Email" v-model="email" required>Email</b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-form-input placeholder="Contraseña" type="password" v-model="password" required>Contraseña</b-form-input>
                        </b-form-group>
                        <b-container>

                            <b-row>
                                <b-button variant="secondary" class="text-right" type="submit">Inicio sesión</b-button>
                            </b-row>

                            <p class="text-muted text-center">
                                <b-link>
                                    <small>¿Olvidó contraseña?</small>
                                </b-link>
                            </p>

                        </b-container>
                        <p class="text-muted text-center">
                            <small>
                                ¿No tienes una cuenta?
                                <b-link :to="{name: 'Register'}">
                                    Regístrate
                                </b-link>
                            </small>
                        </p>

                    </b-form>
                </b-col>
            </b-row>
        </div>
    </b-container>

    <!-- 
    <div class="alert alert-danger" v-if="error">
        <p>There was an error, unable to sign in with those credentials.</p>
    </div>
    <form autocomplete="off" @submit.prevent="login" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" v-model="password" required>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
    </form>
    -->
</div>
</template>

<script>
export default {

}
</script>
