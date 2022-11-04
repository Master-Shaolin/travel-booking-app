<template>
	<!-- Navbar Start -->
	<div class="container-fluid position-relative nav-bar p-0">
		<div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
			<nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
				<router-link to="/" class="navbar-brand">
					<h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
				</router-link>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
					<div class="navbar-nav ml-auto py-0">
						<a href="index.html" class="nav-item nav-link active">Home</a>
						<a href="about.html" class="nav-item nav-link">About</a>
						<a href="package.html" class="nav-item nav-link">Tour Packages</a>
						<a href="contact.html" class="nav-item nav-link">Contact</a>
						<div v-if="user" class="nav-item dropdown"
							@mouseover="handleDropdown(true)"
							@mouseleave="handleDropdown(false)">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" ref="dropdownToggle"><i class="far fa-user" style="font-size: 18px;"></i></a>
								<div class="dropdown-menu border-0 rounded-0 m-0" @mouseover="handleDropdown(true)">
									<label class="w-100 text-center">{{user.name}}</label>
									<a href="user/account" class="dropdown-item"><i class="fas fa-id-card"></i> Account</a>
									<a href="user/favorites" class="dropdown-item"><i class="fas fa-heart"></i> Favorites</a>
									<a href="logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
						</div>
						<a v-else href="javascript:void(0)" class="nav-item nav-link" @click="showModal = true">Login</a>
					</div>
				</div>
			</nav>
		</div>
		<vue-final-modal v-model="showModal" classes="modal-container" :content-class="[showRegistrationForm ? 'registerModal' : '', 'modal-content', 'bg-white']" >
			<div class="modal-header">
				<h5 class="modal-title">{{modalTitle}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="handleModalClose()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<LoginForm v-if="showLoginForm"/>
				<RegistrationForm v-else-if="showRegistrationForm"/>
			</div>
			<div class="modal-footer">
				<span v-if="showLoginForm">New Here? <a href="javascript:void(0)" @click="showLoginForm = false;showRegistrationForm = true">Create an account</a></span>
				<span v-else-if="showRegistrationForm">Already have an account? <a href="javascript:void(0)" @click="showRegistrationForm = false;showLoginForm = true">Log in</a></span>
			</div>
    </vue-final-modal>
	</div>
	<!-- Navbar End -->
</template>
<script>
import LoginForm from '../components/LoginForm.vue';
import RegistrationForm from '../components/RegistrationForm.vue';
export default {
	data: () => ({
		user: null,
		showModal: false,
		showLoginForm: true,
		showRegistrationForm: false,
		modalTitle: 'Access to TRAVELER'
  }),
	components: {
		LoginForm,
		RegistrationForm
	},
  methods: {
    handleDropdown(trigger){
      const dropdown = this.$refs.dropdownToggle;
      if(trigger){
        dropdown.click();
      }else {
        dropdown.click();
      }
    },
		handleModalClose(){
			this.showModal = false;
			this.showLoginForm = true;
			this.showRegistrationForm = false;
		}
  }
}
</script>
<style scoped>
:deep(.modal-container) {
  display: flex;
  justify-content: center;
  align-items: center;
}
:deep(.modal-content) {
  display: flex;
  flex-direction: column;
  margin: 0 1rem;
  padding: 1rem;
  border: 1px solid #e2e8f0;
  border-radius: 0.25rem;
  width: 25vw;
  min-height: 35vh;
}
:deep(.modal-content.registerModal){
	width: 35vw;
}
:deep(.modal-header) {
	border-bottom: none;
}
:deep(.modal-title) {
	width: 100%;
	text-align: center;
}
:deep(.modal-footer) {
	justify-content: center;
}
:deep(.modal-footer) a:hover {
	text-decoration: none;
}
</style>