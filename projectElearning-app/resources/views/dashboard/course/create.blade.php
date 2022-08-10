<div class="pop-up add">
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="store-form" enctype="multipart/form-data">
        @csrf
        <h2>Add New Course</h2>
        <div class="form-element">
            <label for="courseName">Course Name</label> 
            <input type="text" id="courseName" name="courseName" placeholder="">
        </div>
        <div class="form-element">
            <label for="module" class="form-label">Modul</label>
            <input type="text" id="modul" name="module" placeholder="">
        </div>
        <div class="form-element">
            <label for="description" class="form-label">Description</label>
            <input type="text" id="desk" name="description" placeholder="">
        </div>

        <div class="form-element">
            <button type="submit">Add New</button>
        </div>
    </form>
</div>