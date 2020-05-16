<template>
    <div class="user-icon">
        <div class="user-icon__image rounded-circle border-primary">
            <a :href="app.route+'login'">
                <i class="border rounded-circle border-secondary p-1 i-Geek" data-container="body" data-toggle="popover" data-placement="top" data-content="Conecte-se!"></i>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        watch: {
            user: function(newUser) {
                var content = "Conecte-se!";

                if (newUser !== null) {
                    const newUser_array = newUser.name.split(' ');
                    const newUser_firstName = newUser_array[0];
                    const newUser_lastName = newUser_array[newUser_array.length-1];
                    content = `Olá, ${newUser_firstName} ${newUser_lastName}`;
                }

                this.updatePopover(content);
            },
        },
        methods: {
            updatePopover: function(dataContent) {
                $('.user-icon__image i').attr('data-container', 'body');
                $('.user-icon__image i').attr('data-placement', 'top');
                $('.user-icon__image i').attr('data-content', dataContent);

                setTimeout(function() {
                    $('.user-icon__image i').popover('show');
                }, 500);
            }
        },
        mounted() {
            this.updatePopover('Conecte-se!');
        }
    }
</script>