<style>
    .building {
        position: relative;
    }

    .text1 {
        position: absolute;
        top: 8%;
        left: 53px;
        color: #fff;
        /* Text color for contrast */
        padding: 15px;
        /* Padding for some space around the text */
        border-radius: 10px;
        /* Optional rounded corners */
    }

    .black-text {
        color: black;
    }

    .overlay-container {
        position: relative;
        overflow: hidden;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(255 250 250 / 20%);
        transition: opacity 0.3s ease;
        opacity: 1;
    }

    .overlay-container:hover .overlay {
        opacity: 0;
        pointer-events: none;
    }

    .arrow-icon {
        display: inline-block;
        transition: transform 0.3s ease;
        transform: rotate(-45deg);
        /* Initial tilt from the left */
    }

    .overlay-container:hover .arrow-icon {
        transform: rotate(360deg);
        /* Rotate to the right on hover */
    }

    .grey {
        background-color: rgb(247, 247, 247);
    }
</style>

<!-- banner -->
<section style=" background-image: url('assets/img/leaf.png'); background-repeat: no-repeat;">
    <div class="container content " style="padding-top: 160px;color: black;">
        <p class="font" style="font-size: 65px;">Transform Your Business with Innovative Tech Solutions</p>
        <div class="row">
            <div class="col-md-12 building">
                <img src="assets/img/img1.avif" alt="" style="height: 90%; width: 100%; border-radius: 20px">
                <div class="col-md-5 text1">
                    <h4 class="heading font">Empowering Small Businesses And Startups To Thrive In The Digital Age</h4>
                    <hr style="opacity: 2.25;">
                    <p class="" style="font-family: Dosis, sans-serif;">Welcome to AI Dynamics, where we specialize in
                        helping small to medium-sized non-tech companies and tech startups streamline their operations
                        with cutting-edge technology. Our expert team is dedicated to providing innovative solutions
                        that drive growth and efficiency for your business.</p>
                    <div class="pt-3">
                        <a class="black " href="">Learn More</a>
                        <a class="white ml-3 " href="" style=" margin-left: 10px;">Contact us</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- banner -->

<!-- trusted by -->
<section class="noTop">
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="font-weight: 500;">
                <p class="mb-0">Trusted by
                </p>
                <p>500+ companies
                </p>
            </div>
            <div class="col-md-10"></div>
        </div>
    </div>
</section>
<!-- trusted by -->


<!-- grey ai Dynamics -->
<section class="space grey">
    <div class="container">
        <div class="row">
            <p style="line-height: 57px;">
                <span class=" heading font black-text">AI Dynamics </span> <span class="heading font"
                    style="color:#7c7a7a"> is dedicated to providing AI-powered technology solutions that drive growth
                    and efficiency for businesses of all sizes.</span>
            </p>
        </div>
        <div class="row pb-3">
            <p style="font-size: 25px;">Our mission is to empower businesses through AI technology, fostering growth,
                enhancing efficiency, and ensuring long-term success.</p>
        </div>
        <a class="black " href="">Read more about us</a>
    </div>

</section>
<!-- grey ai Dynamics -->

<!-- impact -->
<section class="space">
    <div class="container  noTop">
        <div class="row">
            <div class="col-md-6" style="    line-height: 54px;">
                <p class="heading font mb-0">Impact —</p>
                <p class="heading font">
                    We drive</p>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-end">
                <p>Our mission is to empower businesses through AI technology, fostering growth, enhancing efficiency,
                    and ensuring long-term success.</p>
            </div>

        </div>

        <div class="overlay-container r1">
            <div class="row impact pt-5">
                <div class="col-md-6">
                    <img src="assets/img/impact1.avif" alt="" style="height: 100%; max-width: 99%; border-radius: 20px">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="heading1 font">Enhancing Inventory Management for BrightMart
                        <img src="assets/img/arrow.png" alt="" class="arrow-icon" style="height: 20px;">
                    </p>
                    <p>BrightMart faced challenges in managing inventory and predicting demand, leading to
                        inefficiencies. AI Dynamics developed a predictive analytics model to forecast demand and
                        optimize inventory, resulting in a 30% sales increase, 20% cost reduction, and improved customer
                        satisfaction.
                    </p>
                </div>
            </div>
            <!-- Overlay Div -->
            <div class="overlay"></div>
        </div>

        <div class="overlay-container r2">
            <div class="row impact pt-5">
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="heading1 font">Revolutionizing Customer Support for TechGear
                        <img src="assets/img/arrow.png" alt="" class="arrow-icon" style="height: 20px;">
                    </p>
                    <p>TechGear struggled with a high volume of customer inquiries, leading to long response times. AI
                        Dynamics implemented AI chatbots and virtual assistants, resulting in a 50% reduction in
                        response times, 40% increase in customer satisfaction, and improved support team efficiency.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="assets/img/impact2.avif" alt="" style="height: 100%; max-width: 99%; border-radius: 20px">
                </div>
            </div>
            <!-- Overlay Div -->
            <div class="overlay"></div>
        </div>

        <div class="overlay-container r3">
            <div class="row impact pt-5">
                <div class="col-md-6">
                    <img src="assets/img/impact3.avif" alt="" style="height: 100%; max-width: 99%; border-radius: 20px">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="heading1 font">Securing Financial Data for SafeBank
                        <img src="assets/img/arrow.png" alt="" class="arrow-icon" style="height: 20px;">
                    </p>
                    <p>BrightMart faced challenges in managing inventory and predicting demand, leading to
                        inefficiencies. AI Dynamics developed a predictive analytics model to forecast demand and
                        optimize inventory, resulting in a 30% sales increase, 20% cost reduction, and improved customer
                        satisfaction.
                    </p>
                </div>
            </div>
            <!-- Overlay Div -->
            <div class="overlay"></div>
        </div>

        <div class="overlay-container r4">
            <div class="row impact pt-5">
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="heading1 font">Optimizing Project Management for BuildIt Construction
                        <img src="assets/img/arrow.png" alt="" class="arrow-icon" style="height: 20px;">
                    </p>
                    <p>BuildIt Construction faced project delays and inefficiencies. AI Dynamics developed a custom AI
                        project management tool, leading to a 60% improvement in project completion rates, 40% increase
                        in workflow efficiency, and a 30% reduction in project delays.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/impact4.avif" alt="" style="height: 100%; max-width: 99%; border-radius: 20px">
                </div>
            </div>
            <!-- Overlay Div -->
            <div class="overlay"></div>

        </div>
    </div>

    <section>
        <div class="container grey">
            <div class="row" style="padding: 60px 0;">
                <div class="col-md-12">
                    <p>Contact us today to learn more about our AI solutions and start your journey towards enhanced
                        efficiency
                        and growth.</p>
                </div>
            </div>
        </div>
    </section>


</section>
<!-- impact -->