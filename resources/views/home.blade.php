@extends('partials.layout')

@section('content')
    {{--    <div class="p-5 text-center" style="--}}
    <div class="position-relative overflow-hidden text-center bg-light d-flex" style="
        background-image: url('/img/screenshots/hvac-price-list-screenshot.png');
        height: 500px;
        width:100%;
        background-position: center center !important;
        background-repeat: no-repeat !important;
        background-attachment: fixed !important;
        background-color:#2a3519 !important;
        background-size: cover !important;
    ">
        <div class="d-flex justify-content-center align-items-center w-100">
            <div class="text-black p-2 px-5 border-2-fsm-dk-blue rounded-pill" style="background-color: rgba(232, 235, 237, 1)!important;">
                <h1 class="display-3">Field Service Management App</h1>
                <h2 class="lead">for HVAC and Plumbing Operations</h2>
                <a class="btn btn-primary btn-lg mt-3" href="https://pro.fieldstone.io/register" role="button">Start Free Trial Now</a>
            </div>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 ps-md-3">
        <div class="bg-dark me-md-3 px-3 px-md-5 text-center text-white overflow-hidden">
            <div class="py-3">
                <h2 class="display-5">Operate more Efficiently</h2>
            </div>
        </div>
        <div class="bg-light me-md-3 px-3 px-md-5 text-center overflow-hidden">
            <div class="p-3">
                <h2 class="display-5">Increase Profits</h2>
            </div>
        </div>
        <div class="bg-dark me-md-3 px-3 px-md-5 text-center text-white overflow-hidden">
            <div class="py-3">
                <h2 class="display-5">Reduce Stress</h2>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-5 mx-auto my-5">
            <h1 class="h2 fw-normal text-uppercase">Owners leave thousands of dollars on the table every year</h1>
            <p class="lead fw-normal">How much business do you lose because you can't stay organized? How much profit
                do you lose because your pricing is outdated? How many good employees leave because the stress at your
                company is so high?</p>
            <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
        </div>
        <div class="product-device shadow-sm d-none d-lg-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-lg-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 ps-md-3">
        <div class="bg-dark me-md-3 px-3 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h1 class="h2 fw-normal">Save time and take control of your business with Fieldstone</h1>
            </div>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Works Everywhere</h2>
                <p class="lead">In the office or on the go, the Fieldstone cloud and mobile apps are ready to work for you.</p>
            </div>
        </div>
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Clear Financials</h2>
                <p class="lead">Mystery pricing is a thing of the past. When you use Fieldstone, you know the numbers for every job.</p>
                <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
            </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Coordinated Team</h2>
                <p class="lead">Coordinating a mobile team is complicated. Keep everyone on the same page with Fieldstone.</p>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-5 mx-auto my-5">
            <h1 class="h2 fw-normal text-uppercase">We feel your pain and we're here to help.</h1>
            <p class="lead fw-normal">We work closely with a network of early adopters working side by side with them
            to get their businesses organized and ensure they're profitable.</p>
            <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
        </div>
        <div class="product-device shadow-sm d-none d-lg-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-lg-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Configure Your Account</h2>
                <p class="lead">Configure Fieldstone to fit your business to get it ready for your team. We will show
                you how and help if you need us.</p>
            </div>
        </div>
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Train Your Staff</h2>
                <p class="lead">Video training and live webinars help prepare your team to go live and put Fieldstone
                to work for your business.</p>
                <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
            </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Go Live</h2>
                <p class="lead">Be more efficient and more profitable with less stress.</p>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-5 mx-auto my-5">
            <h1 class="h2 fw-normal text-uppercase">Stop stressing out and try Fieldstone</h1>
            <p class="lead fw-normal">
                At Fieldstone, we know that you want to be the leader of a profitable and successful business. In order
                to do that, you need to know your numbers and keep your team coordinated. When you don’t, you end up
                leaving thousands of dollars in profits on the table every year which makes you feel unsuccessful,
                average, and defeated. We believe keeping your business operating at peak efficiency and maximum
                profitability can be achieved with the help of our software. We understand that operating a field
                service business with so many moving parts can be frustrating and difficult to manage which is why
                we work closely with early adopters of our products to ensure they meet the highest operational
                standards and exceed the expectations of our customers. When you choose to work with Fieldstone,
                we start you off with a free trial that lets you experience the software without risk for 30 days.
                This period gives us plenty of time to help you configure Fieldstone to fit your needs. Once Fieldstone
                is configured for your business, we build confidence in your team with video training resources they
                use to learn the features of Fieldstone. We also host live webinars where your team can join in to learn
                and ask questions. Once your team is trained, you go live and start relying on Fieldstone for your daily
                operations. So, sign up for a free trial to get started. We’re excited to see your success! In the
                meantime, try our free loaded labor rate calculator. It may shock you to find out your true profitability
                so you can stop underbidding jobs and instead earn what you’re worth.
            </p>
            <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
        </div>
        <div class="product-device shadow-sm d-none d-lg-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-lg-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">30 Day Free Trial</h2>
                <p class="lead">Try Fieldstone risk free for 30 days.</p>
                <p class="lead">Free</p>
                <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
            </div>
        </div>
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Price Books</h2>
                <p class="lead">Full featured flat rate price books for your whole team.</p>
                <p class="lead">Coming Soon!</p>
                <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
            </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Job Management</h2>
                <p class="lead">Describe Manage Jobs Plan</p>
                <p class="lead">Coming Soon!</p>
                <a class="btn btn-lg btn-primary mt-3" href="https://pro.fieldstone.io/register">Start Free Trial Now</a>
            </div>
        </div>
    </div>
@stop
