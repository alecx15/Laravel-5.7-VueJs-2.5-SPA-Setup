        <template>
            <div class="about">
                <div class="section section-header">
        <div class="parallax filter filter-color-light">
            <div class="image" ui-view="header">
                <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="max-width: 100%">
                    <source src="https://s3.eu-west-2.amazonaws.com/psittacus/videos/Psittacus-Parrot-Video.webm" type="video/webm">
                    <source src="https://s3.eu-west-2.amazonaws.com/psittacus/videos/Psittacus-Parrot-Video.mp4" type="video/mp4">
                    Video not supported
                </video>
            </div>
            <!--
    <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header-top">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <img max-width="100%" src="https://www.psittacus.systems/wp-content/uploads/2018/08/psittacus-systems.png" alt="Psittacus Systems" class="navbar-brand-centered">
    </div>

    <div class="collapse navbar-collapse" id="navbar-brand-centered">
    <ul class="nav navbar-nav">
    <li><a href="#">Home</a></li>
    <li><a href="#">About Psittacus.Systems</a></li>
    <li><a href="#">LMS & E-Learning</a></li>
    <li><a href="#">TAME™ Software</a></li>
    <li><a href="#">Software Development</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Website Design</a></li>
    <li><a href="#">SEO</a></li>
    <li><a href="#">Facebook Ads</a></li>
    <li><a href="#">Contact</a></li>		        
    <li><a href="#">BLE Login</a></li>		        
    </ul>
    </div>
    </nav>
    -->
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h2>ABOUT PSITTACUS SYSTEMS</h2>
                        <h5>Who are we and what do we do?</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonials -->

    <div class="container" style="margin-top: 2em;">
        <div class="row">
            <div class="col-md-8">
                <div class="title-area">
                    <h3><b>WHO ARE WE?</b></h3>
                    <p>We are Psittacus Systems Ltd and we’re one of the fastest growing bespoke software developers in the UK; that means we design intelligent, cost-effective and intuitive web-based applications that help streamline processes for businesses.</p>
                </div>
                <div class="title-area">
                    <h3><b>OUR APPROACH TO BESPOKE SOFTWARE</b></h3>
                    <p>We take a unique approach by fusing traditional and new methods to develop quality software at speed, while retaining our personal touch and fastidious attitude to planning.</p>
                </div>
                <div class="title-area">
                    <h3><b>A TRUSTED SOFTWARE DEVELOPMENT PARTNER</b></h3>
                    <p>At Psittacus Systems we have built up considerable expertise in a variety of sectors: public and private, consumer and business focused and not-for-profit. We have helped businesses ranging from small owner-managed companies through to large public organisations.</p>
                </div>
                <div class="title-area">
                    <h3><b>THE PSITTACUS CEAT™ SYSTEM</b></h3>
                    <p>The CEAT™ System itself is an Accredited System, meeting the strict guidelines set by Awarding Organisations regulated by OfQual. To meet the strict guidelines, the CEAT™ System needs to ensure that the opportunity to manipulate learner’s results is eliminated. This approach is the reason why the Psittacus CEAT™ System is able to provide 100% Online Regulated Qualifications, without the need of an ‘Invigilator lead’ assessment or exam, as the CEAT™ System does this part itself!</p>
                </div>
            </div>
            <div class="col-md-4">
                <img :src="'images/rodney.png'" alt="" class="photos">
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 2em;">
        <div class="row">
            <div class="col-md-4">
                <img :src="'images/map.png'" alt="" class="photos">
            </div>
            <div class="col-md-8">
                <div class="title-area">
                    <h3><b>WHERE WE’RE BASED</b></h3>
                    <p>Our main office is based in Corby, Northamptonshire, where our dedicated Software Support Team are based and we have a development centre in Pontefract where our Senior Development Team work on unique, intelligent and clever code.</p>
                </div>
                <div class="title-area">
                    <h3><b>OUR PEOPLE</b></h3>
                    <p>The team at Psittacus Systems mixes together all of the ingredients we believe are required for a successful software development company. We have highly talented, energetic software developers, architects and testers, all recruited through a rigorous process. Analytical minds that can understand the nuances of our customer’s businesses, the methodical project managers and designers, driven management with a focus for quality and delivery, and the innovators that transform the way we look at things.</p>
                </div>
                <div class="title-area">
                    <h3><b>OUR CLIENTS</b></h3>
                    <p>We have worked with many amazing clients in various industries, and a number of companies use our software on a daily basis. These include healthcare training companies and Premier League football clubs.</p>
                    <button class="btn btn-lg btn-danger btn-fill btn-lg" style="margin-bottom:6.8%;">VIEW OUR CLIENTS</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                :style="{ backgroundImage: `url('images/office-1.jpeg')` }">
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
        <style scoped>
    .section .parallax
    {
        height: 50vh;
    }
    @media (min-width: 1200px) {
        .container {
            width: 1680px;
        }
    }
</style>
        
