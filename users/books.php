<?php include("../includes/header.php");
        include("user_sidebar.php");
if(empty($_SESSION['user_id'])){
    header("location: index.php");
}

?>
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Need a ride? just call</h6>
                    <h1 class="text-uppercase">
                        911 999 911
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Call for taxi</a>
                </div>
                <div class="col-lg-4  col-md-6 header-right mt-5">
                    <h4 class="pb-30">Book Your Texi Online!</h4>
                    <form class="form" action="pay.php" method="post">
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" disabled name="name" placeholder="Your name" value="<?php echo $full_names ?>"  placeholder = 'Your name'">
                            <input class="form-control txt-field" type="email" disabled name="email" placeholder="Email address" value="<?php echo $email ?>" placeholder = 'Email address'">
                            <input class="form-control txt-field" type="tel" minlength="9" maxlength="12"  required name="phone_number" placeholder="Phone number" placeholder = 'Phone number'">
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <label for="">From</label>
                                <select name="from_des">
                                    <option value="cbd">CBD</option>
                                    <option value="senga">Senga</option>
                                    <option value="mkoba">Mkoba</option>
                                    <option value="main campus">main campus</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <label for="">To</label>
                                <select name="to_des">
                                    <option value="cbd">CBD</option>
                                    <option value="senga">Senga</option>
                                    <option value="mkoba">Mkoba</option>
                                    <option value="main campus">main campus</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <input class="dates form-control mt-2" name="pic_time"  placeholder="Time" type="time">
                                <div class="input-group-prepend mt-2">
                                    <span  class="input-group-text"><span class="lnr lnr-alarm"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="make" class="btn btn-default btn-lg btn-block text-center text-uppercase">Make booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

<?php include("../includes/footer.php"); ?>