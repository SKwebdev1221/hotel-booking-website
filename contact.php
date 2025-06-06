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

    <?php 
        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
    ?>

    <div class="container">
        <div class="row"> 
         <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320" src="<?php echo $contact_r['iframe']?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5 class="mb-3">Address</h5>
                <h6>The Taj Mahal Palace</h6>
                <a href="<?php echo $contact_r['gmap']?>" taget_blank class="d-inline-block text-decoration-none text-dark mb-2 ">
                    <i class="bi bi-geo-alt-fill me-1"></i><?php echo $contact_r['address']?>
                </a>
                <h5 class="mt-4">Call Us</h5>
                <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1']?>
                </a>
                <br>
                <a href="tel: +<?php echo $contact_r['pn2']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn2']?>
                </a>
                <h5 class="mt-4">Email</h5>
                <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block mb-2 text-decoration-none text-dark"><?php echo $contact_r['email']?></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <form method="POST">
                    <h5>Send a Massage</h5>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Name</label>
                        <input name="name" required type="text" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Email</label>
                        <input name="email" required type="email" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Subject</label>
                        <input name="subject" required type="text" class="form-control" shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 500;" >Message</label>
                        <textarea name="message" required class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <script>
        if(window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <?php
        
        if(isset($_POST['send']))
        {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q,$values,'ssss');
            if($res==1)
            {
                alert('success','Mail Sent!');
            }
            else
            {
                alert('error','Server Down! Try Again Later');
            }
        }
    ?>


<!-- Footer -->
    <?php require('inc/footer.php') ?>

</body>
</html>
