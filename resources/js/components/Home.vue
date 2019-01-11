<template>
    <div class="test">
        <div class="section section-header" >
        <div class="parallax filter filter-color-light">
            <div class="image" ui-view="header">
                <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="max-width: 100%">
                    <source src="https://s3.eu-west-2.amazonaws.com/psittacus/videos/Psittacus-Parrot-Video.webm" type="video/webm"/>
                    <source src="https://s3.eu-west-2.amazonaws.com/psittacus/videos/Psittacus-Parrot-Video.mp4" type="video/mp4"/>
                    Video not supported
                </video>
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                    <img :src="'images/psittacus-logo-w.png'" alt="" class="center-block" style="max-width: 100%"/>
                    </div>
                </div>
    
            </div>
        </div>
    </div>    
        <div class="container">
    <div class="row">
        <div class="col-md-4 wow fadeIn" style="background-color: #fff;vertical-align: middle;padding: 70px 50px 70px 50px;">
            <div class="info-icon">
                <div class="icon text-danger">
                    <img :src="'images/resellers-1.png'"/>
                </div>
                <h3>RESELLER PACKAGES</h3>
                <p class="description"><b>THE PSITTACUS SYSTEMS RESELLERS PARTNERSHIP IS AN EASY WAY FOR YOU TO RESELL E-LEARNING BY ADDING AN EXTRA ELEMENT TO YOUR WEB PRESENCE AND COMPANY PORTFOLIO</b></p>
                <p class="btn btn-lg btn-danger btn-fill text-center">Reseller Packages</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeIn" style="background-color: #d8d8d8;vertical-align: middle;padding: 70px 50px 70px 50px;">
            <div class="info-icon">
                <div class="icon text-danger">
                    <img :src="'images/583012602.gif'" alt="" class="center-block photos img-rounded">
                </div>
                <h3>ONLINE INVIGILATION</h3>
                <p class="description"><b>THE CEAT™ SYSTEM IS A ‘BACK TO BASICS’ APPROACH OF ASSESSMENT AND IMPROVING THE WAY PEOPLE LEARN ONLINE</b></p>
                <p class="btn btn-lg btn-danger mt-4 btn-fill text-center">Online Invigilation</p>

            </div>
        </div>
        <div class="col-md-4 wow fadeIn" style="background-color: #fff;vertical-align: middle;padding: 70px 50px 70px 50px;">
            <div class="info-icon">
                <div class="icon text-danger">
                    <img :src="'images/online-regulated-qualifications.jpg'" alt="" class="center-block photos img-rounded">
                </div>
                <h3>ONLINE QUALIFICATIONS</h3>
                <p class="description"><b>THE PSITTACUS SYSTEMS BLENDED LEARNING ENVIRONMENT IS THE ONLY ONLINE LEARNING SYSTEM WHICH IS ABLE TO DELIVER AND ASSESS REGULATED QUALIFICATIONS</b></p>
                <p class="btn btn-lg btn-danger btn-fill text-center">Online Qualifications</p>

            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft" style="vertical-align: middle; padding: 72px 0px 237px 10px; background-color: #f8f8f8;">
                <h3>LMS AND E-LEARNING</h3>
                <hr>
                <p class="description"><b>Psittacus has the UK’s fastest growing Learning Management System.</b></p>
                <p class="description">Psittacus has over 350,000 companies, SME’s and not-for-profit organisations using their own White Labelled System.</p>
                <p class="description">Experience the future of learning today with the only Online Learning System which cannot be cheated!</p>
                <div class="row">
                    <div class="col-md-6">
                        <img :src="'images/Psittacus-Logo-Style-5-300x82.png'" alt="" class="photos">
                    </div>
                    <div class="col-md-6">
                        <img :src="'images/Psittacus-Logo-Style-1-300x84.png'" alt="" class="photos">
                    </div>
                </div>
                <p class="btn btn-lg btn-danger btn-fill mt-5 text-center">Read More About LMS & E-Learning</p>
            </div>
            <div class="col-md-6 wow slideInRight">
                <img :src="'images/blended-learning-environment.jpg'" alt="" class="center-block photos img-rounded">
            </div>
        </div>
    </div>

