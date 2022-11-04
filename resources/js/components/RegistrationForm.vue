<template>
  <form @submit.prevent="handleSubmit">
    <div class="form-group">
      <input type="email" class="form-control" id="regEmail" placeholder="Email" v-model="formData.email">
      <div class="invalid-feedback">
        {{ formErrors.email }}
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 form-group">
        <div class="input-group password-group">
          <input :type="formData.password.isPassword ? 'password' : 'text'"
            class="form-control"
            id="regPassword"
            placeholder="Password"
            v-model="formData.password.value">
          <div class="input-group-addon">
            <a href="javascript:void(0)"
              class="btn"
              @click="handleEyeClick('')">
              <i :class="[formData.password.isPassword ? 'fa-eye-slash' : 'fa-eye','fa']" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="invalid-feedback">
            {{ formErrors.password }}
          </div>
      </div>
      <div class="col-md-6 form-group">
        <div class="input-group password-group">
          <input :type="formData.password_confirmation.isPassword ? 'password' : 'text'"
            class="form-control"
            id="regConfirmPassword"
            placeholder="Confirm Password"
            v-model="formData.password_confirmation.value">
          <div class="input-group-addon">
            <a href="javascript:void(0)"
              class="btn"
              @click="handleEyeClick('confirm')">
              <i :class="[formData.password_confirmation.isPassword ? 'fa-eye-slash' : 'fa-eye','fa']" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="invalid-feedback">
            {{ formErrors.password_confirmation }}
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 form-group">
        <input type="text"
          class="form-control"
          id="regName"
          placeholder="Name"
          v-model="formData.name">
          <div class="invalid-feedback">
            {{ formErrors.name }}
          </div>
      </div>
      <div class="col-md-6 form-group">
        <input type="text"
          class="form-control"
          id="regLastName"
          placeholder="Last Name"
          v-model="formData.last_name">
          <div class="invalid-feedback">
            {{ formErrors.last_name }}
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 form-group">
        <input type="text"
          class="form-control"
          id="regCountry"
          placeholder="Country"
          v-model="formData.country">
          <div class="invalid-feedback">
            {{ formErrors.country }}
          </div>
      </div>
      <div class="col-md-6 form-group">
        <input type="text"
          class="form-control"
          id="regCity"
          placeholder="City"
          v-model="formData.city">
          <div class="invalid-feedback">
            {{ formErrors.city }}
          </div>
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="regPhone" placeholder="Phone" v-model="formData.phone">
      <div class="invalid-feedback">
        {{ formErrors.phone }}
      </div>
    </div>
    <div class="form-group submit-container">
      <button type="submit" class="btn btn-primary">Create an account</button>
    </div>
  </form>
</template>
<script>
import { reactive } from '@vue/reactivity';

export default {
  setup () {
		const formData = reactive({
      name: '',
      email: '',
      last_name: '',
      password: {
        value: '',
        isPassword: true,
      },
      password_confirmation: {
        value: '',
        isPassword: true,
      },
      phone: '',
      country: '',
      city: ''
    })

    const formErrors = reactive({
      name: '',
      email: '',
      last_name: '',
      password: '',
      password_confirmation: '',
      phone: '',
      country: '',
      city: ''
    });

    function handleEyeClick(name){
      if(name === 'confirm') {
        formData.password_confirmation.isPassword = !formData.password_confirmation.isPassword
      }else {
        formData.password.isPassword = !formData.password.isPassword
      }
    }

    function validate(){
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
      const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/g;
      const phoneRegex = /^\d{10}$/g;

      // Validate email
      if(formData.email.trim() === '') {
        formErrors.email = 'Email is required!'
      } else if(!emailRegex.test(formData.email)) {
        formErrors.email = 'Email is not valid!'
      } else {
        formErrors.email = ''
      }

      // Validate name
      if(!formData.name) {
        formErrors.name = 'Name is required!'
      } else {
        formErrors.name = ''
      }

      // Validate last name
      if(!formData.last_name) {
        formErrors.last_name = 'Last name is required!'
      } else {
        formErrors.last_name = ''
      }

      // Validate country
      if(!formData.country) {
        formErrors.country = 'Country is required!'
      } else {
        formErrors.country = ''
      }

      // Validate city
      if(!formData.city) {
        formErrors.city = 'City is required!'
      } else {
        formErrors.city = ''
      }

      // Validate password
      if(formData.password.value.trim() === '') {
        formErrors.password = 'Password is required!'
      } else if(!passwordRegex.test(formData.password.value)) {
        formErrors.password = 'Password is not valid!'
      } else {
        formErrors.password = ''
      }

      // Validate Password confirmation
      if(formData.password_confirmation.value.trim() === '') {
        formErrors.password_confirmation = 'This field is required!'
      } else if(formData.password.value !== formData.password_confirmation.value) {
        formErrors.password_confirmation = 'Passwords must match!'
      } else {
        formErrors.password_confirmation = ''
      }

      // Validate Phone
      if(formData.phone.trim() === '') {
        formErrors.phone = 'Phone is required!'
      } else if(!phoneRegex.test(formData.phone)) {
        formErrors.phone = 'Phone is not valid!'
      } else {
        formErrors.phone = ''
      }

      return Object.keys(formErrors).length !== 0 ? false : true;
    }

    function handleSubmit(){
      if(!validate()){
        return false;
      }

      const dataToSend = {...formData};
      dataToSend.password = formData.password.value;
      dataToSend.password_confirmation = formData.password_confirmation.value;

    }
    return {
      formData,
      formErrors,
      handleEyeClick,
      handleSubmit
    }
  },
  methods: {

  }
}
</script>
<style scoped>
.submit-container {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 0;
}
.password-group {
  border: 1px solid #ced4da;
}
.password-group:focus-within {
  border-color: #b8e087;
  box-shadow: 0 0 0 0.2rem rgba(122, 183, 48, 0.25);
}
.password-group input {
  border: none;
}
.password-group input:focus {
  border: none;
  box-shadow: none;
}
.password-group a {
  color: #7AB730;
}
.password-group a:focus{
  box-shadow: none;
}
.invalid-feedback{
  display: block;
}
</style>