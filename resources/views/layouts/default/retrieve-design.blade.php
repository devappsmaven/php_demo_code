
<style>
    body {
    background: #ffffff;
    font-family: 'Raleway', sans-serif;
    font-weight: normal;
    font-style: normal;
    font-size: 14px;
    line-height: 20px;}

    .td{color:#8e8e90;}
    .b{color:#8e8e90 !important;}
    .a{color:#8e8e90 !important;}
    a:hover{color:#8e8e90 !important;}
    a:active{color:#8e8e90 !important;}
    a:visited{color:#8e8e90 !important;}
    a:link{color:#8e8e90 !important;}
    .container{width: 550px;
            margin-right: auto;
            margin-left: auto;
            padding-right: 5px;
            padding-left: 5px;}

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: normal;
        color: #8e8e90;
        font-style: normal;
        font-weight: 400;
    }
    h1 {
        font-size: 30px;
        font-weight: 500;
    }
    h2 {
        font-size: 24px;
    }
    h3 {
        font-size: 20px;
    }
    h4 {
        font-size: 18px;
    }
    h5 {
        font-size: 16px;
    }
    h6 {
        font-size: 14px;
    }
    p {
        font-size: 13px;
        font-weight: normal;
        line-height: 16px;
        color: #999999;
        margin-bottom: 10px;
    }
    </style>

<table width='550' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tbody>
        <tr>
        <td align='left'>
            <img src='http://design.vividcustoms.com//img/logo/logo.png' width='250' height='auto'>
        </td>
        <td align='right'>
            <b><a href='tel:8006488518' style='text-decoration: none;'>(800) 648-8518</a><br>
            Call us, We`d love to help!</b>
        </td>
        </tr>
        <tr>
        
        </tr>
    </tbody>
</table>
<hr width="550" align="center">
<p align="center">Personal Message</p>
<br>
<p align="center" style="color: black;">Here is your Vivid Customs Design!</p>

<p align="center" style="color: black;">Design Name: {{$design->displayname}}</p>
<table align="center">
    <tbody> 
        @if($design->designsides->count() == 1)
            <center><img src="http://{{$design->designsides[0]->design_product_image}}" style=" width: 250px; height: auto; position: relative; margin: auto; "></center>
        @else
            @foreach($design->designsides as $designside)
                @if($loop->iteration == 1 )
                    <tr>
                @endif
                    <td>
                        <center><img src="http://{{$designside->design_product_image}}" style=" width: 250px; height: auto; position: relative; margin: auto; "></center>
                    </td>
                @if($loop->iteration > 1 && $loop->iteration % 2 == 0)
                    <tr>
                    </tr>
                @endif
            @endforeach
        @endif
        <tr>
            <th>
            <a href="http://design.vividcustoms.com/designstudio/r/{{$design->id}}"  target="_blank" tabindex="0" style="cursor: pointer; background-color: #e62a9a; border: 0 none; text-decoration: none; border-radius: 20px; box-shadow: 0 0 0 1px rgba(79, 193, 240, 0.03) inset; cursor: pointer; display: inline-block; margin-right: 10px; overflow: hidden; padding: 5px 10px; position: relative; background-color: rgba(230, 42, 154, 0.8); color: #ffffff !important; font-size: 15px;">
                    <span style="font-weight: bold;font-size: 18px; padding: 5px 10px;">Edit Design</span>
                </a>
            </th>
            <th>
                <a href="http://design.vividcustoms.com/designstudio/r/{{$design->id}}"  target="_blank"  tabindex="0" style="cursor: pointer; background-color: #e62a9a ; border: 0 none; text-decoration: none;
                        border-radius: 20px;
                        box-shadow: 0 0 0 1px rgba(79, 193, 240, 0.03) inset;
                        cursor: pointer;
                        display: inline-block;
                        margin-right: 10px;
                        overflow: hidden;
                        padding: 5px;
                        position: relative;
                        background-color: rgba(230, 42, 154, 0.8);
                        color: #ffffff !important;
                        font-size: 15px;">
                    <span style="font-weight: bold;font-size: 18px; padding: 5px 10px;">Buy Your Design</span>
                </a>
            </th>
        </tr>
    </tbody>
</table>
<br>

<h3 align='center'>Our representatives are available to assist you!</h3>
<p align='center'>Monday - Friday | 9:00 AM - 5:00 PM Central Standard Time</p>
<h3 align='center'>Call us <a href='tel:8006488518' style='text-decoration: none;'>(800) 648-8518</h3></a>
    <p align='center'>Email: admin@vividcustoms.com</p>
<br>
<table style='background: #4598ba none repeat scroll 0 0;' align='center' width='550'>
    <tbody>
        <tr>
        <th style='border-right: 1px solid #eeeeee'><a href='http://design.vividcustoms.com//designstudio' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Designstudio</a></th>
        <th style='border-right: 1px solid #eeeeee'><a href='http://design.vividcustoms.com//products' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Products</a></th>
        <th style='border-right: 1px solid #eeeeee'><a href='http://design.vividcustoms.com//templatedesign' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Design Templates</a></th>
        <th><a href='http://design.vividcustoms.com//about-us' target='_blank' style='cursor: pointer; color: white; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>About Us</a></th>
        </tr>
        <tr>                                            
        </tr>
    </tbody>
</table>