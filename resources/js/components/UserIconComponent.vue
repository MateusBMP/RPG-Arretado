<template>
    <div class="user-icon">
        <div class="user-icon__image rounded-circle border-primary">
            <form v-if="connected" :action="app.route+'/logout'" method="post">
                <a @click="disconnect">
                    <input type="hidden" name="_token" :value="app.csrfToken" />
                    <img :src="app.route+'/images/users-icons/'+user.icon" class="border rounded-circle border-secondary size-1" />
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
            connected: {
                get: function () {
                    return (!$.isEmptyObject(this.user))
                },
                set: function (userdata) {
                    this.user = userdata

                    if ($.isEmptyObject(this.user)) {
                        // Show popover
                        setTimeout(function() {
                            $('.user-icon__image i').popover('show')
                        }, 500);
                    } else {
                        // Emit user connected event
                        this.app.bus.$emit('user-connected', this.userName)
                    }
                }
            },
            userName: function () {
                const newUser_array = this.user.name.split(' ')
                const newUser_firstName = newUser_array[0]
                const newUser_lastName = newUser_array[newUser_array.length-1]

                return `${newUser_firstName} ${newUser_lastName}`
            }
        },
        methods: {
            getUser: async function () {
                window.axios.get('api/users/connected')
                    .then(response => (this.connected = response.data))
                    .catch(error => (
                        (error.response) ? 
                            (error.response.status == 401 ? 
                                this.connected = new Object : 
                                console.log(error)
                            ) : 
                            console.log(error)
                    ));
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