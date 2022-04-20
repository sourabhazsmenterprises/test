<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<style>
	body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding:100px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: left;
    padding-left: 50px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
	
</style>
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
          
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
           
<img src="https://a1fonz.com/firstcare/public/assets/img/logsa.png" style="height:45px;width:auto" class="img-fluid">  
	      		
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small> </small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Dr. lorem ipsum</strong><br>
                 M.B.B.s,  M.D, M.S. ! Reg NO:<br>23211
                  
               </address>
            </div>
           <!-- <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">care</strong><br>
                  Street Address<br>
                  City, Zip Code<br>
                  Phone: (123) 456-7890<br>
                  Fax: (123) 456-7890
               </address>
            </div>-->
            <div class="invoice-date">
               <small>Care Clinic</small>
               <div class="date   m-t-5">Lorem Ipusum address detail</div>
               <div class="invoice-detail">
                 
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
		  
		    <div class="invoice-content">
				<div class="invoice-to">
         
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Id 14 - DEMO PATIENT (M)/8 Y</strong><br>
            Address: Lorem ipsum Street Address<br>
                  City, Zip Code<br>
                  Phone: (123) 456-7890<br>
                  Referred By: Dr. Demo<br>
				   <b> Diagnosis</b>
				   <br>
				   
				   *FEVER
               </address>
            </div>
				
		  </div>
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
				<hr>
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>Medicine Name</th>
                        <th class="text-center">Dosage</th>
                        <th class="text-center">Duration</th>
                         
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <span class="text-inverse">Tab. Demo Medicine 1</span><br>
                           
                        </td>
                        <td class="text-center">1 morning / 2 evening</td>
                        <td class="text-center">10 days/</td>
                       
                     </tr>
                      <tr>
                        <td>
                           <span class="text-inverse">Tab. Demo Medicine 2</span><br>
                           
                        </td>
                        <td class="text-center">1 morning / 2 evening</td>
                        <td class="text-center">10 days/</td>
                       
                     </tr>
                     <tr>
                        <td>
                           <span class="text-inverse">Tab. Demo Medicine 3</span><br>
                           
                        </td>
                        <td class="text-center">1 morning / 2 evening</td>
                        <td class="text-center">10 days/</td>
                       
                     </tr>
                  </tbody>
               </table>
            </div>
			 <hr>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
           <!-- <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small>SUBTOTAL</small>
                        <span class="text-inverse">$4,500.00</span>
                     </div>
                     <div class="sub-price">
                        <i class="fa fa-plus text-muted"></i>
                     </div>
                     <div class="sub-price">
                        <small>PAYPAL FEE (5.4%)</small>
                        <span class="text-inverse">$108.00</span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">$4508.00</span>
               </div>
            </div> -->
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
       <p style="font-size:12px;">    <b> Advice Given:</b><br>
            *उबला हुआ पानी पिएं <br>
		   अगली जांच: 17-04-2022
		   </p>
			   </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <!--<div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
            </p>
         </div> -->
         <!-- end invoice-footer -->
      </div>
   </div>
</div>