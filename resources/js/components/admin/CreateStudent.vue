<template>
  <div class="row">
    <!-- column -->
    <div class="col-md-12">
      <div class="card">
        <loading :active.sync="isLoading" :can-cancel="true" :is-full-page="fullPage"></loading>
        <form id="signup-form" @submit.prevent="processForm" novalidate="true">
          <div class="card-body">
            <h4 class="card-title">Student Info</h4>
            <div class="form-group row">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  name="fname"
                  id="fname"
                  v-model.trim="first_name"
                  placeholder="First Name Here"
                >

                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.first_name.required"
                >Name is required</div>
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.first_name.minLength"
                >First Name must have at least {{$v.first_name.$params.minLength.min}} letters.</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  name="lname"
                  id="lname"
                  v-model.trim="last_name"
                  placeholder="Last Name Here"
                >
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.last_name.required"
                >Name is required</div>
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.last_name.minLength"
                >Last Name must have at least {{$v.last_name.$params.minLength.min}} letters.</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
              <div class="col-sm-9">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  id="password"
                  v-model="password"
                  placeholder="Password Here"
                >
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.password.required"
                >Name is required</div>
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.password.minLength"
                >Last Name must have at least {{$v.password.$params.minLength.min}} letters.</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
              <div class="col-sm-9">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  v-model="email"
                  placeholder="Enter Student Email"
                >

                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.email.required"
                >Email is required</div>
                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.email.email"
                >Email is invalid</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  name="contact_number"
                  id="contact_number"
                  v-model="contact_number"
                  placeholder="Contact No Here"
                >

                <div
                  class="invalid-feedback"
                  style="display:block"
                  v-if="!$v.contact_number.required"
                >Contact Number is required.</div>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-sm-3 text-right control-label col-form-label">Single Select</label>
              <div class="col-md-9">
                <select
                  class="select2 form-control custom-select"
                  style="width: 100%; height:36px;"
                >
                  <option>Select</option>
                  <optgroup label="Enginnering">
                    <option value="CET">CET</option>
                    <option value="JEE">JEE</option>
                  </optgroup>
                  <optgroup label="Medical">
                    <option value="NEET">NEET</option>
                  </optgroup>
                </select>
              </div>
            </div>-->

            <div class="form-group row">
              <label class="col-md-3 text-right control-label col-form-label">Select Test Type</label>
              <div class="col-md-9">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customControlAutosizing1"
                    value="CET"
                    v-model="testTypes"
                  >
                  <label class="custom-control-label" for="customControlAutosizing1">CET</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customControlAutosizing2"
                    value="NEET"
                    v-model="testTypes"
                  >
                  <label class="custom-control-label" for="customControlAutosizing2">NEET</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customControlAutosizing3"
                    value="JEE"
                    v-model="testTypes"
                  >
                  <label class="custom-control-label" for="customControlAutosizing3">JEE</label>
                </div>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-md-3 text-right control-label col-form-label">Student Image</label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
            </div>-->
          </div>

          <div class="border-top">
            <div class="card-body">
              <button
                type="submit"
                :disabled="submitStatus === 'PENDING'"
                class="btn btn-primary"
              >Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
     
<script>
import Vuelidate from "vuelidate";
import { required, minLength, email, Number } from "vuelidate/lib/validators";
const isPhone = value => /^1(3|4|5|7|8)\d{9}$/.test(value);
import Loading from "vue-loading-overlay";
// Import stylesheet
import "vue-loading-overlay/dist/vue-loading.css";
export default {
  // Our Javascript logic

  data: function() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      password: "",
      contact_number: "",
      testTypes: [],
      submitStatus: null,
      isLoading: false,
      fullPage: true
    };
  },
  components: {
    Loading
  },
  validations: function() {
    return {
      first_name: {
        required,
        minLength: minLength(4)
      },
      last_name: {
        required,
        minLength: minLength(4)
      },
      password: {
        required,
        minLength: minLength(6)
      },
      email: {
        required,
        email
      },
      contact_number: {
        required
      }
    };
  },
  methods: {
    processForm: function() {
      this.$v.$touch();
      this.isLoading = true;
      let studentInfo = {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        password: this.password,
        contact_number: this.contact_number,
        testTypes: this.testTypes
      };
      console.log("studentInfo", this.$v.$invalid);
      if (this.$v.$invalid) {
        this.submitStatus = "ERROR";
      } else {
        // do your submit logic here
        console.log(studentInfo, this.$v.$invalid);
        this.submitStatus = "PENDING";
        console.log("Processing!");
        axios
          .post("/api/student/store", {
            body: studentInfo
          })
          .then(result => {
            console.log(result);
            this.isLoading = false;
            this.submitStatus = "OK";
          })
          .catch(err => {
            this.submitStatus = "OK";
            this.isLoading = false;
          });
        this.isLoading = false;
      }
    },
    status(validation) {
      console.log("validation", validation);
      return {
        error: validation.$error,
        dirty: validation.$dirty
      };
    }
  },

  mounted() {
    console.log("Component mounted.");
  }
};
</script>