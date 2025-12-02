@include('layouts.header')
<style>
    .input-date {
  position: relative;
}

.input-date label {
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
  color: #6c757d;
  pointer-events: none;
  transition: 0.2s;
  background: #fff;
  padding: 0 6px;
}
  
.input-date input:focus + label,
.input-date input:not(:placeholder-shown) + label {
  top: -8px;
  font-size: 12px;
  color: #198754;
}

</style>


<section id="quote-form" class="container my-5" style="padding-top:87px; padding-bottom:87px;">
    <h2 class="text-center text-success mb-4" >Contact Us</h2>
    <p class="text-center">Fill up the form with all details and we will contact you within 24 hours.</p>

    <form id="contactForm" action="https://formspree.io/f/xldqbkjk" method="POST" class="bg-light p-4 rounded">


        <p class="text-danger">* Indicates mandatory fields.</p>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name*" required>
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email*" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <select name="travelling_from" class="form-control" required>
                    <option selected disabled>You are Travelling from*</option>
                    <option>India</option>
                    <option>Outside India</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="text" name="country_code" class="form-control" placeholder="Code">
            </div>
            <div class="col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone No.">
            </div>
        </div>

        <div class="row mb-3">
    <div class="col-md-6 input-date">
        <input type="date" name="arrival" class="form-control" required placeholder=" ">
        <label>Tentative Arrival*</label>
    </div>

    <div class="col-md-6 input-date">
        <input type="date" name="departure" class="form-control" placeholder=" ">
        <label>Departure</label>
    </div>
</div>


        <div class="row mb-3">
            <div class="col-md-6">
                <select name="adults" class="form-control" required>
                    <option disabled selected>Adults*</option>
                    <option>1</option><option>2</option><option>3</option><option>4+</option>
                </select>
            </div>

            <div class="col-md-6">
                <select name="children" class="form-control">
                    <option disabled selected>Children*</option>
                    <option>0</option><option>1</option><option>2</option><option>3+</option>
                </select>
            </div>
        </div>

        <!-- ⬇️ New Feature: Luxury Car for Rent -->
        <div class="row mb-3">
            <div class="col-md-12">
                <select name="luxury_car" class="form-control">
                    <option disabled selected>Luxury Car for Rent</option>
                    <option>BMW</option>
                    <option>Audi</option>
                    <option>Mercedes</option>
                    <option>Fortuner</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <textarea name="message" rows="4" class="form-control" placeholder="Additional Information"></textarea>
            </div>
        </div>

        <div class="text-center" style="padding:10px">
            <button class="btn btn-success px-5" type="submit" >SUBMIT</button>
        </div>
    </form>
</section>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
			 
@include('layouts.footer')




	



	
	
	
	
	
	
	

	<!--========= Scripts ===========-->
  
<script>
document.getElementById("contactForm").addEventListener("submit", async function(e) {
    e.preventDefault(); // stop default submission

    const form = e.target;

    // Sending data to Formspree
    const response = await fetch(form.action, {
        method: form.method,
        body: new FormData(form),
        headers: { 'Accept': 'application/json' }
    });

    if (response.ok) {
        Swal.fire({
            title: "🎉 Thank You!",
            text: "Your form has been submitted successfully. We will contact you within 24 hours.",
            icon: "success",
            confirmButtonColor: "#28a745"
        });

        form.reset(); // clear form
    } else {
        Swal.fire({
            title: "❌ Error",
            text: "There was a problem submitting your form. Please try again.",
            icon: "error",
            confirmButtonColor: "#d9534f"
        });
    }
});
</script>

	<script src="js/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script> 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	</body>

	</html>