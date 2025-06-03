<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - CONTACT</title>
    <?php require('inc/links.php') ?>
</head>
    
<body class="bg-light">
<!-- Header -->
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Tenetur obcaecati culpa dolores mollitia delectus architecto, nobis quibusdam quidem labore perferendis.</p>
    </div>

    <div class="container">
        <div class="row"> 
         <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d483100.1333170671!2d72.2234615890625!3d18.921663100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c06fffffff%3A0xc0290485a4d73f57!2sThe%20Taj%20Mahal%20Palace%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1748611731176!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5 class="mb-3">Address</h5>
                <h6>The Taj Mahal Palace</h6>
                <a href="https://maps.app.goo.gl/ENfGj2zphjLRLu8n7" taget_blank class="d-inline-block text-decoration-none text-dark mb-2 ">
                    <i class="bi bi-geo-alt-fill me-1"></i>Mumbai Apollo Bandar, Mumbai, Maharashtra 400001
                </a>
                <h5 class="mt-4">Call Us</h5>
                <a href="tel: +91 9321851403" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+91 9321851403
                </a>
                <br>
                <a href="tel: +91 9321851403" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+91 9321851403
                </a>
                <h5 class="mt-4">Email</h5>
                <a href="mailto: sahil.kesarkar@somaiya.edu" class="d-inline-block mb-2 text-decoration-none text-dark">CareTajness@gmail.com</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <form action="">
                    <h5>Send a Massage</h5>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Name</label>
                        <input type="text" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Email</label>
                        <input type="email" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Subject</label>
                        <input type="text" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                </form>
            </div>
        </div>
        </div>
    </div>


<!-- Footer -->
    <?php require('inc/footer.php') ?>

</body>
</html>