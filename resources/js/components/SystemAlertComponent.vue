<template>
    <div class="system-alert position-absolute">
        <div v-for="alert in alerts" :key="alert.html" v-html="alert.html" class="system-alert__alert"></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                alerts: []
            }
        },

        created() {
            var self = this

            this.app.bus.$on('user-connected', (data) => {
                self.alerts.push({ html: `
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <span>Seja bem-vindo, ${data}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ` })
            })
        }
    }
</script>