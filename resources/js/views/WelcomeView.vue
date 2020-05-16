<template>
    <div class="welcome-view">
        <div class="vh-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-end mr-n4">
                    <user-icon-component :user="user" />
                </div>

                <div class="app-name display-2 mb-4">
                    {{ app.name }}
                </div>

                <div class="links">
                    <a href="#">Mesa</a>
                    <a href="#">Fichas</a>
                    <a href="#">Arquivos</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
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