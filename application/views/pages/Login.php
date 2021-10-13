<br>
<div class="row">
    <div class="col-lg-4 col-md-6 mb-4"></div>
    <div class="col-lg-4 col-md-6 mb-4">
        <?php echo isset($error) ? $error : ''; ?>  
        <div class="card">
            <!-- Default form subscription -->
            <form class="text-center border border-light p-5" method="post" action="<?php echo site_url('Admin/process'); ?>">

                <!--<p class="h4 mb-4">Login Admin</p>-->

            <!--    <p>Join our mailing list. We write rarely, but only the best content.</p>

                <p>
                    <a href="" target="_blank">See the last newsletter</a>
                </p>-->

                <!-- Name -->
                <input type="text" name="user" class="form-control mb-4" placeholder="Name">

                <!-- Email -->
                <input type="password" name="pass" class="form-control mb-4" placeholder="password">

                <!-- Sign in button -->
                <button class="btn btn-info btn-block" type="submit">Masuk</button>


            </form>
        </div>
    <!-- Default form subscription -->
    </div>
</div>
