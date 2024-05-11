<template>
    <div id="login-section">
        <div id="login">
            <form class="container-fluid" @submit.prevent="handelSubmit">
                <div class="row">
                    <div class="col mb-3">
                        <label for="floatingInput">Email address</label>
                        <input type="email" v-model="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="col">
                        <label for="floatingPassword">Password</label>
                        <input type="password" v-model="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                    </div>
                </div>

                <div class="row w-100 mb-3" style="margin-left: 1px;">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" v-model="address" class="form-control" id="inputAddress"
                        placeholder="1234 Main St">
                </div>


                <div class="row">
                    <div class="col-8">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" v-model="city" class="form-control" id="inputCity">
                    </div>
                    <div class="col-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" v-model="state">
                            <option>Himachal Pradesh</option>
                            <option>Delhi</option>
                            <option>Mumbai</option>
                        </select>
                    </div>
                </div>


                <div class="mt-3">Choose Your gender</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="female" v-model="selectedgender">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        value="male" v-model="selectedgender">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Male
                    </label>
                </div>
                <div class="row">
                    <div class="col-6 mb-3 form-check mt-3" style="margin-left: 12px">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" v-model="content"
                            value="terms" required>
                        <label class="form-check-label" for="exampleCheck1">Agree with Term and condition.</label>
                    </div>
                    <div class="col-5 mb-3 form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" value="trend"
                            v-model="content">
                        <label class="form-check-label" for="exampleCheck2">Needs update on products.</label>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25 rounded">Submit</button>
                </div>

            </form>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';


export default {
    data() {
        return {
            email: '',
            password: '',
            address: '',
            city: '',
            state: '',
            selectedgender: '',
            content: [],
        }
    },

methods: {
  async handelSubmit() {
    try {
      const formData = {
        email: this.email,
        password: this.password,
        address: this.address,
        city: this.city,
        state: this.state,
        gender: this.selectedgender,
        content: this.content,
      };

      const response = await axios.post('http://127.0.0.1:8000/api/submit-form', formData);

      if (!response.status === 200) {
        throw new Error('Failed to submit form');
      }

      console.log('Form submitted successfully');
      this.resetForm();
    } catch (error) {
      console.error('Error submitting form:', error.message);
    }
  },
  resetForm() {
    // Reset form fields
    this.email = '';
    this.password = '';
    this.address = '';
    this.city = '';
    this.state = '';
    this.selectedgender = '';
    this.content = [];
  }
}


}
</script>
<style>
.container-fluid {
    width: 900px;
    margin-top: 80px;
}
</style>
