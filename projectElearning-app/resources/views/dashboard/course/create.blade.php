<div class="pop-up add" id="add">
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="course" enctype="multipart/form-data">
        @csrf
        <h2>Add New Course</h2>
        <div class="form-element">
            <label for="courseName">Course Name</label> 
            <input type="text" id="courseName" name="courseName" placeholder="">
        </div>
        <div class="form-element mb-3">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-fluid">
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
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