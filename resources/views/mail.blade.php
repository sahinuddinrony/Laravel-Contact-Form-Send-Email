<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Laravel mail Send Syetem </title>
</head>
<body>
    <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{ route('send_mail') }}" method="POST"  
           enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail">Your Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail">Your Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Subject</label>
            <input type="text" class="form-control" name="sub" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Message</label>
            <textarea class="form-control" name="mess" rows="10"  
             required></textarea>
          </div>
          <div class="text-center"><button type="submit">Send Mail</button></div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
</body>
</html>
