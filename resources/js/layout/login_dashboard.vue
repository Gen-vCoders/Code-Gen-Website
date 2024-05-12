<template>
    <section id="contactus_section" class="sec">
        <div class="container">
            <div class="section-title text-center mb-30">
                <h2 class="title">Login</h2>
            </div>
            <div class="row justify-content-center my-5 py-5">
                <div class="col-lg-5 mt-5 p-5 border-end d-flex algn-items-center justify-content-center flex-column">
                    <div class="form_heading mb-4">
                        <h3>Login For dashboard</h3>
                    </div>
                    <form @submit.prevent="submitForm" class="contact_form w-100">
                        <div class="form-floating w-100">
                            <input v-model="formData.email" type="email" class="form-control" name="email" id="email"
                                placeholder="enter email">
                            <label for="email">Email</label>
                            <div class="error-message bg-danger badge" v-show="formErrorEmail">{{ formErrorEmail }}
                            </div>
                        </div>
                        <div class="form-floating mt-3">
                            <input v-model="formData.password" type="password" class="form-control" name="password"
                                id="password" placeholder="enter Password">
                            <label for="phone">Password</label>
                            <div class="error-message bg-danger badge" v-show="formErrorPassword">{{ formErrorPassword
                                }}
                            </div>
                        </div>
                        <div class="linkWrap">
                            <button type="submit" class="style-25">
                                <span class="wrap">
                                    <div class="text" data-text="Login">Login</div>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <img src="https://img.freepik.com/free-vector/mail-sent-concept-illustration_114360-96.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.1741584830.1690997931&amp;semt=ais"
                        class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import { useToast } from 'vue-toast-notification';
import axios from 'axios';

export default {
    data() {
        return {
            formData: {
                email: '',
                password: '',
            },
            formErrorEmail: '',
            formErrorPassword: '',
            formSuccess: false
        };
    },
    methods: {
        async submitForm() {
            try {
                if (!this.formData.email) {
                    this.formErrorEmail = 'Email is required';
                    this.formSuccess = false;
                }
                if (!this.formData.password) {
                    this.formErrorPassword = 'Password is required';
                    this.formSuccess = false;
                    return;
                }
                this.formErrorEmail = '';
                this.formErrorPassword = '';

                console.log(this.formData);
                try {
                    const response = await axios.post('/login-admin', this.formData);
                    console.log('Success:', response.data.message);
                    if (response.data.message == "Login Sucessfully") {
                        const toast = useToast();
                        toast.open({
                            message: 'Message Sent Successfully!!',
                            type: 'success',
                            duration: 2000,
                        });

                        this.formData = {
                            name: '',
                            email: '',
                            phone: '',
                            message: ''
                        };

                        this.$router.push({ name: 'dashboardHome' });
                    } else {
                        alert('something went wrong');
                    }
                } catch (error) {
                    const toast = useToast();
                    let problem = error;
                    toast.open({
                        message: problem,
                        type: 'error',
                        duration: 2000,
                    });

                }



            } catch (error) {
                const toast = useToast();
                toast.open({
                    message: 'Error submitting form. Please try again later.',
                    type: 'error',
                    duration: 2000,
                });
            }
        }
    }
};
</script>


<style>
.style-25 {
    position: relative;
    top: 50%;
    left: 22%;
    margin-top: 35px;
    transform: translate(-50%, -50%);

    &:hover {

        .wrap,
        .text {
            &:before {
                width: 100%;
            }
        }
    }

    .wrap {
        position: relative;
        display: inline-block;
        padding: 5px 20px;
        cursor: pointer;

        &:before {
            content: "";
            width: 0%;
            height: 100%;
            position: absolute;
            background: #2980b9;
            right: 0;
            top: 0;
            transition: 0.6s;
        }
    }

    .text {
        position: relative;
        color: #34495e;
        font-family: "montserrat", sans-serif;
        font-size: 24px;
        font-weight: 900;
        text-transform: uppercase;

        &:before {
            content: attr(data-text);
            position: absolute;
            color: #fff;
            width: 0;
            overflow: hidden;
            transition: 0.6s;
        }
    }
}
</style>
