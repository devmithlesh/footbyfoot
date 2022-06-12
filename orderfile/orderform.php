<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-Form</title>
    <link rel="stylesheet" href="./order.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
      <div class="d-flex">
        <form action="" method="">
          <label>
            <span class="fname">First Name <span class="required">*</span></span>
            <input type="text" name="fname">
          </label>
          <label>
            <span class="lname">Last Name <span class="required">*</span></span>
            <input type="text" name="lname">
          </label>
          <label>
            <span>Company Name (Optional)</span>
            <input type="text" name="cn">
          </label>
          <label>
            <span>Country <span class="required">*</span></span>
              <select name="selection">
                <option>India</option>
            </select>
          </label>
          <label>
            <span>Street Address <span class="required">*</span></span>
            <input type="text" name="houseadd" placeholder="House number and street name" required>
          </label>
          <label>
            <span>&nbsp;</span>
            <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
          </label>
          <label>
            <span>Town / City <span class="required">*</span></span>
            <select name="selected">
              <option>Your Location</option>
              <option>Jalandhar</option>
              <option>Ludhiana</option>
              <option>Patiala</option>
              <option>Bathinda</option>
              <option>Mohali</option>
              <option>Firozpur</option>
              <option>Batala</option>
              <option>Pathankot</option>
              <option>Moga</option>
              <option>Abohar</option>
              <option>Khanna</option>
              <option>Phagwara</option>
              <option>Kapurthala</option>
              <option>Faridkot</option>
          </select>
          </label>
          <label>
            <span>Postcode / ZIP <span class="required">*</span></span>
            <input type="text" name="city"> 
          </label>
          <label>
            <span>Phone <span class="required">*</span></span>
            <input type="tel" name="city"> 
          </label>
          <label>
            <span>Email Address <span class="required">*</span></span>
            <input type="email" name="city"> 
          </label>
        </form>
        <div class="Yorder">
          <table>
            <tr>
              <th colspan="2">Your order</th>
            </tr>
            <tr>
              <td>Product Name Motorsport Shoes For Men </td>
              <td>रु 779</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>रु 779</td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td>Free shipping</td>
            </tr>
          </table><br>
          <div>
            <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
          </div>
          <p>
              Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
          </p>
          <div>
            <input type="radio" name="dbt" value="cd"> Cash on Delivery
          </div>
          <div>
            <input type="radio" name="dbt" value="cd"> <a href="../payment/payment.php" style="text-decoration: none; color:black">Paypal</a> <span>
            <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
            </span>
          </div>
          <button type="button" >Place Order</button>
        </div><!-- Yorder -->
       </div>
      </div>
</body>
</html>