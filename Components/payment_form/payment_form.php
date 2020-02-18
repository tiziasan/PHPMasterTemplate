<?php

class payment_form{

    function inset_payment_form(){

        $component = "<div class=\"rowpf\">
                          <div class=\"col-75pf\">
                            <div class=\"containerpf\">
                              <form action=\"/action_page.php\">
                        
                                <div class=\"rowpf\">
                                  <div class=\"col-50pf\">
                                    <h3>Billing Address</h3>
                                    <label for=\"fname\" class = \"labelpf\"><i class=\"fa fa-user\"></i> Full Name</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"fname\" name=\"firstname\" placeholder=\"John M. Doe\">
                                    <label for=\"email\" class = \"labelpf\"><i class=\"fa fa-envelope\"></i> Email</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"email\" name=\"email\" placeholder=\"john@example.com\">
                                    <label for=\"adr\" class = \"labelpf\"><i class=\"fa fa-address-card-o\"></i> Address</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"adr\" name=\"address\" placeholder=\"542 W. 15th Street\">
                                    <label for=\"city\" class = \"labelpf\"><i class=\"fa fa-institution\"></i> City</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"city\" name=\"city\" placeholder=\"New York\">
                        
                                    <div class=\"rowpf\">
                                      <div class=\"col-50pf\">
                                        <label for=\"state\" class = \"labelpf\">State</label>
                                        <input type=\"text\" class=\"inputpf\" id=\"state\" name=\"state\" placeholder=\"NY\">
                                      </div>
                                      <div class=\"col-50pf\">
                                        <label for=\"zip\" class = \"labelpf\">Zip</label>
                                        <input type=\"text\" class=\"inputpf\" id=\"zip\" name=\"zip\" placeholder=\"10001\">
                                      </div>
                                    </div>
                                  </div>
                        
                                  <div class=\"col-50pf\">
                                    <h3>Payment</h3>
                                    <label for=\"fname\" class = \"labelpf\" >Accepted Cards</label>
                                    <div class=\"icon-containerpf\">
                                      <img src = \"https://svgshare.com/i/7h2.svg\"class=\"fa fa-cc-visa\" style=\"color:navy;\"></img>
                                      <img src = \"https://svgshare.com/i/7fu.svg\" class=\"fa fa-cc-amex\" style=\"color:blue;\"></img>
                                      <img src = \" https://svgshare.com/i/7gD.svg\"class=\"fa fa-cc-mastercard\" style=\"color:red;\"></img>
                                      <img src = \" https://svgshare.com/i/7gD.svg\"class=\"fa fa-cc-mastercard\" style=\"color:red;\"></img>
                                    </div>
                                    <label for=\"cname\" class = \"labelpf\">Name on Card</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"cname\" name=\"cardname\" placeholder=\"John More Doe\">
                                    <label for=\"ccnum\" class = \"labelpf\" >Credit card number</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"ccnum\" name=\"cardnumber\" placeholder=\"1111-2222-3333-4444\">
                                    <label for=\"expmonth\" class = \"labelpf\" >Exp Month</label>
                                    <input type=\"text\" class=\"inputpf\" id=\"expmonth\" name=\"expmonth\" placeholder=\"September\">
                        
                                    <div class=\"rowpf\">
                                      <div class=\"col-50pf\">
                                        <label for=\"expyear\" class = \"labelpf\" >Exp Year</label>
                                        <input type=\"text\" class=\"inputpf\" id=\"expyear\" name=\"expyear\" placeholder=\"2018\">
                                      </div>
                                      <div class=\"col-50pf\">
                                        <label for=\"cvv\" class = \"labelpf\" >CVV</label>
                                        <input type=\"text\" class=\"inputpf\" id=\"cvv\" name=\"cvv\" placeholder=\"352\">
                                      </div>
                                    </div>
                                  </div>
                        
                                </div>
                                <label class = \"labelpf\">
                                  <input type=\"checkbox\" checked=\"checked\" name=\"sameadr\"> Shipping address same as billing
                                </label>
                                <input type=\"submit\" value=\"Continue to checkout\" class=\"btnpf\">
                              </form>
                            </div>
                          </div>
                        </div>";

        return $component;

    }

}