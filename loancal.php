<!DOCTYPE html>
<html> 
<head>
<meta charset=utf-8 />
<title>Loan Calculator </title>
<link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="wrap" style="background-image: url('calculator_bg/imgcalculator2.jpg');">
 
<form name="autoSumForm">


        <form class="login-form">             
        <div class="form-header">
                <h3></b> CALCULATOR</b> </h3>
                <p>This calculator will helps you get your loan facility package</p>
        </div>
            <!--Email Input-->
            <div class="form-group">
                <p> <font color="red"><b>LOAN AMOUNT</b></a> </p>
                <select type="text" class="form-input" name="amount" value="" onFocus="startCalc();" onBlur="stopCalc();" placeholder="loan amount">
                <option value="None">Select</option>
                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                </select>
            </div>
            <div class="form-group">
                <p> <font color="red"><b>REPAYMENT DURATION Weekly</b></a> </p>
                <select type="text" class="form-input" name="repymnt_duration" value="" onFocus="startCalc();" onBlur="stopCalc();" placeholder="loan amount">
                <option value="None">Select</option>
                <option value="4">4 weeks</option>
                <option value="6">6 weeks</option>
                <option value="8">8 weeks</option>
                <option value="10">10 weeks</option>
                <option value="12">12 weeks</option>
                </select>
                </div>           



            


            <div class="form-group">
            <p> <font color="blue"><b>INTEREST IS</b></a> </p>
                <input type="text" class="form-input" name="showresult" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Interest" >
            
                <div class="form-group">
                <p> <font color="black"><b>TOTAL AMOUNT</b></a> </p>
                <input type="text" class="form-input" name="total_amt" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Total Amount" >
                </div>
            
                

                <div class="form-group">
                <p> <font color="black"><b>Your weekly Payment is</b></a> </p>
                <input type="text" class="form-input" name="weekly_pay">
                </div>
            
</form>
      




    

            
        

        
            <script type='text/javascript' >
            function startCalc(){
            interval = setInterval("calc()",1);
            }
        
        function calc(){
           one = document.autoSumForm.amount.value;
           if ( one ==10000) {
            document.autoSumForm.showresult.value = ( one * 0.1);
        
           }else (one==20000)
               document.autoSumForm.showresult.value = ( one * 0.2);
             
           t_amt = document.autoSumForm.showresult.value;
           
           document.autoSumForm.total_amt.value =  (one*1) + (t_amt*1); 

           ppp=document.autoSumForm.repymnt_duration.value;
           tt_amt=document.autoSumForm.total_amt.value;
           if ( ppp==4) {
            document.autoSumForm.weekly_pay.value = ( tt_amt/ppp);
        
           }else (ppp==6)
               document.autoSumForm.weekly_pay.value = ( tt_amt/ppp);
           
           //document.autoSumForm.weekly_pay.value = (tt_amt)/(ppp);
           }

            
           function stopCalc(){
           clearInterval(interval);
           }
                                
        

    </script>
        
</body>
</html>