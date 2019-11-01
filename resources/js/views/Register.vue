<template>
<div>
    <b-container>
        <b-row>
            <b-col cols="12" md="12" sm="4">
                <div class="wrapper wrapper-content animated fadeInDown">

                    <!-- Register successful or failed -->
                    <div class="alert alert-danger" v-if="error && !success">
                        <p>There was an error, unable to complete registration.</p>
                    </div>
                    <div class="alert alert-success" v-if="success">
                        <p>Registration completed. You can now <router-link :to="{name:'Login'}">sign in.</router-link>
                        </p>
                    </div>


                    <div>
                        <div class="text-center">
                            <h3>Registro en PER CAPITAL</h3>
                            <p>Crea tu cuenta para empezar a invertir</p>
                            <br>
                        </div>
                        <form class="m-t" autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                            <div class="form-group" v-bind:class="{ 'has-error': error && errors.name }">
                                <input type="text" class="form-control" placeholder="Name" v-model="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" required="">
                            </div>
                            <div class="text-center">

                                <b-button variant="secondary" class="m-b btn-block" type="submit">Register</b-button>
                            </div>
                            <p class="text-muted text-center"><small>¿Ya tienes una cuenta? <b-link>Login</b-link></small>
                            </p>
                        </form>
                    </div>

                </div>
            </b-col>
        </b-row>
    </b-container>

    <!--
    <div class="alert alert-danger" v-if="error && !success">
        <p>There was an error, unable to complete registration.</p>
    </div>
    <div class="alert alert-success" v-if="success">
        <p>Registration completed. You can now <router-link :to="{name:'login'}">sign in.</router-link>
        </p>
    </div>
    <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
        <div class="form-group" v-bind:class="{ 'has-error': error && errors.name }">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" v-model="name" required>
            <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
        </div>
        <div class="form-group" v-bind:class="{ 'has-error': error && errors.email }">
            <label for="email">E-mail</label>
            <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
        </div>
        <div class="form-group" v-bind:class="{ 'has-error': error && errors.password }">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" v-model="password" required>
            <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
        </div> <button type="submit" class="btn btn-default">Submit</button>
    </form>
    -->
</div>
</template>

<script>
export default {

}
</script>
