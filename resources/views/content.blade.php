@foreach($articles as $article)
<section id="{{ $article->aliases }}" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              {!! $article->text !!}
              <a href=" {{ route('article',array('aliases'=>$article->aliases))}}" class="read_more2">Посмотреть</a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-5">
	{{-- <img src="{{ asset("inc/img/$article->img") }}" class="zoomIn wow animated" alt="" /> --}}
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">
              
            </div>
            <div class="col-lg-4">
             
            </div>
            <div class="col-lg-4">
            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">	
           <div class="contact_info">
                              <div class="detail">
                                  <h4>UNIQUE Infoway</h4>
                                  <p>104, Some street, NewYork, USA</p>
                              </div>
                              <div class="detail">
                                  <h4>call us</h4>
                                  <p>+1 234 567890</p>
                              </div>
                              <div class="detail">
                                  <h4>Email us</h4>
                                  <p>support@sitename.com</p>
                              </div> 
                          </div>
                   
                
            
            <ul class="social_links">
              <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
            </ul>
          </div>
          <div class="col-lg-8 wow fadeInLeft delay-06s">
            <div class="form">
            <form action="{{ route('main') }}", method="POST">
              <input class="input-text" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <textarea class="input-text text-area" name="text" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
              <input class="btn btn-primary btn-lg" type="submit" value="отправить сообщение">
              {{ csrf_field() }}
            </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2014,    Template by <a href="http://webthemez.com">WebThemez.com</a>. </span> </div>
    </div>
  </footer>
  