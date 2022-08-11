<hr>
  <h2 class="course-category">Service That We Provide</h2>
  <section class="course-slider">
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/arrow.png" alt=""></button>
    
    @foreach($courses as $course)
    <div class="course-container">
      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">{{ $course->courseName }}</h2>
          <p class="course-short-description">{{ $course->description }}</p>
        </div>
      </div>
    @endforeach
    
    </div> 
  </section>
  </section>
  @include('footer')
</body>


<script>
const courseContainers = [...document.querySelectorAll('.course-container')];
const nextBtn = [...document.querySelectorAll('.next-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

courseContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nextBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
  document.querySelector("#show-signup").addEventListener("click",function(){
    document.querySelector(".pop-up").classList.add("active");
  });
  document.querySelector(".pop-up .close-btn").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
  });
</script>
</html>
