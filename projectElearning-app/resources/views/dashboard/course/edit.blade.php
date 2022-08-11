<div class="pop-up edit">
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="course" enctype="multipart/form-data">
        {{-- @method('put') --}}
        @csrf
        <h2>Edit Course</h2>
        <div class="form-element">
            <label for="courseName">Course Name</label> 
            {{-- <input type="text" id="courseName" name="courseName" value="{{ old('courseName', $course->courseName) }}"> --}}
        </div>
        <div class="form-element">
            <label for="module" class="form-label">Modul</label>
            {{-- <input type="text" id="modul" name="module" value="{{ old('module', $course->module) }}"> --}}
        </div>
        <div class="form-element">
            <label for="description" class="form-label">Description</label>
            {{-- <input type="text" id="desk" name="description" value="{{ old('description', $course->description) }}"> --}}
        </div>

        <div class="form-element">
            <button type="submit">Update</button>
        </div>
    </form>
</div>