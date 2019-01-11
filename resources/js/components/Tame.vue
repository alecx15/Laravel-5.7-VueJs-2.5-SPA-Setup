<template>
    <div class="test">
      <div class="section section-header">
    <div class="parallax-small filter filter-color-light">
        <div class="image" ui-view="header">
            <img :src="'images/training-administration-made-easy-tame.jpg'" alt="" class="photos">
        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <h2>TRAINING ADMINISTRATION MADE EASY</h2>
                    <h5>using the TAME™ software</h5>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonials -->

<div class="container">
    <div class="separator separator-danger" style="margin-top: 1%;">♦</div>
    <div class="row">
        <div class="col-md-5">
            <div class="title-area">
                <!-- <h5 class="subtitle text-gray">Here are some</h5> -->
                <h4>The TAME™ (Training Administration Made Easy) System is the latest software package to be developed by Psittacus Systems, supporting Training Providers to streamline and optimise their back-office Training Event Management processes for Tutor-Led-Training.</h4>
                <p>The system is designed to support the delivery of Classroom based training by providing one solution for the management of Tutors assigned to both In-House and External Training Events, enabling the dissemination of relevant training resources, documentation and certification, whilst also providing an in-depth tracking, reporting and auditing system Tutor-Led-Training programmes.</p>
                <p>TAME™ is a stand-alone Training Event Management System whilst also having the capability of integrating into the Psittacus Blended Learning Environment (BLE), enabling Training Organisations to manage both their Classroom and Online Training portfolios from one portal.</p>
            </div>
        </div>
        <div class="col-md-7">
            <img :src="'images/TAME.png'" alt="" class="photos center-block">
            <br>
            <div class="text-center">
                <img :src="'images/TAME-editable-and-automated-email-notifications-180x180.jpg'" alt="" class="" style="border:1px solid #bababa;"/>
                <img :src="'images/TAME-comprehensive-reporting-and-auditing-suite-180x180.jpg'" alt="" class="" style="border:1px solid #bababa;"/>
                <img :src="'images/TAME-create-new-training-events-1-180x180.jpg'" alt="" class="" style="border:1px solid #bababa;"/>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container mb-3">
    <div class="row">
        <div class="title-area">
            <!-- <h5 class="subtitle text-gray">Here are some</h5> -->
            <h2 class="text-center">TAME™ MAIN FEATURES AS STANDARD</h2>
        </div>
        <br>
        <div class="col-md-4">
            <h5>👉 Hard Copy Certificates Available 1st Class Post</h5>
            <h5>👉 Tasks / Equipment Checklist</h5>
            <h5>👉 Course Materials Upload / Download</h5>
            <h5>👉 Individual Day scheduling</h5>
            <h5>👉 Unlimited Template Creating</h5>
            <h5>👉 In-depth Reporting Suite</h5>
            <h5>👉 Manage Learners</h5>
        </div>
        <div class="col-md-4">
            <h5>👉 Manage Tutors</h5>
            <h5>👉 Manage Customers</h5>
            <h5>👉 In-depth Auditing</h5>
            <h5>👉 Direct Messaging System</h5>
            <h5>👉 Custom Email Templates</h5>
            <h5>👉 Google Maps Advertising / Booking</h5>
            <h5>👉 Tutor Expense Management</h5>
        </div>
        <div class="col-md-4">
            <h5>👉 Automated Attendee Forms</h5>
            <h5>👉 Automated Reflective Practice Forms</h5>
            <h5>👉 Auto Generated Certificates (PDF)</h5>
            <h5>👉 Calendar System</h5>
            <h5>👉 Branded Certificates</h5>
            <h5>👉 SMS Messaging (upgrade)</h5>
            <h5>👉 Offer Extra Online Courses</h5>
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
                <h2 class="text-white">TAME™ SUBSCRIPTION PRICING</h2>
                <div class="separator line-separator">♦</div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-bordered">
                        <thead style="background-color: #b92121;" class="text-center">
                            <tr>
                                <th>Events</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white; color: black;">
                            <tr>
                                <td>Up to 5 events per month</td>
                            </tr>
                            <tr>
                                <td>Up to 10 events per month</td>
                            </tr>
                            <tr>
                                <td>Up to 20 events per month</td>
                            </tr>
                            <tr>
                                <td>Up to 50 events per month</td>
                            </tr>
                            <tr>
                                <td>Up to 100 events per month</td>
                            </tr>
                            <tr>
                                <td>Over 100 events per month</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-bordered">
                        <thead style="background-color: #b92121;">
                            <tr>
                                <th>Standard</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white; color: black;">
                            <tr>
                                <td>£75 + VAT</td>
                            </tr>
                            <tr>
                                <td>£125 + VAT</td>
                            </tr>
                            <tr>
                                <td>£210 + VAT</td>
                            </tr>
                            <tr>
                                <td>£350 + VAT</td>
                            </tr>
                            <tr>
                                <td>£595 + VAT</td>
                            </tr>
                            <tr>
                                <td>POA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-bordered">
                        <thead style="background-color: #b92121;">
                            <tr>
                                <th>+SMS</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white; color: black;">
                            <tr>
                                <td>£90 + VAT</td>
                            </tr>
                            <tr>
                                <td>£150 + VAT</td>
                            </tr>
                            <tr>
                                <td>£260 + VAT</td>
                            </tr>
                            <tr>
                                <td>£500 + VAT</td>
                            </tr>
                            <tr>
                                <td>£845 + VAT</td>
                            </tr>
                            <tr>
                                <td>£90 + VAT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <div class="well-white" style="margin-top: -0.6em;">
                        <p>👉 Based on max. 30 delegates per event</p>
                        <p>👉 No setup fee</p>
                        <p>👉 4 x Admins (one off fee of £100 for extra admins)</p>
                        <p>👉 £1 + VAT per delegate above 30</p>
                        <p>👉 Branded system</p>
                        <p>👉 Bespoke certificates</p>
                        <p>👉 12 month subscription</p>
                    </div>
                </div>
            </div>
            <!--
<div class="button-get-started">
<a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contact Us</a>
</div>
-->
        </div>
    </div>
</div>

<div class="container mb-3">
    <div class="row">
        <div class="title-area">
            <!-- <h5 class="subtitle text-gray">Here are some</h5> -->
            <h2 class="text-center">TAME™ PAYG PRICING</h2>
        </div>
        <br>
        <div class="col-md-6">
            <h5>👉 Unlimited events / learners</h5>
            <h5>👉 £499 setup fee (yearly?)</h5>
            <h5>👉 Branded system</h5>
        </div>
        <div class="col-md-6">
            <h5>👉 Bespoke certificate</h5>
            <h5>👉 £1 per learner</h5>
            <h5>👉 4 x admins (one off fee of £100 extra admins)</h5>
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
    .section .parallax1
    {
        height: 40vh !important;
    }
    th {
        text-align: center;
    }
    .well-white {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        text-align: left;
        color: black;
    }
    .title-area {
        max-width: 850px !important;
    }
</style>