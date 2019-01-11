<template>
    <div class="test">
        <div class="section section-header">
    <div class="parallax filter filter-color-light">
        <div class="image" ui-view="header">
            <img :src="'images/lms-e-learning.jpg'" alt="" class="photos">
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
            <div class="content" style="top: 38%">
                <div class="title-area-head img-rounded" style="border: solid 3px white; float: left;">
                    <h2>PSITTACUS SYSTEMS IS ONE OF THE UK’S LEADING SOFTWARE DEVELOPMENT COMPANIES, AND HAVE DEVELOPED THE ONLY ONLINE LEARNING SYSTEM (CEAT™) WHICH CANNOT BE CHEATED OR MANIPULATED.</h2>
                    <h5>Our Unique and Patent Protected Blended Learning Environment (BLE) is the fastest growing e-Learning system in the UK, with over 350,000 companies, SME’s and not-for-profit organisations. Psittacus Systems has now established itself as a major force in e-Learning services over the last 18 months alone!</h5>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonials -->
<div class="container">
    <div class="separator separator-danger" style="margin-top: 1%;">♦</div>
    <div class="title-area">
        <!--                    <h5 class="subtitle text-gray">Here are some</h5>-->
        <h4>From our dedicated Support Team, to specialist Web Developers and Software Engineers, Psittacus Systems is growing quickly. We are a CPD Accreditation Group Member and the Blended Learning Environment has been successfully Accredited to deliver OfQual Regulated Qualifications 100% Online, in line with the regulatory standards of the Awarding Organisation, Training Qualifications UK (TQUK), a first in the world of e-Learning. Psittacus have raised the bar for e-Learning!</h4>
    </div>

    <div class="row">
        <div class="col-md-4" style="border:1px solid #bababa;">
            <button class="btn btn-lg btn-danger center-block btn-fill btn-lg" style="margin-top:10%; margin-bottom:6.8%;">Click For e-Learning Reseller Options</button>
        </div>
        <div class="col-md-4" style="border:1px solid #bababa;">
            <img :src="'images/CEAT.jpg'" alt="" class="photos center-block">
        </div>
        <div class="col-md-4" style="border:1px solid #bababa;">
            <button class="btn btn-lg btn-danger center-block btn-fill btn-lg" style="margin-top:10%; margin-bottom:6.8%;">Click For CEAT™ Licensing Options</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4><b><red>OFQUAL REGULATED</red></b></h4>
            <h4>The Psittacus Systems Blended Learning Environment (BLE) is the <red>ONLY</red> Online Learning system which is able to deliver and assess Regulated Qualifications, 100% Online, without the need for the learner to attend a Classroom Based Invigilated Assessment. This means that Regulated Qualifications can now be completed anywhere, at anytime, anywhere in the world, without restriction, when it is convenient for employers and learners alike. Psittacus Systems are leading the way and setting the <red>minimum standards for ALL Online Learning Systems.</red></h4>
        </div>
        <div class="col-md-6">
            <img :src="'images/online-regulated-qualifications-2.jpg'" alt="" class="photos center-block">
        </div>

    </div>
    <hr>
    <div class="row" style="margin-bottom: 2%;">
        <div class="col-md-4">
            <img :src="'images/776601-Psittacus-Systems.png'" alt="" class="photos center-block mt-5">
        </div>
        <div class="col-md-offset-2 col-md-6">
            <h4><b><red>CPD ACCREDITATION</red></b></h4>
            <h4>All of Psittacus Systems courses have been independently certified as conforming to the universally accepted CPD (Continuing Personal or Professional Development) guidelines. The CPD Accreditation Group is an independent body operating across all market sectors and in support of all professional institutions, bodies and societies. The certified CPD ‘quality mark’ is a recognised symbol of quality-assured training.</h4>
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
        height: 65vh;
    }
    red {
        color: red;
    }
</style>