<div class="section section-our-team-freebie">
    <div class="parallax filter filter-color-black">
        <div class="image" :style="{ backgroundImage: `url('images/header-2.jpeg')` }">
        </div>
        <div class="container">
            <div class="content">
                <div class="row wow fadeIn">
                    <div class="title-area">
                        <h2>Who We Are</h2>
                        <div class="separator separator-danger">♦</div>
                        <p class="description">We promise you a new look and more importantly, a new attitude. We build that by getting to know you, your needs and creating the best looking clothes.</p>
                    </div>
                </div>

                <div class="team">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4 wow slideInLeft">
                                    <div class="card card-member">
                                        <div class="content">
                                            <img alt="..." class="img-circle" :src="'images/code2-300x300.png'"/>
                                            <div class="description">
                                                <!--                                                        <h3 class="title">Tina</h3>-->
                                                <!--                                                        <p class="small-text">CEO / Co-Founder</p>-->
                                                <p class="description">“PARROTS ARE EXTREMELY INTELLIGENT ANIMALS…WE BELIEVE IN INTELLIGENT CODE”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 wow slideInDown">
                                    <div class="card card-member">
                                        <div class="content">
                                            <img alt="..." class="img-circle" :src="'images/rodney1-300x300.png'"/>
                                            <div class="description">

                                                <p class="description">“PARROTS HAVE EXCELLENT MEMORIES AND ARE CAPABLE OF SOLVING RELATIVELY COMPLEX PROBLEMS…”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 wow slideInRight">
                                    <div class="card card-member">
                                        <div class="content">
                                            <img alt="..." class="img-circle" :src="'images/talk1-300x300.png'"/>
                                            <div class="description">

                                                <p class="description">“PARROTS LOVE TO TALK…SO DO WE, GET IN TOUCH FOR A CHAT!”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-our-clients-freebie">
    <div class="container">
        <div class="title-area">
            <h2>WHAT OUR CUSTOMERS SAY</h2>
            <div class="separator separator-danger">?</div>
        </div>

        <ul class="nav nav-text" role="tablist">
            <li class="active">
                <a href="#testimonial1" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" :src="'images/face_5.jpg'"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial2" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" :src="'images/face_6.jpg'"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial3" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" :src="'images/face_2.jpg'"/>
                    </div>
                </a>
            </li>
        </ul>


        <div class="tab-content">
            <div class="tab-pane active" id="testimonial1">
                <p class="description">
                    Two years after setting up my Executive Travel Company in Chester I decided it was time to expand my client base & reach out to a broader audience than just those who had led to my establishing the business initially.</p>

                <p class="description">I needed something to reflect by high end, executive market service & Pittacus Systems came highly recommended to me.</p>

                <p class="description"> I couldn’t have been more delighted with the head turning, easy to use, fully optimised website, designed for a new multi device world.</p>

                <p class="description"> With Pittacus’ guidance & a very affordable monthly fee my company has benefited within a matter of months in ranking on page one of Google & within the top 10.</p>

                <p class="description">My business is expanding exactly as I had wanted, attracting precisely the corporate clients in & around Chester my Executive Business Travel Service is designed for.</p>

                <p>www.ca-b.uk


                </p>
            </div>
            <div class="tab-pane" id="testimonial2">
                <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                </p>
            </div>
            <div class="tab-pane" id="testimonial3">
                <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                </p>
            </div>

        </div>

    </div>
</div>


<div class="section section-small section-get-started">
    <div class="parallax filter">
        <div class="image" :style="{ backgroundImage: `url('images/office-1.jpeg')` }">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">NEWSLETTER SIGNUP</h2>
                <div class="separator line-separator">?</div>
                <p class="description"> We are keen on creating a second skin for anyone with a sense of style! We design our clothes having our customers in mind and we never disappoint!</p>
            </div>

            <div class="button-get-started">
                <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</div>
    </div>
</template>

<script>
    export default {
        render() {
            console.log('Component mounted.')
        }
    }
</script>
