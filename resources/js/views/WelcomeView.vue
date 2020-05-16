<template>
    <div class="welcome-view">
        <div class="vh-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-end mr-n4">
                    <div class="user-icon">
                        <div class="user-icon__image rounded-circle border-primary">
                            <a :href="app.route+'login'">
                                <i class="border rounded-circle border-secondary p-1 i-Geek" data-container="body" data-toggle="popover" data-placement="top" data-content="Conecte-se!"></i>
                            </a>
                        </div>
                    </div>
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
        mounted() {
            $(".user-icon__image i").popover('show');
        }
    }
</script>