<template>
	<!-- Carousel Start -->
	<div class="container-fluid p-0">
		<div id="header-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="w-100" src="../../img/carousel-1.jpg" alt="Image">
					<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
						<div class="p-3" style="max-width: 900px;">
							<h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
							<h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
							<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="w-100" src="../../img/carousel-2.jpg" alt="Image">
					<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
						<div class="p-3" style="max-width: 900px;">
							<h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
							<h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
							<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
				<div class="btn btn-dark" style="width: 45px; height: 45px;">
					<span class="carousel-control-prev-icon mb-n2"></span>
				</div>
			</a>
			<a class="carousel-control-next" href="#header-carousel" data-slide="next">
				<div class="btn btn-dark" style="width: 45px; height: 45px;">
					<span class="carousel-control-next-icon mb-n2"></span>
				</div>
			</a>
		</div>
	</div>
	<!-- Carousel End -->

	<!-- Booking Start -->
		<div class="container-fluid booking mt-5 pb-5">
			<div class="container pb-5">
				<div class="bg-light shadow" style="padding: 30px;">
					<div style="min-height: 60px;">
							<form @submit.prevent="booking" class="row align-items-center">
								<div class="col-md-10">
									<div class="row">
										<div class="col-md-3">
											<div class="mb-3 mb-md-0">
												<select class="custom-select px-4" style="height: 47px;">
													<option selected>Destination</option>
													<option value="1">Destination 1</option>
													<option value="2">Destination 1</option>
													<option value="3">Destination 1</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="mb-3 mb-md-0">
												<div class="date" id="date1" data-target-input="nearest">
													<Datepicker class="datetimepicker-input" placeholder="Depart Date"
														autoApply
														:enableTimePicker="false"
														:format="format"
														:minDate="new Date()"
														v-model="departDate"></Datepicker>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="mb-3 mb-md-0">
												<div class="date" id="date2" data-target-input="nearest">
													<Datepicker class="datetimepicker-input" placeholder="Return Date"
														autoApply
														:enableTimePicker="false"
														:format="format"
														:minDate="new Date()"
														v-model="returnDate"></Datepicker>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="mb-3 mb-md-0">
												<select class="custom-select px-4" style="height: 47px;">
													<option selected>Duration</option>
													<option value="1">Duration 1</option>
													<option value="2">Duration 1</option>
													<option value="3">Duration 1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
    <!-- Booking End -->

		<!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Explore Top Destinations</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United States</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-2.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United Kingdom</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-3.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Australia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">India</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-5.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">South Africa</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../../img/destination-6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Indonesia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

		<!-- Packages Start -->
    <div class="container-fluid py-5">
			<div class="container pt-5 pb-3">
				<div class="text-center mb-3 pb-3">
					<h1>Tours and Activities</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 mb-4" v-for="(activity,index) in activities.featured" :key="index">
						<div class="package-item bg-white mb-2">
							<img class="img-fluid" :src="activity.thumbnail" alt="">
							<div class="p-4">
								<div class="d-flex justify-content-between mb-3">
									<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{activity.city}}</small>
									<small class="m-0"><i class="fas fa-hourglass-end text-primary mr-2"></i>{{activity.duration}} hours</small>
									<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{activity.max_people}}</small>
								</div>
								<router-link :to="{name:'activity', params:{slug:activity.slug}}" class="h5 text-decoration-none">{{activity.name}}</router-link>
								<div class="border-top mt-0 pt-4">
									<div class="d-flex justify-content-between">
										<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>{{activity.rating}}</h6>
										<h5 class="m-0">${{activity.price}}</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
    <!-- Packages End -->
</template>
<script>
import {mapGetters, mapState} from 'vuex'

export default {
	components: {
	},
	mounted() {
		this.$store.dispatch('activityModule/fetchFeaturedActivities')
	},
	computed: {
		...mapGetters({ activities: 'activityModule/activities'}),
		...mapState(["activityModule"]),
	},
	data() {
		return {
			departDate: null,
			returnDate: null,
			format: 'dd/MM/yyyy'
		};
	},
  methods: {
		booking() {
			console.log(this.departDate,this.returnDate);
		}
  }
}
</script>