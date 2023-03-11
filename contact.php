<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="styles/contact_us.css" />
  </head>
  <body>
    <!-- header -->
    <?php include 'navigation.php' ;
      
    ?>

    <!-- main content -->
    <div class="flex-container">
      <div class="contact">
        <h2>Contact Us</h2>
        <p>
          bitkart.in<br />
          405/406/407, Manjusha Tower,Level 4, Nehru Place, New Delhi 110019,
          India<br />
          Email : <a href="#email">info@bitkart.in</a>
        </p>
        <br />
        <p>
          Office Timings : From 10Am - 6 Pm , MON-SAT. We follow strict Covid
          Guidelines to ensure a safe and a healthy environment for you
        </p>
        <br />
        <p>Contact Us</p>
        <br />
        <p>
          Phone Number: 0124-4063133/0124-4010169 (From 10AM - 6PM) MON-SAT.
        </p>
        <p>
          <b>Bank Details</b><br />
          BANK NAME : ICICI BANK<br />
          ACCOUNT NUMBER : 418005000675<br />
          ACCOUNT HOLDER NAME : BITKART RETAIL LLP<br />
          ACCOUNT TYPE : CURRENT <br />
          IFSC CODE: ICIC0004180<br />
          BRANCH : NEHRU PLACE
        </p>
      </div>
      <div class="form">
        <h2>Feedback</h2>
        <label for="first_name"><b>Name</b></label>
        <input
          type="text"
          placeholder="Enter first name"
          name="first_name"
          id="first_name"
          required
        /><br />
        <label for="phone"><b>Phone Number</b></label>
        <input
          type="text"
          placeholder="Enter phone number"
          name="phone"
          id="phone"
          required
        /><br />
        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        /><br />
        <button type="button">Register</button>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
          exercitationem nam ratione veniam commodi, hic beatae sint eum nisi
          culpa alias itaque voluptas numquam rerum suscipit, in sunt obcaecati
          provident quaerat. Sed cupiditate sint, laudantium quis necessitatibus
          atque esse aliquam odio ut. Dicta, explicabo. Sint aut maxime quas!
          Placeat ex sit eos, perspiciatis dignissimos nemo fugiat neque soluta
          ipsa? Est facere quos sint! Voluptatum aut error esse velit
          perferendis, nostrum debitis quia corrupti consequuntur in sint neque
          nam exercitationem alias minus dolorum blanditiis consectetur eum amet
          tempora nulla molestiae! Earum reiciendis, inventore modi natus
          delectus quasi maiores fugiat reprehenderit molestias.
        </p>
      </div>
    </div>

    <!-- main content end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    
    </div>
  </body>
</html>
