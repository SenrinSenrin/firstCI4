<?php
$session = session();
if ($session->has('user_id')) {
    header("Location: " . base_url('/dashboard'));
    exit();
}
// $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
// $this->output->set_header("Pragma: no-cache");
?>


<?= view('Layout/Header') ?>   <!-- Includes Header -->
<?= view('Layout/Navbar') ?>   <!-- Includes Navbar -->

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                <h2>Login</h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Submit</button>
                    </div>     
                </form>
            </div>
              
        </div>
    </div>
    <script>
        $(document).ready(function() {
            function disableBack() { window.history.forward() }

            window.onload = disableBack();
            window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
        });
    </script>

