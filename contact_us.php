
<?php 
    $title = 'Contact US ';

    require_once('./layouts/header.php')
?>




    <!-- Content -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-3">
                <div class="col-lg-8 col-xxl-7">
                    <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
                    <p class="lead">
                        Welcome to DISCOVERY ACADEMY
                    </p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h5 class="fw-semibold mb-3">Send us a message</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control bg-light" placeholder="First name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control bg-light" placeholder="Last name" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <input class="form-control bg-light" placeholder="Email address" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
                        </div>
                        <div class="col-md-4 ms-auto">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="mb-4">
                        <h5>Address</h5>
                        <p>123 Mountain View, California, United States.</p>
                    </div>
                    <div class="mb-4">
                        <h5>Phone</h5>
                        <p>+1 123-456-7890</p>
                    </div>
                    <div class="mb-4">
                        <h5>Email</h5>
                        <p>hello@yourdomain.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <?php
        require_once ('./layouts/footer.php');
    ?>