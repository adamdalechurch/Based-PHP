<style>
#Contact {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

.contact-input {
  width: 100%;
  margin-bottom: 10px;
}
</style>

<div class="row">
    <div id="Contact" class="section">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <form action="https://formsubmit.io/send/adamdchurch92@gmail.com" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control contact-input" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control contact-input" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control contact-input" id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary contact-input">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
