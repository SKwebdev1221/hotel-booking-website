<?php 
    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>
<?php 
    $company_q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $company_r = mysqli_fetch_assoc(select($company_q,$values,'i'));
?>
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2"><?php echo $company_r['site_title'] ?></h3>
            <p>
                <?php echo $company_r['site_about'] ?>
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-line-block mb-2 text-decoration-none text-dark">Home</a><br>
            <a href="rooms.php" class="d-line-block mb-2 text-decoration-none text-dark">Rooms</a><br>
            <a href="facilities.php" class="d-line-block mb-2 text-decoration-none text-dark">Facilities</a><br>
            <a href="contact.php" class="d-line-block mb-2 text-decoration-none text-dark">Contact Us</a><br>
            <a href="about.php" class="d-line-block mb-2 text-decoration-none text-dark">About</a><br>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us</h5>
            <a href="<?php echo $contact_r['twit']?>" class="d-inline-block mb-2 text-dark text-decoration-none mb-2"><i class="bi bi-twitter me-2"></i>Twitter</a><br>
            <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-2 text-dark text-decoration-none mb-2"><i class="bi bi-instagram me-2"></i>Instagram</a><br>
            <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-2 text-dark text-decoration-none mb-2"><i class="bi bi-facebook me-2"></i>Facebook</a><br>
            <a href="<?php echo $contact_r['pin']?>" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-pinterest me-2"></i>Pinterest</a>
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">© 2025 The Indian Hotels Company Limited. All Rights Reserved.</h6>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function setActive() {
        let navbar = document.getElementById('nav-bar');
        if (!navbar) return;
        let a_tags = navbar.getElementsByTagName('a');
        // Get current file name (without query string or hash)
        let current = window.location.pathname.split('/').pop().split('?')[0].split('#')[0];
        if (current === "" || current === "/") current = "index.php"; // Default to index.php if root

        for (let i = 0; i < a_tags.length; i++) {
            let link = a_tags[i].getAttribute('href').split('/').pop().split('?')[0].split('#')[0];
            if (link === current) {
                a_tags[i].classList.add('active');
            } else {
                a_tags[i].classList.remove('active');
            }
        }
    }
    setActive();
</script>