<div class="pop-up edit" id="edit">
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="course/{{$course->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <h2>Edit Course</h2>
        <div class="form-element">
            <label for="courseName">Course Name</label> 
            <input type="text" id="courseName" name="courseName" value="{{ old('courseName', $course->courseName) }}">
        </div>
        <div class="form-element mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="form-element">
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description', $course->description) }}">
        </div>

        <div class="form-element">
            <button type="submit">Update</button>
        </div>
    </form>
</div>