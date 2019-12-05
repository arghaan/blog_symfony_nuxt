<template>
    <v-container class="login_form">
        <v-row>
            <v-col>
                <v-form
                        :lazy-validation="lazy"
                        class="shadow_box"
                        ref="form"
                        v-model="valid"
                >
                    <div class="header">
                        Вход {{token}}
                    </div>
                    <v-text-field
                            :rules="emailRules"
                            label="E-mail"
                            name="username"
                            required
                            v-model="email"
                    />
                    <v-text-field
                            :append-icon="show_password ? 'mdi-eye' : 'mdi-eye-off'"
                            :rules="[rules.required ]"
                            :type="show_password ? 'text' : 'password'"
                            @click:append="show_password = !show_password"
                            label="Пароль"
                            name="password"
                            v-model="password"
                    />
                    <v-alert type="error" v-if="error">
                        Неверный E-mail или пароль
                    </v-alert>
                    <v-btn @click="validate" class="login_btn" color="#006d8d">Войти</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        data: () => ({
            valid: true,
            show_password: false,
            email: '',
            emailRules: [
                v => !!v || 'E-mail обязателен.',
                // v => /.+@.+\..+/.test(v) || 'E-mail должен быть правильным.',
            ],
            password: '',
            lazy: true,
            rules: {
                required: value => !!value || 'Пароль обязателен.',
            },
            error: false
        }),
        computed: {
            ...mapState(['token'])
        },
        created() {
        },
        methods: {
            validate() {
                if (this.$refs.form.validate()) {
                    this.login();
                }
            },
            async login() {
                try {
                    await this.$auth.loginWith('local', {
                        data: {
                            username: this.email,
                            password: this.password
                        }
                    });
                    // this.$router.push('/admin/')
                } catch (e) {
                    console.log(e);
                    // this.error = e.response.data.message
                }
            },
        }
    };
</script>

<style lang="scss" scoped>
    .header {
        margin: 20px 0 30px 0;
        font-size: 170%;
        font-weight: 500;
    }

    .login_form {
        margin-top: 80px;
        max-width: 460px;
    }

    .login_btn {
        color: white;
        margin: 20px auto;
        width: 100%;
    }

    .shadow_box {
        width: 100%;
        background: #fff;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        margin: 0 auto;
        padding: 40px;
        box-sizing: border-box;
    }
</style>
