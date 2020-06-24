<template>
    <div class="user-icon">
        <div class="user-icon__image rounded-circle border-primary">
            <form v-if="connected === true" :action="app.route+'/logout'" method="post">
                <a @click="disconnect">
                    <input type="hidden" name="_token" :value="app.csrfToken" />
                    <i class="border rounded-circle border-secondary p-1 i-Geek" data-container="body" data-toggle="popover" data-placement="top" data-content="Conecte-se!"></i>
                </a>
            </form>
            <a v-else :href="app.route+'/login'">
                <i class="border rounded-circle border-secondary p-1 i-Geek" data-container="body" data-toggle="popover" data-placement="top" data-content="Conecte-se!"></i>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: null
            }
        },
        computed: {
            connected: function() {
                if (!$.isEmptyObject(this.user)) {
                    const newUser_array = this.user.name.split(' ');
                    const newUser_firstName = newUser_array[0];
                    const newUser_lastName = newUser_array[newUser_array.length-1];
                    content = `Olá, ${newUser_firstName} ${newUser_lastName}`;
                } else {
                    var content = "Conecte-se!";
                }

                this.updatePopover(content);

                return (!$.isEmptyObject(this.user));
            }
        },
        methods: {
            getUser: async function () {
                window.axios.get('api/user')
                    .then(response => (this.user = response.data))
                    .catch(error => (console.log(error)));
            },
            updatePopover: function(dataContent) {
                $('.user-icon__image i').attr('data-container', 'body');
                $('.user-icon__image i').attr('data-placement', 'top');
                $('.user-icon__image i').attr('data-content', dataContent);

                setTimeout(function() {
                    $('.user-icon__image i').popover('show');
                }, 500);
            },
            disconnect: function() {
                $('.user-icon__image form').submit();
            }
        },
        mounted() {
            this.getUser();
        }
    }
</script>