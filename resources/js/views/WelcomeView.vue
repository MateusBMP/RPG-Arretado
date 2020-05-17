<template>
    <div class="welcome-view">
        <div class="vh-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-end mr-n4">
                    <user-icon-component :user="user" :connected="connected" />
                </div>

                <div class="app-name display-2 mb-4">
                    {{ app.name }}
                </div>

                <div v-if="connected === 1" class="links">
                    <a href="#">Mesa</a>
                    <a href="#">Fichas</a>
                    <a href="#">Arquivos</a>
                </div>
                <div v-else class="links">
                    <a :href="app.route+'login'">Conectar</a>
                    <a :href="app.route+'register'">Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['connected'],
        data() {
            return {
                user: null,
            }
        },
        methods: {
            getUser: async function () {
                window.axios.get('api/user')
                    .then(response => (this.user = response.data))
                    .catch(error => (console.log(error)));
            },
        },
        mounted() {
            this.getUser();
        }
    }
</script>