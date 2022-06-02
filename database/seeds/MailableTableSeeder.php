<?php

use Illuminate\Database\Seeder;
use App\Mailable;

class MailableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Mailable
         Mailable::create([
            'name'=> 'OrderShipped',
            'message' => '<div style="color:#000">
            <table width="550" align="center">
            <thead>
              <tr>
              <th colspan="2"><br>
                      <p style="text-align:left">Hi Yoel, <br>
                      </p><p style="text-align:left"><span>Thank you for placing your order at </span><a href="http://www.vividcustoms.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.vividcustoms.com&amp;source=gmail&amp;ust=1560609319032000&amp;usg=AFQjCNEbuAR9XVWgzLZy9Lv3NSopjSlJbg">VividCustoms.com</a>!</p>
              <p></p></th>
              </tr>
              </thead><thead>
              </thead><tbody>
                <tr>
                  <td colspan="2" align="left">
                    <p><b>Order #:</b> <br>
                    <b>Order Date:</b> June 11, 2019, 5:28 pm<br>
                    <b>Shipping Method:</b> Standard Shipping<br><br>
                      </p><h3>Billing Info</h3><b>Company Name:</b> Yoel Comany<br><b>Name:</b> Yoel Blanco<br>
                      906 Greens RD<br>
                      Houston, TX 77060<br><br><h3>Shipping info</h3><b>Company Name:</b> Yoel Comany<br><b>Name:</b> Yoel Blanco<br>
                      906 Greens RD<br>
                      Houston, TX 77060<br>Phone: 832-721-1477<br>
                  <p></p></td>
                </tr>
                
              </tbody>
            </table>
            <br>
            <table style="background:#4598ba none repeat scroll 0 0" align="center" width="550" height="30px">
              <tbody>
                <tr>
                  <th style="color:white">
                  Item(s)
                  </th></tr></tbody></table><br>
            
            <table align="center" width="550" style="border:1px solid #cccccc">
              <tbody>
                <tr><th colspan="2" style="border-bottom:1px solid #cccccc">yoeltestemail</th></tr>
                <tr><td colspan="2">
                                <center><img src="https://ci6.googleusercontent.com/proxy/9unKhNBopojEBb9s7YkFgkm5E9lqNFqQtbZ1crw10NiE2wny9NXGk55fHRtHko-VFMHkcB8hSeUKiFQQxIJg1iQUV9R-TeyK_Cov1EhqEEWiNye_csK3OuH6rk2zsXWOBUfFbp87UITps_y3jP9RphlZ3dxuEDoCZMjYx40SaJAQ=s0-d-e1-ft#https://www.vividcustoms.com/designs/Guest000249/Guest000249_yoeltestemail/Guest000249_yoeltestemail_front.png" style="width:230px;height:auto;margin:auto" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01;"><div id=":16s" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Descargar" role="button" tabindex="0" aria-label="Descargar el archivo adjunto " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div></center>
                            </td></tr>
                <tr>
                <td><br>
                </td></tr>
                <tr>
                  <th colspan="2" align="left" style="border:2px solid #cccccc">
                    <b>Ultra Cotton T-shirt</b><br>
                    <b>Brand:</b> Gildan, <b>Color:</b> White<br> <br>
                  </th>
                  </tr>
                  <tr>
                  <th colspan="2"><table align="center" border="0" cellspacing="0" cellpadding="0" width="550" style="border:1px solid #cccccc">
                          <thead>
                            <tr>
                              <th style="border:1px solid #cccccc">Size</th>
                              <th style="border:1px solid #cccccc">Quantity</th>
                              <th style="border:1px solid #cccccc">Price</th>
                              <th style="border:1px solid #cccccc">Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <th style="border:1px solid #cccccc">M</th>
                            <th style="border:1px solid #cccccc">1</th>
                            <th style="border:1px solid #cccccc">$19.10</th>
                            <th style="border:1px solid #cccccc">$19.1</th>
                          </tr>
                        </tbody>
                        </table>
                        <br></th>
                </tr></tbody>
            </table><hr align="center" width="550" style="margin-bottom:30px;margin-top:30px;background-color:#4598ba;height:1px;border:0"><table align="center" border="0" cellspacing="0" cellpadding="0" width="550">
              <tbody><tr>
                  <td><u></u><b>SubTotal</b>
                  </td><th align="right">$19.10</th>
                </tr>
                <tr>
                  <td><u></u><b>Discount</b>
                  </td><th align="right">$0.00</th>
                </tr>
                <tr>
                  <th align="left">Standard Shipping</th>
                  <th align="right">$0.00</th>
                </tr>
                <tr>
                  <th align="left"><b>Sales Tax</b></th>
                  <th align="right">$1.58</th>
                </tr>
                <tr>
                  <th align="left"><br><b>Order Total</b></th>
                  <th align="right"><br><b>$20.68</b></th>
                </tr>
              </tbody>
            </table>
            <br>
            <h3 align="center">Our representatives are available to assist you!</h3>
            <p align="center">Monday - Friday | 9:00 AM - 5:00 PM Central Standard Time</p>
            <h3 align="center">Call us <a href="tel:8006488518" style="text-decoration:none" target="_blank">(800) 648-8518</a></h3>
                  <p align="center">Email: <a href="mailto:info@vividcustoms.com" target="_blank">info@vividcustoms.com</a></p>
            
            <br>
            <table style="background:#4598ba none repeat scroll 0 0" align="center" width="550">
              <tbody>
                <tr>
                  <th style="border-right:1px solid #eeeeee"><a href="https://www.vividcustoms.com/designstudio" style="text-decoration:none;color:#ffffff!important;height:40px;line-height:40px;overflow:hidden;padding:10px 20px;text-align:center;text-transform:capitalize;white-space:nowrap;width:50px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.vividcustoms.com/designstudio&amp;source=gmail&amp;ust=1560609319032000&amp;usg=AFQjCNFjjMlEn6ZXY9j-PFCwZQo4CjjKoQ">Designstudio</a></th>
                  <th style="border-right:1px solid #eeeeee"><a href="https://www.vividcustoms.com/products" style="text-decoration:none;color:#ffffff!important;height:40px;line-height:40px;overflow:hidden;padding:10px 20px;text-align:center;text-transform:capitalize;white-space:nowrap;width:50px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.vividcustoms.com/products&amp;source=gmail&amp;ust=1560609319033000&amp;usg=AFQjCNECnWYX37MwrWL6frj9uM4r1-fnvQ">Products</a></th>
                  <th style="border-right:1px solid #eeeeee"><a href="https://www.vividcustoms.com/templatedesign" style="text-decoration:none;color:#ffffff!important;height:40px;line-height:40px;overflow:hidden;padding:10px 20px;text-align:center;text-transform:capitalize;white-space:nowrap;width:50px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.vividcustoms.com/templatedesign&amp;source=gmail&amp;ust=1560609319033000&amp;usg=AFQjCNFKFoZAdOGpONidYfgVO0jFshNtJQ">Design Templates</a></th>
                  <th><a href="https://www.vividcustoms.com/about" style="color:white;text-decoration:none;color:#ffffff!important;height:40px;line-height:40px;overflow:hidden;padding:10px 20px;text-align:center;text-transform:capitalize;white-space:nowrap;width:50px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.vividcustoms.com/about&amp;source=gmail&amp;ust=1560609319033000&amp;usg=AFQjCNGhpc4ut2DKMvD4VqvRXx4SJLSDSw">About Us</a></th>
                </tr>
                <tr>
                  
                </tr>
              </tbody>
            </table><div class="yj6qo"></div><div class="adL">
            
            </div></div>',
            'view' => 'emails.orders.shipped',
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

    }
}
