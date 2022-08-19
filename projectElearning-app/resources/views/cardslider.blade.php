<hr>
  <h2 class="course-category">Service That We Provide</h2>
  <section class="course-slider">
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/arrow.png" alt=""></button>
    
    
    <div class="course-container">
      @foreach($courses as $course)
      <div class="course-card">
        <div class="course-image">
          <img src="{{ asset('storage/' . $course->image)}}" class="course-thumb" alt="">
          <a href="/mainpage"><button class="card-btn">View More</button></a>
        </div>
        <div class="course-info">
          <h2 class="course-name">{{ $course->courseName }}</h2>
          @php $content = strip_tags($course->description); @endphp
          <p class="course-short-description">{{ $content }}</p>
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

</script>
</html>
