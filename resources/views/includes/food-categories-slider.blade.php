<section id="food-preview">
  <h2>We have everything you need to kill your hunger</h2>
  <div class="container">
    <div class="left-btn">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="right-btn">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    <div class="food-slider">
      <div class="sliding-system">

        @foreach ($categories as $category)
        <a href="/menu/{{$category->title}}" class='slide'>

          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              {{$category->title}}
            </div>
            <p class="food-description">
              {{$category->description}}
            </p>
            <div class="food-image">
              <img src="{{$category->image}}">
            </div>
          </div>

        </a>
        @endforeach


      </div>
    </div>
  </div>
</section>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
  let slides = $('.sliding-system a.slide').length;
    console.log(slides)
    let maxSlides;
    let moveTotal;
    let currentSlide = 0;
    $(window).resize(function(){
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%, 0,0');
    })
    function desktopSlider(){
      if(a.matches){
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < maxSlides){
            currentSlide += 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var a = window.matchMedia("(min-width: 998px)")
    desktopSlider(a);
    a.addListener(desktopSlider);
    function tabletSlider(){
      if(b.matches){
        maxSlides = Math.ceil((slides * 50) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          
          if(currentSlide < ((maxSlides * 100) - 100)){
            currentSlide += 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
       
          if(currentSlide != 0){
            currentSlide -= 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");
    console.log(b)
    tabletSlider(b);
    b.addListener(tabletSlider);

</script>