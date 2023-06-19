
<template>
  <!-- Contact Section-->
  <section class="page-section" id="contact">
    <div class="container">
      <!-- Contact Section Heading-->
      <h2
        class="page-section-heading text-center text-uppercase text-secondary mb-0"
      >
        Contact Me
      </h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
          <form
            id="contactForm"
            @submit.prevent="sendEmail"
          >
            <!-- Name input-->
            <div class="form-floating mb-3">
              <input
                v-model="name"
                class="form-control"
                id="name"
                type="text"
                placeholder="Enter your name..."
                data-sb-validations="required"
              />
              <label for="name">Full name</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">
                A name is required.
              </div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
              <input
                v-model="email"
                class="form-control"
                id="email"
                type="email"
                placeholder="name@example.com"
                data-sb-validations="required,email"
              />
              <label for="email">Email address</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">
                An email is required.
              </div>
              <div class="invalid-feedback" data-sb-feedback="email:email">
                Email is not valid.
              </div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
              <input
                v-model="phone"
                class="form-control"
                id="phone"
                type="tel"
                placeholder="(123) 456-7890"
                data-sb-validations="required"
              />
              <label for="phone">Phone number</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">
                A phone number is required.
              </div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
              <textarea
                v-model="message"
                class="form-control"
                id="message"
                type="text"
                placeholder="Enter your message here..."
                style="height: 10rem"
                data-sb-validations="required"
              ></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">
                A message is required.
              </div>
            </div>
            <!-- Submit success message-->
            <div v-if="successMessage" class="text-center mb-3">
              Succesful!
            </div>
            <!-- Submit error message-->
            <div v-if="errorMessage" class="text-center text-danger mb-3">
              Error sending message!
            </div>
            <!-- Submit Button-->
            <button
              :disabled="isSending"
              class="btn btn-primary btn-xl"
              id="submitButton"
              type="submit"
            >
              {{ isSending ? "Sending..." : "Send" }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from "axios";

export default {
  name: "ContactSection",
  data() {
    return {
      name: "",
      email: "",
      phone: "",
      message: "",
      isSending: false,
      successMessage: false,
      errorMessage: false,
    };
  },
  methods: {
    sendEmail() {
      this.isSending = true;
      // Make the API request to send the email
      const requestData = {
        recipient_email: this.email,
        subject: "Hi Duy, we wanna contact with you",
        message: this.message,
      };

      axios
        .post("http://127.0.0.1:8000/send-email", requestData)
        .then(() => {
          this.isSending = false;
          this.successMessage = true;
          this.resetForm();
        })
        .catch((error) => {
          this.isSending = false;
          this.errorMessage = true;
          console.error(error);
        });
    },
    resetForm() {
      this.name = "";
      this.email = "";
      this.phone = "";
      this.message = "";
    },
  },
};
</script>
<style>
</style>