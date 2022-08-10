<hr>
  <h2 class="course-category">Service That We Provide</h2>
  <section class="course-slider">
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/arrow.png" alt=""></button>
    <div class="course-container">
      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/machineLearning.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Machine Learning</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/dataStructure.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Structured Data</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/recomsystem.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Recommeder System</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/digital.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">System Digital</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/machineLearning.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Machine Learning</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/dataStructure.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Structured Data</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/recomsystem.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Recommeder System</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>
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
