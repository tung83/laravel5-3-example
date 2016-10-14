<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Colorlib Contact Form</h3>
    <h4>Contact us for custom quote</h4>
    {!! Recaptcha::render() !!}
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">{{trans('front/form.send')}}</button>
    </fieldset>
  </form>
  {!! Form::open(['url' => 'contact']) !!}  
    <div class="row">
        {!! Form::controlBootstrap('text', 6, 'name', $errors, trans('front/contact.name')) !!}
        {!! Form::controlBootstrap('email', 6, 'email', $errors, trans('front/contact.email')) !!}
        {!! Form::controlBootstrap('textarea', 12, 'message', $errors, trans('front/contact.message')) !!}
        {!! Form::text('address', '', ['class' => 'hpet']) !!}      
        {!! Form::submitBootstrap(trans('front/form.send'), 'col-lg-12') !!}
    </div>
{!! Form::close() !!}
</div>