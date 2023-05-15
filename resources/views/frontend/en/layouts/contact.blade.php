<!-- Contact -->
<div class="homeContact">
    <div class="contact-wrapper">
    
            
                <div class="mobileContact">
                    <div class="contact-info">
                        <h6>Free contact call center</h6>
                        <span>Or online booking</span>
                        <div>
                            <div class="contactIcon">
                                <img src="{{ asset('assets/frontend/images/phoneblue.svg') }}"  alt="phone">
                                <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                            </div>
                            <div class="contactIcon">
                                <img src="{{ asset('assets/frontend/images/mailblue.svg') }}"  alt="phone">
                                <a href="mailto:callcenter@portnature.com.tr">callcenter@portnature.com.tr</a>
                            </div>
                            <div class="contactIcon">
                                <img src="{{ asset('assets/frontend/images/whatsappblue.svg') }}"  alt="phone">
                                <a class="whatsappText" href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=">Whatsapp</a>
                            </div>
                        </div>
                    </div>
                    <div class="contactImage">
                        <img src="{{ asset('assets/frontend/images/blog/callcenter.png') }}" alt="contactImg"/>

                </div>
                <div class="contact-form-wrapper">
                    <div class="contact-wrap">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div id="alert" class="alert alert-danger d-none" role="alert">
                            Please fill out all required fields.
                        </div>
                        <h6>Send Message</h6>
                        <span>All your questions, opinions, suggestions</span>
                        <form method="POST" action="{{ route('contacts-submit') }}" id="contactForm2" name="contactForm" class="contactForm" novalidate="novalidate">
                            @csrf
                       
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name / Surname">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        <input type="submit" value="Send" class="btn btn-primary submit">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            
                        </form>
                </div>
            </div>

            </div>
            
    </div>
</div>