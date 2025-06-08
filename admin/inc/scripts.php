<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function alert(type,msg,position='body')
    {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;  

        if(position == 'body')
        {
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else
        {
            document.getElementById(position).appendChild(element);
        }
        document.body.append(element);
        setTimeout(remAlert, 1000);
    }

    function remAlert()
    {
        document.getElementsByClassName('alert')[0].remove();
    }

    function setActive() {
        let navbar = document.getElementById('dashboard-menu');
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
