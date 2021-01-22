<?php
/*
Template Name: Faq Page
*/
get_header();
global $post;
?>
 <div class="container m-t-90">
         <div class="clearfix bg-text ">
            <div class="col-md-12 text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq.png" class="img-responsive m-auto" alt="Agonda goa huts">
               <h3><?php echo $post->post_title; ?></h3>
            </div>
         </div>
         <section>
            <div class="clearfix text-center faq-title ">
               <div class="col-md-12">
                  <h3>General</h3>
               </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           When are your check-in and check-out times?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Check-in is from 12pm. Check-out is 11am.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-2" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you accommodate late check-out?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-2" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Our check-in time is 12 (midday) and check-out is at 11am. We are strict with these times because most guests do not leave until the last minute. If you would like to stay after check-out time please ask at reception on the morning of your last day and if nobody is due to check-in to your cottage, then we are happy for you to stay longer.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is it possible to check-in earlier?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        It is sometimes possible to check in earlier, however, this depends on availability and cannot be guaranteed. However, to be sure of having the room ready upon arrival, you can reserve the room from the night before.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-4" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is my id/passport required at check in?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-4" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        If you are from outside India then we will need to take a copy of your passport and visa.  If you are Indian we will need to take a copy of your photo ID (passport, driving license or ration card).
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-5" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           What is included in the cottage charge?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-5" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        The rates shown on our website <a href="<?php echo get_permalink('108'); ?>">(Prices)</a> include all taxes and are per cottage based on up to 3 people sharing. No meals are included and we have no meal plan options. The reason is that we do not want to inflate the cost of the accommodation to cover food and we prefer that our guests choose where and what to eat. We do supply free WiFi to our guests and is available to most if not all the cottages dependent upon your computers WiFi strength and any power outages.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-6" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is there high speed internet or wifi available at the resort?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-6" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We do supply free WiFi to our guests and is available to most if not all the cottages depending on your computers Wi-Fi strength and any power outages.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-7" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Can we have extra people in the cottage?
                        </h4>
                     </a>
                  </div>
                  <div id="faq-7" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Each cottage is designed for 3 people only and we are happy for additional people to stay in the cottage if they are children. Please note that we have a charge for every additional person per night.
                     </div>
                  </div>
               </div>
               <div class="clearfix text-center faq-title ">
                  <div class="col-md-12">
                     <h3>Cottage Facilities</h3>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cf-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is there a change of the towels and linen available?
                        </h4>
                     </a>
                  </div>
                  <div id="cf-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We supply bathroom and separate beach towels for our guests. The bed linen is changed every 2 days. If you need more towels or you want your linen changing sooner, please ask at our reception.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cf-2" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           What facilities available in the cottage?
                        </h4>
                     </a>
                  </div>
                  <div id="cf-2" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        • Balcony- a porch with two chairs and one table  • Chargeable plugs  • Ceiling fans  • Spring mattress only in beach view huts  • Doctor on request  • Free wifi  • Dolphin trips  • Food and beverages (chargeable)  • Candle light dinner  • Sight seeing  • Sun beds with umbrella and beach towels  • Hammock  • Chill out area.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cf-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do we supply or sell toiletries
                        </h4>
                     </a>
                  </div>
                  <div id="cf-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Most guests bring their own soaps and products, but should you forget your toiletries, please ask at reception where we keep a supply of the basics.
                     </div>
                  </div>
               </div>

               <div class="clearfix text-center faq-title ">
                  <div class="col-md-12">
                     <h3>Resort Facilities</h3>
                  </div>
               </div>


               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is there a restaurant in the resort?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Yes we do have a restaurant that serves Indian & European cuisine. In main season there are around 40 restaurants along the 2km stretch of beach. Please <a href="https://www.tripadvisor.in/Restaurants-g816969-Agonda_Goa.html" target="_blank">"Click here"</a> to see our menu.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-2" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Is vegetarian cuisine available in the restaurant?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-2" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We do have some vegetarian options on our menu and we are happy to adapt a dish if you request. There are also a couple of vegetarian restaurants locally. Please <a href="https://www.tripadvisor.in/Restaurants-g816969-Agonda_Goa.html" target="_blank">""Click here"</a> to see our menu.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you have room service?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Yes, we offer room service and we can serve you at your room balcony or the room itself. You are very welcome to take food to your cottage balcony yourself too.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-4" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you have a special menu for children?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-4" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We do not have a specific kids menu, but there are many items that you will find suitable for your children. Please "<a href="https://www.tripadvisor.in/Restaurants-g816969-Agonda_Goa.html" target="_blank">"Click here"</a>" to see our menu.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-5" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you have onsite laundry service?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-5" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Laundry bags and order forms are located in your closet.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rf-6" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Does the resort offer Currency Exchange?
                        </h4>
                     </a>
                  </div>
                  <div id="rf-6" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We recommend you visit Om Sai Travels at the Palolem beach for the best currency exchange rates and any further travel booking.
                     </div>
                  </div>
               </div>

               <div class="clearfix text-center faq-title ">
                  <div class="col-md-12">
                     <h3>Travel</h3>
                  </div>
               </div>


               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tr-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           How close is the resort to shops etc?
                        </h4>
                     </a>
                  </div>
                  <div id="tr-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Agonda has a few shops where you can get provisions and Indian souvenirs. The nearest town is Chaudi (15 minute rickshaw journey away) where there are many banks, chemists and a super-market where you should be able to get most things that you require.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tr-2" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Does your resort provide parking?
                        </h4>
                     </a>
                  </div>
                  <div id="tr-2" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We have ample parking space for 3-4 cars. If in case all the parking slots are full, we can recommend you a spot nearby.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tr-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you offer free shuttle service from the airport/Train Stations?
                        </h4>
                     </a>
                  </div>
                  <div id="tr-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                         Yes we offer taxi services from train stations and the airport. Please email us at agondahuts@yahoo.com for the latest rates and the available vehicle options.
                     </div>
                  </div>
               </div>
              
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tr-5" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Can we organise travel, excursions and your onward journey?
                        </h4>
                     </a>
                  </div>
                  <div id="tr-5" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We work with “Om Sai Travels” on the Palolem beach. They can organise all forms of transport and recommend many places of interest and provide you with a quotation. Please feel welcome to contact them in advance.
                     </div>
                  </div>
               </div>

                <div class="clearfix text-center faq-title ">
                  <div class="col-md-12">
                     <h3>Deposits, Payments & refunds</h3>
                  </div>
               </div>


               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dpr-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           How do I cancel my reservation and is there a charge?
                        </h4>
                     </a>
                  </div>
                  <div id="dpr-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        If you need to cancel or make changes to your reservation, please let us know at the earliest opportunity.  The deposit that we request in non-refundable, otherwise it would offer us no security and would indeed cost us in time and money to refund it. We appreciate that life’s plans often change and although we will not refund your deposit, we would be happy to hold it against a later reservation in the season if we manage to fill the days that you had reserved. If not, we are sorry but you will lose the deposit.
                     </div>
                  </div>
               </div>
              
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dpr-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           What forms of payment are accepted to pay for my room?
                        </h4>
                     </a>
                  </div>
                  <div id="dpr-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        After you get a reply from us on email, Send us 50% advance amount through Western Union Money Transfer/PayPal/Bank Transfer.Please contact us at agondahuts@yahoo.com for money transfering details.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dpr-4" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Where is the nearest bank or currency exchange?
                        </h4>
                     </a>
                  </div>
                  <div id="dpr-4" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        There is a bank (HDFC Bank) and ATM in Agonda village. The machine accepts Master & Visa cards and you can withdraw Rs.20,000 per day (in 2 lots of Rs.10,000). We recommend you visit Om Sai Travels on the Agonda road towards the southern end of the beach, for currency exchange, agondahuts@yahoo.com
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dpr-5" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you offer discounts for long stays or groups etc?
                        </h4>
                     </a>
                  </div>
                  <div id="dpr-5" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Yes, we offer long term stay discounts. Please email us for details.
                     </div>
                  </div>
               </div>

                <div class="clearfix text-center faq-title ">
                  <div class="col-md-12">
                     <h3>Location & Around</h3>
                  </div>
               </div>


               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Where are you located?
                        </h4>
                     </a>
                  </div>
                  <div id="la-1" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We are located towards the northern end of Agonda beach in south Goa. Agonda is 10km from the famous Palolem beach. Click “here” to see a Google map.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-2" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           How do I get to “Om Sai Beach Huts”?
                        </h4>
                     </a>
                  </div>
                  <div id="la-2" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                         From the airport, get in a taxi to Agonda and once you reach Agonda you turn Right at the "T" junction (at this point you will see a church ahead of you slightly to the right).
 Travel down the road (it runs parallel to the beach) and about a kilometre on the left you will see a sign for Om Sai Beach Huts. Nearly everybody in Agonda should be able to give you directions if you require.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-3" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           What are the local tourist attractions?
                        </h4>
                     </a>
                  </div>
                  <div id="la-3" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        For when you are ready to leave the beach for a few moments, we have compiled a list of a few places we suggest that you visit. Please click on one of the links below to be taken to our “<a href="<?php echo get_permalink('104'); ?>">Agonda Beach Page</a>” to find out more: Cabo de Rama Fort Cotigao Wildlife Sanctuary The Placio Do Deo Butterfly Beach If you have been somewhere amazing in south Goa, please let us know and we will add it to the list.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-4" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Do you have a tour desk where I can book excursions during my stay?
                        </h4>
                     </a>
                  </div>
                  <div id="la-4" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        We recommend you visit Om Sai Travels on the Agonda road towards the southern end of the beach. agondahuts@yahoo.com.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-5" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           How far away is the airport from Agonda?
                        </h4>
                     </a>
                  </div>
                  <div id="la-5" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        Although the airport is only 55km away, the road winds through many a village and over the hills. The journey takes around 1 hour & 15 minutes by taxi.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-6" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           How far is the nearest hospital to the resort?
                        </h4>
                     </a>
                  </div>
                  <div id="la-6" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        10 kms away from the hotel is Dhavalikar Hospital. It takes around 10 minutes by taxi.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-7" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           Can I swim in the sea in Agonda?
                        </h4>
                     </a>
                  </div>
                  <div id="la-7" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        The sea in Agonda varies throughout the season, some days are calm and on occasion the waves can be large. People do swim in the sea in Agonda and we recommend that you are cautious as you should be on any beach. There is also the added protection of several lifeguards along the beach. For swimming with children, it can be calmer at either end of the beach.
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab">
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#la-8" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <h4 class="panel-title">
                           What is the weather like at different times of the season?
                        </h4>
                     </a>
                  </div>
                  <div id="la-8" class="panel-collapse collapse" role="tabpanel">
                     <div class="panel-body">
                        The weather is different every season, it used to be much more predictable as did everywhere in the world. We do recommend that you research the weather conditions for the time you plan to travel. Our cottages do not have A/C but as they have high roofs, which are insulated with coconut palms, they remain amongst the coolest cottages on the beach.
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
     <section class="container-fluid testimonial">
         <div class="container m-t-180">
             <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="row like">
                     <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive" alt=""></a></div>
                     <div class="col-md-6 m-t-sm-40"> <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive" alt=""></a></div>
                  </div>
               </div>
            </div>
<?php get_footer(); ?>
<script>
function toggleIcon(e) {
   $(e.target)
   .prev('.panel-heading')
   .find(".more-less")
   .toggleClass('glyphicon-plus glyphicon-minus');
}
   $('.panel-group').on('hidden.bs.collapse', toggleIcon);
   $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>